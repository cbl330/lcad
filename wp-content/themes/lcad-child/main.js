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