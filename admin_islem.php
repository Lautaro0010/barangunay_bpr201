<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_rol']) || $_SESSION['user_rol'] !== 'admin') {
    die("Yetkisiz Erişim!");
}

$islem = $_GET['islem'] ?? '';
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$ref = $_GET['ref'] ?? 'dashboard';


if ($islem == 'urun_sil') {
    $sorgu = $db->prepare("SELECT resim_yolu FROM urunler WHERE id = ?");
    $sorgu->execute([$id]);
    $urun = $sorgu->fetch(PDO::FETCH_ASSOC);

    if ($urun && !empty($urun['resim_yolu'])) {
        $resim_yolu = "img/" . $urun['resim_yolu'];
        if (file_exists($resim_yolu)) {
            unlink($resim_yolu); 
        }
    }

    $sonuc = $db->prepare("DELETE FROM urunler WHERE id = ?")->execute([$id]);
    header("Location: admin_panel.php?durum=" . ($sonuc ? "basarili" : "hata") . "&ref=" . $ref);
    exit();
}


if ($islem == 'urun_guncelle' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = intval($_POST['id']);
    $baslik = $_POST['baslik'];
    $model_kodu = $_POST['model_kodu'];
    $fiyat = $_POST['fiyat'];
    $stok = intval($_POST['stok']);
    $detayli_bilgi = $_POST['detayli_bilgi'];

    
    $mevcut_sorgu = $db->prepare("SELECT resim_yolu FROM urunler WHERE id = ?");
    $mevcut_sorgu->execute([$id]);
    $mevcut_urun = $mevcut_sorgu->fetch(PDO::FETCH_ASSOC);
    $resim_yolu = $mevcut_urun['resim_yolu'];

    
    if (isset($_FILES['urun_resim']) && $_FILES['urun_resim']['error'] == 0) {
        $gecici_yol = $_FILES['urun_resim']['tmp_name'];
        $dosya_adi = $_FILES['urun_resim']['name'];
        $uzanti = strtolower(pathinfo($dosya_adi, PATHINFO_EXTENSION));
        $izin_verilenler = ['jpg', 'jpeg', 'png', 'webp'];

        if (in_array($uzanti, $izin_verilenler)) {
            $yeni_ad = uniqid() . "." . $uzanti;
            $hedef = "img/" . $yeni_ad;

            if (move_uploaded_file($gecici_yol, $hedef)) {
                
                if (!empty($resim_yolu)) {
                    $eski_dosya = "img/" . $resim_yolu;
                    if (file_exists($eski_dosya)) {
                        unlink($eski_dosya);
                    }
                }
                $resim_yolu = $yeni_ad; 
            }
        }
    }

    
    $sorgu = $db->prepare("UPDATE urunler SET baslik = ?, model_kodu = ?, fiyat = ?, stok = ?, detayli_bilgi = ?, resim_yolu = ? WHERE id = ?");
    $sonuc = $sorgu->execute([$baslik, $model_kodu, $fiyat, $stok, $detayli_bilgi, $resim_yolu, $id]);

    header("Location: admin_panel.php?durum=" . ($sonuc ? "basarili" : "hata") . "&ref=urunler");
    exit();
}


if ($islem == 'urun_ekle' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $baslik = $_POST['baslik'];
    $detayli_bilgi = $_POST['detayli_bilgi'];
    $fiyat = $_POST['fiyat'];
    $kategori_id = $_POST['kategori_id'];
    $kisa_aciklama = $_POST['kisa_aciklama'] ?? '';
    $model_kodu = $_POST['model_kodu'];
    $stok = $_POST['stok'];
    $yeni_ad = ""; 

    if (isset($_FILES['urun_resim']) && $_FILES['urun_resim']['error'] == 0) {
        $gecici_yol = $_FILES['urun_resim']['tmp_name'];
        $dosya_adi = $_FILES['urun_resim']['name'];
        $uzanti = strtolower(pathinfo($dosya_adi, PATHINFO_EXTENSION));
        $izin_verilenler = ['jpg', 'jpeg', 'png', 'webp'];

        if (in_array($uzanti, $izin_verilenler)) {
            $yeni_ad = uniqid() . "." . $uzanti;
            $hedef = "img/" . $yeni_ad;
            if (!move_uploaded_file($gecici_yol, $hedef)) {
                $yeni_ad = ""; 
            }
        }
    }

    $sorgu = $db->prepare("INSERT INTO urunler (baslik, detayli_bilgi, fiyat, kategori_id, kisa_aciklama, model_kodu, resim_yolu, stok) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $sonuc = $sorgu->execute([$baslik, $detayli_bilgi, $fiyat, $kategori_id, $kisa_aciklama, $model_kodu, $yeni_ad, $stok]);
    
    header("Location: admin_panel.php?durum=" . ($sonuc ? "basarili" : "hata") . "&ref=urunler");
    exit();
}


if (in_array($islem, ['sil', 'yetki', 'siparis_durum'])) {
    $sonuc = false;
    
    if ($islem == 'sil' && $id != $_SESSION['user_id']) {
        $sonuc = $db->prepare("DELETE FROM kullanicilar WHERE id = ?")->execute([$id]);
    }
    
    if ($islem == 'yetki' && $id != $_SESSION['user_id']) {
        $sonuc = $db->prepare("UPDATE kullanicilar SET rol = ? WHERE id = ?")->execute([$_GET['rol'], $id]);
    }
    
    if ($islem == 'siparis_durum') {
        $sonuc = $db->prepare("UPDATE siparisler SET durum = ? WHERE id = ?")->execute([$_GET['yeni_durum'], $id]);
    }
    
    header("Location: admin_panel.php?durum=" . ($sonuc ? "basarili" : "hata") . "&ref=" . $ref);
    exit();
}
?>