let center = [47.728453, 40.218384];

function init() {
    let map = new ymaps.Map('map', {
        center: center,
        zoom: 17
    });

    let placemark = new ymaps.Placemark(center, {
        balloonContentHeader: 'Хедер балуна',
        balloonContentBody: 'Боди балуна',
        balloonContentFooter: 'Подвал',
    }, {
        iconLayout: 'default#image',
        iconImageHref: 'https://image.flaticon.com/icons/png/512/64/64113.png',
        iconImageSize: [40, 40],
        iconImageOffset: [-19, -44]
    });

    let placemark1 = new ymaps.Placemark(center, {
        balloonContent: `
			<div class="balloon">
				<div class="balloon__address">Прогресс-Энерно</div>
			</div>
		`
    }, {
        iconLayout: 'default#image',
        iconImageHref: 'https://image.flaticon.com/icons/png/512/64/64113.png',
        iconImageSize: [40, 40],
        iconImageOffset: [-19, -44]
    });

    map.controls.remove('geolocationControl'); // удаляем геолокацию
    map.controls.remove('searchControl'); // удаляем поиск
    map.controls.remove('trafficControl'); // удаляем контроль трафика
    map.controls.remove('typeSelector'); // удаляем тип
    map.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
    map.controls.remove('zoomControl'); // удаляем контрол зуммирования
    map.controls.remove('rulerControl'); // удаляем контрол правил
    // map.behaviors.disable(['scrollZoom']); // отключаем скролл карты (опционально)

    // map.geoObjects.add(placemark);
    map.geoObjects.add(placemark1);

    placemark1.balloon.open();
}

ymaps.ready(init);