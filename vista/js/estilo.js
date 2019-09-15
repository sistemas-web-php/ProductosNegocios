$(document).ready(function () {
    var altoPantalla = $( window ).height();

    var altoNav = $('nav').height();
    
    var altoBanner = altoPantalla - altoNav;
    
    $('#banner').height(altoBanner);
});

function verPelicula(ver) {
    window.location=ver;
}

function redEditarPel(id) { 
    window.location='?view=modificacion-pelicula&id=' + id;
}

function buscar(){
    $('#form-buscador').submit();
}

function botonLatino(){
    $('#idioma-latino').removeClass('d-none');
    $('#idioma-original').addClass('d-none');
}
function botonOriginal(){
    $('#idioma-latino').addClass('d-none');
    $('#idioma-original').removeClass('d-none');
}
$(document).ready(function(){

    // AGREGANDO CLASE ACTIVE AL PRIMER ENLACE ====================
    $('.category_list .category_item[category="all"]').addClass('ct_item-active');

    // FILTRANDO PRODUCTOS  ============================================

    $('.category_item').click(function(){
        var catProduct = $(this).attr('category');
        console.log(catProduct);

        // AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
        $('.category_item').removeClass('ct_item-active');
        $(this).addClass('ct_item-active');

        // OCULTANDO PRODUCTOS =========================
        $('.product-item').css('transform', 'scale(0)');
        function hideProduct(){
            $('.product-item').hide();
        } setTimeout(hideProduct,400);

        // MOSTRANDO PRODUCTOS =========================
        function showProduct(){
            $('.product-item[category="'+catProduct+'"]').show();
            $('.product-item[category="'+catProduct+'"]').css('transform', 'scale(1)');
        } setTimeout(showProduct,400);
    });

    // MOSTRANDO TODOS LOS PRODUCTOS =======================

    $('.category_item[category="all"]').click(function(){
        function showAll(){
            $('.product-item').show();
            $('.product-item').css('transform', 'scale(1)');
        } setTimeout(showAll,400);
    });
});