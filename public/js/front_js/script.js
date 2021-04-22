
jQuery(window).on("load", function () {
    "use strict";

    /*  ===================================
        Loading Timeout
     ====================================== */
    $(".loader-area").fadeOut(1000);

});


//************************* SCROLL FUNCTIONS***********************//

/* ===================================
       Side Menu
   ====================================== */
if ($("#sidemenu_toggle").length) {
    $("#sidemenu_toggle").on("click", function () {
        $(".pushwrap").toggleClass("active");
        $(".side-menu").addClass("side-menu-active"), $("#close_side_menu").fadeIn(700)
    }), $("#close_side_menu").on("click", function () {
        $(".side-menu").removeClass("side-menu-active"), $(this).fadeOut(200), $(".pushwrap").removeClass("active")
    }), $(".side-nav .navbar-nav").on("click", function () {
        $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active")
    }), $("#btn_sideNavClose").on("click", function () {
        $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active")
    });
}


// Navbar Scroll Function
var $window = $(window);
$window.scroll(function () {
    var $scroll = $window.scrollTop();
    var $navbar = $(".navbar");
    if (!$navbar.hasClass("sticky-bottom")) {
        if ($scroll > 250) {
            $navbar.addClass("fixed-menu");
        } else {
            $navbar.removeClass("fixed-menu");
        }
    }
});
// bottom nav
if ($('.bottom-nav').length) {
    var $navheight = $('.bottom-nav').offset().top;
    $window.scroll(function () {
        if ($(this).scrollTop() > $navheight) {
            $('.bottom-nav').addClass("fixed-menu");
        } else {
            $('.bottom-nav').removeClass("fixed-menu");
        }

    });
}
//     //scroll to appear
$(window).on('scroll', function () {
    if ($(this).scrollTop() > 500)
        $('.scroll-top-arrow').fadeIn('slow');
    else
        $('.scroll-top-arrow').fadeOut('slow');
});

//     //Click event to scroll to top
$(document).on('click', '.scroll-top-arrow', function () {
    $('html, body').animate({scrollTop: 0}, 800);
    return false;
});



