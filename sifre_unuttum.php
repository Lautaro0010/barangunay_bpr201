<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Günay - Şifremi Unuttum</title>
    
    <script src="https://kit.fontawesome.com/248da3bf98.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="login_style.css">

</head>

<body class="login-page">

    <div class="position-absolute top-0 start-0 p-4">
        <div id="başlik" style="line-height: normal;">
            <a href="index.php" style="text-decoration: none; color: black;">
    <img src="img/logo.png" class="logo" style="width: 35px; margin-top: 0px;" alt="Günay Logo">
    <span style="font-size: 30px; font-style: italic;">Günay</span>
</a>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-10">
                <div class="login-card d-md-flex">
                    
                    <div class="col-md-6 login-illustration">
                        <h4>Şifrenizi Mi Unuttunuz?</h4>
                        <p>Hesabınızın kayıtlı olduğu e-posta adresini girerek şifre sıfırlama bağlantısını hemen alabilirsiniz.</p>
                        <a href="kayit.php" class="btn btn-outline-light mt-3">Yeni Hesap Oluştur</a>
                    </div>
                    
                    <div class="col-md-6 login-form-area">
                        <h2 class="text-center"><i class="fa-solid fa-lock me-2"></i> Şifremi Sıfırla</h2>
                        
                        <form action="reset_password_process.php" method="POST">
                            
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
                            <a href="üye_giris.php" class="me-2">Giriş Sayfasına Geri Dön</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>