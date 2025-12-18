<style>
    .contact-header {
        background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('img/banner1.webp');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 100px 0;
        text-align: center;
        margin-bottom: 50px;
    }
    .contact-card {
        border: none;
        border-radius: 15px;
        transition: transform 0.3s;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        background: #fff;
    }
    .contact-card:hover {
        transform: translateY(-5px);
    }
    .icon-box {
        width: 70px;
        height: 70px;
        background: #f8f9fa;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        color: #343a40;
        font-size: 28px;
        border: 1px solid #eee;
    }
    .map-container {
        border-radius: 15px;
        overflow: hidden;
        height: 450px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    }
    .info-highlight {
        border-left: 4px solid #343a40;
        padding-left: 15px;
        margin-bottom: 20px;
    }
</style>

<section class="contact-header">
    <div class="container">
        <h1 class="display-4 fw-bold text-uppercase">İletişim</h1>
        <p class="lead">Günay Beyaz Eşya olarak size yardımcı olmaktan mutluluk duyarız.</p>
    </div>
</section>

<div class="container mb-5">
    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card contact-card p-4 h-100 text-center d-flex flex-column align-items-center">
                <div class="icon-box"><i class="fa-solid fa-location-dot"></i></div>
                <h5 class="fw-bold">Mağaza Adresimiz</h5>
                <p class="text-muted mb-0">Cumhuriyet Mahallesi Kıbrıs Cd. No:52,<br>06760 Çubuk/Ankara</p>
                <a href="https://www.google.com/maps/place/G%C3%9CNAY+BEYAZ+E%C5%9EYA/@40.2372221,33.0294443,17z/data=!3m1!4b1!4m6!3m5!1s0x4081e77f9859f77f:0x66c72e276f7c50a0!8m2!3d40.2372221!4d33.0320192!16s%2Fg%2F11f016d9s2?entry=ttu" target="_blank" class="btn btn-sm btn-outline-dark mt-3">Yol Tarifi Al</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card contact-card p-4 h-100 text-center d-flex flex-column align-items-center">
                <div class="icon-box"><i class="fa-solid fa-phone-volume"></i></div>
                <h5 class="fw-bold">Müşteri Hattı</h5>
                <p class="text-muted mb-0">+90 546 793 94 99<br>Hızlı Destek & Sipariş Hattı</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card contact-card p-4 h-100 text-center d-flex flex-column align-items-center">
                <div class="icon-box"><i class="fa-solid fa-envelope-open-text"></i></div>
                <h5 class="fw-bold">E-Posta Adresimiz</h5>
                <p class="text-muted mb-0">gunaybaran00@gmail.com<br>7/24 Mail Atabilirsiniz</p>
            </div>
        </div>
    </div>

    <div class="row g-4 align-items-stretch">
        <div class="col-lg-5">
            <div class="card contact-card p-4 h-100 border-0 shadow-sm">
                <h3 class="fw-bold mb-4">Ziyaret Saatleri</h3>
                
                <div class="info-highlight">
                    <h6 class="fw-bold mb-1">Hafta İçi</h6>
                    <p class="text-muted small">09:00 - 19:00 saatleri arasında mağazamızı ziyaret edebilirsiniz.</p>
                </div>

                <div class="info-highlight">
                    <h6 class="fw-bold mb-1">Cumartesi</h6>
                    <p class="text-muted small">09:30 - 18:00 saatleri arasında hizmet vermekteyiz.</p>
                </div>

                <div class="info-highlight">
                    <h6 class="fw-bold mb-1">Pazar</h6>
                    <p class="text-muted small">Mağazamız Pazar günleri kapalıdır.</p>
                </div>

                <div class="mt-4 p-3 bg-light rounded border">
                    <h6 class="fw-bold"><i class="fa-solid fa-truck-fast me-2"></i>Sevkiyat Bilgisi</h6>
                    <p class="small text-muted mb-0">Çubuk ve çevresine aynı gün teslimat ve ücretsiz kurulum imkanımız mevcuttur.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3043.957591636594!2d33.0294443!3d40.2372221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4081e77f9859f77f%3A0x66c72e276f7c50a0!2zR8OcTkFZIEJFWUFaIEXFnllB!5e0!3m2!1str!2str!4v1715850000000!5m2!1str!2str" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</div>