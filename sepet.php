<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Günay - Alışveriş Sepeti</title>
    
    <script src="https://kit.fontawesome.com/248da3bf98.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        .cart-header {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .cart-item {
            border-bottom: 1px solid #eee;
            padding: 15px 0;
            
        }
        .cart-item:last-child {
            border-bottom: none;
        }
        .product-image {
            width: 80px;
            height: 80px;
            object-fit: contain;
        }
        .summary-card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            padding: 25px;
            position: sticky;
            top: 20px;
        }
        .login-button { 
            background-color: #343a40 !important;
            border-color: #343a40 !important;
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
    
    <div class="container my-5">
        <div class="row">
            
            <div class="col-lg-8">
                <div class="d-flex justify-content-between align-items-center cart-header">
                    <h4 class="mb-0 fw-bold">Alışveriş Sepeti (<span id="cart-item-count">2</span> Ürün)</h4>
                    <a href="index.php" class="text-muted small text-decoration-none">Alışverişe Devam Et</a>
                </div>

                

            </div>

            <div class="col-lg-4">
                <div class="summary-card">
                    <h5 class="mb-4">Sipariş Özeti</h5>

                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between mb-2 small">
                            <span>Ara Toplam:</span>
                            <span class="fw-bold" id="subtotal">0,00</span>
                        </li>
                        <li class="d-flex justify-content-between mb-2 small">
                            <span>Kargo Ücreti:</span>
                            <span class="text-success fw-bold" id="shipping-cost">ÜCRETSİZ</span>
                        </li>
                        <li class="d-flex justify-content-between mb-4 border-top pt-3">
                            <span class="h5 mb-0">Toplam Tutar:</span>
                            <span class="h5 mb-0 fw-bold" id="total">0,00 TL</span>
                        </li>
                    </ul>

                    <form class="d-flex mb-3" onsubmit="return false;"> <input type="text" class="form-control me-2" placeholder="Kupon Kodu" id="coupon-code">
                        <button class="btn btn-outline-secondary" type="button" onclick="kuponUygula()">Uygula</button>
                    </form>

                    <div class="d-grid">
                        <a href="odeme.php" class="btn btn-primary btn-lg login-button">Ödeme Adımına Geç</a>
                    </div>

                    <p class="text-center small text-muted mt-3">Siparişiniz sırasında kargo ve teslimat bilgileri güncellenecektir.</p>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="site-footer bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center small">© 2025 Günay. Tüm hakları saklıdır.</div>
            </div>
        </div>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>