<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Günay</title>
    <link rel="stylesheet" href="style.css">
    
    <script src="https://kit.fontawesome.com/248da3bf98.js" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
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
                    <a class="nav-link text-dark active-custom" aria-current="page" href="#gototanıtım"><i class="fa-solid fa-list me-2"></i>Ürünlerimiz</a>
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
</nav><br>
    
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/banner1.webp" alt="Los Angeles" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="img/banner2.webp" alt="Chicago" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="img/banner4.webp" alt="New York" class="d-block w-100">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div><br><br><br><br><br>

    <div class="container">
        <div class="row">
            <div class="col-sm-4 mb-4">
                <div class="card h-100">
                    <img src="img/kart1.gif" class="card-img-top img-fluid" alt="Card 1">
                    <div class="card-body">
                        <h5 class="card-title">Unlimited 10</h5>
                        <p class="card-text">Görünenin ötesinde temizlik sağlayan MicroClean teknolojisi ile Bosch’un en iyi toz toplama sistemine sahip Yeni Unlimited 10 ile tanışın.</p>
                        <a href="#" class="btn btn-primary">İncele</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mb-4">
                <div class="card h-100">
                    <img src="img/kart2.gif" class="card-img-top img-fluid" alt="Card 2">
                    <div class="card-body">
                        <h5 class="card-title">Serie 8 Ankastre Fırınlar</h5>
                        <p class="card-text">3D Fry özelliği ile yağ kullanmadan veya çok az yağ ile tam kıvamında pişen sağlıklı kızartmalar hazırlayabileceğiniz Serie 8 Ankastre Fırınlar.</p>
                        <a href="#" class="btn btn-primary">İncele</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mb-4">
                <div class="card h-100">
                    <img src="img/kart3.gif" class="card-img-top img-fluid" alt="Card 3">
                    <div class="card-body">
                        <h5 class="card-title">Flex Large Buzdolapları</h5>
                        <p class="card-text">Flex Large Buzdolapları, geniş iç hacmi ve akıllı tasarımı ile mutfaklarınıza şıklık katıyor.</p>
                        <a href="#" class="btn btn-primary">İncele</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 mb-4">
                <div class="card h-100">
                    <img src="img/kart4.gif" class="card-img-top img-fluid" alt="Card 4">
                    <div class="card-body">
                        <h5 class="card-title">Serie 8 Çamaşır Makineleri</h5>
                        <p class="card-text">Hem çamaşırlarınız hem doğa güvende. Akıllı teknolojileri sayesinde deterjandan suya, enerjiden zamana tasarruf etmek için tasarlandı.</p>
                        <a href="#" class="btn btn-primary">İncele</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mb-4">
                <div class="card h-100">
                    <img src="img/kart5.webp" class="card-img-top img-fluid" alt="Card 5">
                    <div class="card-body">
                        <h5 class="card-title">Serie 6 Mutfak Makinesi</h5>
                        <p class="card-text">Akıllı algılama teknolojisi, maksimum kullanım konforu, 10 yıl motor garantisi ve modern tasarımın birleşimi ile büyüleyici dokunuş.</p>
                        <a href="#" class="btn btn-primary">İncele</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mb-4">
                <div class="card h-100">
                    <img src="img/kart6.webp" class="card-img-top img-fluid" alt="Card 6">
                    <div class="card-body">
                        <h5 class="card-title">VeroBarista Tam Otomatik Kahve Makineleri</h5>
                        <p class="card-text">Espresso’dan cappucino’ya, café latte’den Americano’ya pek çok kahve çeşidini barista ustalığıyla hazırlayın, profesyonel kahve lezzetini evinizin konforuna taşıyın.</p>
                        <a href="#" class="btn btn-primary">İncele</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ürün_tanıtımı my-5 position-relative" id="gototanıtım" style="background:#f2f4f7; padding:30px 0;">
        <div id="urunCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="container">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="buzdolabı p-4 link-list" style="background:#ffffff;border-radius:8px;min-height:260px;">
                                    <img src="img/buzdolabı.webp" alt="" style="width:100%;height:auto;margin-bottom:1rem;">
                                    <nav class="link-items" role="navigation" aria-label="Buzdolabı linkleri">
                                        <a href="buzdolaplari.php" class="btn btn-outline-dark w-100 mb-2 text-start title-btn">Buzdolabı</a><br><br>
                                        <a href="buzdolaplari.php" class="btn btn-outline-dark w-100 mb-2 text-start">Gardırop Tipi Buzdolabı</a><br><br>
                                        <a href="buzdolaplari.php" class="btn btn-outline-dark w-100 text-start">Derin Dondurucu</a><br><br>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="buzdolabı p-4 link-list" style="background:#ffffff;border-radius:8px;min-height:260px;">
                                    <img src="img/çamaşır.webp" alt="" style="width:100%;height:auto;margin-bottom:1rem;">
                                    <nav class="link-items" role="navigation" aria-label="Çamaşır linkleri">
                                        <a href="camasir.php" class="btn btn-outline-dark w-100 mb-2 text-start title-btn">Çamaşır Makinesi</a><br><br>
                                        <a href="camasir.php" class="btn btn-outline-dark w-100 mb-2 text-start">Kurutma Makinesi</a><br><br>
                                        <a href="camasir.php" class="btn btn-outline-dark w-100 text-start">Kurutmalı Çamaşır Makinesi</a><br><br>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="buzdolabı p-4 link-list" style="background:#ffffff;border-radius:8px;min-height:260px;">
                                    <img src="img/bulaşık.webp" alt="" style="width:100%;height:auto;margin-bottom:1rem;">
                                    <nav class="link-items" role="navigation" aria-label="Bulaşık linkleri">
                                        <a href="bulasik.php" class="btn btn-outline-dark w-100 mb-2 text-start title-btn">Bulaşık Makinesi</a><br><br>
                                        <a href="bulasik.php" class="btn btn-outline-dark w-100 mb-2 text-start">Solo Bulaşık Makinesi</a><br><br>
                                        <a href="bulasik.php" class="btn btn-outline-dark w-100 text-start">Ankastre Bulaşık Makinesi</a><br><br>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="buzdolabı p-4 link-list" style="background:#ffffff;border-radius:8px;min-height:260px;">
                                    <img src="img/fırın.webp" alt="" style="width:100%;height:auto;margin-bottom:1rem;">
                                    <nav class="link-items" role="navigation" aria-label="Fırın linkleri">
                                        <a href="firin.php" class="btn btn-outline-dark w-100 mb-2 text-start title-btn">Ankastre Fırın</a><br><br>
                                        <a href="firin.php" class="btn btn-outline-dark w-100 mb-2 text-start">Solo ve Midi Fırın</a><br><br>
                                        <a href="firin.php" class="btn btn-outline-dark w-100 text-start">Mikrodalga Fırın</a><br><br>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="buzdolabı p-4 link-list" style="background:#ffffff;border-radius:8px;min-height:260px;">
                                    <img src="img/ankastre.webp" alt="" style="width:100%;height:auto;margin-bottom:1rem;">
                                    <nav class="link-items" role="navigation" aria-label="Ankastre linkleri">
                                        <a href="ankastre.php" class="btn btn-outline-dark w-100 mb-2 text-start title-btn">Ankastre Set</a><br><br>
                                        <a href="ankastre.php" class="btn btn-outline-dark w-100 mb-2 text-start">Ankastre Ocak</a><br><br>
                                        <a href="ankastre.php" class="btn btn-outline-dark w-100 text-start">Ankastre Davlumbaz</a><br><br>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="buzdolabı p-4 link-list" style="background:#ffffff;border-radius:8px;min-height:260px;">
                                    <img src="img/süpürge.webp" alt="" style="width:100%;height:auto;margin-bottom:1rem;">
                                    <nav class="link-items" role="navigation" aria-label="Süpürge linkleri">
                                        <a href="supurge.php" class="btn btn-outline-dark w-100 mb-2 text-start title-btn">Süpürge</a><br><br>
                                        <a href="supurge.php" class="btn btn-outline-dark w-100 mb-2 text-start">Robot Süpürge</a><br><br>
                                        <a href="supurge.php" class="btn btn-outline-dark w-100 text-start">Kablosuz Dikey Süpürge</a><br><br>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="buzdolabı p-4 link-list" style="background:#ffffff;border-radius:8px;min-height:260px;"><br>
                                    <img src="img/klima.webp" alt="" style="width:100%;height:auto;margin-bottom:1rem;">
                                    <nav class="link-items" role="navigation" aria-label="Klima linkleri"><br><br>
                                        <a href="klima.php" class="btn btn-outline-dark w-100 mb-2 text-start title-btn">Split Klima</a><br><br>
                                        <a href="klima.php" class="btn btn-outline-dark w-100 mb-2 text-start">Inverter Klima</a><br><br>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="buzdolabı p-4 link-list" style="background:#ffffff;border-radius:8px;min-height:260px;">
                                    <img src="img/sebil.jpg" alt="" style="width:70%;height:auto;margin-bottom:1rem;justify-content:center;display:block;margin-left:auto;margin-right:auto;">
                                    <nav class="link-items" role="navigation" aria-label="Su Sebili linkleri">
                                        <a href="su_sebilleri.php" class="btn btn-outline-dark w-100 mb-2 text-start title-btn">Su Sebili</a><br><br>
                                        <a href="su_sebilleri.php" class="btn btn-outline-dark w-100 mb-2 text-start">Su Arıtma Cihazı</a><br><br>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="buzdolabı p-4 link-list" style="background:#ffffff;border-radius:8px;min-height:260px;">
                                    <img src="img/mutfak.webp" alt="" style="width:100%;height:auto;margin-bottom:1rem;">
                                    <nav class="link-items" role="navigation" aria-label="Mutfak linkleri">br
                                        <a href="kucuk_evaletleri.php" class="btn btn-outline-dark w-100 mb-2 text-start title-btn">Mutfak Robotu</a><br><br>
                                        <a href="kucuk_evaletleri.php" class="btn btn-outline-dark w-100 mb-2 text-start">Kahve Makinesi</a><br><br>
                                        <a href="kucuk_evaletleri.php" class="btn btn-outline-dark w-100 text-start">Air Fryers</a><br><br>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#urunCarousel" data-bs-slide="prev" aria-label="Önceki">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M15 18L9 12L15 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>

            <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#urunCarousel" data-bs-slide="next" aria-label="Sonraki">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M9 6L15 12L9 18" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </section><br><br>

    <section class="site-features py-5">
        <div class="container">
            <div class="row text-center g-3">
                <div class="col-md-4">
                    <div class="feature p-4">
                        <h5>Ücretsiz Kargo</h5>
                        <p class="text-muted small">Seçili ürünlerde ve kampanyalarda teslimat ücretsizdir; siparişler hızlı ve planlı şekilde kapına ulaştırılır.
