// ==============================================
// START CUSTOM SLIDER SETTINGS
// ==============================================

$(document).ready(function(){

    // Start Home Page - Hero Slider
    // ------------------------------------------
    $('.hero-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: "0px",
    arrows: false,
    autoplay: false,
    autoplaySpeed: 5000,
    infinite: true,
    responsive: [
        // {
        //     breakpoint: 1024,
        //     settings: {
        //     slidesToShow: 3,
        //     slidesToScroll: 3,
        //     infinite: true,
        //     dots: true
        //     }
        // },
        // {
        //     breakpoint: 600,
        //     settings: {
        //     slidesToShow: 2,
        //     slidesToScroll: 2
        //     }
        // },
        {
            breakpoint: 768,
            settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            centerPadding: "60px"
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
        ]
    });
    // ------------------------------------------
    // End Home Page - Hero Slider

    // Start Home Page - Experience Slider
    // ------------------------------------------
    $('.experience-slider').slick({
        slidesToShow: 1.5,
        // slidesToScroll: 1,
        // nextArrow: '<button type="button" class="slick-next">Next</button>',
        speed: 1000,
        centerMode: false,
        // centerPadding: "0px",
        infinite: false,
        arrows: false,
        // autoplay: true,
        // autoplaySpeed: 5000,
        // fade: true,
        // cssEase: 'linear',
        responsive: [
            // {
            //     breakpoint: 1024,
            //     settings: {
            //     slidesToShow: 3,
            //     slidesToScroll: 3,
            //     infinite: true,
            //     dots: true
            //     }
            // },
            // {
            //     breakpoint: 600,
            //     settings: {
            //     slidesToShow: 2,
            //     slidesToScroll: 2
            //     }
            // },
            {
                breakpoint: 768,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: "0px",
                infinite: true,
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
            ]
    });
    // ------------------------------------------
    // End Home Page - Experience Slider

    // Start Home Page - Industry Professionals Slider
    // ------------------------------------------
    $('.pro-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        speed: 1000,
        centerMode: true,
        centerPadding: "0px",
        autoplay: false,
        autoplaySpeed: 3000,
        infinite: true,
        responsive: [
            // {
            //     breakpoint: 1024,
            //     settings: {
            //     slidesToShow: 3,
            //     slidesToScroll: 3,
            //     infinite: true,
            //     dots: true
            //     }
            // },
            // {
            //     breakpoint: 600,
            //     settings: {
            //     slidesToShow: 2,
            //     slidesToScroll: 2
            //     }
            // },
            {
                breakpoint: 768,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                // centerMode: true,
                centerPadding: "0px",
                // infinite: true,
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
            ]
    });
    // ------------------------------------------
    // End Home Page - Industry Professionals Slider

    // Start Home Page - Carousel Slider Top
    // ------------------------------------------
    $('.carousel-top-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        speed: 1000,
        centerMode: true,
        centerPadding: "0px",
        autoplay: false,
        autoplaySpeed: 3000,
        infinite: true,
        responsive: [
            // {
            //     breakpoint: 1024,
            //     settings: {
            //     slidesToShow: 3,
            //     slidesToScroll: 3,
            //     infinite: true,
            //     dots: true
            //     }
            // },
            // {
            //     breakpoint: 600,
            //     settings: {
            //     slidesToShow: 2,
            //     slidesToScroll: 2
            //     }
            // },
            {
                breakpoint: 768,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: "60px"
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
            ]
    });
    // ------------------------------------------
    // End Home Page - Carousel Slider Top

    // Start Home Page - Carousel Slider Bottom
    // ------------------------------------------
    $('.carousel-bottom-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        speed: 1000,
        centerMode: true,
        centerPadding: "0px",
        autoplay: false,
        autoplaySpeed: 3000,
        infinite: true,
        // rtl: true,
        responsive: [
            // {
            //     breakpoint: 1024,
            //     settings: {
            //     slidesToShow: 3,
            //     slidesToScroll: 3,
            //     infinite: true,
            //     dots: true
            //     }
            // },
            // {
            //     breakpoint: 600,
            //     settings: {
            //     slidesToShow: 2,
            //     slidesToScroll: 2
            //     }
            // },
            {
                breakpoint: 768,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: "60px"
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
            ]
    });
    // ------------------------------------------
    // End Home Page - Carousel Slider Bottom

});

// ==============================================
// END CUSTOM SLIDER SETTINGS
// ==============================================