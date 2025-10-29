<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Küçük Ev Aletleri - Mutfak Aletleri | Günay</title>

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
    
<nav class="navbar navbar-expand-lg navbar-light bg-white py-2 header-top sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center fw-bold fs-4" href="index.php">
            <img src="img/logo.png" alt="Günay Logo" style="height: 35px; margin-right: 8px;">Günay
        </a>

        <div class="d-flex order-lg-3">
            <a href="üye_giris.php" class="btn btn-outline-secondary border-0 me-2 d-none d-sm-inline-block">
                <i class="fa-solid fa-user me-1"></i> Üye Girişi
            </a>
            <a href="servis_cagir.php" class="btn btn-outline-secondary border-0 me-2 d-none d-sm-inline-block">
                <i class="fa-solid fa-screwdriver-wrench me-1"></i> Servis
            </a>
            <a href="sepet.php" class="btn btn-light border me-2">
                <i class="fa-solid fa-cart-shopping text-dark"></i> <span class="badge bg-dark text-white ms-1">0</span>
            </a>
            <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#searchModal">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
        
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light p-0 header-nav border-bottom"> 
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav py-2">
                <li class="nav-item">
                    <a class="nav-link text-dark active-custom" aria-current="page" href="index.php"><i class="fa-solid fa-list me-2"></i>Ürünlerimiz</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="kampanyalar.php">Kampanyalar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Öne Çıkanlar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">İletişim</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    
<div class="container product-list-page">
    
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Ana Sayfa</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Mutfak Aletleri</a></li>
        <li class="breadcrumb-item active" aria-current="page">Küçük Ev Aletleri (6 Ürün)</li>
      </ol>
    </nav>

    <div class="row">
        
        <div class="col-lg-3 mb-4">
            <div class="sidebar">
                <h5 class="fw-bold mb-3"><i class="fas fa-filter me-2"></i> Filtreler</h5>
                
                <div class="mb-4">
                    <label class="form-label fw-bold">Ürün Tipi</label>
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="blenderSeti"><label class="form-check-label" for="blenderSeti">Blender Seti</label></div>
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="kahveMakinesi"><label class="form-check-label" for="kahveMakinesi">Kahve Makinesi (Filtre/Türk)</label></div>
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="tostMakinesi"><label class="form-check-label" for="tostMakinesi">Tost Makinesi/Izgara</label></div>
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="mutfakRobotu"><label class="form-check-label" for="mutfakRobotu">Mutfak Robotu/Şef</label></div>
                </div>
                
                <div class="mb-4">
                    <label class="form-label fw-bold">Güç (Watt)</label>
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="750w"><label class="form-check-label" for="750w">750W - 1000W</label></div>
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="1000wuzeri"><label class="form-check-label" for="1000wuzeri">1000W Üzeri</label></div>
                </div>
                
                <div class="mb-4">
                    <label class="form-label fw-bold">Malzeme</label>
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="paslanmazCelil"><label class="form-check-label" for="paslanmazCelil">Paslanmaz Çelik</label></div>
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="camHazne"><label class="form-check-label" for="camHazne">Cam Hazne</label></div>
                </div>
                
                <button class="btn btn-primary w-100 mt-2">Filtrele</button>
                <button class="btn btn-outline-secondary w-100 mt-2">Sıfırla</button>
            </div>
        </div>
        
        <div class="col-lg-9">
            
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
                        <a href="kucuk-detay.php?model=KEA-MDL-1">
                            <img src="img/kucuk-evaleti-1.webp" class="card-img-top" alt="Premium Blender Seti">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title fw-bold small mb-1">Premium Turbo Blender Seti</h5>
                            <p class="card-text text-muted small mb-3">1500W, Paslanmaz Çelik Ayak, Doğrayıcı Hazne</p>
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺2.590,00</p>
                                <a href="sepet.php?action=add&model=KEA-MDL-1" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                                <small class="d-block mt-2"><a href="kucuk-detay.php?model=KEA-MDL-1" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card product-card h-100 p-2">
                        <a href="kucuk-detay.php?model=KEA-MDL-2">
                            <img src="img/kucuk-evaleti-2.webp" class="card-img-top" alt="Tam Otomatik Kahve Makinesi">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title fw-bold small mb-1">Tam Otomatik Filtre Kahve Makinesi</h5>
                            <p class="card-text text-muted small mb-3">Zamanlayıcı, 12 Fincan Kapasitesi, Cam Sürahi</p>
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺3.490,00</p>
                                <a href="sepet.php?action=add&model=KEA-MDL-2" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                                <small class="d-block mt-2"><a href="kucuk-detay.php?model=KEA-MDL-2" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card product-card h-100 p-2">
                        <a href="kucuk-detay.php?model=KEA-MDL-3">
                            <img src="img/kucuk-evaleti-3.webp" class="card-img-top" alt="Büyük Boy Tost Makinesi">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title fw-bold small mb-1">Mega Izgara ve Tost Makinesi</h5>
                            <p class="card-text text-muted small mb-3">2000W, Döküm Plakalar, 6 Dilim Kapasite</p>
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺1.990,00</p>
                                <a href="sepet.php?action=add&model=KEA-MDL-3" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                                <small class="d-block mt-2"><a href="kucuk-detay.php?model=KEA-MDL-3" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card product-card h-100 p-2">
                        <a href="kucuk-detay.php?model=KEA-MDL-4">
                            <img src="img/kucuk-evaleti-4.webp" class="card-img-top" alt="Profesyonel Mutfak Şefi">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title fw-bold small mb-1">Profesyonel Mutfak Şefi</h5>
                            <p class="card-text text-muted small mb-3">1200W, Planet Karıştırma, Büyük Paslanmaz Kase</p>
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺5.800,00</p>
                                <a href="sepet.php?action=add&model=KEA-MDL-4" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                                <small class="d-block mt-2"><a href="kucuk-detay.php?model=KEA-MDL-4" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card product-card h-100 p-2">
                        <a href="kucuk-detay.php?model=KEA-MDL-5">
                            <img src="img/kucuk-evaleti-1.webp" class="card-img-top" alt="Temel Blender Seti">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title fw-bold small mb-1">Temel El Blender Seti</h5>
                            <p class="card-text text-muted small mb-3">750W, Çırpıcı Aparatı, Tek Hız Ayarı</p>
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺1.250,00</p>
                                <a href="sepet.php?action=add&model=KEA-MDL-5" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                                <small class="d-block mt-2"><a href="kucuk-detay.php?model=KEA-MDL-5" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card product-card h-100 p-2">
                        <a href="kucuk-detay.php?model=KEA-MDL-6">
                            <img src="img/kucuk-evaleti-2.webp" class="card-img-top" alt="Türk Kahvesi Makinesi">
                        </a>
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <h5 class="card-title fw-bold small mb-1">Türk Kahvesi Makinesi</h5>
                            <p class="card-text text-muted small mb-3">Köpük Algılama Teknolojisi, 4 Fincan Kapasitesi</p>
                            <div class="mt-auto">
                                <p class="product-price-main mb-3">₺1.910,00</p>
                                <a href="sepet.php?action=add&model=KEA-MDL-6" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                                <small class="d-block mt-2"><a href="kucuk-detay.php?model=KEA-MDL-6" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <nav class="mt-5" aria-label="Sayfalama">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Önceki</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Sonraki</a></li>
                </ul>
            </nav>
            
        </div>
    </div>
