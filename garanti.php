<?php

?>

<style>
    .service-page { padding: 50px 0; background-color: #f8f9fa; }
    .info-card {
        background: #fff;
        border: 1px solid #dee2e6;
        border-radius: 12px;
        padding: 30px;
        height: 100%;
        transition: 0.3s;
    }
    .info-card:hover {
        box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        border-color: #343a40;
    }
    .icon-box {
        width: 60px;
        height: 60px;
        background-color: #343a40;
        color: #fff;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        margin-bottom: 20px;
    }
    .service-title {
        font-weight: 700;
        color: #343a40;
        margin-bottom: 15px;
    }
    .service-text {
        color: #6c757d;
        font-size: 0.95rem;
        line-height: 1.6;
    }
    .steps-section {
        background-color: #343a40;
        color: #fff;
        padding: 40px;
        border-radius: 15px;
        margin-top: 50px;
    }
    .step-number {
        font-size: 2.5rem;
        font-weight: 800;
        opacity: 0.3;
        margin-bottom: 10px;
    }
</style>

<div class="service-page">
    <div class="container">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-muted">Ana Sayfa</a></li>
                <li class="breadcrumb-item active" aria-current="page">Garanti ve Servis</li>
            </ol>
        </nav>

        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Garanti ve Yetkili Servis</h2>
            <p class="text-muted">Günay'dan aldığınız tüm ürünler resmi marka garantisi altındadır.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="info-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h5 class="service-title">Resmi Marka Garantisi</h5>
                    <p class="service-text">
                        Sitemizden aldığınız tüm ürünler, Türkiye'deki yetkili distribütörler ve üreticiler tarafından en az 2 yıl boyunca garanti kapsamındadır.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                    </div>
                    <h5 class="service-title">Yaygın Servis Ağı</h5>
                    <p class="service-text">
                        Beyaz eşya ve ankastre ürünlerinizde, markanın tüm Türkiye genelindeki geniş yetkili servis ağından profesyonel destek alabilirsiniz.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-card">
                    <div class="icon-box">
                        <i class="fa-solid fa-truck-fast"></i>
                    </div>
                    <h5 class="service-title">Ücretsiz Kurulum</h5>
                    <p class="service-text">
                        Kurulum gerektiren ürünlerimizde (Buzdolabı, Çamaşır Makinesi vb.), yetkili servis ekipleri kapınıza kadar gelerek ücretsiz kurulum yapar.
                    </p>
                </div>
            </div>
        </div>

        <div class="steps-section shadow-lg">
            <h3 class="text-center mb-5 fw-bold">Servis Süreci Nasıl İşler?</h3>
            <div class="row text-center">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="step-number">01</div>
                    <h5>Marka İle İletişim</h5>
                    <p class="small opacity-75">Ürününüzün ait olduğu markanın müşteri hizmetlerini arayarak arıza kaydı oluşturun.</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="step-number">02</div>
                    <h5>Randevu ve Tespit</h5>
                    <p class="small opacity-75">Yetkili servis uzmanları en kısa sürede adresinize gelerek gerekli kontrolleri sağlar.</p>
                </div>
                <div class="col-md-4">
                    <div class="step-number">03</div>
                    <h5>Çözüm ve Onarım</h5>
                    <p class="small opacity-75">Garanti kapsamındaki parça değişimi veya onarım işlemleri ücretsiz olarak tamamlanır.</p>
                </div>
            </div>
        </div>

        <div class="mt-5 text-center p-4 border rounded bg-white shadow-sm">
            <h5 class="fw-bold mb-3">Hangi Marka İçin Destek Arıyorsunuz?</h5>
            <p class="text-muted small">Satışını yaptığımız markaların servis numaralarına ulaşmak için bizi de arayabilirsiniz.</p>
            <div class="d-flex justify-content-center gap-3 mt-3">
                <a href="tel:02120000000" class="btn btn-dark btn-sm px-4 py-2">
                    <i class="fa-solid fa-phone me-2"></i> Mağaza Destek
                </a>
                <a href="index.php?sayfa=iletisim" class="btn btn-outline-dark btn-sm px-4 py-2">
                    <i class="fa-solid fa-envelope me-2"></i> Bize Yazın
                </a>
            </div>
        </div>
    </div>
</div>