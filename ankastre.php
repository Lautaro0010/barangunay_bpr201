<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ankastre Setler - Günay | Yeni Düzen</title>

    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/248da3bf98.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        body { background-color: #f8f9fa; }
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
    </style>
</head>

<body>

<div class="container product-list-page">
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Ana Sayfa</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ankastre Setler (6 Ürün)</li>
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
                </select>
            </div>
        </div>
        
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            
            <div class="col">
                <div class="card product-card h-100 p-2">
                    <a href="urun-detay.php?model=DWK91LT60">
                        <img src="img/ankastre-DWK91LT60.webp" class="card-img-top" alt="Serie 8 Ankastre Set">
                    </a>
                    <div class="card-body text-center d-flex flex-column justify-content-between">
                        <h5 class="card-title fw-bold small mb-1">Serie 8</h5>
                        <p class="card-text text-muted small mb-3">Duvar Tipi Davlumbaz 90 cm Siyah Cam Premium Set</p>
                        <div class="mt-auto">
                            <p class="product-price-main mb-3">₺65.190,00</p>
                            <a href="sepet.php?action=add&model=DWK91LT60" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                            <small class="d-block mt-2"><a href="urun-detay.php?model=DWK91LT60" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card product-card h-100 p-2">
                    <a href="urun-detay.php?model=DIB97IM50">
                        <img src="img/ankastre-DIB97IM50.webp" class="card-img-top" alt="Serie 4 Ada Tipi Set">
                    </a>
                    <div class="card-body text-center d-flex flex-column justify-content-between">
                        <h5 class="card-title fw-bold small mb-1">Serie 4</h5>
                        <p class="card-text text-muted small mb-3">Ada Tipi Davlumbaz 90 cm Paslanmaz Çelik Set</p>
                        <div class="mt-auto">
                            <p class="product-price-main mb-3">₺60.450,00</p>
                            <a href="sepet.php?action=add&model=DIB97IM50" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                            <small class="d-block mt-2"><a href="urun-detay.php?model=DIB97IM50" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card product-card h-100 p-2">
                    <a href="urun-detay.php?model=DWK97PJ70T">
                        <img src="img/ankastre-DWK97PJ70T.webp" class="card-img-top" alt="Serie 6 Gri Set">
                    </a>
                    <div class="card-body text-center d-flex flex-column justify-content-between">
                        <h5 class="card-title fw-bold small mb-1">Serie 6</h5>
                        <p class="card-text text-muted small mb-3">Duvar Tipi Davlumbaz 90 cm Gri Cam Tasarım Set</p>
                        <div class="mt-auto">
                            <p class="product-price-main mb-3">₺30.350,00</p>
                            <a href="sepet.php?action=add&model=DWK97PJ70T" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                            <small class="d-block mt-2"><a href="urun-detay.php?model=DWK97PJ70T" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card product-card h-100 p-2">
                    <a href="urun-detay.php?model=DWF95AJ20T">
                        <img src="img/ankastre-DWF95AJ20T.webp" class="card-img-top" alt="Serie 4 Beyaz Set">
                    </a>
                    <div class="card-body text-center d-flex flex-column justify-content-between">
                        <h5 class="card-title fw-bold small mb-1">Serie 4</h5>
                        <p class="card-text text-muted small mb-3">Duvar Tipi 90 cm Beyaz Cam Yüzey Ankastre Set</p>
                        <div class="mt-auto">
                            <p class="product-price-main mb-3">₺26.220,00</p>
                            <a href="sepet.php?action=add&model=DWF95AJ20T" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                            <small class="d-block mt-2"><a href="urun-detay.php?model=DWF95AJ20T" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card product-card h-100 p-2">
                    <a href="urun-detay.php?model=DWF95AJ60T">
                        <img src="img/ankastre-DWF95AJ60T.webp" class="card-img-top" alt="Serie 4 Siyah Set">
                    </a>
                    <div class="card-body text-center d-flex flex-column justify-content-between">
                        <h5 class="card-title fw-bold small mb-1">Serie 4</h5>
                        <p class="card-text text-muted small mb-3">Duvar Tipi 90 cm Siyah Cam Yüzey Ankastre Set</p>
                        <div class="mt-auto">
                            <p class="product-price-main mb-3">₺26.220,00</p>
                            <a href="sepet.php?action=add&model=DWF95AJ60T" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                            <small class="d-block mt-2"><a href="urun-detay.php?model=DWF95AJ60T" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card product-card h-100 p-2">
                    <a href="urun-detay.php?model=DWK67PJ70T">
                        <img src="img/ankastre-DWK67PJ70T.webp" class="card-img-top" alt="Serie 6 Gri 60cm Set">
                    </a>
                    <div class="card-body text-center d-flex flex-column justify-content-between">
                        <h5 class="card-title fw-bold small mb-1">Serie 6</h5>
                        <p class="card-text text-muted small mb-3">Duvar Tipi Davlumbaz 60 cm Gri Ankastre Set</p>
                        <div class="mt-auto">
                            <p class="product-price-main mb-3">₺20.880,00</p>
                            <a href="sepet.php?action=add&model=DWK67PJ70T" class="btn btn-dark w-100"><i class="fas fa-shopping-cart me-2"></i> Sepete Ekle</a>
                            <small class="d-block mt-2"><a href="urun-detay.php?model=DWK67PJ70T" class="text-decoration-none text-primary">Ürün Detayını İncele</a></small>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <nav class="mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#">Önceki</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">Sonraki</a></li>
            </ul>
        </nav>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>