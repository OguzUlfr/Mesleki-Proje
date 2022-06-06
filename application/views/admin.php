<?php include 'includes/head.php'; ?>
<body>
    <div class="admin-back">
        <div class="admin-icon">
            <span class="material-icons">account_box</span>
        </div>
        <div class="admin-links">
            <ul>
                <li onclick="panel(0)">Şifre Düzenle</li>
                <li onclick="panel(1)">Üyeler</li>
                <li onclick="panel(2)">Siparişler</li>
                <li onclick="panel(3)">Ürün Ekle</li>
                <li onclick="panel(4)">Ürün Sil</li>
                <li onclick="panel(5)">Anasayfa Reklam Ekle & Sil</li>
            </ul>
        </div>
        <a href="<?php echo base_url()?>" class="geri-don">Anasayfa</a>
        <div class="content">
            <div id="panel" class="sifre-duzenle">
                <form action="<?php echo base_url("admin/passwUpdate")?>" method="post">
                    <div class="title">Admin Şifresi Düzenle</div>
                    <div class="eski-sifre">
                        <p>Eski Şifre :</p>
                        <input name="password" type="password">
                    </div>
                    <div class="yeni-sifre">
                        <p>Yeni Şifre :</p>
                        <input name="newPassword" type="password">
                    </div>
                    <button type="submit" class="sifreOnayBtn">Onayla</button>
                </form>
            </div>
            <div id="panel"  class="uyeler">
                <div class="title">Üyeler</div>
                <table>
                    <tr>
                        <th>id</th>
                        <th>Adı</th>
                        <th>Soyadı</th>
                        <th>Mail Adresi</th>
                        <th>Şifresi</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach($users as $user){
                    ?>
                    <tr>
                        <form action="<?php echo base_url("admin/userDelete")?>" method="post">
                        <td><input type="hidden" name="id" value="<?php echo $user->id;?>"><?php echo $user->id;?></td>
                        <td><?php echo $user->name;?></td>
                        <td><?php echo $user->surname;?></td>
                        <td><?php echo $user->mail;?></td>
                        <td><?php echo $user->password;?></td>
                        <td><button type="submit"><span class="material-icons">delete</span></button></td>
                        </form>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
            <div id="panel"  class="siparisler">
                <div class="title">Siparişler</div>
                <table>
                    <tr>
                        <th>id</th>
                        <th>Adı Soyadı</th>
                        <th>Marka</th>
                        <th>ürün</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach($siparisler as $siparis){
                    ?>
                    <tr>
                        <form action="<?php echo base_url("admin/siparisDelete")?>" method="post">
                            <td><input type="hidden" name="id" value="<?php echo $siparis->id;?>"><?php echo $siparis->id;?></td>
                            <td><?php echo $siparis->nameSurname;?></td>
                            <td><?php echo $siparis->brand;?></td>
                            <td><?php echo $siparis->title;?></td>
                            <td><button type="submit"><span class="material-icons">delete</span></button></td>
                        </form>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
            <div id="panel"  class="urun-ekle">
                <form action="<?php echo base_url("admin/productAdd");?>" method="post">
                <div class="title">Ürün Ekle</div>
                <div class="image-ekle">
                    <div class="foto-yukle">Ürün Fotoğrafı</div>
                    <div id="img"></div>
                    <input type="text" id="img-link" name="img">
                    <a class="onIzle" onclick="onIzle()">Ön İzle</a>
                </div>
                <div class="urun-bilgi">
                    <div class="title">Ürün Bilgileri</div>
                    <div class="input-group">
                        <p>Ürün Markası :</p><input type="text" name="brand">
                    </div>
                    <div class="input-group">
                        <p>Ürün Başlığı :</p><input type="text" name="title">
                    </div>
                    <div class="input-group">
                        <p>Ürün Fiyatı :</p><input type="text" name="price">
                    </div>
                    <div class="input-group">
                        <p>Ürün Alanı :</p><input type="text" name="alan">
                    </div>
                    <div class="input-group">
                        <p>Kategorisi :</p><input type="text" name="category">
                    </div>
                </div>
                <button type="submit" class="ekle" type="submit">Ekle</button>
                </form>
            </div>
            <div id="panel"  class="urun-sil">
                <div class="title">Ürün Sil</div>
                <div class="urun-list">
                    <?php 
                    foreach($products as $product){
                    ?>
                    <form action="<?php echo base_url("admin/productDelete");?>" method="post">
                        <div class="urun">
                            <input type="hidden" name="id" value="<?php echo $product->id;?>">
                            <img src="<?php echo $product->img;?>" alt="">
                            <div class="urun-title"><?php echo $product->title;?></div>
                            <div class="urun-price"><?php echo $product->price;?></div>
                            <button type="submit" class="material-icons">delete</button>
                        </div>
                    </form>
                    <?php 
                    }
                    ?>
                </div>
            </div>
            <div id="panel"  class="sliderEkleSil">
                <div class="title">Reklam Ekle & Sil</div>
                <div class="slider-ekle">
                    <div class="title">Ekle</div>
                    <div id="img2" class="img2"></div>
                    <form action="<?php echo base_url("admin/sliderAdd")?>" method="post">
                        <input type="text" id="img-link2" name="link"  placeholder="Resim Linki Giriniz">
                        <span onclick="onIzle2()" class="onIzle">Ön İzle</span>
                        <button class="add" type="submit">Ekle</button>
                    </form>
                </div>
                <div class="slider-sil">
                    <div class="title">Sil</div>
                    <div class="image-group">
                        <?php
                        foreach($sliders as $slider){
                        ?>
                        <form action="<?php echo base_url("admin/sliderDelete")?>" method="post">
                            <div class="slider-img">
                                <input type="hidden" name="id" value="<?php echo $slider->id;?>">
                                <img src="<?php echo $slider->link;?>" alt="">
                                <button type="submit" class="material-icons del">delete</button>
                            </div>
                        </form>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <script>
                var image = document.getElementById("img");
                var image2 = document.getElementById("img2");
                var imageLink = document.getElementById("img-link");
                var imageLink2 = document.getElementById("img-link2");
                function onIzle(){
                    image.style.backgroundImage = "url('"+imageLink.value+"')";
                }
                function onIzle2(){
                    image2.style.backgroundImage = "url('"+imageLink2.value+"')";
                }
               
            </script>
        </div>
    </div>
    <script>
        var paneller = document.querySelectorAll("#panel");
        let i;
        paneller[0].style.display="block";
        function panel(n){
                for (i = 0; i < paneller.length; i++) {
                    paneller[i].style.display = "none";
                }
                paneller[n].style.display = "block";
        }
        
    </script>


</body>
</html>