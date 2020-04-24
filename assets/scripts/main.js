// import external dependencies
import "jquery"
import "./modules/**/*"
// import $ from 'jquery';
// import 'slick-carousel';
// $(".slider-wrapper").slick();

//Header_menu
$(window).on('scroll', function () {
    if ($(window).scrollTop()) {
        $('nav').addClass('black');
        $('.header-row-flex').fadeOut('slow')
    }
    else {
        $('nav').removeClass('black')
        $('.header-row-flex').fadeIn('slow')
    }
})

if ($('li').hasClass('active')) {
    $('.active a').css('color', 'white');
}

//Loader circle
$(window).on('load', function () {
    $('.lds-roller').fadeOut('slow')
})

//Mobile responsive menu
// $('.menu-item-has-children').mouseover(function () {
//     $('.sub-menu').css('display', 'block');
// })

// $(".hamburger .menu-item-has-children").mouseover(function () {
//     $('.sub-menu').css({ display: "block" });
// });

// $(".hamburger .mobile-menu .menu-item-has-children").mouseout(function () {
//     $('.sub-menu').css({ display: "none" });
// });
// $(".my_box").mouseout(function () {
//     // Mouse left...
// });

$(document).ready(function () {
    $('.hamburger').click(function () {
        $('.main-menu').toggleClass('active')
    })
    $('.menu-item-has-children').hover(function () {
        $(this).siblings().removeClass('menu-item-has-children-active')
        $(this).toggleClass('menu-item-has-children-active')
        $('.hamburger .menu-item-has-children::after').css('display', 'none')
    })
    $('.hamburger').click(function () {
        $(this).toggleClass('hamburger-close')
    })
    $('.hamburger .menu-item-has-children::after')
})

// $(document).ready(function () {
//     $('.fa-search').click(function () {
//         $('.js-search').css('width', '300px')
//     })
// })

//Make all services tab constantly open

$(document).ready(function () {
    $('#usi-poslugi').addClass('active');
    $('a[href="#usi-poslugi"]').addClass('active');
})

$(document).ready(function () {
    $('a[href="#usi-poslugi"]').prepend('<i class="fas fa-briefcase-medical service-icon"></i>');
    $('a[href="#diagnostika-sluhu"]').prepend('<i class="fas fa-assistive-listening-systems service-icon"></i>');
    $('a[href="#likarski-manipul"]').prepend('<i class="fas fa-stethoscope service-icon"></i>');
    $('a[href="#konsultac-speczialistiv"]').prepend('<i class="fas fa-user-md service-icon"></i>');
    $('a[href="#pidbir-sluhovih-aparativ"]').prepend('<i class="fas fa-deaf service-icon"></i>');
    $('.footer-block-sidebar .footersidebar .menu-item').prepend('<i class="fas fa-caret-right footer-caret"></i>');
})

// $(document).ready(function () {
//     $('.box-title-plus').click(function () {
//         $('.box-title-plus').css('transform', 'rotate(45deg)')
//         $('.service-box-overlay').fadeIn(1000);
//     }), function () {
//         $('.service-box-overlay').hide(1000);
//     }
//     $('.service-box-overlay').hide();
// })
// $('.box-title-plus').one('click', function () {
//     $(this).toggle(
//         function () {
//             $(this).addClass('plus-selected');
//         }
//         // }, function () {
//         //     $(this).removeClass("plus-selected");
//         // }
//     )
//     // $(".service-box-overlay").toggle(
//     //     function () {
//     //         $(this).addClass("selected");
//     //     }, function () {
//     //         $(this).removeClass("selected");
//     //     }
//     // )
// })