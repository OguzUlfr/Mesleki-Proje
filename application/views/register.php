<?php include("includes/head.php")?>
<body>
    <div class="register">
        <div class="register-logo">
            <span class="material-icons">
                account_circle
                </span>
        </div>
        <form action="<?php echo base_url("register/registerdata");?>" method="post">
            <div class="register-name">
                <p>Adınız</p><input type="text" name="name" required autofocus>
            </div>
            <div class="register-surname">
                <p>Soyadınız</p><input type="text" name="surname" required autofocus>
            </div>
            <div class="register-mail">
                <p>E-Posta</p><input type="email" name="mail" required autofocus>
            </div>
            <div class="register-password">
                <p>Şifre</p><input type="password" name="password" required autofocus>
            </div>
            <div class="register-index">
                <a href="<?php echo base_url("main_page")?>">Anasayfa ya Dön</a> 
            </div>
            <button type="submit" class="register-btn">
                Kayıt Ol
            </button>
        </form>
    </div>
</body>
</html>