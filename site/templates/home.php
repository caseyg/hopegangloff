<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="swiper-container gallery-top">
      <div class="swiper-wrapper">
        <?php $index = 0; ?>
        <?php foreach($page->images()->flip() as $image): $index++; ?>
          <div class="swiper-slide swiper-lazy" data-hash="slide<?php echo $index ?>" data-background="<?php echo $image->resize(2000, 2000)->url() ?>" width="<?php echo $image->resize(2000, 2000)->width() ?>" height="<?php echo $image->resize(2000, 2000)->height() ?>">
          </div>
        <?php endforeach ?>
      </div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <div class="swiper-container gallery-thumbs">
      <div class="swiper-wrapper">
        <?php $index = 0; ?>
        <?php foreach($page->images()->flip() as $image): $index++; ?>
          <div class="swiper-slide" data-hash="slide<?php echo $index ?>" style="background-image:url(<?php echo $image->crop(100,100)->url() ?>)"></div>
        <?php endforeach ?>
      </div>
    </div>

  </main>

<?php snippet('footer') ?>
