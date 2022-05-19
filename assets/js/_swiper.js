var swiper = new Swiper('.swiper-partners', {
  preventClicks: false,
  preventClicksPropagation: false,
  slidesPerView: 3,
  spaceBetween: 42,
  loop: false,
  grabCursor: true,
  pauseOnMouseEnter: true,
  autoplay: {
    delay: 3000,
  },
  breakpoints: {
    // when window width is <= 499px
    576: {
      slidesPerView: 1,
      spaceBetweenSlides: 12,
    },
    // when window width is <= 992px
    992: {
      slidesPerView: 2,
      spaceBetweenSlides: 8,
    },
    // when window width is <= 992px
    1024: {
      slidesPerView: 2,
      spaceBetweenSlides: 8,
    },
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next-partners',
    prevEl: '.swiper-button-prev-partners',
  },
});
