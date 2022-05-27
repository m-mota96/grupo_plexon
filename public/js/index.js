$(document).ready(()=> {
    $('.carousel').carousel({
        interval: 9000000
    });
    var medida= $( window ).width();
    if (medida < 500) {
        $('.d-block').attr('src', $('#URL').val()+'media/images/back-small.png');
    }
});

$("#close-sidebar").click(function() {
    $(".page-wrapper").removeClass("toggled");
    $('#show-sidebar').css('display', 'unset');
});
$("#show-sidebar").click(function() {
    $('#show-sidebar').css('display', 'none');
    $(".page-wrapper").addClass("toggled");
});

$("#menu-home").click(function () {
    $(".page-wrapper").removeClass("toggled");
    $('#show-sidebar').css('display', 'unset');
    $('html,body').animate({
        scrollTop: $("#div-home").offset().top-20
    }, 1000);
});
$("#menu-information").click(function () {
    $(".page-wrapper").removeClass("toggled");
    $('#show-sidebar').css('display', 'unset');
    $('html,body').animate({
        scrollTop: $("#carouselExampleCaptions").offset().top-20
    }, 1000);
});
$("#menu-events").click(function () {
    $(".page-wrapper").removeClass("toggled");
    $('#show-sidebar').css('display', 'unset');
    $('html,body').animate({
        scrollTop: $("#div-events").offset().top-20
    }, 1000);
});
$("#menu-digital").click(function () {
    $(".page-wrapper").removeClass("toggled");
    $('#show-sidebar').css('display', 'unset');
    $('html,body').animate({
        scrollTop: $("#div-digital").offset().top-20
    }, 1000);
});
$("#menu-contact").click(function () {
    $(".page-wrapper").removeClass("toggled");
    $('#show-sidebar').css('display', 'unset');
    $('html,body').animate({
        scrollTop: $("#div-contact").offset().top
    }, 1000);
});

$(window).resize(function() {
    var medida= $( window ).width();
    if (medida < 500) {
        $('.d-block').attr('src', $('#URL').val()+'media/images/back-small.png');
    } else if (medida < 2100) {
        $('.d-block').attr('src', $('#URL').val()+'media/images/back_slide.png');
    }
});