$(document).ready(function(){
    $('.img-head').slick({
        arrows : false,
        autoplay : true,
        autoplayspeed: 2000,
    });
  });
  $(document).ready(function(){
    $('.imglast1').slick({
        slidesToShow: 2, 
        slidesToScroll: 2,
        autoplay : true,
        autoplayspeed: 2000,
        prevArrow:`<button type="button" class="slick-prev"><i class="fa-solid fa-chevron-left"></i></button>`,
        nextArrow:`<button type="button" class="slick-next"><i class="fa-solid fa-chevron-right"></i></button>`,
    });
  });
  $(document).ready(function(){
    $('.img-sale1').slick({
      slidesToShow: 5, 
      slidesToScroll: 5,
      prevArrow:`<button type="button" class="slick-prev"><i class="fa-solid fa-chevron-left"></i></button>`,
      nextArrow:`<button type="button" class="slick-next"><i class="fa-solid fa-chevron-right"></i></button>`,
    });
  });
  $(document).ready(function(){
    $('.TS-img').slick({
        arrows : false,
        // slidesToShow: 1, 
        // slidesToScroll: 1,
    });
  });