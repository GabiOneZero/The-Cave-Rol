$(document).ready(function () {

    //Menú desplegable
    $("#la_hamburguesa").click(function () {

        $('#menu_hamburguesa').animate({ height: 'toggle' }, 300);
        $('#contenedor_busqueda').hide();
    });

    //Barra de búsqueda
    $("#busqueda").click(function () {

        $('#contenedor_busqueda').animate({ height: 'toggle' }, 300);
    });

    //Logo Footer sube la página
    $("#logo-footer").click(function () {
        $('html, body').animate({ scrollTop: 0 }, 300);

    });

});