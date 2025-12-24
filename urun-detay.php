<?php 

include 'db.php'; 


function normalize_turkish($str) {
    $search = ['ı', 'ğ', 'ü', 'ş', 'ö', 'ç', 'İ', 'Ğ', 'Ü', 'Ş', 'Ö', 'Ç'];
    $replace = ['i', 'g', 'u', 's', 'o', 'c', 'I', 'G', 'U', 'S', 'O', 'C'];
    return str_replace($search, $replace, $str);
}


if (isset($_GET['model'])) {
    $gelen_model = $_GET['model'];

    
    $sorgu = $db->prepare("SELECT * FROM urunler WHERE model_kodu = :kod");
    $sorgu->execute(['kod' => $gelen_model]);
    $urun = $sorgu->fetch(PDO::FETCH_ASSOC);

    if (!$urun) {
        header("Location: index.php");
        exit;
    }

    
    $model_kodu = $urun['model_kodu'];
    $resim = $urun['resim'] ?? ''; 

    if (empty($resim)) {
        $model_normalized = normalize_turkish(strtolower($model_kodu));
        $prefix = '';
        $first_char = strtoupper(substr($model_kodu, 0, 1));
        
        switch ($first_char) {
            case 'K': $prefix = 'buzdolabı-'; break;
            case 'W': $prefix = 'camasır-'; break;
            case 'P': $prefix = 'ocak-'; break;
            case 'H': $prefix = 'firin-'; break;
            case 'D': $prefix = 'ankastre-'; break;
            case 'S': $prefix = 'bulasik-'; break;
            case 'B': $prefix = 'supurge-'; break;
            case 'R': $prefix = 'su_sebilleri-'; break;
            case 'T': case 'C': case 'M': case 'L': $prefix = 'ev_aleti-'; break;
        }
        $resim = $prefix . $model_normalized . '.webp';
    }
    
    $tam_resim_yolu = 'img/' . $resim;
    

} else {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($urun['baslik']); ?> | Günay Ticaret</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/248da3bf98.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Roboto', sans-serif; background-color: #f8f9fa; }
        .product-container { padding: 60px 0; }
        .img-wrapper {
            background: #fff;
            padding: 40px;
            border-radius: 20px;
            border: 1px solid #eee;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            transition: transform 0.3s ease;
        }
        .img-wrapper img {
            max-height: 450px;
            width: 100%;
            object-fit: contain;
        }
        .price-text {
            font-size: 2.8rem;
            font-weight: 800;
            color: #1557ad;
            margin: 20px 0;
        }
        .model-badge {
            background: #e9ecef;
            color: #495057;
            padding: 5px 12px;
            border-radius: 5px;
            font-size: 0.9rem;
            font-weight: 600;
        }
        .desc-box {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            border-left: 5px solid #1557ad;
            margin: 25px 0;
        }
        .btn-buy {
            padding: 15px;
            font-size: 1.2rem;
            font-weight: 700;
            border-radius: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>

<div class="container product-container">
    <nav aria-label="breadcrumb" class="mb-5">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-muted">Ana Sayfa</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $urun['model_kodu']; ?></li>
      </ol>
    </nav>

    <div class="row g-5">
        <div class="col-lg-6">
            <div class="img-wrapper text-center">
                <img src="<?php echo $tam_resim_yolu; ?>" alt="<?php echo htmlspecialchars($urun['baslik']); ?>">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="ps-lg-4">
                <span class="model-badge">MODEL: <?php echo $urun['model_kodu']; ?></span>
                <h1 class="display-5 fw-bold mt-3 mb-2"><?php echo htmlspecialchars($urun['baslik']); ?></h1>
                
                <div class="price-text">
                    ₺<?php echo number_format($urun['fiyat'], 2, ',', '.'); ?>
                </div>

                <div class="desc-box shadow-sm">
                    <h5 class="fw-bold mb-3"><i class="fa-solid fa-list-check me-2 text-primary"></i> Ürün Özellikleri</h5>
                    <p class="text-muted mb-0"><?php echo nl2br(htmlspecialchars($urun['kisa_aciklama'])); ?></p>
                </div>

                <div class="d-grid gap-3">
                    <a href="index.php?sayfa=sepet&action=add&model=<?php echo $urun['model_kodu']; ?>" class="btn btn-dark btn-buy shadow">
                        <i class="fa-solid fa-cart-shopping me-2"></i> SEPETE EKLE
                    </a>
                    
                    <div class="row text-center mt-3 g-2">
                        <div class="col-4">
                            <i class="fa-solid fa-truck-fast text-primary mb-1"></i>
                            <p class="small text-muted">Hızlı Teslimat</p>
                        </div>
                        <div class="col-4">
                            <i class="fa-solid fa-shield-halved text-primary mb-1"></i>
                            <p class="small text-muted">Resmi Garanti</p>
                        </div>
                        <div class="col-4">
                            <i class="fa-solid fa-headset text-primary mb-1"></i>
                            <p class="small text-muted">7/24 Destek</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>