<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Günay - Üye Girişi</title>
    
    <script src="https://kit.fontawesome.com/248da3bf98.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
    <style>
        .fixed-nav-top {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1030; 
        }
        
        
        .login-page {
            padding-top: 90px; 
            display: flex;
            align-items: center;
            min-height: 100vh;
        }
        
        .container {
            margin-top: 0 !important;
        }

        .login-card {
            margin-top: 20px;
            margin-bottom: 20px;
        }

    </style>
    <link rel="stylesheet" href="login_style.css">
    
</head>

<body class="login-page">
    
<div class="fixed-nav-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-2 header-top border-bottom">
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
</div>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-10">
                <div class="login-card d-md-flex">
                    
                    <div class="col-md-6 login-illustration">
                        <h4>Hesabınıza Giriş Yapın</h4>
                        <p>Hızlı ve güvenli alışveriş deneyimi için giriş yapın veya yeni bir hesap oluşturun.</p>
                        <a href="kayit.php" class="btn btn-outline-light mt-3">Hemen Üye Ol</a>
                    </div>
                    
                    <div class="col-md-6 login-form-area">
                        <h2 class="text-center"><i class="fa-solid fa-user me-2"></i> Üye Girişi</h2>
                        
                        <form action="login_process.php" method="POST">
                            
                            <div class="mb-3">
                                <label for="username" class="form-label fw-bold">Kullanıcı Adı / E-posta</label>
                                <input type="text" id="username" name="username" class="form-control" placeholder="E-posta adresiniz veya kullanıcı adınız" required>
                            </div>
                            
                            <div class="mb-4">
                                <label for="password" class="form-label fw-bold">Şifre</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Şifreniz" required>
                            </div>
                            
                            <div class="d-grid gap-2 mb-3">
                                <button type="submit" class="btn btn-primary btn-lg login-button">Giriş Yap</button>
                            </div>
                        </form>
                        
                        <div class="text-center forgot-password">
                            <a href="sifre_unuttum.php" class="me-2">Şifremi Unuttum</a> | 
                            <a href="kayit.php" class="ms-2">Hesabın yok mu? </a>
                        </div>
                    </div>
                </div>
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