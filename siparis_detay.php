<?php
if (!isset($_SESSION['user_id'])) {
    echo "<script>window.location.href='index.php?sayfa=uye_giris';</script>";
    exit();
}

$user_id = $_SESSION['user_id'];
$order_id = $_GET['id'] ?? '';

$sorgu = $db->prepare("SELECT * FROM siparisler WHERE order_id = ? AND user_id = ?");
$sorgu->execute([$order_id, $user_id]);
$s = $sorgu->fetch(PDO::FETCH_ASSOC);

if (!$s) {
    echo "<div class='container my-5'><div class='alert alert-danger'>Sipariş bulunamadı veya yetkiniz yok.</div></div>";
    exit();
}
?>

<style>
    .detail-card { border: none; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); }
    .status-step { text-align: center; position: relative; flex: 1; }
    .status-step i { width: 45px; height: 45px; line-height: 45px; border-radius: 50%; background: #e9ecef; color: #adb5bd; margin-bottom: 10px; transition: 0.3s; }
    .status-step.active i { background: #0d6efd; color: #fff; box-shadow: 0 0 15px rgba(13,110,253,0.3); }
    .status-step.active p { font-weight: bold; color: #0d6efd; }
    .item-row { border-bottom: 1px solid #f8f9fa; padding: 15px 0; }
    .item-row:last-child { border-bottom: none; }
</style>

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold mb-0"><i class="fa-solid fa-circle-info me-2"></i> Sipariş Detayı</h3>
        <a href="index.php?sayfa=siparislerim" class="btn btn-outline-dark btn-sm"><i class="fa-solid fa-arrow-left me-1"></i> Siparişlerime Dön</a>
    </div>

    <div class="row g-4">
        <div class="col-12">
            <div class="card detail-card p-4">
                <?php if ($s['durum'] == 'İptal Edildi'): ?>
                    <div class="text-center text-danger">
                        <i class="fa-solid fa-circle-xmark fa-3x mb-2"></i>
                        <h4 class="fw-bold">Bu sipariş iptal edilmiştir.</h4>
                    </div>
                <?php else: ?>
                    <div class="d-flex justify-content-between">
                        <?php 
                            $d = $s['durum']; 
                            $step1 = true; 
                            $step2 = ($d == 'Onaylandı' || $d == 'Kargoda' || $d == 'Teslim Edildi');
                            $step3 = ($d == 'Kargoda' || $d == 'Teslim Edildi');
                            $step4 = ($d == 'Teslim Edildi');
                        ?>
                        <div class="status-step <?php echo $step1 ? 'active' : ''; ?>"><i class="fa-solid fa-check"></i><p class="small mb-0">Sipariş Alındı</p></div>
                        <div class="status-step <?php echo $step2 ? 'active' : ''; ?>"><i class="fa-solid fa-box-open"></i><p class="small mb-0">Hazırlanıyor</p></div>
                        <div class="status-step <?php echo $step3 ? 'active' : ''; ?>"><i class="fa-solid fa-truck-fast"></i><p class="small mb-0">Kargoda</p></div>
                        <div class="status-step <?php echo $step4 ? 'active' : ''; ?>"><i class="fa-solid fa-house-chimney"></i><p class="small mb-0">Teslim Edildi</p></div>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card detail-card p-4 mb-4">
                <h5 class="fw-bold border-bottom pb-3 mb-3">Satın Alınan Ürünler</h5>
                <?php 
                    $items = json_decode($s['items'], true);
                    if(is_array($items)){
                        foreach($items as $item){
                            echo '
                            <div class="item-row d-flex justify-content-between align-items-center">
                                <span class="fw-semibold text-dark">'.htmlspecialchars($item).'</span>
                                <div class="text-success fw-bold small"><i class="fa-solid fa-check-circle me-1"></i> Onaylandı</div>
                            </div>';
                        }
                    } else {
                        echo '<div class="item-row">'.htmlspecialchars($s['items']).'</div>';
                    }
                ?>
            </div>

            <div class="card detail-card p-4">
                <h5 class="fw-bold border-bottom pb-3 mb-3">Teslimat Bilgileri</h5>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="text-muted small d-block">Alıcı</label>
                        <span class="fw-bold"><?php echo htmlspecialchars($s['ad'] . ' ' . $s['soyad']); ?></span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="text-muted small d-block">Telefon</label>
                        <span class="fw-bold"><?php echo htmlspecialchars($s['telefon']); ?></span>
                    </div>
                    <div class="col-12">
                        <label class="text-muted small d-block">Adres</label>
                        <span class="fw-bold"><?php echo htmlspecialchars($s['adres'] . ' ' . $s['sehir'] . ' / ' . $s['posta_kodu']); ?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card detail-card p-4 bg-light">
                <h5 class="fw-bold mb-4">Sipariş Özeti</h5>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-muted">Sipariş No:</span>
                    <span class="fw-bold text-primary">#<?php echo $s['order_id']; ?></span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-muted">Tarih:</span>
                    <span><?php echo date('d.m.Y H:i', strtotime($s['tarih'])); ?></span>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <span class="h5 fw-bold">Toplam:</span>
                    <span class="h5 fw-bold text-dark"><?php echo number_format($s['toplam'], 2, ',', '.'); ?> TL</span>
                </div>
                <div class="mt-4">
                    <button onclick="window.print();" class="btn btn-dark w-100 mb-2"><i class="fa-solid fa-print me-2"></i> Fatura Yazdır</button>
                </div>
            </div>
        </div>
    </div>
</div>