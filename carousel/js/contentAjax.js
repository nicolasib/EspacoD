

$(document).ready(function(){

    /* IMPRIMINDO FOTOS */
    /* Imprimir fotos cima */
    $('.single-item.item-cima').load('./php/load-images-cima.php', {filtro: '*'}); // Imprime todas imagens de cima ao carregar a pagina (sem filtros)    
    $('.single-item.item-baixo').load('./php/load-images-baixo.php', {filtro: '*'}); // Imprime todas imagens de baixo ao carregar a pagina (sem filtros)


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
    
    $('.prev-baixo').click(function(){
        var idBaixo = $('.slick-active.imagem-baixo').attr('id');
        $('.contentholder-baixo').load('./php/load-content.php', {idBaixo: idBaixo, method: 'loadContentBaixo'});
    });
    $('.next-baixo').click(function(){
        var idBaixo = $('.slick-active.imagem-baixo').attr('id');
        $('.contentholder-baixo').load('./php/load-content.php', {idBaixo: idBaixo, method: 'loadContentBaixo'});
    });
})