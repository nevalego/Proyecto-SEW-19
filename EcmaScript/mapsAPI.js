"use script";

class WindemMap {
    constructor() {
        this.mapsAPIkey = 'AIzaSyDOtnSjoli1L8hdiBQ1iCjKSCquMlQFPzI';
        this.latitud=48.148825;
        this.longitud=8.043453;
        this.mapa=new Map();
        this.initMap();
    }

    initMap() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(this.obtener, this.errores);
        } else {
            alert("Geolocación no soportada por navegador.");
        }
    }

    obtener(posicion) {

        this.mapa.map.set('Latitud', this.latitud);
        this.mapa.map.set('Longitud', this.longitud);
        this.mapa.mostrar();
    }

    mostrar() {
        var map = new google.maps.Map(document.getElementsByTagName('main')[0], {
            zoom: 17,
            center: {lat: this.latitud,
                lng: this.longitud}
        });
        var marker = new google.maps.Marker({
            position: {lat: this.latitud,
                lng: this.longitud},
            map: map,
            title:'Windem'
        });
    }

    errores(error) {
        alert('Error: ' + error.code + ' ' + error.message);
    }

}

var mapaW = new WindemMap();