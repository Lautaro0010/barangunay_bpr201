<?php
session_start();

// Session'ı temizle
session_destroy();

// Tüm session değişkenlerini sil
$_SESSION = array();

// Cookie'yi de sil (eğer varsa)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Giriş sayfasına yönlendir
header("Location: index.php?giris=cikis");
exit();
?>
