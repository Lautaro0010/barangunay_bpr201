<?php

$kategori_id = 6; 

$sorgu = $db->prepare("SELECT * FROM urunler WHERE kategori_id = ? ORDER BY id DESC");
$sorgu->execute([$kategori_id]);
$urunler = $sorgu->fetchAll(PDO::FETCH_ASSOC);
$urun_sayisi = count($urunler);
?>

<style>
    .product-list-page { padding: 40px 0; }
    .product-card {
        border: 1px solid #dee2e6;
        border-radius: 8px;
        transition: all 0.3s ease;
        height: 100%;
        background: #fff;
    }
    .product-card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        border-color: #343a40; 
        transform: translateY(-5px);
    }
    .product-card img {
        max-height: 200px;
        object-fit: contain;
        width: 100%;
        padding: 15px;
    }
    .product-price-main {
        font-size: 1.5rem;
        font-weight: bold;
        color: #343a40; 
    }
    
    .btn-dark {
        background-color: #343a40 !important;
        border-color: #343a40 !important;
    }
    .btn-dark:hover {
        background-color: #23272b !important;
    }
</style>

<div class="container product-list-page">
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-muted">Ana Sayfa</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ocaklar (<?php echo $urun_sayisi; ?> Ürün)</li>
      </ol>
    </nav>

    <div class="col-lg-12">
        <div class="d-flex justify-content-between align-items-center mb-4 p-3 bg-white rounded shadow-sm">
            <p class="mb-0 fw-bold">Gösterilen Ürün: <span class="text-dark"><?php echo $urun_sayisi; ?></span></p>
            <div class="d-flex align-items-center">
                <label for="sort-by" class="form-label me-2 mb-0 small text-muted">Sırala:</label>
                <select id="sort-by" class="form-select form-select-sm" style="width: 150px;">
                    <option selected>Yenilik</option>
                    <option value="fiyat-azalan">Fiyat (En Yüksek)</option>
                    <option value="fiyat-artan">Fiyat (En Düşük)</option>
                </select>
            </div>
        </div>
        
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            <?php if($urun_sayisi > 0): ?>
                <?php foreach($urunler as $u): ?>
                <div class="col">
                    <div class="card product-card h-100 p-2">
                        <a href="index.php?sayfa=urun_detay&id=<?php echo $u['id']; ?>">
                            <img src="img/<?php echo !empty($u['resim_yolu']) ? $u['resim_yolu'] : 'no-image.jpg'; ?>" 
                                 class="card-img-top" 
                                 alt="<?php echo htmlspecialchars($u['baslik']); ?>">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title fw-bold small mb-1"><?php echo htmlspecialchars($u['baslik']); ?></h5>
                                <p class="card-text text-muted small mb-3"><?php echo htmlspecialchars($u['model_kodu'] ?? ''); ?></p>
                            </div>
                            
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺<?php echo number_format($u['fiyat'], 2, ',', '.'); ?></p>
                                
                                <?php if($u['stok'] > 0): ?>
                                    <a href="index.php?sayfa=sepet&action=add&model=<?php echo $u['model_kodu']; ?>" class="btn btn-dark w-100">
                                        <i class="fas fa-shopping-cart me-2"></i> Sepete Ekle
                                    </a>
                                <?php else: ?>
                                    <button class="btn btn-secondary w-100" disabled>Stokta Yok</button>
                                <?php endif; ?>
                                
                                <small class="d-block mt-2">
                                    <a href="urun-detay.php?model=<?php echo $u['model_kodu']; ?>" class="text-decoration-none text-primary">Ürün Detayını İncele</a>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center py-5">
                    <i class="fa-solid fa-fire-burner fa-3x text-muted mb-3"></i>
                    <p class="text-muted">Bu kategoride henüz ürün bulunmuyor.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>