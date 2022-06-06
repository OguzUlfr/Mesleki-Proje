<body>
  <div class="navbar">
    <div class="nav_brand">
        <div class="logo"><a href="<?php echo base_url("")?>"><img src="<?php echo base_url("assets/img/Asset 1.svg");?>" alt=""></a></div>
    </div>
    <div class="nav_link">
            <ul class="nav_group">
                <a href="<?php echo base_url("")?>" class="nav_item"><li>ANA SAYFA</li></a>
                <a href="<?php echo base_url("about")?>"  class="nav_item"><li>HAKKIMIZDA</li></a>
                <a href="<?php echo base_url("furniture")?>" class="nav_item"><li>MOBİLYA</li></a>
                <a href="<?php echo base_url("household_appliances")?>"  class="nav_item"><li>BEYAZ EŞYA</li></a>
            </ul>
    </div>
    <div class="nav_user">
       <a onclick="logindisplay()"  class="login_btn"><div class="nav_login"><img src="<?php echo base_url("assets/img/icons/person.svg");?>" alt=""></div>
        <span class="nav_username"><?php
                    if ($this->session->userdata("oturum")){
                        echo $this->session->userdata("name");
                    }else{
                        echo "Giriş Yap | Kayıt Ol";
                    }

                    ?></span></a> 
        <a href="<?php echo base_url("basket")?>" class="nav_bag"><img src="<?php echo base_url("assets/img/icons/bag.svg");?>" alt=""></a>
    </div>
    <div id="login_card" class="login_card">
    <div class="login_btn" style="display:<?php if ($this->session->userdata("oturum")){echo "flex";}else{echo "none";}?>;">
          <a href="<?php echo base_url("main_page/logOut")?>" class="btn">Çıkış Yap</a>
      </div>
      <form action="<?php echo base_url("main_page/login");?>" method="post" style="display:<?php if ($this->session->userdata("oturum")){echo "none";}else{echo "block";}?>;">
        <div class="user_input">
          <img src="<?php echo base_url("assets/img/icons/person.svg");?>" alt="">
          <input class="data_input" name="mail" placeholder="E-Posta" type="text">
        </div>
        <div class="user_input">
          <img src="<?php echo base_url("assets/img/icons/key.svg");?>" alt="">
          <input class="data_input" name="password" placeholder="Şifre" type="password">
        </div>
        <div class="login_btn">
          <a href="<?php echo base_url("register")?>" class="btn">KAYIT OL</a>
          <button type="submit" class="btn login">GİRİŞ YAP</button>
        </div>
      </form>
    </div>
    <script>
      function logindisplay() {
          var login_form = document.getElementById("login_card");
          var form_display=login_form.style.display;
          if (form_display=="none") {
            login_form.style.display="block";
          }
          else{
            login_form.style.display="none";
          }
      }
    </script>
</div>