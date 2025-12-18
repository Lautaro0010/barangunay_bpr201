<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Veritabanı bağlantısı
include 'db.php';

// Kullanıcı giriş yapmamışsa uyaralım (İsteğe bağlı ama önerilir)
$user_id = $_SESSION['user_id'] ?? null;

// Sepet tutarını hesapla
$ara_toplam = 0.0;
if (isset($_SESSION['sepet']) && is_array($_SESSION['sepet'])) {
    foreach ($_SESSION['sepet'] as $it) {
        $fiyat = isset($it['fiyat']) ? floatval($it['fiyat']) : 0;
        $adet = isset($it['adet']) ? intval($it['adet']) : 1;
        $ara_toplam += $fiyat * $adet;
    }
}

$odenecek_toplam = $ara_toplam;
$order_confirmed = false;

// Sipariş tamamlama işlemi
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['complete_order'])) {
    $ad = trim($_POST['ad'] ?? '');
    $soyad = trim($_POST['soyad'] ?? '');
    $adres = trim($_POST['adres'] ?? '');
    $sehir = trim($_POST['sehir'] ?? '');
    $posta_kodu = trim($_POST['posta_kodu'] ?? '');
    $telefon = trim($_POST['telefon'] ?? '');
    $payment_method = trim($_POST['payment_method'] ?? 'Belirtilmedi');

    $order_id = 'ORD_' . strtoupper(uniqid());

    // --- SADELEŞTİRİLMİŞ ÜRÜN LİSTESİ OLUŞTURMA ---
    $simple_items = [];
    if (isset($_SESSION['sepet']) && is_array($_SESSION['sepet'])) {
        foreach ($_SESSION['sepet'] as $it) {
            $kod = $it['model_kodu'] ?? ($it['ad'] ?? ($it['id'] ?? 'Bilinmeyen'));
            $adet = isset($it['adet']) ? intval($it['adet']) : 1;
            $simple_items[] = $kod . " (" . $adet . " adet)";
        }
    }
    $items_json = json_encode($simple_items, JSON_UNESCAPED_UNICODE);
    // ---------------------------------------------

    try {
        // Tabloyu kontrol et ve user_id sütununu ekleyerek oluştur
        $db->exec("CREATE TABLE IF NOT EXISTS siparisler (
            id INT AUTO_INCREMENT PRIMARY KEY,
            user_id INT,
            order_id VARCHAR(64) UNIQUE,
            tarih DATETIME,
            ad VARCHAR(255),
            soyad VARCHAR(255),
            adres TEXT,
            sehir VARCHAR(100),
            posta_kodu VARCHAR(20),
            telefon VARCHAR(50),
            payment_method VARCHAR(50),
            toplam DECIMAL(10,2),
            items JSON
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");

        $tarih_db = date('Y-m-d H:i:s');

        // INSERT sorgusuna user_id eklendi
        $insert = $db->prepare("INSERT INTO siparisler (user_id, order_id, tarih, ad, soyad, adres, sehir, posta_kodu, telefon, payment_method, toplam, items)
            VALUES (:user_id, :order_id, :tarih, :ad, :soyad, :adres, :sehir, :posta_kodu, :telefon, :payment_method, :toplam, :items)");

        $insert->execute([
            ':user_id'        => $user_id, // Burası senin siparişlerim sayfasında görmeni sağlar
            ':order_id'       => $order_id,
            ':tarih'          => $tarih_db,
            ':ad'             => $ad,
            ':soyad'          => $soyad,
            ':adres'          => $adres,
            ':sehir'          => $sehir,
            ':posta_kodu'     => $posta_kodu,
            ':telefon'        => $telefon,
            ':payment_method' => $payment_method,
            ':toplam'         => $odenecek_toplam,
            ':items'          => $items_json
        ]);

        // Bilgileri onay ekranı için session'a kaydet
        $_SESSION['last_order'] = [
            'id' => $order_id,
            'ad' => $ad,
            'soyad' => $soyad,
            'adres' => $adres,
            'payment_method' => $payment_method,
            'odenecek_toplam' => $odenecek_toplam
        ];

        // Sepeti temizle
        unset($_SESSION['sepet']);
        $order_confirmed = true;

    } catch (PDOException $e) {
        error_log('Sipariş DB hatası: ' . $e->getMessage());
        echo "Bir hata oluştu, lütfen tekrar deneyin.";
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Günay - Ödeme İşlemi</title>
    <script src="https://kit.fontawesome.com/248da3bf98.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-section-title { border-bottom: 2px solid #343a40; padding-bottom: 5px; margin-bottom: 20px; font-size: 1.25rem; font-weight: bold; }
        .summary-card-payment { background-color: #ffffff; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); padding: 25px; position: sticky; top: 20px; }
        .login-button { background-color: #343a40; border: none; color: white; }
        .login-button:hover { background-color: #000; color: white; }
    </style>
</head>
<body>

<div class="container my-5">
    <?php if ($order_confirmed): ?>
        <div class="card p-5 shadow-sm border-0 text-center">
            <i class="fa-solid fa-circle-check text-success fa-5x mb-4"></i>
            <h2 class="fw-bold text-success">Siparişiniz Alındı!</h2>
            <p class="lead">Sipariş Numaranız: <strong><?php echo $_SESSION['last_order']['id']; ?></strong></p>
            <hr>
            <div class="text-start mx-auto" style="max-width: 500px;">
                <p><strong>Teslimat:</strong> <?php echo htmlspecialchars($_SESSION['last_order']['ad'] . ' ' . $_SESSION['last_order']['soyad']); ?></p>
                <p><strong>Adres:</strong> <?php echo htmlspecialchars($_SESSION['last_order']['adres']); ?></p>
                <p><strong>Ödeme Yöntemi:</strong> <?php echo htmlspecialchars($_SESSION['last_order']['payment_method']); ?></p>
                <p class="h5"><strong>Toplam: <?php echo number_format($_SESSION['last_order']['odenecek_toplam'], 2, ',', '.'); ?> TL</strong></p>
            </div>
            <a href="index.php?sayfa=siparislerim" class="btn btn-dark btn-lg mt-4">Siparişlerime Git</a>
        </div>
    <?php else: ?>
        <form id="paymentForm" method="POST">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card p-4 shadow-sm mb-4 border-0">
                        <div class="form-section-title">Teslimat Bilgileri</div>
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">Adınız</label>
                                <input type="text" name="ad" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">Soyadınız</label>
                                <input type="text" name="soyad" class="form-control" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold">Açık Adres</label>
                                <textarea name="adres" class="form-control" rows="2" required></textarea>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label small fw-bold">Şehir</label>
                                <input type="text" name="sehir" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label small fw-bold">Posta Kodu</label>
                                <input type="text" name="posta_kodu" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label small fw-bold">Telefon</label>
                                <input type="tel" name="telefon" class="form-control" placeholder="05XX XXX XX XX" required>
                            </div>
                        </div>

                        <div class="form-section-title">Ödeme Yöntemi</div>
                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="payment_method" id="pay_card" value="Kredi Kartı" checked>
                                <label class="form-check-label" for="pay_card">Kredi Kartı</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="payment_method" id="pay_eft" value="Havale/EFT">
                                <label class="form-check-label" for="pay_eft">Havale / EFT</label>
                            </div>
                        </div>

                        <div id="credit-card-area" class="row g-3 border rounded p-3 mb-4 bg-light">
                            <div class="col-12">
                                <label class="form-label small fw-bold">Kart Numarası</label>
                                <input type="text" id="kart_no" name="kart_no" class="form-control" placeholder="XXXX XXXX XXXX XXXX" maxlength="19" inputmode="numeric">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">Son Kullanma (MMYY)</label>
                                <input type="text" id="son_kullanma" name="son_kullanma" class="form-control" placeholder="MMYY" maxlength="4" inputmode="numeric">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">CVV</label>
                                <input type="text" id="cvv" name="cvv" class="form-control" placeholder="123" maxlength="3" inputmode="numeric">
                            </div>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="sartlar" required>
                            <label class="form-check-label small" for="sartlar">Mesafeli satış sözleşmesini okudum, onaylıyorum.</label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="summary-card-payment">
                        <h5 class="fw-bold mb-4">Sipariş Özeti</h5>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Ara Toplam:</span>
                            <span><?php echo number_format($ara_toplam, 2, ',', '.'); ?> TL</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2 text-success">
                            <span>Kargo:</span>
                            <span>Ücretsiz</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-4">
                            <span class="h5 fw-bold">Toplam:</span>
                            <span class="h5 fw-bold text-danger"><?php echo number_format($odenecek_toplam, 2, ',', '.'); ?> TL</span>
                        </div>
                        <button type="submit" name="complete_order" class="btn btn-primary btn-lg w-100 login-button">
                            Siparişi Tamamla
                        </button>
                    </div>
                </div>
            </div>
        </form>
    <?php endif; ?>
</div>

<script>
    document.querySelectorAll('input[name="payment_method"]').forEach(radio => {
        radio.addEventListener('change', function() {
            const cardArea = document.getElementById('credit-card-area');
            const cardInputs = cardArea.querySelectorAll('input');
            if (this.value === 'Havale/EFT') {
                cardArea.style.display = 'none';
                cardInputs.forEach(i => i.required = false);
            } else {
                cardArea.style.display = 'flex';
                cardInputs.forEach(i => i.required = true);
            }
        });
    });

    document.getElementById('kart_no').addEventListener('input', function (e) {
        e.target.value = e.target.value.replace(/[^\d]/g, '').replace(/(.{4})/g, '$1 ').trim();
    });
</script>

</body>
</html>