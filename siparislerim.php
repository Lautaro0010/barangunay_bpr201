<?php
// Güvenlik: Giriş yapılmamışsa giriş sayfasına yönlendir
if (!isset($_SESSION['user_id'])) {
    echo "<script>window.location.href='index.php?sayfa=uye_giris';</script>";
    exit();
}

$user_id = $_SESSION['user_id'];

// Kullanıcı bilgilerini çek (Sol karttaki isim ve email için)
$user_sorgu = $db->prepare("SELECT * FROM kullanicilar WHERE id = ?");
$user_sorgu->execute([$user_id]);
$user = $user_sorgu->fetch(PDO::FETCH_ASSOC);

// Siparişleri çek (En yeni en üstte)
$sorgu = $db->prepare("SELECT * FROM siparisler WHERE user_id = ? ORDER BY tarih DESC");
$sorgu->execute([$user_id]);
$siparisler = $sorgu->fetchAll(PDO::FETCH_ASSOC);
?>

<style>
    /* Profil Başlık Alanı */
    .profile-header {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 40px 0;
        border-bottom: 1px solid #dee2e6;
        margin-bottom: 40px;
    }
    /* Kart Yapıları */
    .profile-card {
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        background: #fff;
    }
    /* Sol Kısım: İkon Dairesi */
    .profile-icon-circle {
        width: 80px;
        height: 80px;
        background: #343a40;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 2rem;
        margin-bottom: 15px;
    }
    /* Menü Linkleri */
    .nav-pills .nav-link {
        color: #495057;
        padding: 12px 20px;
        border-radius: 8px;
        margin-bottom: 8px;
        transition: all 0.2s;
    }
    .nav-pills .nav-link:hover {
        background-color: #f1f3f5;
    }
    .nav-pills .nav-link.active {
        background-color: #343a40 !important;
        color: #fff;
    }
    /* Sipariş Satırları */
    .order-item-card {
        border: 1px solid #f1f1f1;
        border-radius: 10px;
        margin-bottom: 20px;
        transition: transform 0.2s;
    }
    .order-item-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    }
    .status-badge {
        font-size: 0.75rem;
        padding: 6px 12px;
        border-radius: 20px;
        font-weight: bold;
    }
</style>

<div class="profile-header">
    <div class="container">
        <h2 class="fw-bold">Siparişlerim</h2>
        <p class="text-muted">Vermiş olduğunuz siparişlerin detaylarını ve durumunu takip edin.</p>
    </div>
</div>

<div class="container mb-5">
    <div class="row g-4">
        <div class="col-lg-4">
            <div class="card profile-card p-4">
                <div class="text-center mb-4">
                    <div class="profile-icon-circle mx-auto">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <h5 class="fw-bold mb-0"><?php echo htmlspecialchars($user['ad'] . ' ' . $user['soyad']); ?></h5>
                    <small class="text-muted"><?php echo htmlspecialchars($user['email']); ?></small>
                </div>
                
                <div class="nav flex-column nav-pills">
                    <a class="nav-link mb-2" href="index.php?sayfa=profilim">
                        <i class="fa-solid fa-id-card me-2"></i> Profil Bilgileri
                    </a>
                    <a class="nav-link active mb-2" href="index.php?sayfa=siparislerim">
                        <i class="fa-solid fa-box me-2"></i> Siparişlerim
                    </a>
                    <hr>
                    <a class="nav-link text-danger" href="logout.php">
                        <i class="fa-solid fa-right-from-bracket me-2"></i> Çıkış Yap
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card profile-card p-4">
                <?php if (empty($siparisler)): ?>
                    <div class="text-center py-5">
                        <div class="mb-3" style="font-size: 3rem; color: #dee2e6;">
                            <i class="fa-solid fa-box-open"></i>
                        </div>
                        <h5>Henüz bir siparişiniz bulunmuyor.</h5>
                        <p class="text-muted small">Alışverişe başlayarak harika ürünlerimizi keşfedebilirsiniz.</p>
                        <a href="index.php" class="btn btn-dark mt-2">Alışverişe Başla</a>
                    </div>
                <?php else: ?>
                    <?php foreach ($siparisler as $siparis): ?>
                        <div class="order-item-card p-3 shadow-sm bg-white">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <span class="text-muted small">Sipariş No:</span>
                                    <span class="fw-bold text-dark">#<?php echo $siparis['order_id']; ?></span>
                                </div>
                                <span class="badge bg-success text-white status-badge">Sipariş Alındı</span>
                            </div>
                            
                            <div class="row g-3 align-items-center">
                                <div class="col-md-8">
                                    <p class="mb-1 small text-muted">Sipariş İçeriği:</p>
                                    <p class="mb-0 fw-semibold text-dark">
                                        <?php echo htmlspecialchars($siparis['items']); ?>
                                    </p>
                                    <div class="mt-2 small text-muted">
                                        <i class="fa-regular fa-calendar-days me-1"></i>
                                        <?php echo date('d.m.Y H:i', strtotime($siparis['tarih'])); ?>
                                    </div>
                                </div>
                                <div class="col-md-4 text-md-end">
                                    <p class="text-muted small mb-0">Toplam Tutar</p>
                                    <h5 class="fw-bold text-dark mb-0"><?php echo number_format($siparis['toplam'], 2, ',', '.'); ?> TL</h5>
                                    <a href="index.php?sayfa=siparis_detay&id=<?php echo $siparis['order_id']; ?>" class="btn btn-sm btn-outline-dark mt-2 px-3">Detaylar</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>