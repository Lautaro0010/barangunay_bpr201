<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Günay - Ödeme İşlemi</title>
    
    <script src="https://kit.fontawesome.com/248da3bf98.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login_style.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        .payment-progress {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 30px;
        }
        .step {
            color: #6c757d;
            font-weight: bold;
        }
        .step.active {
            color: #343a40; 
        }
        .form-section-title {
            border-bottom: 2px solid #343a40;
            padding-bottom: 5px;
            margin-bottom: 20px;
            font-size: 1.25rem;
            font-weight: bold;
        }
        .summary-card-payment {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            padding: 25px;
            position: sticky;
            top: 20px;
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
        <h2 class="mb-4 fw-bold">Ödeme İşlemi</h2>

        <div class="payment-progress d-flex justify-content-between text-center">
            <div class="step active"><i class="fa-solid fa-location-dot me-1"></i> Adres</div>
            <div class="step"><i class="fa-solid fa-credit-card me-1"></i> Ödeme Yöntemi</div>
            <div class="step"><i class="fa-solid fa-check-circle me-1"></i> Onay</div>
        </div>

        <div class="row mt-4">
            
            <div class="col-lg-8">
                <div class="card p-4 shadow-sm mb-4">
                    
                    <div class="form-section-title">Teslimat Adresi</div>
                    
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label for="ad" class="form-label">Adınız</label>
                            <input type="text" class="form-control" id="ad" value="Ahmet" required>
                        </div>
                        <div class="col-md-6">
                            <label for="soyad" class="form-label">Soyadınız</label>
                            <input type="text" class="form-control" id="soyad" value="Yılmaz" required>
                        </div>
                        <div class="col-12">
                            <label for="adres" class="form-label">Açık Adres</label>
                            <input type="text" class="form-control" id="adres" placeholder="Mahalle, Cadde, Apartman No..." required>
                        </div>
                        <div class="col-md-4">
                            <label for="sehir" class="form-label">Şehir</label>
                            <select id="sehir" class="form-select" required>
                                <option selected>İzmir</option>
                                <option>Ankara</option>
                                <option>İstanbul</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="posta-kodu" class="form-label">Posta Kodu</label>
                            <input type="text" class="form-control" id="posta-kodu" required>
                        </div>
                        <div class="col-md-4">
                            <label for="telefon" class="form-label">Telefon</label>
                            <input type="tel" class="form-control" id="telefon" required>
                        </div>
                    </div>

                    <div class="form-section-title">Ödeme Yöntemi</div>
                    
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="kredi_karti" checked>
                            <label class="form-check-label" for="kredi_karti">
                                Kredi Kartı / Banka Kartı
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="havale_eft">
                            <label class="form-check-label" for="havale_eft">
                                Havale / EFT
                            </label>
                        </div>
                    </div>
                    
                    <div id="credit-card-details" class="row g-3 border rounded p-3 mb-4">
                        <div class="col-12">
                            <label for="kart-no" class="form-label">Kart Numarası</label>
                            <input type="text" class="form-control" id="kart-no" placeholder="XXXX XXXX XXXX XXXX" required>
                        </div>
                        <div class="col-md-6">
                            <label for="son-kullanma" class="form-label">Son Kullanma Tarihi</label>
                            <input type="text" class="form-control" id="son-kullanma" placeholder="AA/YY" required>
                        </div>
                        <div class="col-md-6">
                            <label for="cvv" class="form-label">CVV</label>
                            <input type="text" class="form-control" id="cvv" placeholder="Üç Rakam" required>
                        </div>
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="sartlar" required>
                        <label class="form-check-label" for="sartlar">
                            <a href="#">Şartlar ve koşulları</a> okudum ve kabul ediyorum.
                        </label>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="summary-card-payment">
                    <h5 class="mb-4">Sipariş Özeti</h5>

                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between mb-2 small">
                            <span>Ara Toplam:</span>
                            <span class="fw-bold">65.498,00 TL</span>
                        </li>
                         <li class="d-flex justify-content-between mb-2 small">
                            <span>KDV (%20):</span>
                            <span class="fw-bold">13.099,60 TL</span>
                        </li>
                        <li class="d-flex justify-content-between mb-2 small">
                            <span>Kargo Ücreti:</span>
                            <span class="text-success fw-bold">ÜCRETSİZ</span>
                        </li>
                        <li class="d-flex justify-content-between mb-4 border-top pt-3">
                            <span class="h5 mb-0">Ödenecek Toplam:</span>
                            <span class="h5 mb-0 fw-bold text-danger">78.597,60 TL</span>
                        </li>
                    </ul>

                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg login-button"><i class="fa-solid fa-check-circle me-1"></i> Siparişi Tamamla</button>
                    </div>

                    <p class="text-center small text-muted mt-3">Siparişinizi tamamladığınızda, güvenli ödeme sistemleri üzerinden işleminiz gerçekleştirilecektir.</p>
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