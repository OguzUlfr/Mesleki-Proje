<div class="main_slider">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
            <?php
              foreach($sliders as $slider){
              ?>
              <div class="swiper-slide"><img src="<?php echo $slider->link;?>" alt=""></div>
              <?php
              }
              ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
      
          <!-- Swiper JS -->
          <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
      
          <!-- Initialize Swiper -->
          <script>
            var swiper = new Swiper(".mySwiper", {
              navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
              },
            });
          </script>
    </div>