<?php
// Güvenlik: Giriş yapılmamışsa ana sayfaya at
if (!isset($_SESSION['user_id'])) {
    echo "<script>window.location.href='index.php?sayfa=uye_giris';</script>";
    exit();
}

$user_id = $_SESSION['user_id'];
$mesaj = "";

// ===================================
// GÜNCELLEME İŞLEMİ (POST)
// ===================================
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['profil_guncelle'])) {
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $telefon = $_POST['telefon'];
    $email = $_POST['email'];

    $guncelle = $db->prepare("UPDATE kullanicilar SET ad = ?, soyad = ?, telefon = ?, email = ? WHERE id = ?");
    if ($guncelle->execute([$ad, $soyad, $telefon, $email, $user_id])) {
        // Session bilgilerini de güncelle ki navbar'daki isim değişsin
        $_SESSION['user_name'] = $ad . ' ' . $soyad;
        $mesaj = "<div class='alert alert-success'>Bilgileriniz başarıyla güncellendi!</div>";
    } else {
        $mesaj = "<div class='alert alert-danger'>Güncelleme sırasında bir hata oluştu.</div>";
    }
}

// Güncel bilgileri çek
$sorgu = $db->prepare("SELECT * FROM kullanicilar WHERE id = ?");
$sorgu->execute([$user_id]);
$user = $sorgu->fetch(PDO::FETCH_ASSOC);
?>

<style>
    .profile-header {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 40px 0;
        border-bottom: 1px solid #dee2e6;
        margin-bottom: 40px;
    }
    .profile-card {
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        background: #fff;
    }
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
    .nav-pills .nav-link {
        color: #495057;
        padding: 12px 20px;
        border-radius: 8px;
        margin-bottom: 8px;
    }
    .nav-pills .nav-link.active { background-color: #343a40; }
    
    .form-label { font-weight: 600; color: #6c757d; font-size: 0.9rem; }
    .form-control:focus { border-color: #343a40; box-shadow: none; }
</style>

<div class="profile-header">
    <div class="container">
        <h2 class="fw-bold">Profil Bilgilerim</h2>
        <p class="text-muted">Kişisel bilgilerinizi güncel tutmak, sipariş süreçleriniz için önemlidir.</p>
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
                    <a class="nav-link active" href="index.php?sayfa=profilim">
                        <i class="fa-solid fa-id-card me-2"></i> Profil Bilgileri
                    </a>
                    <a class="nav-link" href="index.php?sayfa=siparislerim">
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
                <?php echo $mesaj; ?>
                
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Adınız</label>
                            <input type="text" name="ad" class="form-control" value="<?php echo htmlspecialchars($user['ad']); ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Soyadınız</label>
                            <input type="text" name="soyad" class="form-control" value="<?php echo htmlspecialchars($user['soyad']); ?>" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">E-Posta Adresiniz</label>
                            <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($user['email']); ?>" required>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label class="form-label">Telefon Numaranız</label>
                            <input type="text" name="telefon" class="form-control" placeholder="05xx xxx xx xx" value="<?php echo isset($user['telefon']) ? htmlspecialchars($user['telefon']) : ''; ?>">
                        </div>
                    </div>
                    
                    <div class="d-grid">
                        <button type="submit" name="profil_guncelle" class="btn btn-dark py-2 fw-bold">
                            <i class="fa-solid fa-floppy-disk me-2"></i> Değişiklikleri Kaydet
                        </button>
                    </div>
                </form>

                <hr class="my-4">
                <div class="bg-light p-3 rounded">
                    <h6 class="fw-bold mb-2">Güvenlik Hatırlatması</h6>
                    <p class="small text-muted mb-0">E-posta adresinizi değiştirirseniz, bir sonraki girişinizde yeni adresinizi kullanmanız gerekecektir.</p>
                </div>
            </div>
        </div>
    </div>
</div>