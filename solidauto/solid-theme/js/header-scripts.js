function locationData(locationURL, locationImg, locationTitle, locationAddress, locationStarRating, locationPhone) {
    return (
        '<div class="map-popup-wrap">\
            <div class="map-popup">\
                <div class="infoBox-close"><i class="fal fa-times"></i></div>\
                <a href="' + locationURL + '" class="listing-img-content fl-wrap">\
                    <img src="' + locationImg + '" alt="">\
                    <div class="card-popup-raining map-card-rainting" data-staRrating="' + locationStarRating + '"></div>\
                </a>\
                <div class="listing-content"><div class="listing-content-item fl-wrap">\
                    <div class="listing-title fl-wrap">\
                        <h4><a href=' + locationURL + '>' + locationTitle + '</a></h4>\
                        <div class="map-popup-location-info"><i class="fas fa-map-marker-alt"></i>' + locationAddress + '</div>\
                    </div>\
                    <div class="map-popup-footer">\
                        <a href=' + locationURL + ' class="main-link">Перейти к СТО <i class="fal fa-long-arrow-right"></i></a>\
                        <a href="tel:' + locationPhone + '" class="infowindow_wishlist-btn"><i class="fal fa-phone"></i></a>\
                    </div>\
                </div>\
            </div>\
        </div>'
    )
}
