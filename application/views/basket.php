<?php include 'includes/head.php'; ?>

<?php include 'includes/navbar.php'; ?>

    <div class="basket-list">
        <div class="product_list">
            <?php 
            foreach($products as $product){
            ?><form action="<?php echo base_url("basket/delete")?>" method="post">
            <div class="product">
                
                    <input name="id" type="hidden" value="<?php echo $product->id;?>">
                    <div class="product_img"><img src="<?php echo $product->img;?>" alt=""></div>
                    <div class="title_brand">
                        <div class="product_title"><?php echo $product->title;?></div>
                        <div class="product_brand"><?php echo $product->brand;?></div>
                    </div>
                    <input type="text" disabled="disabled" value="<?php echo $product->price;?>" id="product_price"><span>TL</span>
                    <button type="submit" class="product_delete"><img src="<?php echo base_url("assets/img/icons/trash.svg")?>" alt=""></d>
                </form>
            </div>
            <?php }?>
        </div>
    </div>
    <div class="basket_complate">
        <div class="siparis_ozet">
          <div class="title">Sipariş Özeti</div>
          <div class="urun_bilgi">Ürün Toplamı : <p id="top_price"></p></div>
          <div class="urun_bilgi" style="border-top: 1px solid #666;">TOPLAM : <p id="ödenecek">80 TL</p></div>
        </div>
        <a href="<?php echo base_url("basket/complate");?>" class="complate_btn">SİPARİŞ TAMAMLA</a>
    </div>
    <script>
      var price = document.querySelectorAll("#product_price");
      var top_input = document.getElementById("top_price");
      var ödenecek = document.getElementById("ödenecek");
      var top_price = 0;
        for (i = 0; i < price.length; ++i) {
          top_price += Number(price[i].value);
      }
      var tl = " TL";
      top_input.innerHTML=top_price +tl;
      ödenecek.innerHTML= top_price+tl;
      
    </script>

</body>
</html>