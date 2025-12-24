<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_rol']) || $_SESSION['user_rol'] !== 'admin') {
    header("Location: index.php?sayfa=uye_giris");
    exit();
}

// İSTATİSTİKLER
$kullanici_sayisi = $db->query("SELECT COUNT(*) FROM kullanicilar")->fetchColumn();
try {
    $siparis_sayisi = $db->query("SELECT COUNT(*) FROM siparisler")->fetchColumn();
    $urun_sayisi = $db->query("SELECT COUNT(*) FROM urunler")->fetchColumn();
} catch (Exception $e) { $siparis_sayisi = 0; $urun_sayisi = 0; }

$mesaj = "";
if(isset($_GET['durum'])){
    if($_GET['durum'] == "basarili") $mesaj = "<div id='auto-alert' class='alert alert-success shadow-sm' style='transition: 0.5s;'>İşlem başarıyla gerçekleştirildi.</div>";
    if($_GET['durum'] == "hata") $mesaj = "<div id='auto-alert' class='alert alert-danger shadow-sm' style='transition: 0.5s;'>Bir hata oluştu!</div>";
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Günay - Yönetim Paneli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/248da3bf98.js" crossorigin="anonymous"></script>
    <style>
        :root { --dark-color: #212529; --primary-gradient: linear-gradient(45deg, #212529, #343a40); }
        body { background-color: #f8f9fa; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .sidebar { min-height: 100vh; background: var(--primary-gradient); color: white; position: fixed; width: 260px; z-index: 1000; box-shadow: 4px 0 10px rgba(0,0,0,0.1); }
        .sidebar-header { padding: 25px; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.1); }
        .sidebar a { color: #ced4da; text-decoration: none; display: block; padding: 15px 25px; border-left: 4px solid transparent; transition: all 0.3s; cursor: pointer; font-weight: 500; }
        .sidebar a:hover, .sidebar a.active { background: rgba(255,255,255,0.1); color: white; border-left: 4px solid #0d6efd; padding-left: 30px; }
        .main-content { margin-left: 260px; padding: 40px; }
        .card-box { border-radius: 15px; border: none; transition: all 0.3s ease; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
        
        .card-box:hover { transform: translateY(-5px); box-shadow: 0 8px 25px rgba(0,0,0,0.1); }
        .section-content { display: none; animation: fadeIn 0.4s ease-in-out; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
        .table-hover tbody tr:hover { background-color: rgba(13, 110, 253, 0.05); transition: 0.2s; }
        .badge { padding: 8px 12px; border-radius: 8px; font-weight: 600; }
    </style>
</head>
<body>

<div class="sidebar">
    <div class="sidebar-header">
        <h4 class="m-0 text-white"><i class="fa-solid fa-rocket me-2"></i>Günay Panel</h4>
    </div>
    <div class="mt-4">
        <a onclick="showSection('dashboard')" id="link-dashboard" class="active"><i class="fa-solid fa-chart-line me-2"></i> Dashboard</a>
        <a onclick="showSection('siparisler')" id="link-siparisler"><i class="fa-solid fa-shopping-basket me-2"></i> Siparişler</a>
        <a onclick="showSection('kullanicilar')" id="link-kullanicilar"><i class="fa-solid fa-user-group me-2"></i> Kullanıcılar</a>
        <a onclick="showSection('urunler')" id="link-urunler"><i class="fa-solid fa-boxes-stacked me-2"></i> Ürün Yönetimi</a>
        <hr class="mx-4 border-secondary opacity-25">
        <a href="index.php"><i class="fa-solid fa-arrow-left me-2"></i> Siteye Dön</a>
        <a href="logout.php" class="text-danger"><i class="fa-solid fa-sign-out-alt me-2"></i> Güvenli Çıkış</a>
    </div>
</div>

<div class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h2 class="fw-bold text-dark" id="section-title">Genel Bakış</h2>
        <div class="bg-white px-3 py-2 rounded-pill shadow-sm text-muted fw-medium">
            <i class="fa-regular fa-calendar-check me-2 text-primary"></i><?php echo date('d.m.Y'); ?>
        </div>
    </div>

    <?php echo $mesaj; ?>

  <div id="dashboard" class="section-content" style="display: block;">
    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card card-box bg-white p-4 d-flex flex-row align-items-center justify-content-between border-start border-primary border-4">
                <div><p class="text-muted mb-1 fw-bold">Toplam Kullanıcı</p><h2 class="fw-bold mb-0"><?php echo $kullanici_sayisi; ?></h2></div>
                <i class="fa-solid fa-users text-primary fa-2x opacity-50"></i>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-box bg-white p-4 d-flex flex-row align-items-center justify-content-between border-start border-success border-4">
                <div><p class="text-muted mb-1 fw-bold">Toplam Sipariş</p><h2 class="fw-bold mb-0"><?php echo $siparis_sayisi; ?></h2></div>
                <i class="fa-solid fa-cart-shopping text-success fa-2x opacity-50"></i>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-box bg-white p-4 d-flex flex-row align-items-center justify-content-between border-start border-warning border-4">
                <div><p class="text-muted mb-1 fw-bold">Aktif Ürünler</p><h2 class="fw-bold mb-0"><?php echo $urun_sayisi; ?></h2></div>
                <i class="fa-solid fa-box text-warning fa-2x opacity-50"></i>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card card-box bg-white border-0 shadow-sm mb-4">
                <div class="card-header bg-transparent border-0 pt-4 px-4 d-flex justify-content-between align-items-center">
                    <h5 class="fw-bold m-0"><i class="fa-solid fa-receipt me-2 text-primary"></i>Son Sipariş Özetleri</h5>
                    <button onclick="showSection('siparisler')" class="btn btn-sm btn-light text-primary fw-bold px-3">Tüm Liste</button>
                </div>
                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead class="small text-muted text-uppercase">
                                <tr><th>Müşteri</th><th>Tutar</th><th>Durum</th></tr>
                            </thead>
                            <tbody>
                                <?php
                                $last_orders = $db->query("SELECT * FROM siparisler ORDER BY id DESC LIMIT 8")->fetchAll(PDO::FETCH_ASSOC);
                                if($last_orders):
                                    foreach($last_orders as $lo):
                                        $c = ($lo['durum'] == 'Teslim Edildi') ? 'success' : (($lo['durum'] == 'İptal Edildi') ? 'danger' : 'warning');
                                ?>
                                <tr>
                                    <td><span class="fw-medium text-dark"><?php echo htmlspecialchars($lo['ad'] . " " . $lo['soyad']); ?></span></td>
                                    <td class="fw-bold text-primary"><?php echo number_format($lo['toplam'],2); ?> TL</td>
                                    <td><span class="badge bg-<?php echo $c; ?> bg-opacity-10 text-<?php echo $c; ?> border-0" style="font-size: 11px;"><?php echo $lo['durum']; ?></span></td>
                                </tr>
                                <?php endforeach; else: ?>
                                    <tr><td colspan="3" class="text-center text-muted py-5">Henüz sipariş bulunmuyor.</td></tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-box bg-white p-4 mb-4 shadow-sm border-0 position-relative overflow-hidden" style="min-height: 160px;">
                <p class="text-muted small fw-bold text-uppercase mb-3">Toplam Ciro (Brüt)</p>
                <?php 
                
                $toplam_ciro = $db->query("SELECT SUM(toplam) FROM siparisler WHERE durum != 'İptal Edildi'")->fetchColumn();
                $toplam_ciro = $toplam_ciro ? $toplam_ciro : 0;
                ?>
                <h2 class="fw-bold text-dark mb-2"><?php echo number_format((float)$toplam_ciro, 2); ?> TL</h2>
                <p class="text-success small mb-0"><i class="fa-solid fa-circle-check me-1"></i> Başarılı Satışlar Toplamı</p>
                
                <i class="fa-solid fa-money-bill-trend-up position-absolute" style="bottom: -10px; right: -10px; font-size: 80px; color: rgba(0,0,0,0.03);"></i>
            </div>
        </div>
    </div>
</div>

    <div id="siparisler" class="section-content">
        <div class="card card-box bg-white p-4">
            <table class="table table-hover align-middle">
                <thead><tr><th>No</th><th>Müşteri</th><th>Tutar</th><th>Durum</th><th>Hızlı İşlem</th></tr></thead>
                <tbody>
                    <?php
                    $orders = $db->query("SELECT * FROM siparisler ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
                    foreach($orders as $s): 
                        $badge = "bg-warning text-dark"; 
                        if($s['durum'] == 'Onaylandı') $badge = "bg-primary text-white";
                        if($s['durum'] == 'Kargoda') $badge = "bg-info text-dark";
                        if($s['durum'] == 'Teslim Edildi') $badge = "bg-success text-white";
                        if($s['durum'] == 'İptal Edildi') $badge = "bg-danger text-white";
                    ?>
                    <tr>
                        <td>#<?php echo $s['id']; ?></td>
                        <td><?php echo htmlspecialchars($s['ad']." ".$s['soyad']); ?></td>
                        <td><?php echo number_format($s['toplam'], 2); ?> TL</td>
                        <td><span class="badge <?php echo $badge; ?>"><?php echo $s['durum']; ?></span></td>
                        <td>
                            <div class="btn-group">
                                <a href="admin_islem.php?islem=siparis_durum&id=<?php echo $s['id']; ?>&yeni_durum=Onaylandı&ref=siparisler" class="btn btn-sm btn-outline-primary" title="Onayla"><i class="fa-solid fa-check"></i></a>
                                <a href="admin_islem.php?islem=siparis_durum&id=<?php echo $s['id']; ?>&yeni_durum=Kargoda&ref=siparisler" class="btn btn-sm btn-outline-info" title="Kargola"><i class="fa-solid fa-truck"></i></a>
                                <a href="admin_islem.php?islem=siparis_durum&id=<?php echo $s['id']; ?>&yeni_durum=Teslim Edildi&ref=siparisler" class="btn btn-sm btn-outline-success" title="Teslim Et"><i class="fa-solid fa-house-circle-check"></i></a>
                                <a href="admin_islem.php?islem=siparis_durum&id=<?php echo $s['id']; ?>&yeni_durum=İptal Edildi&ref=siparisler" class="btn btn-sm btn-outline-danger" title="İptal"><i class="fa-solid fa-ban"></i></a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div id="kullanicilar" class="section-content">
        <div class="card card-box bg-white p-4">
            <table class="table table-hover align-middle">
                <thead><tr><th>Kullanıcı</th><th>E-posta</th><th>Rol</th><th>Yetkilendirme</th></tr></thead>
                <tbody>
                    <?php
                    $users = $db->query("SELECT * FROM kullanicilar ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
                    foreach($users as $u): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($u['ad']." ".$u['soyad']); ?></td>
                        <td><?php echo $u['email']; ?></td>
                        <td><span class="badge <?php echo ($u['rol']=='admin'?'bg-danger':'bg-info text-dark'); ?>"><?php echo $u['rol']; ?></span></td>
                        <td>
                            <div class="btn-group">
                                <?php if($u['rol'] !== 'admin'): ?>
                                    <a href="admin_islem.php?islem=yetki&rol=admin&id=<?php echo $u['id']; ?>&ref=kullanicilar" class="btn btn-sm btn-warning" title="Admin Yap"><i class="fa-solid fa-user-shield"></i></a>
                                <?php else: ?>
                                    <a href="admin_islem.php?islem=yetki&rol=user&id=<?php echo $u['id']; ?>&ref=kullanicilar" class="btn btn-sm btn-secondary" title="Yetki Al"><i class="fa-solid fa-user-minus"></i></a>
                                <?php endif; ?>
                                <a href="admin_islem.php?islem=sil&id=<?php echo $u['id']; ?>&ref=kullanicilar" class="btn btn-sm btn-outline-danger" onclick="return confirm('Emin misiniz?')"><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div id="urunler" class="section-content">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold m-0">Ürün Yönetimi</h4>
        <button class="btn btn-primary btn-sm px-4 shadow-sm" data-bs-toggle="modal" data-bs-target="#urunEkleModal">
            <i class="fa-solid fa-plus me-2"></i>Yeni Ürün Ekle
        </button>
    </div>

    <div class="card card-box bg-white border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light text-muted small">
                    <tr>
                        <th class="ps-4">ID</th>
                        <th>Görsel</th> 
                        <th>Başlık / Model Kodu</th>
                        <th>Kategori</th>
                        <th>Fiyat</th>
                        <th>Stok</th>
                        <th class="text-center">İşlem</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $urunler = $db->query("SELECT * FROM urunler ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
                    foreach($urunler as $u):
                    ?>
                    <tr>
                        <td class="ps-4 text-muted">#<?php echo $u['id']; ?></td>
                        <td>
                            <img src="img/<?php echo !empty($u['resim_yolu']) ? $u['resim_yolu'] : 'no-image.jpg'; ?>" 
                                 style="width: 50px; height: 50px; object-fit: contain; border-radius: 5px;">
                        </td>
                        <td>
                            <div class="fw-bold text-dark"><?php echo htmlspecialchars($u['baslik']); ?></div>
                            <small class="text-muted"><?php echo htmlspecialchars($u['model_kodu'] ?? ''); ?></small>
                        </td>
                        <td><span class="badge bg-light text-dark border">Kat ID: <?php echo $u['kategori_id']; ?></span></td>
                        <td class="fw-bold text-primary"><?php echo number_format($u['fiyat'], 2, ',', '.'); ?> TL</td>
                        <td>
                            <span class="fw-bold <?php echo ($u['stok'] <= 5) ? 'text-danger' : 'text-dark'; ?>">
                                <?php echo $u['stok']; ?>
                            </span>
                            <small class="text-muted">Adet</small>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#urunDuzenleModal<?php echo $u['id']; ?>">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <a href="admin_islem.php?islem=urun_sil&id=<?php echo $u['id']; ?>&ref=urunler" 
                                   class="btn btn-sm btn-outline-danger" 
                                   onclick="return confirm('Bu ürünü silmek istediğinize emin misiniz?')">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php foreach($urunler as $u): ?>
<div class="modal fade" id="urunDuzenleModal<?php echo $u['id']; ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 15px;">
            <form action="admin_islem.php?islem=urun_guncelle" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $u['id']; ?>">
                <div class="modal-header border-0 pt-4 px-4">
                    <h5 class="fw-bold text-dark">Ürünü Düzenle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="row">
                        <div class="col-md-4 mb-3 text-center border-end">
                            <label class="form-label small fw-bold d-block text-muted">Mevcut Görsel</label>
                            <img src="img/<?php echo !empty($u['resim_yolu']) ? $u['resim_yolu'] : 'no-image.jpg'; ?>" 
                                 class="img-thumbnail shadow-sm mb-2" style="max-height: 120px;">
                        </div>
                        <div class="col-md-8 mb-3">
                            <label class="form-label small fw-bold text-primary">Yeni Görsel Seç (Opsiyonel)</label>
                            <input type="file" name="urun_resim" class="form-control" accept="image/*">
                            <small class="text-muted">Değiştirmek istemiyorsanız boş bırakın.</small>
                        </div>
                        
                        <div class="col-md-8 mb-3">
                            <label class="form-label small fw-bold text-muted">Ürün Başlığı</label>
                            <input type="text" name="baslik" class="form-control" value="<?php echo htmlspecialchars($u['baslik']); ?>" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label small fw-bold text-muted">Model Kodu</label>
                            <input type="text" name="model_kodu" class="form-control" value="<?php echo htmlspecialchars($u['model_kodu'] ?? ''); ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label small fw-bold text-muted">Fiyat (TL)</label>
                            <input type="number" step="0.01" name="fiyat" class="form-control" value="<?php echo $u['fiyat']; ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label small fw-bold text-muted">Stok Adedi</label>
                            <input type="number" name="stok" class="form-control" value="<?php echo $u['stok']; ?>" required>
                        </div>
                        <div class="col-12 mb-0">
                            <label class="form-label small fw-bold text-muted">Ürün Açıklaması</label>
                            <textarea name="detayli_bilgi" class="form-control" rows="3"><?php echo htmlspecialchars($u['detayli_bilgi'] ?? ''); ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 pb-4 px-4">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Vazgeç</button>
                    <button type="submit" class="btn btn-success fw-bold px-4">Güncellemeleri Kaydet</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>

<div class="modal fade" id="urunEkleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 15px;">
            <form action="admin_islem.php?islem=urun_ekle" method="POST" enctype="multipart/form-data">
                <div class="modal-header border-0 pt-4 px-4">
                    <h5 class="fw-bold text-dark">Yeni Ürün Ekle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <label class="form-label small fw-bold text-muted">Ürün Başlığı</label>
                            <input type="text" name="baslik" class="form-control" required placeholder="Örn: Buzdolabı">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label small fw-bold text-muted">Model Kodu</label>
                            <input type="text" name="model_kodu" class="form-control">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label small fw-bold text-primary">Ürün Görseli</label>
                            <input type="file" name="urun_resim" class="form-control" accept="image/*">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label small fw-bold text-muted">Fiyat (TL)</label>
                            <input type="number" step="0.01" name="fiyat" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label small fw-bold text-muted">Stok Adedi</label>
                            <input type="number" name="stok" class="form-control" value="1" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label small fw-bold text-muted">Kategori ID</label>
                            <input type="number" name="kategori_id" class="form-control" value="8" required>
                        </div>
                        <div class="col-12 mb-0">
                            <label class="form-label small fw-bold text-muted">Ürün Açıklaması</label>
                            <textarea name="detayli_bilgi" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 pb-4 px-4">
                    <button type="submit" class="btn btn-primary fw-bold w-100 py-2">Ürünü ve Görseli Kaydet</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function showSection(sectionId) {
        localStorage.setItem('activeSection', sectionId);
        document.querySelectorAll('.section-content').forEach(s => s.style.display = 'none');
        document.getElementById(sectionId).style.display = 'block';
        document.querySelectorAll('.sidebar a').forEach(l => l.classList.remove('active'));
        document.getElementById('link-' + sectionId).classList.add('active');
        const titles = {'dashboard':'Genel Bakış','siparisler':'Sipariş Yönetimi','kullanicilar':'Kullanıcı Yönetimi','urunler':'Ürün Yönetimi'};
        document.getElementById('section-title').innerText = titles[sectionId];
    }

    window.onload = function() {
        
        const urlParams = new URLSearchParams(window.location.search);
        const active = urlParams.get('ref') || localStorage.getItem('activeSection') || 'dashboard';
        showSection(active);

        
        const alertBox = document.getElementById('auto-alert');
        if (alertBox) {
            setTimeout(function() {
                alertBox.style.opacity = '0';
                setTimeout(function() {
                    alertBox.remove();
                    
                    const newUrl = window.location.pathname + (active ? '?ref=' + active : '');
                    window.history.replaceState({}, document.title, newUrl);
                }, 500);
            }, 2000);
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    
    function showSection(sectionId) { ... }
</script>
</body>
</html>