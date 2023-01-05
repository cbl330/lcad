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
    });
    // ------------------------------------------
    // End Home Page - Carousel Slider Bottom

});

// ==============================================
// END CUSTOM SLIDER SETTINGS
// ==============================================