$(function (){

    'use strict';

    $('.main-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        fade: true,
        autoplay: true,
        autoplaySpeed: 2000,
        // asNavFor: '.small-slider'
      });
    //   $('.small-slider').slick({
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //     asNavFor: '.main-slider',
    //     dots: false,
    //     centerMode: true,
    //     focusOnSelect: true
    //   });


      // tabs describtion

$('.tabs-list li').on('click', function (){

    $(this).addClass('show').siblings().removeClass('show');

    $('.content-list > div').hide();

    $($(this).data('content')).fadeIn();
});


// animation certification

$(window).scroll(function () {
    if ($(window).scrollTop() >= 2300) {
        $('.certificate-hidden').fadeIn(400);
    }
});


});
