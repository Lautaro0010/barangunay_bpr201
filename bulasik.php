<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulaşık Makinesi Modelleri - Günay | Yeni Düzen</title>

    <link rel="stylesheet" href="style.css">
    
    <script src="https://kit.fontawesome.com/248da3bf98.js" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            background-color: #f8f9fa;
        }
        
        .header-top, .header-nav {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            z-index: 1020;
        }
        
        .header-nav .nav-link.active-custom {
            color: #212529 !important; 
            font-weight: 600;
        }

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
</head>

<body>
    
<div class="container product-list-page">
    
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Ana Sayfa</a></li>
        <li class="breadcrumb-item active" aria-current="page">Bulaşık Makineleri (6 Ürün)</li>
      </ol>
    </nav>

        
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
                        <a href="urun-detay.php?model=SMP6ENC60T">
                            <img src="img/bulasik-SMP6ENC60T.webp" class="card-img-top" alt="Serie 6 Siyah Inox">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title fw-bold small mb-1">Serie 6</h5>
                            <p class="card-text text-muted small mb-3">Solo Bulaşık Makinesi 60 cm Kolay Temizlenebilir Siyah Inox</p>
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺39.490,00</p>
                                <a href="sepet.php?action=add&model=SMP6ENC60T" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                                <small class="d-block mt-2"><a href="urun-detay.php?model=SMP6ENC60T" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card product-card h-100 p-2">
                        <a href="urun-detay.php?model=SMS4HMB62T">
                            <img src="img/bulasik-SMS4HMB62T.webp" class="card-img-top" alt="Serie 6 Siyah">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title fw-bold small mb-1">Serie 6</h5>
                            <p class="card-text text-muted small mb-3">Solo Bulaşık Makinesi 60 cm Siyah</p>
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺45.350,00</p>
                                <a href="sepet.php?action=add&model=SMS4HMB62T" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                                <small class="d-block mt-2"><a href="urun-detay.php?model=SMS4HMB62T" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card product-card h-100 p-2">
                        <a href="urun-detay.php?model=SMS6EMI70T">
                            <img src="img/bulasik-SMS6EMI70T.webp" class="card-img-top" alt="Serie 6 Inox">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title fw-bold small mb-1">Serie 6</h5>
                            <p class="card-text text-muted small mb-3">Solo Bulaşık Makinesi 60 cm Kolay Temizlenebilir Inox</p>
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺50.510,00</p>
                                <a href="sepet.php?action=add&model=SMS6EMI70T" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                                <small class="d-block mt-2"><a href="urun-detay.php?model=SMS6EMI70T" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card product-card h-100 p-2">
                        <a href="urun-detay.php?model=SMS4HMW62T">
                            <img src="img/bulasik-SMS4HMW62T.webp" class="card-img-top" alt="Serie 6 Beyaz">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title fw-bold small mb-1">Serie 6</h5>
                            <p class="card-text text-muted small mb-3">Solo Bulaşık Makinesi 60 cm Beyaz</p>
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺45.350,00</p>
                                <a href="sepet.php?action=add&model=SMS4HMW62T" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                                <small class="d-block mt-2"><a href="urun-detay.php?model=SMS4HMW62T" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card product-card h-100 p-2">
                        <a href="urun-detay.php?model=SMS6ECI83T">
                            <img src="img/bulasik-SMS6ECI83T.webp" class="card-img-top" alt="Serie 6 3 Çekmeceli">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title fw-bold small mb-1">Serie 6</h5>
                            <p class="card-text text-muted small mb-3">Solo Bulaşık Makinesi 60 cm Kolay Temizlenebilir Inox</p>
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺56.550,00</p>
                                <a href="sepet.php?action=add&model=SMS6ECI83T" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                                <small class="d-block mt-2"><a href="urun-detay.php?model=SMS6ECI83T" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card product-card h-100 p-2">
                        <a href="urun-detay.php?model=SMS8YDI82T">
                            <img src="img/bulasik-SMS8YDI82T.webp" class="card-img-top" alt="Serie 8 Inox">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title fw-bold small mb-1">Serie 8</h5>
                            <p class="card-text text-muted small mb-3">Solo Bulaşık Makinesi 60 cm Kolay Temizlenebilir Inox</p>
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺62.680,00</p>
                                <a href="sepet.php?action=add&model=SMS8YDI82T" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                                <small class="d-block mt-2"><a href="urun-detay.php?model=SMS8YDI82T" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
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
    

<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" style="border-radius: 12px;">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title fw-bold" id="searchModalLabel" style="color: #343a40;">Hangi ürünü arıyorsunuz?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
            </div>
            <div class="modal-body pt-2">
                <form action="arama_sonuc.php" method="GET">
                    <div class="input-group input-group-lg">
                        <input type="search" class="form-control" placeholder="Ürün adı, model numarası veya kategori..." aria-label="Arama" name="query" required>
                        <button class="btn btn-dark text-white" type="submit"><i class="fa-solid fa-magnifying-glass me-2"></i> Ara</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>