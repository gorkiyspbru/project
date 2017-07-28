// initMap() - функция инициализации карты
function initMap() {
    // Координаты центра на карте. Широта: 60.043395, Долгота: 30.451622
    var centerLatLng = new google.maps.LatLng(60.043395, 30.451622);
 
    // Обязательные опции с которыми будет проинициализированна карта
    var mapOptions = {
        center: centerLatLng, // Координаты центра мы берем из переменной centerLatLng
        zoom: 15               // Зум по умолчанию. Возможные значения от 0 до 21
    };

    var marker = new google.maps.Marker({
    position: centerLatLng,
    map: map,
    title: 'Hello World!'
  });
 
    // Создаем карту внутри элемента #map
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
 
// Ждем полной загрузки страницы, после этого запускаем initMap()
google.maps.event.addDomListener(window, "load", initMap);