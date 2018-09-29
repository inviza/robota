function initMap() {
    const mapElement = document.querySelector('.js-google-map');
    const mapCenter = { lat: 50.57955909, lng: 32.41351258 };
    const mapOptions = {
        center: mapCenter,
        zoom: 15,
        disableDefaultUI:true,
        maxZoom:20,
        minZoom:10
    }

    const map = new google.maps.Map(mapElement, mapOptions);

    const marker = new google.maps.Marker({
        position: mapCenter,
        map: map,
    });
}