
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
  var galleryTop = new Swiper('.gallery-top', {
      nextButton: '.swiper-button-next',
      prevButton: '.swiper-button-prev',
      spaceBetween: 10,
      preloadImages: false,
      lazyLoading: true,
      lazyLoadingInPrevNext: true,
      hashnav: true,
      keyboardControl: true
  });
  var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      centeredSlides: true,
      slidesPerView: 'auto',
      touchRatio: 0.2,
      hashnav: true,
      mousewheelControl: true,
      slideToClickedSlide: true,
      freeMode: true,
      freeModeSticky: true
  });
  galleryTop.params.control = galleryThumbs;
  galleryThumbs.params.control = galleryTop;

  </script>
</body>
</html>
