<?php get_header() ?>

<?php
if (isMobileDevice()) {
    $cardClass = 'has_two_column';
} else {
    $cardClass = 'has_one_column';
} ?>
<div id="wrapper">
    <div class="content">

        <div class="map-container column-map right-pos-map no-fix-scroll-map hid-mob-map">

            <div class="autoComplete_wrapper" role="combobox" aria-owns="autoComplete_list_1" aria-haspopup="true" aria-expanded="false" style="position:absolute; top:6px; left:12px; z-index:10000; display:block;">
                <input id="autoComplete" type="search" dir="ltr" spellcheck="false" autocorrect="off" autocomplete="off" autocapitalize="off" aria-controls="autoComplete_list_1" aria-autocomplete="both" placeholder="Поиск СТО...">
                <ul id="autoComplete_list_1" role="listbox" hidden="" style="z-index:10000;"></ul>
            </div>

            <div id="map-main"></div>

            <div class="scrollContorl mapnavbtn tolt" data-microtip-position="top-left" data-tooltip="Включить колёсико"><span><i class="fal fa-unlock"></i></span></div>
            <div class="location-btn geoLocation tolt" data-microtip-position="top-left" data-tooltip="СТО возле меня"><span><i class="fal fa-location"></i></span></div>
            <div class="map-overlay"></div>
            <div class="map-close"><i class="fas fa-times"></i></div>
        </div>

        <!-- Фильтры-->
        <div class="hidden-search-column">
            <div class="hidden-search-column-container fl-wrap full-height tabs-act">
                <div class="filter-sidebar-header fl-wrap">
                    <ul class="tabs-menu fl-wrap no-list-style">
                        <li class="current"><a href="#filters-search"> <i class="fal fa-sliders-h"></i> Параметры </a></li>
                    </ul>
                </div>
                <div class="scrl-content filter-sidebar  full-height">
                    <div class="tabs-container fl-wrap">

                        <div class="tab">
                            <?php
                            $features = get_terms(['taxonomy' => 'features']);
                            $cities = get_terms(['taxonomy' => 'city']);
                            $service = get_terms(['taxonomy' => 'service']);
                            ?>
                            <form action="/sto/" id="filters-search" class="tab-content first-tab">

                                <div class="listsearch-input-item">
                                    <select name="service" data-placeholder="Услуги" class="chosen-select nice-select">
                                        <option readonly selected value="">Любые услуги</option>
                                        <?php foreach ($service as $s) {
                                            $selected = $_GET['service'] == $s->slug ? 'selected' : '';
                                            echo '<option ' . $selected . '  value="' . $s->slug . '">' . $s->name . '</option>';
                                        } ?>
                                    </select>
                                </div>

                                <div class="listsearch-input-item">
                                    <select name="city" data-placeholder="Город" class="chosen-select nice-select">
                                        <option readonly selected value="">Любой город</option>
                                        <?php foreach ($cities as $c) {
                                            $selected = $_GET['city'] == $c->name || $_GET['city'] == $c->slug ? 'selected' : '';
                                            echo '<option ' . $selected . ' value="' . $c->slug . '">' . $c->name . '</option>';
                                        } ?>
                                    </select>
                                </div>

                                <div class="listsearch-input-item clact">
                                    <div class="fl-wrap filter-tags">
                                        <ul id="features-field" class="no-list-style">
                                            <input type="hidden" name="features">

                                            <?php foreach ($features as $f) { ?>
                                                <li>
                                                    <input id="check-aa" type="checkbox" value="<?php echo $f->slug; ?>">
                                                    <label for="check-aa"><?php echo $f->name; ?></label>
                                                </li>
                                            <?php } ?>

                                        </ul>
                                    </div>
                                </div>
                                <!-- listsearch-input-item end-->
                                <!-- listsearch-input-item-->
                                <div class="listsearch-input-item">
                                    <button type="submit" class="header-search-button color-bg"><i class="far fa-search"></i><span>Применить</span></button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="close_sbfilters"><i class="fal fa-long-arrow-right"></i></div>
        </div>

        <div class="col-list-wrap anim_clw">

            <!-- Шапка листинга -->
            <div id="sto-cards-header" class="list-main-wrap-header fl-wrap anim_clw">
                <div class="container">
                    <div class="list-main-wrap-title">
                        <span>СТО сети</span>
                    </div>
                    <div class="list-main-wrap-opt">
                        <!-- <div class="price-opt">
                            <span class="price-opt-title">Сортировка:</span>
                            <div class="listsearch-input-item">
                                <select data-placeholder="Popularity" class="chosen-select no-search-select">
                                    <option>по рейтингу</option>
                                </select>
                            </div>
                        </div> -->
                        <!-- <div class="grid-opt">
                            <ul class="no-list-style">
                                <li class="grid-opt_act"><span class="one-col-grid <?php if (!isMobileDevice()) {
                                                                                        echo 'act-grid-opt';
                                                                                    } ?> tolt" data-microtip-position="bottom" data-tooltip="Список"><i class="fal fa-list"></i></span></li>
                                <li class="grid-opt_act"><span class="two-col-grid <?php if (isMobileDevice()) {
                                                                                        echo 'act-grid-opt';
                                                                                    } ?> tolt" data-microtip-position="bottom" data-tooltip="Сетка"><i class="fal fa-th"></i></span></li>
                            </ul>
                        </div> -->
                        <div class="show-hidden-sb shsb_btn shsb_btn_act"><i class="fal fa-sliders-h"></i> <span>Фильтр</span></div>
                    </div>
                </div>
                <a class="custom-scroll-link back-to-filters clbtg" href="#sto-cards"><i class="fas fa-caret-up"></i></a>
            </div>
            <div class="clearfix"></div>
            <div class="container">
                <div class="mob-nav-content-btn mncb_half color2-bg shsb_btn shsb_btn_act fl-wrap"><i class="fal fa-filter"></i> Фильтры</div>
                <div class="mob-nav-content-btn mncb_half color2-bg schm  fl-wrap"><i class="fal fa-map-marker-alt"></i> Открыть карту</div>
            </div>
            <div class="clearfix"></div>

            <!-- Карточки листинга -->
            <div id="sto-cards" class="listing-item-container init-grid-items fl-wrap" id="lisfw">
                <div class="container">
                    <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
                    <div class="clearfix"></div>

                    <script>
                        var locations = [];
                    </script>

                    <?php
                    $cardId = 1;
                    if (!have_posts()) {
                        echo 'Таких СТО не найдено!';
                    } else {
                        while (have_posts()) {
                            the_post();

                            if (get_field('галерея')) {
                                $images = get_field('галерея');
                            } else {
                                $images = [['id' => 504, 'url' => '/wp-content/uploads/group-62-2-1.png'], ['id' => 135, 'url' => '/wp-content/uploads/2021/12/service.png'], ['id' => 135, 'url' => '/wp-content/uploads/2021/12/service.png']];
                            }
                    ?>

                            <script>
                                var listing = [
                                    locationData("<?php the_permalink(); ?>", "<?php echo wp_get_attachment_image_src($images[0]['id'], 'full')[0]; ?>", "<?php the_title(); ?>", "<?php echo get_field('адрес') ?>", "5", <?php echo get_field('phone')[0]['номер'] ?>),
                                    <?php echo get_field('карта')['lat']; ?>, <?php echo get_field('карта')['lng']; ?>, <?php echo $cardId - 1; ?>, '/wp-content/uploads/group-64-2.png'
                                ];
                                locations.push(listing);
                            </script>

                            <div class="listing-item <?php echo $cardClass; ?>">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img" style="background-image: url('<?php echo wp_get_attachment_image_src($images[0]['id'], 'full')[0]; ?>'">
                                        <div class="geodir-category-img-overlay"></div>
                                        <div class="geodir-category-opt">
                                            <div class="listing-rating-count-wrap">
                                                <span>Рейтинг: </span>
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="geodir-category-content fl-wrap">
                                        <div class="geodir-category-content-title fl-wrap">
                                            <div class="geodir-category-content-title-item">
                                                <div class="title-sin_map">
                                                    <a href="<?php the_permalink(); ?>" target="_blank">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </div>
                                                <div class="geodir-category-location fl-wrap">
                                                    <a href="#<?php echo $cardId; ?>" class="map-item">
                                                        <i class="fas fa-map-marker-alt"></i>
                                                        <?php echo get_field('адрес') ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="geodir-category-text fl-wrap">

                                            <!--<p class="small-text">Краткое описание СТО. Здесь можно перечислить особенности станции</p>-->

                                            <div class="facilities-list fl-wrap">
                                                <?php if (!isMobileDevice()) {
                                                    echo '<div class="facilities-list-title">Удобства:</div>';
                                                } ?>

                                                <ul class="no-list-style">
                                                    <?php $terms = get_field('удобства');
                                                    if ($terms) {
                                                        foreach ($terms as $term) {
                                                            $icon_id = get_field('иконка', $term);
                                                            $icon = wp_get_attachment_image_src($icon_id, 'full')[0]; ?>
                                                            <li class="tolt" data-microtip-position="top" data-tooltip="<?php echo $term->name; ?>">
                                                                <img src="<?php echo $icon; ?>" alt="">
                                                            </li>
                                                        <?php }
                                                    } else { ?>

                                                        <li class="tolt" data-microtip-position="top" data-tooltip="Зона ожидания">
                                                            <img src="/wp-content/uploads/zona-ozhidanija.png" alt="">
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <?php $timetable = get_field('время_работы'); ?>
                                        <div class="geodir-category-time fl-wrap">

                                            <div class="facilities-list-title">Время работы:</div>
                                            <div class="timetable-wrapper">
                                                <?php foreach ($timetable as $row) {
                                                    if (!$row['время_начала'] || !$row['время_окончания']) {
                                                        echo '<a><b>' . $row['день'] . ':</b>выходной</a>';
                                                    } else {
                                                        echo '<a><b>' . $row['день'] . ':</b>' . $row['время_начала'] . '-' . $row['время_окончания'] . '</a>';
                                                    }
                                                } ?>
                                            </div>

                                        </div>
                                        <div class="geodir-category-footer fl-wrap">
                                            <a href="<?php the_permalink(); ?>" target="_blank" class="btn btn-small color2-bg">
                                                <?php if (isMobileDevice()) {
                                                    echo 'Подробнее';
                                                } else {
                                                    echo 'Подробнее о станции';
                                                } ?>
                                            </a>
                                            <div class="geodir-opt-list">
                                                <ul class="no-list-style">
                                                    <li><a href="#" class="show_gcc"><i class="fal fa-phone"></i><span class="geodir-opt-tooltip">Контакты</span></a></li>
                                                    <li>
                                                        <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': '<?php echo $images[0]['url']; ?>' },{'src': '<?php echo $images[1]['url']; ?>' },{'src': '<?php echo $images[2]['url']; ?>' }]">
                                                            <i class="fal fa-camera"></i><span class="geodir-opt-tooltip">Галерея</span>
                                                        </div>
                                                    </li>
                                                    <li><a href="#<?php echo $cardId++; ?>" class="map-item"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">На карте</span> </a></li>
                                                </ul>
                                            </div>
                                            <div class="geodir-category_contacts">
                                                <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                                <ul class="no-list-style">
                                                    <li><span><i class="fal fa-phone"></i></span><a href="tel:+<?php echo get_field('phone')[0]['номер'] ?>">+<?php echo get_field('phone')[0]['номер'] ?></a></li>
                                                    <li><span><i class="fal fa-envelope"></i></span><a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>

                    <?php }
                    } ?>
                    <?php $args = [
                        'prev_text'    => '<i class="fas fa-caret-left"></i><span>Назад</span>',
                        'next_text'    => '<span>Вперёд</span><i class="fas fa-caret-right"></i>',
                    ];
                    the_posts_pagination($args); ?>
                </div>
            </div>

            <div class="sub-footer  fl-wrap">
                <div class="container">
                    <div class="copyright">© 2022, Solid Auto Service. Все права защищены</div>
                    <div class="subfooter-nav">
                        <a style="color:#fff; margin-right:10px" href="/service/">Услуги</a>
                        <a style="color:#fff; margin-right:10px" href="/blog/">Блог</a>
                        <a style="color:#fff" href="/supplier/">Поставщики</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="limit-box fl-wrap"></div>
    </div>
</div>

</div>
<!--=============== scripts  ===============-->
<?php wp_footer(); ?>

<script>
    var locations = [];
</script>

<?php
$args = [
    'post_type' => 'sto',
    'posts_per_page' => -1
];
$stations = get_posts($args);
foreach ($stations as $s) { ?>
    <script>
        var listing = [
            locationData(
                "<?= get_permalink($s); ?>",
                "/wp-content/uploads/65.png",
                "<?= get_the_title($s); ?>",
                "<?= get_field('адрес', $s) ?>",
                "5",
                <?= get_field('phone', $s)[0]['номер'] ?>
            ),
            <?= get_field('карта', $s)['lat']; ?>,
            <?= get_field('карта', $s)['lng']; ?>,
            "",
            '/wp-content/uploads/group-64-2.png',
            // fields for autocomplete
            "<?= get_the_title($s); ?>",
            "<?= get_field('адрес', $s) ?>",
        ];
        locations.push(listing);
    </script>
<?php } ?>


<script>
    var markers = [];

    function resetMarkers() {
        for (let i = 0; i < markers.length; i++) {
            markers[i].setMap(null);
        }
        markers = [];
    }

    function addMarker(position, iconHref, map) {
        var image = new google.maps.MarkerImage(
            iconHref,
            new google.maps.Size(80, 80),
            new google.maps.Point(0, 0),
            new google.maps.Point(17, 34),
            new google.maps.Size(36, 36)
        );

        markers.push(new google.maps.Marker({
            position,
            icon: image,
            map
        }));
    }

    function moveTo(position, types, map) {
        map.panTo(position);

        if (types.includes('locality') || types.includes('political')) {
            map.setZoom(10); // make lower zoom for cities
        } else {
            map.setZoom(15); // and normal zoom fot other places
        }
    }

    function setSearchBoxValue(autoComplete, title, address) {
        autoComplete.input.value = `${title} - ${address}`;
    }

    function getSelectionDetailsFromEvent(event) {
        return event.detail.selection.value
    }

    function getMapInstance() {
        return document.querySelector('#map-main').mapInstance;
    }

    function getPlacesService(map) {
        return new google.maps.places.PlacesService(map);
    }

    function clickFoundMarker(id) {
        const clickEvent = new MouseEvent("click", {
            "view": window,
            "bubbles": true,
            "cancelable": false
        });

        // click on the found marker after 0.7s
        setTimeout(() => {
            document.querySelector(`[data-marker_id="${id}"]`).dispatchEvent(clickEvent);
        }, 700);
    }

    jQuery(function($) {
        if (document.querySelector('#autoComplete')) {
            const autoCompleteJS = new autoComplete({
                selector: "#autoComplete",
                placeHolder: "Поиск СТО...",
                debounce: 400,
                threshold: 3,
                data: {
                    src: locations.map((location, index) => ({
                        id: index,
                        title: location[5],
                        address: location[6],
                        lat: location[1],
                        lng: location[2],
                        icon: '<img src="/wp-content/themes/solid-theme/images/solid-location.png" alt="service" width="14px" height="14px"/>',
                        types: ['our_service']
                    })),
                    cache: true,
                    keys: ['title', 'address'],
                },
                resultsList: {
                    noResults: true,
                },
                resultItem: {
                    highlight: true,
                    element: (item, data) => {
                        item.innerHTML = `<div style="display:flex; align-items:flex-start;">
                          <div style="margin-right: 9px;">${data.value.icon}</div> <div>${item.innerHTML}</div>
                        </div>`;
                    }
                },
                events: {
                    input: {
                        selection: (event) => {
                            const {
                                id,
                                lat,
                                lng,
                                icon,
                                title,
                                address,
                                types
                            } = getSelectionDetailsFromEvent(event);
                            const map = getMapInstance();

                            setSearchBoxValue(autoCompleteJS, title, address);

                            if (map) {
                                resetMarkers();
                                addMarker({
                                    lat,
                                    lng
                                }, icon, map);
                                moveTo({
                                    lat,
                                    lng
                                }, types, map);
                                clickFoundMarker(id);
                            }
                        },
                        results: (event) => {
                            const map = getMapInstance();
                            const service = getPlacesService(map);
                            const query = event.detail.query;

                            const request = {
                                query: 'Беларусь, ул. ' + query,
                            }

                            service.textSearch(request, function(results, status) {
                                if (status === google.maps.places.PlacesServiceStatus.OK) {
                                    const streets = results.map(res => ({
                                            id: res.place_id,
                                            title: res.name,
                                            address: res.formatted_address,
                                            lat: res.geometry.location.lat(),
                                            lng: res.geometry.location.lng(),
                                            icon: res.icon,
                                            types: res.types
                                        }))
                                        .filter(s =>
                                            !s.types.includes('shopping_mall') &&
                                            !s.types.includes('store') &&
                                            !s.types.includes('food') &&
                                            !s.types.includes('grocery_or_supermarket')
                                        );


                                    const streetRes = streets.map(x => ({
                                        match: `<mark>${query}</mark>`,
                                        value: x,
                                        key: 'title',
                                    }));

                                    autoCompleteJS.feedback.results = [...autoCompleteJS.feedback.results, ...streetRes];
                                    autoCompleteJS.feedback.matches = [...autoCompleteJS.feedback.matches, ...streetRes];

                                    const highlightTemp = (temp) => temp.replace(new RegExp(query, 'gi'), '<mark>' + query + '</mark>');

                                    streetHTML = streets.map(s => {
                                        return `
                                      <li id="autoComplete_result_${s.id}" role="option" style="display:flex; align-items:flex-start;">
                                      <div style="margin-right:10px;">
                                        <img src="${s.icon}" width="14px" height="14px" />
                                      </div>
                                      <div style="margin-top:2px;">
                                        ${highlightTemp(s.title + ' ' + s.address)}   
                                      </div>
                                      </li>`;
                                    }).join('');

                                    autoCompleteJS.list.innerHTML += streetHTML;
                                }
                            });
                        }
                    }
                }
            });
        }

        var map = document.getElementById('map-main');
        if (typeof(map) != 'undefined' && map != null) {
            google.maps.event.addDomListener(window, 'load', mainMap(locations, 'map-main'));
        }
    });
</script>

<script>
    function getReverseGeocodingData(lat, lng) {
        const locator = document.getElementById('location-select');
        var latlng = new google.maps.LatLng(lat, lng);
        // This is making the Geocode request
        var geocoder = new google.maps.Geocoder();

        geocoder.geocode({
            'latLng': latlng
        }, (results, status) => {
            if (status !== google.maps.GeocoderStatus.OK) {
                console.log(status);
            }
            if (status == google.maps.GeocoderStatus.OK) {

                var address = (results[0].address_components[3].long_name).replace(/\s+/g, '-').toLowerCase();
                console.log('Got:' + address);
                switch (address) {
                    case 'minski-rajon':
                        address = 'minsk';
                        break;
                    case 'barysaŭski-rajon':
                        address = 'minsk';
                        break;
                    default:
                        break;
                }

                if (jQuery(`#location-select option[value="${address}"]`).text() == '') {
                    address = 'none';
                }

                console.log('Set:' + address);
                setCookie('location', address, {
                    'max-age': 21600
                });

                jQuery(`#location-select option[value="${address}"]`).attr('selected', 'selected');
                jQuery(`#location-select + .nice-select li[data-value="${address}"]`).addClass('selected');
                jQuery(`#location-select + .nice-select .current`).text(jQuery(`#location-select + .nice-select li[data-value="${address}"]`).text());

            }
        });

    }

    if (getCookie('location') == undefined) {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                getReverseGeocodingData(position.coords.latitude, position.coords.longitude)
            });
        }
    }
</script>

<script>
    jQuery(function($) {
        $(document).on('change', '#location-select', function() {
            setCookie('location', $(this).val());
            document.location.assign('http://solidauto.loc/sto/');
        })
    })

    jQuery(function($) {
        var map = document.getElementById('map-main');
        if (typeof(map) != 'undefined' && map != null) {
            google.maps.event.addDomListener(window, 'load', mainMap(locations));
        }
    })
</script>

<script>
    jQuery(function($) {
        $('#filters-search').on('click', function(e) {
            const features = [];

            $('#features-field li input:checked').each(function(i) {
                $val = $(this).val();
                features.push($val);
            })
            let text = features.join("+");
            $(this).find('input[name="features"]').val(text);

        });
    });
</script>

</body>

</html>