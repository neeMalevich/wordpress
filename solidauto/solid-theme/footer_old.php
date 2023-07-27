    <footer class="main-footer fl-wrap">
        <!-- Подписка -->
        <div class="footer-header fl-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5">
                        <div class="subscribe-header">
                            <span>Подпишитесь на нашу рассылку</span>
                            <p>Делимся акционными предложениями нашей сети!</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-7">
                        <div class="subscribe-widget">
                            <div class="subcribe-form">
                                <!--<form id="subscribe">-->
                                <!--    <input class="enteremail fl-wrap" name="email" id="subscribe-email" placeholder="Введите свой Email" spellcheck="false" type="text">-->
                                <!--    <button type="submit" id="subscribe-button" class="subscribe-button"><i class="fal fa-envelope"></i></button>-->
                                <!--    <label for="subscribe-email" class="subscribe-message"></label>-->
                                <!--</form>-->
                                <?php echo do_shortcode('[contact-form-7 id="1295" title="Подписка на рассылку"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Основная часть -->
        <div class="footer-inner fl-wrap" style="background-image: url(/wp-content/themes/solid-theme/images/front-bg.png);">
            <div class="container d-flex">
                <div class="footer-widget fl-wrap">
                    <div class="footer-contacts-widget fl-wrap">
                        <div class="footer-heading">SOLID AUTO SERVICE</div>
                        <div class="footer-info">
                            <span>Общество с ограниченной ответственностью «Еврозапчасть» Адрес: 223053, Минская область, Минский район, Боровлянский с/с, д.81-4, р-н д. Дроздово,комн.316 УНН-190063577, ОКПО-37610868</span>
                            <a href="mailto:info@armtek.by">info@armtek.by</a>
                        </div>
                        <p>Подписывайтесь на наши социальные сети!</p>
                        <div class="footer-social">
                            <ul class="no-list-style">
                                <!-- Иконки  -->

                                <li>
                                    <a href="https://www.facebook.com/SolidAuto-Service-104065241102184" target="_blank">
                                        <img src="/wp-content/uploads/iconmonstr-facebook-4-240-1.png">
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.instagram.com/solidauto/" target="_blank">
                                        <img src="/wp-content/uploads/iconmonstr-instagram-14-240-1.png">
                                    </a>
                                </li>

                                <li>
                                    <a href="https://vk.com/solidautoservice" target="_blank">
                                        <img src="/wp-content/uploads/iconmonstr-vk-4-240-2.png">
                                    </a>
                                </li>

                                <!-- Иконки  -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-widget fl-wrap">
                    <span class="fw-title">Популярное</span>
                    <div class="footer-widget-posts fl-wrap">
                        <ul class="no-list-style footer-menu">
                            <li><a href="/service/diagnostika-i-remont-tormoznoj-siste/">Диагностика ТС</a></li>
                            <li><a href="/service/zamena-masla-dvs/">Замена масла ДВС</a></li>
                            <li><a href="/service/diagnostika-i-remont-hodovoj-chasti/">Ремонт ходовой части</a></li>
                            <li><a href="/service/remont-vyhlopnoj-sistemy/">Ремонт выхлопной системы</a></li>
                            <li><a href="/service/tehnicheskoe-obsluzhivanie/">Техобслуживание</a></li>
                            <li><a href="/service/">Все услуги</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-widget fl-wrap">
                    <span class="fw-title">Компания</span>
                    <div class="footer-widget-posts fl-wrap">
                        <ul class="no-list-style footer-menu">
                            <li><a href="/sto/">Все СТО</a></li>
                            <li><a href="/promo/">Акции</a></li>
                            <li><a href="/about/">О нас</a></li>
                            <li><a href="/partnership/">Партнерство</a></li>
                            <li><a href="/supplier/">Поставщики</a></li>
                            <li><a href="/blog/">Блог SAS</a></li>
                            <li><a href="/review/">Отзывы</a></li>
                            <li><a href="/vacancy/">Вакансии</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-widget fl-wrap">
                    <span class="fw-title">Заказать звонок</span>
                    <?php echo do_shortcode('[contact-form-7 id="289" title="Заказать звонок (футер)"]'); ?>
                    <a href="tel:7044" class="footer-phone">
                        <i class="fas fa-phone-alt"></i>
                        <span id="header-phone">7044</span>
                    </a>
                </div>
            </div>
            <div class="overlay op7"></div>
        </div>
        <!-- Credits -->
        <div class="sub-footer  fl-wrap">
            <div class="container">
                <div class="copyright">© <?php echo date("Y"); ?>, Solid Auto Service. Все права защищены</div>
                <div class="subfooter-nav">
                    Разработка сайта - Студия Reliance <br>
                    <a style="color: #fff;" href="https://cropas.by">SEO продвижение</a> - <a style="color: #fff;" href="https://cropas.by">Сropas.by</a>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <!--=============== scripts  ===============-->
    <?php wp_footer(); ?>
    <script>
        jQuery(function($) {
            $('form#subscribe').on('submit', function(e) {
                e.preventDefault();
                $form = $(this);

                $.ajax({
                    url: '/wp-admin/admin-ajax.php',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        action: 'subscribe',
                        email: $form.find('[name="email"]').val(),

                    },
                }).done(function(response) {
                    $form.trigger("reset");
                    $('.modal-thanks , .reg-overlay').fadeIn(200);
                    $(".modal-thanks .modal_main").addClass("vis_mr");
                    $("html, body").addClass("hid-body");
                    $(".modal-thanks .modal-body").html(response.msg);
                });
            });
        });
    </script>

    <script>
        jQuery(function($) {
            $('form#send_cv').on('submit', function(e) {
                e.preventDefault();
                $form = $(this);

                $.ajax({
                    url: '/wp-admin/admin-ajax.php',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        action: 'send_cv',
                        name: $form.find('[name="name"]').val(),
                        phone: $form.find('[name="phone"]').val(),
                        vacancy: $form.find('[name="vacancy"]').val(),

                    },
                }).done(function(response) {
                    $form.trigger("reset");
                    $('.modal-thanks , .reg-overlay').fadeIn(200);
                    $(".modal-thanks .modal_main").addClass("vis_mr");
                    $("html, body").addClass("hid-body");
                    $(".modal-thanks .modal-body").html(response.msg);
                    $form.find('.btn').css('pointer-events', 'none');
                });
            });
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
                // document.location.assign('http://solidauto.loc/sto/');
            })
        })

        jQuery(function($) {
            $(document).on('click', '#loadmore', function() {
                $height = $(this).parent().siblings('#service-cards').css('max-height');
                $(this).parent().siblings('#service-cards').css('max-height', parseInt($height) + 390);
            })
        })
        jQuery(function($) {
            $('#widget-services #loadmore').on('click', function() {
                $height = $(this).parent().siblings('.d-flex').css('max-height');
                $(this).parent().siblings('.d-flex').css('max-height', parseInt($height) + 360);
            })
        })
    </script>

    <script>
        jQuery(function($) {
            $('#service-search input').on('keyup', function() {
                $.ajax({
                    url: '/wp-admin/admin-ajax.php',
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        action: 'service_search',
                        keyword: $('input[name="keyword"]').val(),
                        mobile: <?php echo isMobileDevice(); ?>
                    },
                    success: function(response) {
                        $('#service-section').html(response);
                    }

                })
            });
        });
    </script>

    <script>
        jQuery(function($) {
            if (document.querySelector('#autoComplete')) {
                const autoCompleteJS = new autoComplete({
                    selector: "#autoComplete",
                    placeHolder: "Поиск СТО...",
                    data: {
                        src: locations.map((location, index) => ({
                            id: index,
                            title: location[5],
                            address: location[6],
                            lat: location[1],
                            lng: location[2],
                        })),
                        cache: true,
                        keys: ['title', 'address'],
                    },
                    resultsList: {
                        element: (list, data) => {
                            if (!data.results.length) {
                                // Create "No Results" message element
                                const message = document.createElement("div");
                                // Add class to the created element
                                message.setAttribute("class", "no_result");
                                // Add message text content
                                message.innerHTML = `<span>Found No Results for "${data.query}"</span>`;
                                // Append message element to the results list
                                list.prepend(message);
                            }
                        },
                        noResults: true,
                    },
                    resultItem: {
                        highlight: true
                    },
                    events: {
                        input: {
                            selection: (event) => {
                                const selection = event.detail.selection.value;
                                autoCompleteJS.input.value = `${selection.title} - ${selection.address}`;
                                const mapInstance = document.getElementById('map-secondary').mapInstance;
                                if (mapInstance) {
                                    mapInstance.panTo(
                                        new google.maps.LatLng(selection.lat, selection.lng)
                                    );
                                    mapInstance.setZoom(17);
                                }
                            }
                        }
                    }
                });
            }

            var map = document.getElementById('map-secondary');
            if (typeof(map) != 'undefined' && map != null) {
                google.maps.event.addDomListener(window, 'load', mainMap(locations, 'map-secondary'));
            }
        });
    </script>
    <script>
        jQuery(function($) {
            $('#review-filter select').on('change', function() {
                $.ajax({
                    url: '/wp-admin/admin-ajax.php',
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        action: 'review_filter',
                        city: $('#review-filter select[name="city"]').val(),
                        station: $('#review-filter select[name="station"]').val(),
                    },
                    success: function(response) {
                        $('#review-cards').html(response);
                    }

                })
            });
        });
    </script>
    <script>
        jQuery(function($) {
            $('#vacancy-filter select').on('change', function() {
                $.ajax({
                    url: '/wp-admin/admin-ajax.php',
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        action: 'vacancy_filter',
                        city: $('#vacancy-filter select[name="city"]').val(),
                        station: $('#vacancy-filter select[name="station"]').val(),
                    },
                    success: function(response) {
                        $('#vacancy-cards').html(response);
                    }

                })
            });
        });
    </script>

    <script>
        jQuery(document).on('focus', "input[type='tel']", function() {
            IMask($(this)[0], {
                mask: '+{375} (00) 000-00-00',
                lazy: true, // make placeholder always visible
                placeholderChar: '_' // defaults to '_'
            });
        })
    </script>

    <script>
        jQuery(function($) {
            $('#loginform').on('submit', function(e) {
                $form = $(this);
                $.ajax({
                    url: '/wp-admin/admin-ajax.php',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        action: 'front_login',
                        log: $form.find('input[name="email"]').val(),
                        pwd: $form.find('input[name="password"]').val(),
                        rememberme: true
                    },
                    success: function(response) {
                        if (response.success) {
                            window.location.replace('/account/');
                        } else {
                            alert(response.msg);
                        }
                    }

                })
                e.preventDefault();
            });
        });
    </script>

    <script>
        jQuery(function($) {
            $('.add-review select[name="city"]').on('change', function(e) {
                e.preventDefault();
                $stationSelect = $('.add-review .station-select');

                $.ajax({
                        url: '/wp-json/wp/v2/sto?city=' + $(this).val(),
                        type: 'GET',
                        dataType: 'json',
                    })
                    .done(function(response) {
                        $stationSelect.html('');
                        $stationSelect.append('<select data-placeholder="СТО" required name="station" class="chosen-select nice-select">');

                        response.forEach(function(e) {
                            $option = $('<option value="' + e.id + '"></option>').text(e.title.rendered);
                            $stationSelect.find('select').append($option);
                        })

                        $stationSelect.append('</div>');
                        $stationSelect.find('select').niceSelect();
                        $stationSelect.removeClass('d-none');

                    });
            });
        });
    </script>

    <script>
        jQuery(function($) {
            $('form.add-review').on('submit', function(e) {
                e.preventDefault();
                $form = $(this);
                $city = $form.find('[name="city"]').val();
                if ($form.find('[name="station_text"]').val()) {
                    $station_text = $form.find('[name="station_text"]').val();
                } else {
                    $station_text = $form.find('[name="station"]').siblings('.nice-select').find('.current').text();
                }

                if ($city == 'none') {
                    alert('Выберите станцию!');
                    return false;
                }
                $.ajax({
                    url: '/wp-admin/admin-ajax.php',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        action: 'add_review',
                        city: $city,
                        station: $form.find('[name="station"]').val(),
                        rating: $form.find('select[name="rating"]').val(),
                        author: $form.find('input[name="author"]').val(),
                        phone: $form.find('input[name="phone"]').val(),
                        review: $form.find('textarea[name="review"]').val(),
                        station_text: $station_text
                    },
                }).done(function(response) {
                    $form.trigger("reset");
                    $('.modal-thanks , .reg-overlay').fadeIn(200);
                    $(".modal-thanks .modal_main").addClass("vis_mr");
                    $("html, body").addClass("hid-body");
                    $(".modal-thanks .modal-body").html(response.msg);
                });
            });
        });
    </script>

    <script>
        jQuery(function($) {
            $('form.promo-form select[name="city"]').on('change', function(e) {
                e.preventDefault();
                $stationSelect = $('.promo-form .station-select');
                $promoID = <?php echo get_the_ID(); ?>;
                $.ajax({
                        url: '/wp-json/wp/v2/sto?city=' + $(this).val(),
                        type: 'GET',
                        dataType: 'json',
                    })
                    .done(function(response) {
                        $stationSelect.html('');
                        $stationSelect.append('<select data-placeholder="СТО" required name="station" class="chosen-select nice-select">');

                        response.forEach(function(e) {
                            if (e.acf['sto-promo'].includes($promoID)) {
                                $option = $('<option value="' + e.id + '"></option>').text(e.title.rendered);
                                $stationSelect.find('select').append($option);
                            }

                        })

                        $stationSelect.append('</div>');
                        $stationSelect.find('select').niceSelect();
                        $stationSelect.removeClass('d-none');

                    });
            });
        });
    </script>

    <script>
        jQuery(function($) {
            $('form.service-form select[name="city"]').on('change', function(e) {
                e.preventDefault();
                $stationSelect = $('.service-form .station-select');
                $serviceID = <?php echo get_queried_object_id(); ?>;
                $.ajax({
                        url: '/wp-json/wp/v2/sto?city=' + $(this).val(),
                        type: 'GET',
                        dataType: 'json',
                    })
                    .done(function(response) {
                        $stationSelect.html('');
                        $stationSelect.append('<select data-placeholder="СТО" required name="station" class="chosen-select nice-select">');

                        if (response.length > 0) {
                            response.forEach(function(e) {
                                if (e.acf['услуги'].includes($serviceID)) {
                                    $option = $('<option value="' + e.id + '"></option>').text(e.title.rendered);
                                    $stationSelect.find('select').append($option);
                                }

                            })
                        } else {
                            alert('Станций не найдено!');
                        }

                        $stationSelect.append('</div>');
                        $stationSelect.find('select').niceSelect();
                        $stationSelect.removeClass('d-none');

                    });
            });
        });
    </script>

    <script>
        jQuery(function($) {
            $('form#specialoffer select[name="city"]').on('change', function(e) {
                e.preventDefault();
                $stationSelect = $('form#specialoffer .station-select');
                $.ajax({
                        url: '/wp-json/wp/v2/sto?city=' + $(this).val(),
                        type: 'GET',
                        dataType: 'json',
                    })
                    .done(function(response) {
                        $stationSelect.html('');
                        $stationSelect.append('<select data-placeholder="СТО" required name="station" class="chosen-select nice-select">');

                        if (response.length > 0) {
                            response.forEach(function(e) {
                                $option = $('<option value="' + e.id + '"></option>').text(e.title.rendered);
                                $stationSelect.find('select').append($option);
                            })
                        } else {
                            alert('Станций не найдено!');
                        }

                        $stationSelect.append('</div>');
                        $stationSelect.find('select').niceSelect();
                        $stationSelect.removeClass('d-none');

                    });
            });
        });
    </script>

    <script>
        jQuery(function($) {
            $('form#appeal-form').on('submit', function(e) {
                e.preventDefault();
                $form = $(this);

                $.ajax({
                    url: '/wp-admin/admin-ajax.php',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        action: 'add_appeal',
                        city: $form.find('[name="city"]').siblings('.nice-select').find('.current').text(),
                        station: $form.find('[name="station"]').siblings('.nice-select').find('.current').text(),
                        client: $form.find('input[name="client"]').val(),
                        phone: $form.find('input[name="phone"]').val(),
                        service: $form.find('input[name="service"]').val(),
                        promo: $form.find('input[name="promo"]').val(),
                    },
                }).done(function(response) {
                    $form.trigger("reset");
                    $('.modal-thanks , .reg-overlay').fadeIn(200);
                    $(".modal-thanks .modal_main").addClass("vis_mr");
                    $("html, body").addClass("hid-body");
                    $(".modal-thanks .modal-body").html(response.msg);
                });
            });
        });
    </script>

    // <script>
        //     jQuery(function($) {
        //         $(".rank-math-breadcrumb span:contains('Услуги'):not(:last-child)").replaceWith( "<a href='/service/'>Услуги</a>");
        //     });
        // 
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "Беларусь",
                "addressRegion": "Минский район",
                "addressLocality": "Боровлянский с/с",
                "streetAddress": "д.81-4, ком. 316"
            },
            "name": "Solid Auto Service",
            "telephone": "7044"
        }
    </script>

    </body>

    </html>