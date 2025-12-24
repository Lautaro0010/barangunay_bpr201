<!DOCTYPE html>
<html lang="tr">
<head>
    <?php
    require 'db.php'; 
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Günay - Şifremi Unuttum</title>
    
    <script src="https://kit.fontawesome.com/248da3bf98.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
</head>
<br><br><br>
<body class="login-page">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-10">
                <div class="login-card d-md-flex">
                    
                    <div class="col-md-6 login-illustration">
                        <h4>Şifrenizi Mi Unuttunuz?</h4>
                        <p>Hesabınızın kayıtlı olduğu e-posta adresini girerek şifre sıfırlama bağlantısını hemen alabilirsiniz.</p>
                        <a href="index.php?sayfa=kayit" class="btn btn-outline-light mt-3">Yeni Hesap Oluştur</a>
                    </div>
                    
                    <div class="col-md-6 login-form-area">
                        <h2 class="text-center"><i class="fa-solid fa-lock me-2"></i> Şifremi Sıfırla</h2>
                        
                        <?php if(isset($_GET['durum'])): ?>
                            <?php if($_GET['durum'] == 'basarili'): ?>
                                <div class="alert alert-success mt-2">Sıfırlama bağlantısı e-posta adresinize gönderildi!</div>
                            <?php elseif($_GET['durum'] == 'hata'): ?>
                                <div class="alert alert-danger mt-2">Bu e-posta adresi sistemde bulunamadı.</div>
                            <?php endif; ?>
                        <?php endif; ?>
                        <form action="sifre_unuttum_process.php" method="POST">
                            
                            <div class="mb-3">
                                <label for="reset_email" class="form-label fw-bold">Kayıtlı E-posta Adresiniz</label>
                                <input type="email" id="reset_email" name="reset_email" class="form-control" placeholder="e-posta@adresiniz.com" required>
                            </div>
                            
                            <p class="text-muted small mb-4">Şifrenizi sıfırlamanız için gerekli bağlantı, bu e-posta adresinize gönderilecektir.</p>

                            <div class="d-grid gap-2 mb-3">
                                <button type="submit" class="btn btn-primary btn-lg login-button">Sıfırlama Bağlantısı Gönder</button>
                            </div>
                        </form>
                        
                        <div class="text-center forgot-password">
                            <a href="index.php?sayfa=uye_giris" class="me-2">Giriş Sayfasına Geri Dön</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>