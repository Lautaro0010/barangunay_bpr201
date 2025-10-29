<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Günay - Servis Talebi Oluştur</title>
    
    <script src="https://kit.fontawesome.com/248da3bf98.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login_style.css">

    <style>
        .fixed-nav-top {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1030;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05); 
        }
        
        .servis-page-content {
            /
            padding-top: 100px; 
            min-height: 100vh; /
            display: flex; 
            align-items: center; 
            justify-content: center; 
            width: 100%; 
            padding-bottom: 20px; 
        }

        
        .login-card {
            margin-top: 40px; 
            margin-bottom: 40px;
            width: 100%; 
        }
        
        .header-nav .nav-link.active-custom {
            color: #212529 !important; 
            font-weight: 600;
        }
    </style>
</head>

<body class="bg-light">

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
                        <a class="nav-link text-dark" aria-current="page" href="index.php"><i class="fa-solid fa-list me-2"></i>Ürünlerimiz</a>
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
<div class="container servis-page-content">
    <div class="row justify-content-center w-100">
        <div class="col-lg-9 col-md-11"> 
            <div class="login-card d-md-flex">
                
                <div class="col-md-6 login-illustration">
                    <h4>Hızlı Teknik Destek</h4>
                    <p>Uzman teknik ekibimizle hızlı ve güvenilir servis hizmeti almak için formu doldurunuz. Garanti sorgulama, onarım ve kurulum hizmetleri.</p>
                    <a href="#" class="btn btn-outline-light mt-3">Garanti Sorgula</a>
                </div>
                
                <div class="col-md-6 login-form-area">
                    <h2 class="text-center"><i class="fa-solid fa-screwdriver-wrench me-2"></i> Servis Çağır</h2>
                    
                    <form action="servis_talep_gonder.php" method="POST">
                        
                        <h5 class="mb-3 text-muted">1. İletişim Bilgileri</h5>
                        <div class="mb-3">
                            <label for="isim_soyisim" class="form-label fw-bold">Adınız ve Soyadınız</label>
                            <input type="text" id="isim_soyisim" name="isim_soyisim" class="form-control" placeholder="Ad Soyad" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="telefon" class="form-label fw-bold">Telefon Numarası</label>
                            <input type="tel" id="telefon" name="telefon" class="form-control" placeholder="(5XX) XXX XX XX" required>
                        </div>

                        <div class="mb-4">
                            <label for="adres" class="form-label fw-bold">Servis Adresi</label>
                            <textarea id="adres" name="adres" class="form-control" rows="2" placeholder="Mahalle, Cadde, No, İl/İlçe" required></textarea>
                        </div>
                        
                        <h5 class="mb-3 text-muted">2. Ürün ve Arıza Bilgisi</h5>
                        
                        <div class="mb-3">
                            <label for="urun_tipi" class="form-label fw-bold">Ürün Tipi</label>
                            <select id="urun_tipi" name="urun_tipi" class="form-select" required>
                                <option value="" disabled selected>Lütfen seçiniz</option>
                                <option value="Buzdolabı">Buzdolabı</option>
                                <option value="Çamaşır Makinesi">Çamaşır Makinesi</option>
                                <option value="Bulaşık Makinesi">Bulaşık Makinesi</option>
                                <option value="Fırın/Ocak">Fırın/Ocak</option>
                                <option value="Süpürge">Süpürge</option>
                                <option value="Diğer">Diğer Küçük Ev Aletleri</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="ariza_aciklama" class="form-label fw-bold">Arıza Açıklaması</label>
                            <textarea id="ariza_aciklama" name="ariza_aciklama" class="form-control" rows="3" placeholder="Örnek: Buzdolabı soğutmuyor, Çamaşır makinesi su almıyor vb." required></textarea>
                        </div>

                        <div class="d-grid gap-2 mb-3">
                            <button type="submit" class="btn btn-primary btn-lg login-button">Servis Çağrısı Oluştur</button>
                        </div>
                    </form>
                    
                    <div class="text-center forgot-password">
                        <a href="tel:+905467939499" class="me-2"><i class="fa-solid fa-phone me-1"></i> Telefonla Çağır</a> 
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