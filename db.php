<?php
// db.php içeriği
$host = 'localhost';
$dbname = 'gunay_ticaret'; // BURAYI KENDİ VERİTABANI ADINLA DEĞİŞTİR
$username = 'root';
$password = 'BGBS4HYG177.'; // Wamp kullanıyorsan genelde boştur

try {
    // İşte burası kritik: $db değişkeni PDO objesi olmalı
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // Hataları yakalamak için bu ayarı ekleyelim
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("Veritabanı bağlantı hatası: " . $e->getMessage());
}
?>