<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Günay - Güncel Kampanyalar</title>
    
    <script src="https://kit.fontawesome.com/248da3bf98.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="login_style.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        .campaign-card {
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            height: 100%; 
        }
        .campaign-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        .campaign-img {
            height: 200px;
            object-fit: cover;
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
        <h1 class="mb-5 fw-bold text-center">Günay Kampanyaları <i class="fa-solid fa-tags text-danger"></i></h1>

        <div class="row g-4">
            
            <div class="col-lg-4 col-md-6">
                <div class="card campaign-card">
                    <img src="img/kampanya2.gif" class="card-img-top campaign-img" alt="Ankastre Set Kampanyası">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Seçili Ankastre Setlerde 6.000 TL İndirim Fırsatı</h5>
                        <p class="card-text small text-muted">Belirli Ankastre Fırın, Ocak ve Davlumbaz setlerini bir arada alın, anında 6.000 TL indirim kazanın.</p>
                        <ul class="list-unstyled small mb-3">
                            <li><i class="fa-solid fa-check text-success me-1"></i> Fırsat kodu gerektirmez.</li>
                            <li><i class="fa-solid fa-calendar-alt text-muted me-1"></i> 31 Aralık'a kadar geçerli.</li>
                        </ul>
                        <a href="#" class="btn btn-primary mt-auto login-button">Ürünleri İncele</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card campaign-card">
                    <img src="img/kampanya1.gif" class="card-img-top campaign-img" alt="2'li Beyaz Eşya Kampanyası">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">2'li Beyaz Eşya Alana 5.000 TL İndirim veya Airfryer Hediye</h5>
                        <p class="card-text small text-muted">Seçili Çamaşır Makinesi ve Buzdolaplarını set halinde alın, indirimi veya son teknoloji Airfryer'ı seçin.</p>
                        <ul class="list-unstyled small mb-3">
                            <li><i class="fa-solid fa-check text-success me-1"></i> Model ve adet sınırlıdır.</li>
                            <li><i class="fa-solid fa-calendar-alt text-muted me-1"></i> Stoklarla sınırlıdır.</li>
                        </ul>
                        <a href="#" class="btn btn-primary mt-auto login-button">Hemen Kazan</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card campaign-card">
                    <img src="img/kampanya3.gif" class="card-img-top campaign-img" alt="Kurutma Makinesi Kampanyası">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">3'lü Beyaz Eşya + Kurutma Makinesi Alımına Özel 15.000 TL İndirim</h5>
                        <p class="card-text small text-muted">Evlilik paketleri için ideal! 3 ana ürünle birlikte kurutma makinesi aldığınızda büyük indirim fırsatı.</p>
                        <ul class="list-unstyled small mb-3">
                            <li><i class="fa-solid fa-check text-success me-1"></i> Yalnızca Bosch markalı ürünlerde geçerlidir.</li>
                            <li><i class="fa-solid fa-calendar-alt text-muted me-1"></i> Online ve Mağazalarda geçerli.</li>
                        </ul>
                        <a href="#" class="btn btn-primary mt-auto login-button">Detaylar</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card campaign-card">
                    <img src="img/kampanya4.gif" class="card-img-top campaign-img" alt="Taksit Kampanyası">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Seçili 3 Beyaz Eşya Alımında Unlimited 10 Süpürge Hediye!</h5>
                        <p class="card-text small text-muted">Beyaz eşya (buzdolabı, çamaşır makinesi, kurutma makinesi, bulaşık makinesi, ankastre fırın) ürün gruplarından 3 adet alımda BCS1041WAC Unlimited süpürge hediye fırsatı sizi bekliyor.</p>
                        <ul class="list-unstyled small mb-3">
                            <li><i class="fa-solid fa-check text-success me-1"></i> Kampanya 31 Ekim 2025 tarihine kadar geçerlidir ve stoklarla sınırlıdır.</li>
                            <li><i class="fa-solid fa-calendar-alt text-muted me-1"></i> Kampanya sadece mağazalarda geçerlidir.</li>
                        </ul>
                        <a href="#" class="btn btn-primary mt-auto login-button">Şartları Gör</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card campaign-card">
                    <img src="img/kampanya5.webp" class="card-img-top campaign-img" alt="MyBosch Üyelik Kampanyası">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">MyBosch Üyeliğine Tüm Ürünlerde Ek %5 İndirim</h5>
                        <p class="card-text small text-muted">MyBosch'a üye olun, 10 yıl motor garantisi ve size özel fiyat avantajları gibi birçok ek faydadan yararlanın.</p>
                        <ul class="list-unstyled small mb-3">
                            <li><i class="fa-solid fa-check text-success me-1"></i> İlk alışverişte geçerlidir.</li>
                            <li><i class="fa-solid fa-calendar-alt text-muted me-1"></i> Klima ve aksesuarlar hariçtir.</li>
                        </ul>
                        <a href="üye_giris.php" class="btn btn-primary mt-auto login-button">Hemen Üye Ol</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card campaign-card">
                    <img src="img/kampanya6.gif" class="card-img-top campaign-img" alt="Garanti Uzatma Kampanyası">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Seçili XL veya XXL Buzdolabı Alana RDW1276 Su Sebili Hediye!</h5>
                        <p class="card-text small text-muted">Seçili XL veya XXL buzdolabı alana RDW1276 su sebili hediye! Hediyeden yararlanabilmeniz için su sebilininde sepete eklenmesi gerekmektedir.</p>
                        <ul class="list-unstyled small mb-3">
                            <li><i class="fa-solid fa-check text-success me-1"></i> Kampanya 30 Kasım 2025 tarihine kadar geçerlidir ve stoklarla sınırlıdır.</li>
                            <li><i class="fa-solid fa-calendar-alt text-muted me-1"></i> Satın alma anında eklenebilir.</li>
                        </ul>
                        <a href="servis_cagir.php" class="btn btn-primary mt-auto login-button">Bilgi Al</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <footer class="site-footer bg-dark text-white py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center small">© 2025 Günay. Tüm hakları saklıdır.</div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>