(function($) {
  const swiper = new Swiper('.swiper', {
    mousewheel: {
      invert: true,
    },
    allowTouchMove: true,
    slidesPerView: 3,
    direction: getDirection(),
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    on: {
      resize: function () {
        console.log(1)
        swiper.changeDirection(getDirection());
      },
    },
  });

  function getDirection() {
    console.log(2)
    // var windowWidth = window.innerWidth;
    const direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

    return direction;
  }
})

/* GET ALL VIDEOS */
