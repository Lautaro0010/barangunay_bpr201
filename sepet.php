<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'db.php';


function normalize_turkish($str) {
    $search = ['ı', 'ğ', 'ü', 'ş', 'ö', 'ç', 'İ', 'Ğ', 'Ü', 'Ş', 'Ö', 'Ç'];
    $replace = ['i', 'g', 'u', 's', 'o', 'c', 'I', 'G', 'U', 'S', 'O', 'C'];
    return str_replace($search, $replace, $str);
}


if (isset($_GET['action']) && $_GET['action'] == 'add' && isset($_GET['model'])) {
    $model_kodu = $_GET['model'];
    
    $sorgu = $db->prepare("SELECT * FROM urunler WHERE model_kodu = :kod");
    $sorgu->execute(['kod' => $model_kodu]);
    $urun = $sorgu->fetch(PDO::FETCH_ASSOC);
    
    if ($urun) {
        if (!isset($_SESSION['sepet'])) {
            $_SESSION['sepet'] = array();
        }
        
        $urun_var_mi = false;
        foreach ($_SESSION['sepet'] as &$item) {
            if ($item['model_kodu'] == $model_kodu) {
                $item['adet']++;
                $urun_var_mi = true;
                break;
            }
        }
        
        if (!$urun_var_mi) {
            $resim = $urun['resim'] ?? '';
            if (empty($resim)) {
                $model_normalized = normalize_turkish(strtolower($model_kodu));
                $prefix = '';
                $first_char = strtoupper(substr($model_kodu, 0, 1));
                
                switch ($first_char) {
                    case 'K': $prefix = 'buzdolabı-'; break;
                    case 'W': $prefix = 'camasır-'; break;
                    case 'P': $prefix = 'ocak-'; break;
                    case 'H': $prefix = 'firin-'; break;
                    case 'D': $prefix = 'ankastre-'; break;
                    case 'S': $prefix = 'bulasik-'; break;
                    case 'B': $prefix = 'supurge-'; break;
                    case 'R': $prefix = 'su_sebilleri-'; break;
                    case 'T': case 'C': case 'M': case 'L': $prefix = 'ev_aleti-'; break;
                }
                $resim = $prefix . $model_normalized . '.webp';
            }
            
            $_SESSION['sepet'][] = array(
                'model_kodu' => $urun['model_kodu'],
                'ad' => $urun['baslik'],
                'fiyat' => $urun['fiyat'],
                'resim' => $resim,
                'adet' => 1
            );
        }
        
        echo "<script>window.location.href='index.php?sayfa=sepet';</script>";
        exit;
    }
}


if (isset($_GET['action']) && $_GET['action'] == 'remove' && isset($_GET['id'])) {
    $silinecek_id = $_GET['id'];
    
    if (isset($_SESSION['sepet'][$silinecek_id])) {
        unset($_SESSION['sepet'][$silinecek_id]);
        $_SESSION['sepet'] = array_values($_SESSION['sepet']);
    }
    
    
    echo "<script>window.location.href='index.php?sayfa=sepet';</script>";
    exit;
}

