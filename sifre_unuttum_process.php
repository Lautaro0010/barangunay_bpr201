<?php
require 'db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = trim($_POST['reset_email']);

    if (empty($email)) {
        header("Location: sifre_unuttum.php?durum=bos");
        exit();
    }

    
    $sorgu = $db->prepare("SELECT * FROM kullanicilar WHERE email = ?");
    $sorgu->execute([$email]);
    $kullanici = $sorgu->fetch(PDO::FETCH_ASSOC);

    if ($kullanici) {
       
        $token = bin2hex(random_bytes(32)); 
        
        
        header("Location: sifre_unuttum.php?durum=basarili");
        exit();

    } else {
        
        header("Location: sifre_unuttum.php?durum=hata");
        exit();
    }
} else {
    
    header("Location: sifre_unuttum.php");
    exit();
}
?>