<?php
require 'db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen veriler
    $ad           = $_POST['ad'];    
    $soyad        = $_POST['soyad']; 
    $email        = $_POST['email']; 
    $sifre        = $_POST['sifre']; 
    $sifre_tekrar = $_POST['sifre_tekrar']; // Formdaki 'name' özelliğine göre

    try {
        // 1. KONTROL: Şifreler uyuşuyor mu?
        if ($sifre !== $sifre_tekrar) {
            echo "<script>alert('Hata: Girdiğiniz şifreler birbiriyle uyuşmuyor!'); window.history.back();</script>";
            exit; // Kodun devam etmesini durdurur
        }

        // 2. KONTROL: Bu e-posta zaten kayıtlı mı?
        $kontrol = $db->prepare("SELECT * FROM kullanicilar WHERE email = ?");
        $kontrol->execute([$email]);
        
        if ($kontrol->rowCount() > 0) {
            echo "<script>alert('Hata: Bu e-posta adresi zaten sisteme kayıtlı!'); window.history.back();</script>";
            exit;
        }

        // 3. ADIM: Her şey yolundaysa kayıt yap
        $sifre_hash = password_hash($sifre, PASSWORD_DEFAULT);
        
        $sorgu = $db->prepare("INSERT INTO kullanicilar (ad, soyad, email, sifre) VALUES (?, ?, ?, ?)");
        $ekle = $sorgu->execute([$ad, $soyad, $email, $sifre_hash]);

        if ($ekle) {
            echo "<script>alert('Harika! Kayıt başarıyla tamamlandı.'); window.location.href='uye_giris.php';</script>";
        }

    } catch (PDOException $e) {
        echo "Veritabanı Hatası: " . $e->getMessage();
    }
}
?>