Sipariş takibi ve teslimat seçenekleri (bina içi teslimat / randevulu teslimat) sunulur.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature p-4">
                        <h5>İade Kolaylığı</h5>
                        <p class="text-muted small">Memnun kalmadığınız ürünler için kolay iade prosedürü ve destek hattı mevcuttur.
İade süreci şeffaf; koşullar ve adımlar online olarak açıklanır, işlem destek personeliyle yürütülür.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature p-4">
                        <h5>Yetkili Servis</h5>
                        <p class="text-muted small">Orijinal yedek parça ve eğitimli teknisyenler ile yaygın yetkili servis ağı sağlanır.
                        Garanti kapsamı ve servis talepleri için online randevu ve takip imkanı bulunur.</p>
                    </div>
                </div>
            </div>
        </div>
    </section><br>

    <section class="newsletter bg-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h5>Yeniliklerden Haberdar Olun</h5>
                    <p class="text-muted small">Kampanyalar ve yeni ürünlerle ilgili e-posta alın.</p>
                </div>
                <div class="col-md-6">
                    <form id="newsletterForm" class="d-flex" onsubmit="return subscribeNewsletter(event);">
                        <input id="newsletterEmail" type="email" class="form-control me-2" placeholder="E-posta adresiniz" required>
                        <button class="btn btn-primary">Gönder</button>
                    </form>
                </div>
            </div>
        </div>
    </section><br><br><br>

    <section class="blog-preview py-5 bg-light">
        <div class="container">
            <h5 class="mb-4">Çevre Dostu</h5>
            <div class="row g-3">
                <div class="col-md-4">
                    <article class="p-3 bg-white rounded">
                        <h6>Temizlik İpuçları</h6>
                        <p class="small text-muted">Kullandığınız cihazların filtrelerini ve conta bölgelerini düzenli temizleyin, uygun yıkama/temizlik programlarını kullanın ve kireçlenmeyi önlemek için periyodik olarak kireç çözücü veya bakım yapın — böylece performans ve hijyen korunur.</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="p-3 bg-white rounded">
                        <h6>Enerji Tasarrufu</h6>
                        <p class="small text-muted">Cihazları tam doluyken çalıştırın, eco/enerji tasarruf modlarını tercih edin, buzdolabı/dondurucu sıcaklıklarını önerilen seviyelerde tutun ve arka yüzey temizliğini (kondenser/radyatör) aksatmayın; bu basit alışkanlıklar faturayı ve çevreyi azaltır</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="p-3 bg-white rounded">
                        <h6>Yeni Ürünler</h6>
                        <p class="small text-muted">Yeni beyaz eşyalar genelde daha verimli motorlar, sessiz çalışma, akıllı bağlantı (app/IoT) ve geliştirilmiş kullanıcı arayüzleri sunar — yenilikleri değerlendirirken enerji sınıfı, servis ağı ve uzun vadeli dayanıklılığı göz önünde bulundurun.</p>
                    </article>
                </div>
            </div>
        </div>
    </section><br><br>

    <footer class="site-footer bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h6>Günay</h6><br>
                    <p class="small">Adres: Cumhuriyet Mahallesi Kıbrıs Cd. No:52, 06760 Çubuk/Ankara.</p>
                    <p class="small">Telefon: +90 546 793 94 99</p>
                    <p class="small">E-posta: gunaybaran00@gmail.com</p>
                </div>

                <div class="col-md-2 mb-3">
                    <h6>Ürünler</h6><br>
                    <ul class="footer-products list-unstyled small">
                        <li><a href="buzdolaplari.php" class="footer-link">Buzdolabı</a></li>
                        <li><a href="camasir.php" class="footer-link">Çamaşır</a></li>
                        <li><a href="bulasik.php" class="footer-link">Bulaşık</a></li>
                        <li><a href="firin.php" class="footer-link">Fırın</a></li>
                        <li><a href="ankastre.php" class="footer-link">Ankastre</a></li>
                        <li><a href="supurge.php" class="footer-link">Süpürge</a></li>
                        <li><a href="klima.php" class="footer-link">Klima</a></li>
                        <li><a href="su_sebilleri.php" class="footer-link">Su Sebilleri</a></li>
                        <li><a href="kucuk_evaletleri.php" class="footer-link">Küçük Ev Aletleri</a></li>
                    </ul>
                </div>

                <div class="col-md-3 mb-3">
                    <h6>Yardım</h6><br>
                    <ul class="footer-products list-unstyled small">
                        <li><a href="#" class="footer-link">Sıkça Sorulan Sorular</a></li>
                        <li><a href="#" class="footer-link">Garanti ve Servis</a></li>
                    </ul>
                </div>

                <div class="col-md-3 mb-3">
                    <h6>Bizi Takip Edin</h6><br>
                    <div class="social-icons mt-2" aria-label="Sosyal Medya">
                        <a href="#" class="social-icon" aria-label="Facebook" title="Facebook" target="_blank" rel="noopener">
                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                        </a><br>
                        <a href="#" class="social-icon" aria-label="Instagram" title="Instagram" target="_blank" rel="noopener">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                        </a><br>
                        <a href="#" class="social-icon" aria-label="Twitter" title="Twitter" target="_blank" rel="noopener">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a><br>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center small">© 2025 Günay. Tüm hakları saklıdır.</div>
            </div>
        </div>
    </footer>
    
</body>
</html>