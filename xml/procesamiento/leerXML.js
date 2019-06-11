$(document).ready(function () {

    $.get("documento.xml", function (xml) {

        $(xml).find("temporadas").each(function () {

            // Leer atributo de evento
            var numero = $(this).attr('numero');

            // Leer elementos de evento
            var fecha = $(this).find("fecha").text();
            var hora = $(this).find("hora").text();
            var comentario = $(this).find("comentario").text();

            var html = '<h2>Temporada ' + numero + '</h2>';
            html += '<p>Fecha y hora de estreno' + fecha + ' ' + hora + '</p>';
            html += '<p>Comentario ' + comentario + '</p>';

            $('dl').append($(html));
        });
    });
});