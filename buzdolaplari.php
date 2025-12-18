<?php
// PHP ile ilgili bir işlem varsa buraya konulur
?>

<style>
    /* Bu stiller sadece bu sayfanın ürün kartları ve sayfalama için özeldir, silinmemeli. */
    .product-list-page {
        padding: 40px 0;
    }
    .product-card {
        border: 1px solid #dee2e6;
        border-radius: 8px;
        transition: all 0.3s ease;
        height: 100%;
    }
    .product-card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        border-color: #007bff;
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
        color: #1557ad;
    }
    .sidebar {
        background-color: #ffffff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        position: sticky;
        top: 100px; 
    }
</style>

<div class="container product-list-page">
    
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Ana Sayfa</a></li>
        <li class="breadcrumb-item active" aria-current="page">Buzdolapları (6 Ürün)</li>
      </ol>
    </nav>

    <div class="row">
        
        <div class="col-lg-12">
            
            <div class="d-flex justify-content-between align-items-center mb-4 p-3 bg-white rounded shadow-sm">
                <p class="mb-0 fw-bold">Gösterilen Ürün: <span class="text-primary">6</span></p>
                <div class="d-flex align-items-center">
                    <label for="sort-by" class="form-label me-2 mb-0 small text-muted">Sırala:</label>
                    <select id="sort-by" class="form-select form-select-sm" style="width: 150px;">
                        <option selected>Yenilik</option>
                        <option value="fiyat-azalan">Fiyat (En Yüksek)</option>
                        <option value="fiyat-artan">Fiyat (En Düşük)</option>
                        <option value="puan">Müşteri Puanı</option>
                    </select>
                </div>
            </div>
            
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                
                <div class="col">
                    <div class="card product-card h-100 p-2">
                        <a href="urun-detay.php?model=KGP86AXB0N">
                            <img src="img/buzdolabı-kgp86axb0n" class="card-img-top" alt="Serie 8 Buzdolabı Tipi 1">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title fw-bold small mb-1">Serie 8 (Siyah)</h5>
                            <p class="card-text text-muted small mb-3">Alttan Donduruculu Buzdolabı 186 x 86 cm Parmak izi bırakmayan siyah inoks, Total No Frost</p>
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺98.130,00</p>
                                <a href="sepet.php?action=add&model=KGP86AXB0N" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                                <small class="d-block mt-2"><a href="urun-detay.php?model=KGP86AXB0N" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card product-card h-100 p-2">
                        <a href="urun-detay.php?model=KGP86FIC0N">
                            <img src="img/buzdolabı-kgp86fıc0n.webp" class="card-img-top" alt="Gardırop Tipi XXL (Inox)">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title fw-bold small mb-1">Serie 8 </h5>
                            <p class="card-text text-muted small mb-3">Alttan Donduruculu Buzdolabı 186 x 86 cm Kolay temizlenebilir Inox, Total No Frost</p>
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺87.990,00</p>
                                <a href="sepet.php?action=add&model=KGP86FIC0N" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                                <small class="d-block mt-2"><a href="urun-detay.php?model=KGP86FIC0N" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card product-card h-100 p-2">
                        <a href="urun-detay.php?model=KFN96VPEA">
                            <img src="img/buzdolabı-KFN96VPEA.webp" class="card-img-top" alt="Serie 6 Buzdolabı (Beyaz)">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title fw-bold small mb-1">Serie 4</h5>
                            <p class="card-text text-muted small mb-3">Gardırop Tipi Buzdolabı 183 x 90.5 cm Kolay temizlenebilir Inox, Total No Frost</p>
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺112.990,00</p>
                                <a href="sepet.php?action=add&model=KFN96VPEA" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                                <small class="d-block mt-2"><a href="urun-detay.php?model=KFN96VPEA" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card product-card h-100 p-2">
                        <a href="urun-detay.php?model=KGP86FWC0N">
                            <img src="img/buzdolabı-KGP86FWC0N.webp" class="card-img-top" alt="Serie 8 French Door (Premium)">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title fw-bold small mb-1">Serie 8</h5>
                            <p class="card-text text-muted small mb-3">Alttan Donduruculu Buzdolabı 186 x 86 cm Beyaz, Total No Frost</p>
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺83.000,00</p>
                                <a href="sepet.php?action=add&model=KGP86FWC0N" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                                <small class="d-block mt-2"><a href="urun-detay.php?model=KGP86FWC0N" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card product-card h-100 p-2">
                        <a href="urun-detay.php?model=KGA76PIE0N">
                            <img src="img/buzdolabı-KGA76PIE0N.webp" class="card-img-top" alt="Serie 4 Alttan Donduruculu">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title fw-bold small mb-1">Serie 8</h5>
                            <p class="card-text text-muted small mb-3">Alttan Donduruculu Buzdolabı 186 x 75 cm Kolay temizlenebilir Inox, Total No Frost</p>
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺81.990,00</p>
                                <a href="sepet.php?action=add&model=KGA76PIE0N" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                                <small class="d-block mt-2"><a href="urun-detay.php?model=KGA76PIE0N" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card product-card h-100 p-2">
                        <a href="urun-detay.php?model=KDN86AID1N">
                            <img src="img/buzdolabı-KDN86AID1N.webp" class="card-img-top" alt="Serie 6 XXL Gardırop Tipi">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title fw-bold small mb-1">Serie 6</h5>
                            <p class="card-text text-muted small mb-3">Üstten Donduruculu Buzdolabı 186 x 86 cm Kolay temizlenebilir Inox, Total No Frost</p>
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺79.990,00</p>
                                <a href="sepet.php?action=add&model=KDN86AID1N" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                                <small class="d-block mt-2"><a href="urun-detay.php?model=KDN86AID1N" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <nav class="mt-5" aria-label="Sayfalama">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Önceki</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">Sonraki</a></li>
                </ul>
            </nav>
            
        </div>
    </div>
</div>