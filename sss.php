<?php

$sorular = [
    [
        "soru" => "Teslimat süresi ne kadar?",
        "cevap" => "Siparişleriniz genellikle 24-48 saat içerisinde kargoya verilir. Beyaz eşya gibi büyük ürünlerde lojistik firması ile randevulu teslimat yapılmaktadır."
    ],
    [
        "soru" => "Ürünlerinizin garantisi var mı?",
        "cevap" => "Satışını yaptığımız tüm ürünler %100 orijinal olup, yetkili servis ve marka garantisi altındadır. Garanti süresi genellikle 2 yıldır."
    ],
    [
        "soru" => "Kurulum hizmeti fiyata dahil mi?",
        "cevap" => "Buzdolabı, çamaşır makinesi ve ankastre setler gibi kurulum gerektiren ürünlerde, yetkili servis tarafından ücretsiz kurulum hizmeti verilmektedir."
    ],
    [
        "soru" => "İade ve değişim şartları nelerdir?",
        "cevap" => "Kullanılmamış ve ambalajı zarar görmemiş ürünleri, teslimat tarihinden itibaren 14 gün içerisinde iade edebilirsiniz."
    ],
    [
        "soru" => "Ödeme seçenekleri nelerdir?",
        "cevap" => "Kredi kartı ile taksitli ödeme, havale ve EFT seçeneklerimiz mevcuttur. Mağazamızda tüm banka kartları geçerlidir."
    ]
];
?>

<style>
    .sss-page { padding: 60px 0; background-color: #f8f9fa; }
    .sss-header { margin-bottom: 40px; }
    .sss-header h2 { font-weight: 700; color: #343a40; }
    
    .accordion-item {
        border: 1px solid #dee2e6;
        margin-bottom: 10px;
        border-radius: 8px !important;
        overflow: hidden;
    }
    .accordion-button {
        font-weight: 600;
        color: #343a40;
        padding: 1.2rem;
    }
    .accordion-button:not(.collapsed) {
        background-color: #f8f9fa;
        color: #343a40;
        box-shadow: none;
    }
    .accordion-button:focus {
        border-color: rgba(0,0,0,.125);
        box-shadow: none;
    }
    .accordion-body {
        color: #6c757d;
        line-height: 1.6;
    }
    .btn-contact {
        background-color: #343a40;
        color: white;
        padding: 10px 25px;
        border-radius: 5px;
        text-decoration: none;
        transition: 0.3s;
    }
    .btn-contact:hover {
        background-color: #23272b;
        color: white;
    }
</style>

<div class="sss-page">
    <div class="container">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-muted">Ana Sayfa</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sıkça Sorulan Sorular</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="sss-header text-center">
                    <h2>Sıkça Sorulan Sorular</h2>
                    <p class="text-muted">Aklınıza takılan soruların yanıtlarını burada bulabilirsiniz.</p>
                </div>

                <div class="accordion" id="faqAccordion">
                    <?php foreach($sorular as $index => $item): ?>
                    <div class="accordion-item shadow-sm">
                        <h2 class="accordion-header" id="heading<?php echo $index; ?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>" aria-expanded="false" aria-controls="collapse<?php echo $index; ?>">
                                <i class="fa-regular fa-circle-question me-2 text-muted"></i> 
                                <?php echo $item['soru']; ?>
                            </button>
                        </h2>
                        <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $index; ?>" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <?php echo $item['cevap']; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="text-center mt-5 p-4 bg-white rounded shadow-sm">
                    <h5 class="fw-bold">Başka bir sorunuz mu var?</h5>
                    <p class="text-muted small mb-4">Müşteri hizmetlerimiz size yardımcı olmaktan mutluluk duyar.</p>
                    <a href="index.php?sayfa=iletisim" class="btn-contact">
                        <i class="fa-solid fa-headset me-2"></i> Bize Ulaşın
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>