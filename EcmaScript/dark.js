"use script";

class Dark {
    constructor() {
        this.apiKey = 'a5b8fe70c172015d51961225ca93b6ac';
        this.url = 'https://api.themoviedb.org/3/tv/70523?api_key=' + this.apiKey + '&language=es-ES';
        this.name = '';
    }

    cargarDatos() {
        $.ajax({
            dataType: "json",
            url: this.url,
            method: 'GET',
            success: function (json) {

                this.mostrar(json);
            },
            error: function () {
                alert("No se pudo obtener JSON de The Movie DataBase API")
            }

        });

    }

    mostrar(json) {
        $("main").append("<h1>" + json.name + "</h1>");
    }
}

let dark = new Dark();