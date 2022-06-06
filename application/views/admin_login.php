<?php
if (empty('testpostu'))
  {
     header("Location: index.php");  
  }
?>
<?php include("includes/head.php")?>
<body>
    <div class="register">
        <div class="register-logo">
            <span class="material-icons">
                account_circle
                </span>
        </div>
        <form action="<?php echo base_url("admin/login");?>" method="post">
            <div class="register-mail">
                <p>E-Posta</p><input type="email" name="mail" required autofocus>
            </div>
            <div class="register-password">
                <p>Şifre</p><input type="password" name="password" required autofocus>
            </div>
            <div class="register-index">
                <a href="<?php echo base_url("");?>">Anasayfa ya Dön</a> 
            </div>
            <button type="submit" class="register-btn">
                Giriş Yap
            </button>
        </form>
    </div>
</body>
</html>