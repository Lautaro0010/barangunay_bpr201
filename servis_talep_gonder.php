<?php
include 'db.php'; // Veritabanı bağlantı dosyan

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini alıyoruz
    $isim_soyisim  = $_POST['isim_soyisim'];
    $telefon       = $_POST['telefon'];
    $adres         = $_POST['adres'];
    $urun_tipi     = $_POST['urun_tipi'];
    $ariza_aciklama = $_POST['ariza_aciklama'];

    try {
        // Veritabanına kayıt sorgusu
        $sorgu = $db->prepare("INSERT INTO servis_talepleri (isim_soyisim, telefon, adres, urun_tipi, ariza_aciklama) VALUES (?, ?, ?, ?, ?)");
        $ekle = $sorgu->execute([$isim_soyisim, $telefon, $adres, $urun_tipi, $ariza_aciklama]);

        if ($ekle) {
            echo "<script>alert('Servis talebiniz başarıyla alındı! En kısa sürede size döneceğiz.'); window.location.href='index.php';</script>";
        }
    } catch (PDOException $e) {
        echo "Hata Oluştu: " . $e->getMessage();
    }
}
?>