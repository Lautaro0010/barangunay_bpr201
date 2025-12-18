<?php
session_start();
require 'db.php'; // Veritabanı bilgilerinin olduğu dosya

/* --- GİRİŞ KONTROLÜ --- */

// Zaten oturum açmışsa index.php'ye yönlendir
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

    // Sorguyu 'email' üzerinden yapıyoruz
    $sorgu = $db->prepare("SELECT * FROM kullanicilar WHERE email = ?");
    $sorgu->execute([$user_input]);
    $kullanici = $sorgu->fetch(PDO::FETCH_ASSOC);

    // Kullanıcı varsa ve şifre hash'i eşleşiyorsa
    if ($kullanici && password_verify($sifre, $kullanici['sifre'])) {
        
        // --- SESSION BİLGİLERİNİ ATA ---
        $_SESSION['user_id']      = $kullanici['id'];
        $_SESSION['user_name']    = $kullanici['ad']; 
        $_SESSION['user_surname'] = $kullanici['soyad'];
        $_SESSION['user_email']   = $kullanici['email'];
        
        // KRİTİK EKLEME: Veritabanındaki rolü session'a alıyoruz (admin veya user)
        $_SESSION['user_rol']     = $kullanici['rol']; 
        
        $_SESSION['login_time']   = time();

        // --- YÖNLENDİRME MANTIĞI ---
        
        // 1. Eğer giriş yapan bir ADMIN ise doğrudan admin paneline gönder
        if ($_SESSION['user_rol'] === 'admin') {
            header("Location: index.php?sayfa=admin_panel");
            exit();
        } 
        
        // 2. Eğer kullanıcı SEPETTEN yönlendirilmişse, girişten sonra sepete geri dönsün
        // (Bunun çalışması için giriş formunun action kısmına return=sepet eklemelisin)
        if (isset($_GET['return']) && $_GET['return'] == 'sepet') {
            header("Location: index.php?sayfa=sepet");
            exit();
        }

        // 3. Hiçbiri değilse normal ana sayfaya gönder
        header("Location: index.php?giris=basarili");
        exit();
        
    } else {
        // Hata durumunda (Şifre yanlış veya kullanıcı yok)
        header("Location: index.php?sayfa=uye_giris&hata=1");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>