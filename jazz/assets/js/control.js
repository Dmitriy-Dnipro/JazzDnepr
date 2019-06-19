// $(window).on('load', function () {
//     var $preloader = $('#preloader');
//         $svg_anm   = $preloader.find('.loader');
//     $svg_anm.fadeOut();
//     $preloader.fadeOut('slow');
// });

/*animated AOS*/
AOS.init({
    disable: 'mobile',
    once: "true",
});
/*end animated AOS */


$(function () {
/*short text*/
$(".jazz_box__cart").on("click", function () {

    if ($(this).hasClass("jazz_active_cart")) {
        $(this).removeClass("jazz_active_cart");
        $(this).find(".jazz_cart__text p").css('height', '150px');
    } else {
        $(".jazz_cart__text p").css('height', '150px');
        $(".jazz_box__cart").removeClass("jazz_active_cart");
        $(this).addClass("jazz_active_cart");
        var reducedHeight = $(this).find(".jazz_cart__text p").height();
        $(this).find(".jazz_cart__text p").css('height', 'auto');
        var fullHeight = $(this).find(".jazz_cart__text p").height() + 35;
        $(this).find(".jazz_cart__text p").height(reducedHeight);
        $(this).find(".jazz_cart__text p").animate({
            height: fullHeight
        }, 100);
    }
});

$(document).on('click', function (e) {
    $(".jazz_active_cart").each(function () {
        var hide_jazz_cart = $(this);
        if (!hide_jazz_cart.is(e.target) && hide_jazz_cart.has(e.target).length === 0) {
            hide_jazz_cart.removeClass("jazz_active_cart");
            $(".jazz_cart__text p").css('height', '150px');
        }
    });
})

/*end short text*/

/*show burger menu*/
$(".burger_box").on('click', function () {
    $("#main_menu").toggleClass('open');
    $(this).toggleClass('open_menu');

});

/*end show burger menu*/

/*accordion main menu*/
// $(".sub-menu").hide();
$("#menu-item-212, #menu-item-725, #menu-item-714").on("click", function (e) {
    $(this).toggleClass("active_sub_menu");
    $("#menu-main-menu .sub-menu, #menu-main-menu-en .sub-menu, #menu-main-menu-uk .sub-menu").slideToggle();
});

/*end accordion main menu*/

/*show about jazz*/


function loadJazzCart(count) {
    var jazzCart = $('.jazz_box__cart');
    jazzCart.filter(':hidden').slice(0, count).fadeIn();
    var vCart = jazzCart.filter(':visible').length;
    if (jazzCart.length === vCart) {
        $('.jazz_cart__more').hide();
    }
}
$('.jazz_cart__more').on('click', function (e) {
    e.preventDefault();
    loadJazzCart(2);
});

loadJazzCart(2);


/*end about jazz*/

/*show members*/

function loadMembers(count) {
    var member = $('.members_cart');
    member.filter(':hidden').slice(0, count).fadeIn();
    var vMember = member.filter(':visible').length;
    if (member.length == vMember) {
        $('.more_members').hide();
    }
}
$('.more_members').on('click', function (e) {
    e.preventDefault();
    loadMembers(6);
});
loadMembers(6);


/*end show members*/



/*photo content slider*/

$(".photo_content__slide").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.photo_content__slide_nav',
});


$('.photo_content__slide_nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.photo_content__slide',
    arrows: true,
    prevArrow: '<a id="prev" class="photo-prew"><svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.646446 3.64644C0.451185 3.84171 0.451185 4.15829 0.646446 4.35355L3.82843 7.53553C4.02369 7.73079 4.34027 7.73079 4.53553 7.53553C4.7308 7.34027 4.7308 7.02369 4.53553 6.82843L1.70711 4L4.53553 1.17157C4.7308 0.976309 4.7308 0.659727 4.53553 0.464465C4.34027 0.269203 4.02369 0.269203 3.82843 0.464465L0.646446 3.64644ZM20 3.5L1 3.5L1 4.5L20 4.5L20 3.5Z" fill="#2C4984"/></svg></a>',
    nextArrow: '<a id="next" class="photo-next"><svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.3536 4.35355C19.5488 4.15829 19.5488 3.84171 19.3536 3.64645L16.1716 0.464466C15.9763 0.269204 15.6597 0.269204 15.4645 0.464466C15.2692 0.659728 15.2692 0.976311 15.4645 1.17157L18.2929 4L15.4645 6.82843C15.2692 7.02369 15.2692 7.34027 15.4645 7.53553C15.6597 7.7308 15.9763 7.7308 16.1716 7.53553L19.3536 4.35355ZM0 4.5L19 4.5V3.5L0 3.5L0 4.5Z" fill="#2C4984"/></svg></a>',
    focusOnSelect: true,

});


