<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Su Sebilleri - Soğuk & Sıcak Su | Günay</title>

    <link rel="stylesheet" href="style.css"> 
    
    <script src="https://kit.fontawesome.com/248da3bf98.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
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
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Beyaz Eşya ve İklimlendirme</a></li>
        <li class="breadcrumb-item active" aria-current="page">Su Sebilleri (6 Ürün)</li>
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
                        <a href="sebil-detay.php?model=SS-MDL-1">
                            <img src="img/su_sebilleri-RDW1576.webp" class="card-img-top" alt="Alttan Damacanalı Su Sebili">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title fw-bold small mb-1">Su Sebili</h5>
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺18.480,00</p>
                                <a href="sepet.php?action=add&model=RDW1576" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                                <small class="d-block mt-2"><a href="urun-detay.php?model=RDW1576" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card product-card h-100 p-2">
                        <a href="sebil-detay.php?model=SS-MDL-2">
                            <img src="img/su_sebilleri-RDW1575.webp" class="card-img-top" alt="Standart Üstten Damacanalı Sebil">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title fw-bold small mb-1">Su Sebili</h5>
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺18.480,00</p>
                                <a href="sepet.php?action=add&model=RDW1575" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                                <small class="d-block mt-2"><a href="urun-detay.php?model=RDW1575" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card product-card h-100 p-2">
                        <a href="sebil-detay.php?model=SS-MDL-3">
                            <img src="img/su_sebilleri-RDW1571.webp" class="card-img-top" alt="Tezgah Üstü Mini Su Sebili">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title fw-bold small mb-1">Su Sebili</h5>
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺17.160,00</p>
                                <a href="sepet.php?action=add&model=RDW1571" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                                <small class="d-block mt-2"><a href="urun-detay.php?model=RDW1571" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card product-card h-100 p-2">
                        <a href="sebil-detay.php?model=SS-MDL-4">
                            <img src="img/su_sebilleri-RDW1572.webp" class="card-img-top" alt="Paslanmaz Çelik Su Sebili">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title fw-bold small mb-1">Su Sebili</h5>
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺12.770,00</p>
                                <a href="sepet.php?action=add&model=RDW1572" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                                <small class="d-block mt-2"><a href="urun-detay.php?model=RDW1572" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card product-card h-100 p-2">
                        <a href="sebil-detay.php?model=SS-MDL-5">
                            <img src="img/su_sebilleri-RDW1276.webp" class="card-img-top" alt="Su Arıtmalı Sebil">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title fw-bold small mb-1">Su Sebili</h5>
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺9.740,00</p>
                                <a href="sepet.php?action=add&model=RDW1276" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                                <small class="d-block mt-2"><a href="urun-detay.php?model=RDW1276" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card product-card h-100 p-2">
                        <a href="sebil-detay.php?model=SS-MDL-6">
                            <img src="img/su_sebilleri-WU11A2AW0N.webp" class="card-img-top" alt="Ekonomik Su Sebili">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title fw-bold small mb-1">Su Arıtıcı</h5>
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺14.980,00</p>
                                <a href="sepet.php?action=add&model=WU11A2AW0N" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                                <small class="d-block mt-2"><a href="urun-detay.php?model=WU11A2AW0N" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
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