<?php

?>

<div class="login-page py-4">
    <div class="container servis-page-content">
        <div class="row justify-content-center w-100 g-0">
            <div class="col-lg-10 col-md-11"> 
                <div class="login-card d-md-flex shadow-lg rounded overflow-hidden">
                    
                    <div class="col-md-5 login-illustration p-5 d-flex flex-column justify-content-center text-center">
                        <h4 class="fw-bold">Hızlı Teknik Destek</h4>
                        <p class="mt-3">Uzman teknik ekibimizle hızlı ve güvenilir servis hizmeti almak için formu doldurunuz. Garanti sorgulama, onarım ve kurulum hizmetleri.</p>
                        <i class="fa-solid fa-tools fa-4x mt-4 opacity-50"></i>
                    </div>
                    
                    <div class="col-md-7 login-form-area p-5 bg-white">
                        <h2 class="text-center mb-4"><i class="fa-solid fa-screwdriver-wrench me-2"></i> Servis Çağır</h2>
                        
                        <form action="servis_talep_gonder.php" method="POST">
                            
                            <h5 class="mb-3 text-muted border-bottom pb-2">1. İletişim Bilgileri</h5>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="isim_soyisim" class="form-label fw-bold small">Adınız ve Soyadınız</label>
                                    <input type="text" id="isim_soyisim" name="isim_soyisim" class="form-control" placeholder="Ad Soyad" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="telefon" class="form-label fw-bold small">Telefon Numarası</label>
                                    <input type="tel" id="telefon" name="telefon" class="form-control" placeholder="(5XX) XXX XX XX" required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="adres" class="form-label fw-bold small">Servis Adresi</label>
                                <textarea id="adres" name="adres" class="form-control" rows="2" placeholder="Mahalle, Cadde, No, İl/İlçe" required></textarea>
                            </div>
                            
                            <h5 class="mb-3 text-muted border-bottom pb-2">2. Ürün ve Arıza Bilgisi</h5>
                            
                            <div class="mb-3">
                                <label for="urun_tipi" class="form-label fw-bold small">Ürün Tipi</label>
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
                                <label for="ariza_aciklama" class="form-label fw-bold small">Arıza Açıklaması</label>
                                <textarea id="ariza_aciklama" name="ariza_aciklama" class="form-control" rows="3" placeholder="Örnek: Buzdolabı soğutmuyor..." required></textarea>
                            </div>

                            <div class="d-grid gap-2 mb-3">
    <button type="submit" class="btn btn-dark btn-lg login-button shadow-sm">
        <i class="fa-solid fa-screwdriver-wrench me-2"></i> Servis Çağrısı Oluştur
    </button>
</div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>