</div>
    
<footer class="site-footer bg-dark text-white py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3"><h6>Günay</h6><br><p class="small">Adres: Cumhuriyet Mahallesi Kıbrıs Cd. No:52, 06760 Çubuk/Ankara.</p></div>
            <div class="col-md-2 mb-3"><h6>Ürünler</h6><br><ul class="footer-products list-unstyled small"><li><a href="buzdolaplari.php" class="text-white text-decoration-none">Buzdolabı</a></li><li><a href="camasir.php" class="text-white text-decoration-none">Çamaşır</a></li><li><a href="bulasik.php" class="text-white text-decoration-none">Bulaşık</a></li><li><a href="firin.php" class="text-white text-decoration-none">Fırın</a></li><li><a href="ankastre.php" class="text-white text-decoration-none">Ankastre</a></li><li><a href="supurge.php" class="text-white text-decoration-none">Süpürge</a></li><li><a href="klima.php" class="text-white text-decoration-none">Klima</a></li><li><a href="kucuk_evaletleri.php" class="text-white text-decoration-none">Küçük Ev Aletleri</a></li></ul></div>
            <div class="col-md-3 mb-3"><h6>Yardım</h6><br><ul class="footer-products list-unstyled small"><li><a href="#" class="text-white text-decoration-none">Garanti ve Servis</a></li></ul></div>
            <div class="col-md-3 mb-3"><h6>Bizi Takip Edin</h6><br></div>
        </div>
        <div class="row mt-4"><div class="col-12 text-center small">© 2025 Günay. Tüm hakları saklıdır.</div></div>
    </div>
</footer>

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