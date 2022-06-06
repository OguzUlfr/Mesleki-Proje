<div class="main_product">
      <?php
      foreach($products as $product){
      ?>
      <div class="product_item">
        <div class="item_img"><img src="<?php echo $product->img; ?>" alt=""></div>
        <div class="item_head"><?php echo $product->title; ?></div>
        <div class="item_price"><?php echo $product->price; ?> TL</div></div>
      <?php }?>
 </div>