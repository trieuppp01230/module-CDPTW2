window.onload = function() {
    $(".box-title").find("h1").addClass("main-title");
    $(".box-title").find("span").addClass("translate-span");
    $(".box-title").find("button").addClass("get-start");

    $(".box-img").find(".box-iphone").addClass("trans-iphone");
    $(".box-img").find(".box-ipad").addClass("trans-ipad");
  };

  $(document).ready(function(){
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      loop: true,
      autoplay: true,
    });
  });