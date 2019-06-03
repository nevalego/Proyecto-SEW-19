"use script";

class Maps {
    constructor() {
        this.mapskey = 'AIzaSyDOtnSjoli1L8hdiBQ1iCjKSCquMlQFPzI';
        this.map = new Map();
        this.init();
    }

    init() {
        let url = "https://maps.googleapis.com/maps/api/js?key=" + this.mapskey + "&callback=initMap";

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(this.obtener, this.errores);
        } else {
            alert("Geolocación no es soportada por navegador.");
        }
    }

    obtener(posicion) {
        var coordenadas = posicion.coords;
        mapa.map.set('Latitud', coordenadas.latitude);
        mapa.map.set('Longitud', coordenadas.longitude);
        mapa.mostrar();
    }

    mostrar() {
        var localizacion = {
            lat: this.map.get("Latitud"),
            lng: this.map.get("Longitud")
        };
        var map = new google.maps.Map(document.getElementsByTagName('main')[0], {
            zoom: 15,
            center: localizacion
        });
        var marker = new google.maps.Marker({
            position: localizacion,
            map: map
        });

    }

    errores(error) {
        alert('Error: ' + error.code + ' ' + error.message);
    }

}

var mapa = new Maps();