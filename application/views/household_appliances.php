<?php include 'includes/head.php'; ?>

<?php include 'includes/navbar.php'; ?>


    <div class="furniture_title">BEYAZ EŞYA</div>
    
    <div class="furniture_slider">
        <div class="slider" id="slider">
        <div class="slide" id="slide">
              <?php
              foreach($category as $categorys){
              ?>
              <a href="<?php echo base_url("household_appliances/$categorys->link");?>"><img class="item" src="<?php echo $categorys->img;?>"></a>
              <?php
              }
              ?>
              <a href="beyaz_esya/ütü.html"><img class="item" src="../img/ütü.png"></a>
              <a href="beyaz_esya/ütü.html"><img class="item" src="../img/ütü.png"></a>
              <a href="beyaz_esya/ütü.html"><img class="item" src="../img/ütü.png"></a>
              <a href="beyaz_esya/ütü.html"><img class="item" src="../img/ütü.png"></a>
              <a href="beyaz_esya/ütü.html"><img class="item" src="../img/ütü.png"></a>
            </div>
            <button class="ctrl-btn pro-prev"><img src="../img/icons/arrow-bar-left.svg" alt=""></button>
            <button class="ctrl-btn pro-next"><img src="../img/icons/arrow-bar-right.svg" alt=""></button>
          </div> 
          <script>
            "use strict";
  
              productScroll();
  
              function productScroll() {
              let slider = document.getElementById("slider");
              let next = document.getElementsByClassName("pro-next");
              let prev = document.getElementsByClassName("pro-prev");
              let slide = document.getElementById("slide");
              let item = document.getElementById("slide");
  
              for (let i = 0; i < next.length; i++) {
                  //refer elements by class name
  
                  let position = 0; //slider postion
  
                  prev[i].addEventListener("click", function() {
                  //click previos button
                  if (position > 0) {
                      //avoid slide left beyond the first item
                      position -= 1;
                      translateX(position); //translate items
                  }
                  });
  
                  next[i].addEventListener("click", function() {
                  if (position >= 0 && position < hiddenItems()) {
                      //avoid slide right beyond the last item
                      position += 1;
                      translateX(position); //translate items
                  }
                  });
              }
  
              function hiddenItems() {
                  //get hidden items
                  let items = getCount(item, false);
                  let visibleItems = slider.offsetWidth / 210;
                  return items - Math.ceil(visibleItems);
              }
              }
  
              function translateX(position) {
              //translate items
              slide.style.left = position * -210 + "px";
              }
  
              function getCount(parent, getChildrensChildren) {
              //count no of items
              let relevantChildren = 0;
              let children = parent.childNodes.length;
              for (let i = 0; i < children; i++) {
                  if (parent.childNodes[i].nodeType != 3) {
                  if (getChildrensChildren)
                      relevantChildren += getCount(parent.childNodes[i], true);
                  relevantChildren++;
                  }
              }
              return relevantChildren;
              }
  
        </script>    
    </div>

    <div class="furniture_list">
     
    <?php
      foreach($products as $product){
      ?>
      <div class="furniture_card">
      <form action="<?php echo base_url("basket/add");?>" method="post">
          <input name="img" type="hidden" value="<?php echo $product->img; ?>">
          <input name="title" type="hidden" value="<?php echo $product->title;  ?>">
          <input name="brand" type="hidden" value="<?php echo $product->brand;  ?>">
          <input name="price" type="hidden" value="<?php echo $product->price;  ?>">
          <div class="card_img"><img src="<?php echo $product->img; ?>" alt=""></div>
          <div class="card_title"><?php echo $product->title; ?></div>
          <div class="card_price"><?php echo $product->price; ?> TL</div>
          <div class="card_color">
          </div>
          <button class="card_add" onclick="sepet_onay()">Sepete Ekle</button>
        </form>
      </div>
      <?php
      }
      ?>
    </div>
    
    <?php include 'includes/footer.php'; ?>
</body>
</html>