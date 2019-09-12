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