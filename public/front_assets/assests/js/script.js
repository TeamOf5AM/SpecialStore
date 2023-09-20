$('.card-slider').slick({
    dots: false,
    loop:true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    variableWidth: true
  });

$('.product-main').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.product-sub'
  });
  $('.product-sub').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.product-main',
    dots: true,
    centerMode: true,
    focusOnSelect: true
  });

//   $('.card-slider').slick({
//     slidesToShow: 3,
//     slidesToScroll: 1,
//     dots: true,
//     infinite: false,
//     centerMode: true,
//     focusOnSelect: true
//   });