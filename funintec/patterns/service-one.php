<?php
/**
 * Title: Services Style One
 * Slug: funintec/service-one
 * Categories: funintec
 */
?>
<!-- wp:group {"style":{"border":{"width":"0px","style":"none"},"spacing":{"blockGap":"0","padding":{"right":"0","bottom":"80px","left":"0"}}},"backgroundColor":"background","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group has-background-background-color has-background" style="border-style:none;border-width:0px;padding-right:0;padding-bottom:80px;padding-left:0">

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"10px","padding":{"bottom":"50px","top":"30px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group alignwide" style="padding-top:30px"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"1px","fontSize":"20px"},"color":{"text":"#216dfb"}}} -->
<p class="has-text-align-center has-text-color" style="color:#216dfb;font-size:20px;letter-spacing:1px"><strong><?php echo esc_html__('CONOCE A', 'funintec'); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"foreground","className":" animated animated-fadeInUp","fontSize":"slider-title"} -->
<h2 class="has-text-align-center animated animated-fadeInUp has-foreground-color has-text-color has-slider-title-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html__('Nuestros Aliados', 'funintec'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- Swiper -->
<div class="alliances">
  <div class="swiper myAlliances container">
      <div class="swiper-wrapper content">
          <div class="swiper-slide card-alliance">
              <div class="card-alliance-content">
                  <div class="image">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/alliances/06.svg" alt="" class="card-alliance-img">
                  </div>
                  <div class="name-alliance">
                      <span class="name">UNIAGSFMI</span>
                  </div>
              </div>
          </div>
          <div class="swiper-slide card-alliance">
              <div class="card-alliance-content">
                  <div class="image">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/alliances/04.jpg" alt="" class="card-alliance-img">
                  </div>
                  <div class="name-alliance">
                      <span class="name">Token Mithrandir</span>
                  </div>
              </div>
          </div>
          <div class="swiper-slide card-alliance">
              <div class="card-alliance-content">
                  <div class="image">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/alliances/05.jpg" alt="" class="card-alliance-img">
                  </div>
                  <div class="name-alliance">
                      <span class="name">LATAM Cardano Community</span>
                  </div>
              </div>
          </div>
          <div class="swiper-slide card-alliance">
              <div class="card-alliance-content">
                  <div class="image">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/alliances/02.jpg" alt="" class="card-alliance-img">
                  </div>
                  <div class="name-alliance">
                      <span class="name">Cardano sin Tecnicismo</span>
                  </div>
              </div>
          </div>
          <div class="swiper-slide card-alliance">
              <div class="card-alliance-content">
                  <div class="image">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/alliances/07.jpeg" alt="" class="card-alliance-img">
                  </div>
                  <div class="name-alliance">
                      <span class="name">Crystal Corporation</span>
                  </div>
              </div>
          </div>
          <div class="swiper-slide card-alliance">
              <div class="card-alliance-content">
                  <div class="image">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/alliances/09.jpeg" alt="" class="card-alliance-img">
                  </div>
                  <div class="name-alliance">
                      <span class="name">Latino Staking Pool</span>
                  </div>
              </div>
          </div>
          <div class="swiper-slide card-alliance">
              <div class="card-alliance-content">
                  <div class="image">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/alliances/03.jpg" alt="" class="card-alliance-img">
                  </div>
                  <div class="name-alliance">
                      <span class="name">Game Changer Wallet</span>
                  </div>
              </div>
          </div>
          <div class="swiper-slide card-alliance">
              <div class="card-alliance-content">
                  <div class="image">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/alliances/08.jpeg" alt="" class="card-alliance-img">
                  </div>
                  <div class="name-alliance">
                      <span class="name">The White Project Pool</span>
                  </div>
              </div>
          </div>
          <div class="swiper-slide card-alliance">
              <div class="card-alliance-content">
                  <div class="image">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/alliances/01.jpg" alt="" class="card-alliance-img">
                  </div>
                  <!-- <div class="media-icons">
                      <i class="fab fa-facebook"></i>
                      <i class="fab fa-twitter"></i>
                      <i class="fab fa-github"></i>
                  </div> -->
                  <div class="name-alliance">
                      <span class="name">Plataforma Andamio</span>
                  </div>
                  <!-- <div class="button">
                      <a class="wp-block-button__link has-background-color has-text-color wp-element-button"
                          href="#"
                          style="border-radius:25px;padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"
                          target="_blank" rel="noreferrer noopener">Ver</a>
                  </div> -->
              </div>
          </div>
      </div>
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-pagination"></div>
</div>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".myAlliances", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    on: {
        nextTransitionEnd: function() {
            swiper.slideToNext();
        },
    },
  });
</script>
<!-- Fin Swiper -->

</div>
<!-- /wp:group -->