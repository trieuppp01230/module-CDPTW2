$(document).ready(function(){
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      loop: true,
      autoplay: true,
    //   pagination: {
    //     el: '.swiper-pagination',
    //     clickable: true,
    //   },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  });
  