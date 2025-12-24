<?php
session_start();
require 'db.php'; 




if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $user_input = trim($_POST['username']); 
    $sifre      = trim($_POST['password']);

    if (empty($user_input) || empty($sifre)) {
        header("Location: index.php?sayfa=uye_giris&hata=bos_alan");
        exit();
    }

    
    $sorgu = $db->prepare("SELECT * FROM kullanicilar WHERE email = ?");
    $sorgu->execute([$user_input]);
    $kullanici = $sorgu->fetch(PDO::FETCH_ASSOC);

    
    if ($kullanici && password_verify($sifre, $kullanici['sifre'])) {
        
       
        $_SESSION['user_id']      = $kullanici['id'];
        $_SESSION['user_name']    = $kullanici['ad']; 
        $_SESSION['user_surname'] = $kullanici['soyad'];
        $_SESSION['user_email']   = $kullanici['email'];
        
        
        $_SESSION['user_rol']     = $kullanici['rol']; 
        
        $_SESSION['login_time']   = time();

        
        if ($_SESSION['user_rol'] === 'admin') {
            header("Location: index.php" );
            exit();
        } 
        
        
        if (isset($_GET['return']) && $_GET['return'] == 'sepet') {
            header("Location: index.php?sayfa=sepet");
            exit();
        }

        
        header("Location: index.php?giris=basarili");
        exit();
        
    } else {
        
        header("Location: index.php?sayfa=uye_giris&hata=1");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>