/**/

/*parnters slider*/
$(".partners_box__slider").slick({
    slidesToShow: 4,
    rows: 2,
    arrows: false,
    asNavFor: '.partners_box__nav',
    responsive: [{
            breakpoint: 769,
            settings: {
                slidesToShow: 3
            }
        },
        {
            breakpoint: 500,
            settings: {
                slidesToShow: 2
            }
        }
    ]
});

$('.partners_box__nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.partners_box__slider',
    arrows: true,
    prevArrow: '<a id="prev" class="partners-prew"><svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.646446 3.64644C0.451185 3.84171 0.451185 4.15829 0.646446 4.35355L3.82843 7.53553C4.02369 7.73079 4.34027 7.73079 4.53553 7.53553C4.7308 7.34027 4.7308 7.02369 4.53553 6.82843L1.70711 4L4.53553 1.17157C4.7308 0.976309 4.7308 0.659727 4.53553 0.464465C4.34027 0.269203 4.02369 0.269203 3.82843 0.464465L0.646446 3.64644ZM20 3.5L1 3.5L1 4.5L20 4.5L20 3.5Z" fill="#2C4984"/></svg></a>',
    nextArrow: '<a id="next" class="partners-next"><svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.3536 4.35355C19.5488 4.15829 19.5488 3.84171 19.3536 3.64645L16.1716 0.464466C15.9763 0.269204 15.6597 0.269204 15.4645 0.464466C15.2692 0.659728 15.2692 0.976311 15.4645 1.17157L18.2929 4L15.4645 6.82843C15.2692 7.02369 15.2692 7.34027 15.4645 7.53553C15.6597 7.7308 15.9763 7.7308 16.1716 7.53553L19.3536 4.35355ZM0 4.5L19 4.5V3.5L0 3.5L0 4.5Z" fill="#2C4984"/></svg></a>',
    focusOnSelect: true,

});
/*end*/



/*media partners slider*/
$(".media_box__slider").slick({
    slidesToShow: 4,
    rows: 2,
    asNavFor: '.media_box__nav',
    arrows: false,
    responsive: [{
            breakpoint: 769,
            settings: {
                slidesToShow: 3
            }
        },
        {
            breakpoint: 500,
            settings: {
                slidesToShow: 2
            }
        }
    ]
});
$('.media_box__nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.media_box__slider',
    arrows: true,
    prevArrow: '<a id="prev" class="media-prew"><svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.646446 3.64644C0.451185 3.84171 0.451185 4.15829 0.646446 4.35355L3.82843 7.53553C4.02369 7.73079 4.34027 7.73079 4.53553 7.53553C4.7308 7.34027 4.7308 7.02369 4.53553 6.82843L1.70711 4L4.53553 1.17157C4.7308 0.976309 4.7308 0.659727 4.53553 0.464465C4.34027 0.269203 4.02369 0.269203 3.82843 0.464465L0.646446 3.64644ZM20 3.5L1 3.5L1 4.5L20 4.5L20 3.5Z" fill="#2C4984"/></svg></a>',
    nextArrow: '<a id="next" class="media-next"><svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.3536 4.35355C19.5488 4.15829 19.5488 3.84171 19.3536 3.64645L16.1716 0.464466C15.9763 0.269204 15.6597 0.269204 15.4645 0.464466C15.2692 0.659728 15.2692 0.976311 15.4645 1.17157L18.2929 4L15.4645 6.82843C15.2692 7.02369 15.2692 7.34027 15.4645 7.53553C15.6597 7.7308 15.9763 7.7308 16.1716 7.53553L19.3536 4.35355ZM0 4.5L19 4.5V3.5L0 3.5L0 4.5Z" fill="#2C4984"/></svg></a>',
    focusOnSelect: true,

});

