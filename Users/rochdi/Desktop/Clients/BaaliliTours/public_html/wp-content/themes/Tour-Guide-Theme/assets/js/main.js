$(function() {
    // Trigger maximage
    $('#main-home-slider').maximage({
        cycleOptions: {
            speed: 1000,
            timeout: 6000,
            prev: '#arrow_left',
            next: '#arrow_right',
            pause: 1
        },
        fillElement: '.main-slider'
    });

    AOS.init();


    $('.slick-others').slick({
      dots: true,
      arrows: false,
      infinite: false,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 3,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });

});