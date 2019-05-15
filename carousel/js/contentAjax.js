

$(document).ready(function(){


    /* IMPRIMINDO DESCRIÇÕES */
    /* Imprimir dados parte de cima */
    var idCima = $('.slick-active.imagem-cima').attr('id');
    $('.contentholder-cima').load('./php/load-content.php', {idCima: idCima, method: 'loadContentCima'});
    
    $('.prev-cima').click(function(){
        var idCima = $('.slick-active.imagem-cima').attr('id');
        $('.contentholder-cima').load('./php/load-content.php', {idCima: idCima, method: 'loadContentCima'});
    });
    $('.next-cima').click(function(){
        var idCima = $('.slick-active.imagem-cima').attr('id');
        $('.contentholder-cima').load('./php/load-content.php', {idCima: idCima, method: 'loadContentCima'});
    });

    /* Imprimir dados parte de baixo */
    var idBaixo = $('.slick-active.imagem-baixo').attr('id');
    $('.contentholder-baixo').load('./php/load-content.php', {idBaixo: idBaixo, method: 'loadContentBaixo'});
    
    $('.item-baixo').on('afterChange',function(){
        var idBaixo = $('.slick-active.imagem-baixo').attr('id');
        $('.contentholder-baixo').load('./php/load-content.php', {idBaixo: idBaixo, method: 'loadContentBaixo'});
    });

    
})