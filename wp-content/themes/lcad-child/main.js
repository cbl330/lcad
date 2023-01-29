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

// Navbar
$(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
        $('nav').addClass('transparent');
    } else {
        $('nav').removeClass('transparent');
    }
});
// Navbar menu button
function myFunction(x) {
    let menu = document.getElementById('menu-button');
    x.firstElementChild.classList.toggle("change");
    if (!x.classList.contains('collapsed')) {
        menu.innerText = 'CLOSE';
    } else {
        menu.innerText = 'MENU';
    }
}

// Function to toggle the plus menu into minus 
function myParentElem(y) {
    let classes = y.firstElementChild.classList
    let academics = document.getElementById('academics').classList;
    let admissions = document.getElementById('admissions').classList;
    let alumni = document.getElementById('alumni').classList;
    if (y.getAttribute('aria-expanded') === 'true' && classes.contains('academics-span')) {
        classes.remove("dashicons-plus-alt2");
        classes.add("dashicons-minus");
        admissions.remove("dashicons-minus");
        admissions.add("dashicons-plus-alt2");
        alumni.remove("dashicons-minus");
        alumni.add("dashicons-plus-alt2");
    } else if (y.getAttribute('aria-expanded') === 'true' && classes.contains('admissions-span')) {
        classes.remove("dashicons-plus-alt2");
        classes.add("dashicons-minus");
        academics.remove("dashicons-minus");
        academics.add("dashicons-plus-alt2");
        alumni.remove("dashicons-minus");
        alumni.add("dashicons-plus-alt2");
    } else if (y.getAttribute('aria-expanded') === 'true' && classes.contains('alumni-span')) {
        classes.remove("dashicons-plus-alt2");
        classes.add("dashicons-minus");
        academics.remove("dashicons-minus");
        academics.add("dashicons-plus-alt2");
        admissions.remove("dashicons-minus");
        admissions.add("dashicons-plus-alt2");
    } else {
        classes.remove("dashicons-minus");
        classes.add("dashicons-plus-alt2");
    }
}

// Function to split the sub menu items list that are > 4
function splitUl(list) {
    let newList = '';
    list.each((index, element) => {
        if (index === 0) {
            newList += `<ul class="menu-sub-items"><li class="page_item"> ${element.innerHTML} </li>`;
        } else if ([index + 1] % 4 === 0 && index !== list.length - 1) {
            newList += `<li class="page_item"> ${element.innerHTML} </li></ul><ul class="menu-sub-items">`;
        } else if (index === list.length - 1) {
            newList += `<li class="page_item"> ${element.innerHTML} </li></ul>`;
        }  else {
            newList += `<li class="page_item"> ${element.innerHTML} </li>`;
        }
    });
    return newList;
}
// Function to split the sub menu items list that are > 5
function splitUlFive(list) {
    let newList = '';
    list.each((index, element) => {
        if (index === 0) {
            newList += `<ul class="menu-sub-items"><li class="page_item"> ${element.innerHTML} </li>`;
        } else if ([index + 1] % 5 === 0 && index !== list.length - 1) {
            newList += `<li class="page_item"> ${element.innerHTML} </li></ul><ul class="menu-sub-items">`;
        } else if (index === list.length - 1) {
            newList += `<li class="page_item"> ${element.innerHTML} </li></ul>`;
        }  else {
            newList += `<li class="page_item"> ${element.innerHTML} </li>`;
        }
    });
    return newList;
}
let academics = $('.academics-menu li');
let admissions = $('.admissions-menu li');
let alumniStudentLife = $('.alumni-student-life-menu li');
let academicsMenu = splitUl(academics);
let admissionsMenu = splitUl(admissions);
let alumniStudentLifeMenu = splitUl(alumniStudentLife);
$('.academics-menu').html(academicsMenu);
$('.admissions-menu').html(admissionsMenu);
$('.alumni-student-life-menu').html(alumniStudentLifeMenu);

// FAQ Accordion
let faqAccordion = $('#faq ul li');
$('#faq ul').html(splitUlFive(faqAccordion));

// Student/Admissions child - adds underline to correct sub nav link
let checkValue= window.location.href;
$(".sub-nav-repeater li a").each(function(){
    if ($(this).attr('href') == checkValue) {
        $(this).addClass("active")
        console.log('aaron test')
    }  
});
// Mobile Side Nav for Student Life/Admissions Child pages
function openNav() {
    document.getElementById("mySidenav").style.width = "310px";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}