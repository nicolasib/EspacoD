$(document).ready(function(){
    $('.item-cima.single-item').slick({
        prevArrow: $('.prev-cima'),
        nextArrow: $('.next-cima'),
        draggable: false,
        swipe: false,
        lazyLoad: 'ondemand'
    });

    $('.item-baixo').slick({
        prevArrow: $('.prev-baixo'),
        nextArrow: $('.next-baixo'),
        draggable: false,
        swipe: false,
        lazyLoad: 'ondemand'
    });
    /* Filtros baixo*/
    $('.filtro-calca').click(()=>{
        $('.item-baixo').slick('slickUnfilter');
        $('.item-baixo').slick('slickFilter', '.calca');
        var idBaixo = $('.slick-active.imagem-baixo').attr('id');
        $('.contentholder-baixo').load('./php/load-content.php', {idBaixo: idBaixo, method: 'loadContentBaixo'});
    });
    $('.filtro-bermuda').click(()=>{
        $('.item-baixo').slick('slickUnfilter');
        $('.item-baixo').slick('slickFilter', '.bermuda');
        var idBaixo = $('.slick-active.imagem-baixo').attr('id');
        $('.contentholder-baixo').load('./php/load-content.php', {idBaixo: idBaixo, method: 'loadContentBaixo'});
    });

    $('.unfilter').click(()=>{
        $('.item-baixo').slick('slickUnfilter');
        var idBaixo = $('.slick-active.imagem-baixo').attr('id');
        $('.contentholder-baixo').load('./php/load-content.php', {idBaixo: idBaixo, method: 'loadContentBaixo'});
    });
    
    
});