$genel_toplam = 0;
$urun_sayisi = isset($_SESSION['sepet']) ? count($_SESSION['sepet']) : 0;
$giris_yapilmis_mi = isset($_SESSION['user_id']); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Günay - Alışveriş Sepeti</title>
    
    <script src="https://kit.fontawesome.com/248da3bf98.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .cart-header { background-color: #f8f9fa; padding: 15px; border-radius: 8px; margin-bottom: 20px; }
        .cart-item { border-bottom: 1px solid #eee; padding: 15px 0; align-items: center; }
        .cart-item:last-child { border-bottom: none; }
        .product-image { width: 80px; height: 80px; object-fit: contain; }
        .summary-card { background-color: #ffffff; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05); padding: 25px; position: sticky; top: 20px; }
        .btn-checkout { background-color: #343a40 !important; border-color: #343a40 !important; color: white !important; }
        .btn-checkout:hover { opacity: 0.9; }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="d-flex justify-content-between align-items-center cart-header">
                    <h4 class="mb-0 fw-bold">Alışveriş Sepeti (<?php echo $urun_sayisi; ?> Ürün)</h4>
                    <a href="index.php" class="text-muted small text-decoration-none"><i class="fa-solid fa-chevron-left me-1"></i>Alışverişe Devam Et</a>
                </div>

                <div class="bg-white p-3 rounded shadow-sm">
                    <?php if($urun_sayisi > 0): ?>
                        <?php foreach($_SESSION['sepet'] as $id => $urun): 
                            $ara_toplam = $urun['fiyat'] * $urun['adet'];
                            $genel_toplam += $ara_toplam;
                            $resim_yolu = !empty($urun['resim']) ? 'img/' . $urun['resim'] : 'img/no-image.jpg';
                        ?>
                            <div class="row cart-item mx-0">
                                <div class="col-md-2 text-center">
                                    <img src="<?php echo $resim_yolu; ?>" class="product-image" alt="Ürün">
                                </div>
                                <div class="col-md-5">
                                    <h6 class="mb-0 fw-bold"><?php echo $urun['ad']; ?></h6>
                                    <small class="text-muted"><?php echo number_format($urun['fiyat'], 2, ',', '.'); ?> TL</small>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="fw-bold">Adet: <?php echo $urun['adet']; ?></div>
                                </div>
                                <div class="col-md-2 text-end">
                                    <span class="fw-bold"><?php echo number_format($ara_toplam, 2, ',', '.'); ?> TL</span>
                                </div>
                                <div class="col-md-1 text-end">
                                    <a href="index.php?sayfa=sepet&action=remove&id=<?php echo $id; ?>" class="text-danger">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="text-center py-5">
                            <i class="fa-solid fa-cart-shopping fa-3x text-light mb-3"></i>
                            <p class="text-muted">Sepetinizde ürün bulunmamaktadır.</p>
                            <a href="index.php" class="btn btn-outline-dark btn-sm">Ürünlere Göz At</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="summary-card">
                    <h5 class="mb-4 fw-bold">Sipariş Özeti</h5>
                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between mb-2">
                            <span>Ara Toplam:</span>
                            <span class="fw-bold"><?php echo number_format($genel_toplam, 2, ',', '.'); ?> TL</span>
                        </li>
                        <li class="d-flex justify-content-between mb-2">
                            <span>Kargo:</span>
                            <span class="text-success fw-bold">Ücretsiz</span>
                        </li>
                        <hr>
                        <li class="d-flex justify-content-between mb-4">
                            <span class="h5 mb-0 fw-bold">Toplam:</span>
                            <span class="h5 mb-0 fw-bold text-primary"><?php echo number_format($genel_toplam, 2, ',', '.'); ?> TL</span>
                        </li>
                    </ul>

                    <div class="d-grid gap-2">
                        <?php if ($urun_sayisi > 0): ?>
                            <?php if ($giris_yapilmis_mi): ?>
                                <a href="index.php?sayfa=odeme" class="btn btn-checkout btn-lg">
                                    Ödeme Adımına Geç <i class="fa-solid fa-credit-card ms-2"></i>
                                </a>
                            <?php else: ?>
                                <div class="alert alert-warning small py-2 border-0 mb-2">
                                    <i class="fa-solid fa-circle-info me-1"></i> Siparişinizi tamamlamak için üye girişi yapmalısınız.
                                </div>
                                <a href="index.php?sayfa=uye_giris&return=sepet&msg=login_required" class="btn btn-primary btn-lg">
                                    Giriş Yap ve Devam Et <i class="fa-solid fa-right-to-bracket ms-2"></i>
                                </a>
                            <?php endif; ?>
                        <?php else: ?>
                            <button class="btn btn-secondary btn-lg disabled">Sepetiniz Boş</button>
                        <?php endif; ?>
                    </div>
                    <p class="text-center small text-muted mt-3">Güvenli ödeme altyapısı ile kart bilgileriniz korunur.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>