/*end*/

/*slow scroll button*/
$('.slow_btn, .arrow_down, .go_countdown').on("click", function (e) {
    e.preventDefault();
    var id = $(this).attr('href'),
        top = $(id).offset().top;
    $('body,html').animate({
        scrollTop: top
    }, 1000);

});
/*end*/


/*Отключаем стандартное поведение ссылок в меню*/
$('a[href="#"]').on('click', function (e) {
    e.preventDefault();
});
/*end*/


/*activation coutdown*/

var start = $('.start_countdown'),
    time = start.data('start'),
    day = start.data('days'),
    hour = start.data('hours'),
    min = start.data('min'),
    sec = start.data('sec'),
    ts = new Date(time),
    newYear = true;

if ((new Date()) > ts) {
    ts = (new Date()).getTime() + 0 * 0 * 0 * 0 * 0;
    newYear = false;
}

$('#countdown').countdown({
    timestamp: ts,
    callback: function (days, hours, minutes, seconds) {

        var message = "";
        message += "<span>" + "<pre>" + day + "</pre>" + days + (days == 1 ? '' : '') + "</span>";
        message += "<span>" + "<pre>" + hour + "</pre>" + hours + (hours == 1 ? '' : '') + "</span>";
        message += "<span>" + "<pre>" + min + "</pre>" + minutes + (minutes == 1 ? '' : '') + "</span>";
        message += "<span>" + "<pre>" + sec + "</pre>" + seconds + (seconds == 1 ? '' : '') + "</span>";

        start.html(message);
    }
});

/*end*/

/*faq page*/
$(".card-header").on("click", function () {
    if ($(this).parent(".card").hasClass("open_faq")) {
        $(this).parent(".card").removeClass("open_faq");
    } else {
        $(".card").removeClass("open_faq");
        $(this).parent(".card").addClass("open_faq");
    }

});

$(".card_box").on("click", function () {
    if ($(this).hasClass("open_faq")) {
        $(this).removeClass("open_faq");
        $(this).find(".card_item .card_body").slideUp();
    } else {
        $(".card_box").removeClass("open_faq");
        $(".card_body").slideUp();
        $(this).addClass("open_faq");
        $(this).find(".card_item .card_body").slideDown();
    }

})



/*end faq page*/

/*redirect contact form 7*/
document.addEventListener('wpcf7mailsent', function (event) {
    if ('563' == event.detail.contactFormId || '389' == event.detail.contactFormId) {
        location = '/thanks/';
    } else if ('820' == event.detail.contactFormId || '836' == event.detail.contactFormId) {
        location = '/thanks-ua/';
    } else if ('819' == event.detail.contactFormId || '835' == event.detail.contactFormId) {
        location = '/thanks-en/';

    } else if ('925' == event.detail.contactFormId) {
        location = '/thanks-day-3/';
    } else if ('1157' == event.detail.contactFormId) {
        location = '/thanks-day-4/';
    } else if ('929' == event.detail.contactFormId) {
        location = '/thanks-day-3-en/';
    } else if ('1160' == event.detail.contactFormId) {
        location = '/thanks-day-4-en';
    } else if ('930' == event.detail.contactFormId) {
        location = '/thanks-day-3-ua/';
    } else if ('1161' == event.detail.contactFormId) {
        location = '/thanks-day-4-ua/';
    }

}, false);

$(".reg_btn").on("click", function () {
    $("#reg_ticket").modal('hide');
});
/*end redirect*/

/*muted video btn*/
$("#playButton").on("click", function () {
    $(".but").toggleClass("hidden");
    let video = $("#video_jazz").get(0);
    video.muted = !video.muted;

});

/*radio btn*/
$(".fixed-radio__btn").on("click", function () {
    $(".radio-btn").toggleClass("hide-emblem");
    let audio = $("#radio-jazz").get(0);
    if (audio.paused) {
        audio.play();
    } else {
        audio.pause();
    }
});


/*end radio btn*/


/*end muted video btn*/

});