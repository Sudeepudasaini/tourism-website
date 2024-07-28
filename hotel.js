$('.hotelof-Destination').slick({
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    responsive: [
    {
        breakpoint: 1023,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1
        }
        },
        {
        breakpoint: 767,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
        }
    ]
  });