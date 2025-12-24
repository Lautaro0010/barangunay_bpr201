<?php

?>

<style>
    .campaign-card {
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        height: 100%; 
        border: none;
        background: #fff;
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
        color: #fff !important;
    }
    .login-button:hover {
        background-color: #23272b !important;
    }
</style>

<div class="container my-5">
    <h1 class="mb-5 fw-bold text-center">Günay Kampanyaları <i class="fa-solid fa-tags text-danger"></i></h1>

    <div class="row g-4">
        
        <div class="col-lg-4 col-md-6">
            <div class="card campaign-card">
                <img src="img/kampanya2.gif" class="card-img-top campaign-img" alt="Ankastre Set">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Seçili Ankastre Setlerde 6.000 TL İndirim</h5>
                    <p class="card-text small text-muted">Belirli Ankastre Fırın, Ocak ve Davlumbaz setlerini bir arada alın, anında 6.000 TL indirim kazanın.</p>
                    <ul class="list-unstyled small mb-3 mt-auto">
                        <li><i class="fa-solid fa-check text-success me-1"></i> Fırsat kodu gerektirmez.</li>
                        <li><i class="fa-solid fa-calendar-alt text-muted me-1"></i> 31 Aralık'a kadar geçerli.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card campaign-card">
                <img src="img/kampanya1.gif" class="card-img-top campaign-img" alt="2li Beyaz Eşya">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Airfryer Hediye Kampanyası</h5>
                    <p class="card-text small text-muted">Seçili Çamaşır Makinesi ve Buzdolaplarını set halinde alın, indirimi veya Airfryer'ı seçin.</p>
                    <ul class="list-unstyled small mb-3 mt-auto">
                        <li><i class="fa-solid fa-check text-success me-1"></i> Model ve adet sınırlıdır.</li>
                        <li><i class="fa-solid fa-calendar-alt text-muted me-1"></i> Stoklarla sınırlıdır.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card campaign-card">
                <img src="img/kampanya3.gif" class="card-img-top campaign-img" alt="Kurutma Makinesi">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">15.000 TL Dev İndirim Paketi</h5>
                    <p class="card-text small text-muted">3 ana ürünle birlikte kurutma makinesi aldığınızda büyük indirim fırsatı.</p>
                    <ul class="list-unstyled small mb-3 mt-auto">
                        <li><i class="fa-solid fa-check text-success me-1"></i> Bosch markalı ürünlerde geçerli.</li>
                        <li><i class="fa-solid fa-calendar-alt text-muted me-1"></i> Online ve Mağazalarda.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card campaign-card">
                <img src="img/kampanya4.gif" class="card-img-top campaign-img" alt="Süpürge Hediye">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">3 Alana Sınırsız Süpürge Hediye!</h5>
                    <p class="card-text small text-muted">Beyaz eşya gruplarından 3 adet alımda Unlimited süpürge hediye fırsatı.</p>
                    <ul class="list-unstyled small mb-3 mt-auto">
                        <li><i class="fa-solid fa-check text-success me-1"></i> 31 Ekim 2025'e kadar.</li>
                        <li><i class="fa-solid fa-calendar-alt text-muted me-1"></i> Sadece mağazalarda.</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
            <div class="card campaign-card">
                <img src="img/kampanya5.webp" class="card-img-top campaign-img" alt="Üyelik">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">MyBosch Ek %5 İndirim</h5>
                    <p class="card-text small text-muted">MyBosch'a üye olun, 10 yıl motor garantisi ve size özel fiyatlardan yararlanın.</p>
                    <ul class="list-unstyled small mb-3 mt-auto">
                        <li><i class="fa-solid fa-check text-success me-1"></i> İlk alışverişte geçerli.</li>
                        <li><i class="fa-solid fa-calendar-alt text-muted me-1"></i> Klima hariçtir.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card campaign-card">
                <img src="img/kampanya6.gif" class="card-img-top campaign-img" alt="Su Sebili">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Buzdolabı Alana Su Sebili Hediye!</h5>
                    <p class="card-text small text-muted">Seçili XL veya XXL buzdolabı alana RDW1276 su sebili hediye!</p>
                    <ul class="list-unstyled small mb-3 mt-auto">
                        <li><i class="fa-solid fa-check text-success me-1"></i> 30 Kasım 2025'e kadar.</li>
                        <li><i class="fa-solid fa-calendar-alt text-muted me-1"></i> Stoklarla sınırlıdır.</li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</div>