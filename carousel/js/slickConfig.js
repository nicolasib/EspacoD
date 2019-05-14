$(document).ready(function(){
    $('.item-cima').slick({
        prevArrow: $('.prev-cima'),
        nextArrow: $('.next-cima'),
        draggable: false,
    });

    $('.item-baixo').slick({
        prevArrow: $('.prev-baixo'),
        nextArrow: $('.next-baixo'),
        draggable: false,
        swipe: false
    });
    
    
});