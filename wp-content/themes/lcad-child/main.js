// // Start Highlight Function
// // ------------------------------------------

// highlight();

// $(window).on("scroll", function(){
//     highlight();
// });

// function highlight(){
//     var scroll = $(window).scrollTop();
//     var height = $(window).height();

//     $(".scroll-text").each(function(){
//         var pos = $(this).offset().top;
//         if (scroll+height >= pos) {
//             $(this).addClass("active");
//         } 
//     });
// } 

// // ------------------------------------------
// // End Highlight Function


// // Start Scroll Trigger
// // ------------------------------------------

// console.clear();

// gsap.registerPlugin(ScrollTrigger);

// gsap.to("#triggered-element", {
//     scrollTrigger: {
//     trigger: "#trigger",
//     start: "bottom bottom",
//     markers: true,
//     toggleActions: "play none none none"
//     },
//     duration: 5,
//     opacity: 0
// });

// // ------------------------------------------
// // End Scroll Trigger

// Nav bar
$(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
        $('nav').addClass('transparent');
    } else {
        $('nav').removeClass('transparent');
    }
});

// Function to toggle the plus menu into minus 
function myParentElem(y) {
    if (y.getAttribute('aria-expanded') === 'true') {
        y.firstElementChild.classList.remove("dashicons-plus-alt2");
        y.firstElementChild.classList.add("dashicons-minus")
    } else {
        y.firstElementChild.classList.remove("dashicons-minus")
        y.firstElementChild.classList.add("dashicons-plus-alt2")
    }
}