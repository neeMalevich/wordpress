<?php get_header() ?>

<div id="wrapper">
    <div class="content">
        <!-- Слайдер тест-->
        <div id="main-slider" class="hero-slider_wrap fl-wrap">
            <div class="hero-slider">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!--hero-slider-item-->
                        <div class="swiper-slide">
                            <div class="hero-slider-item fl-wrap">
                                <div class="bg-tabs-wrap">
                                    <div class="bg" data-bg="<?php echo get_template_directory_uri() ?>/images/front-bg.png"></div>
                                    <div class="overlay op7"></div>
                                </div>
                                <div class="container small-container">
                                    <div class="intro-item fl-wrap">
                                        <span>Solid Auto Service <br>Сеть надежных СТО</span>
                                        <p>Мы повышаем безопасность эксплуатации транспортных средств, делая доступным <br>качественный сервис технического обслуживания и ремонта</p>
                                        <a href="/sto/" class="btn color2-bg">Выбрать СТО</a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!--hero-slider-item end-->
                        <!--hero-slider-item-->
                        <div class="swiper-slide">
                            <div class="hero-slider-item fl-wrap">
                                <div class="bg-tabs-wrap">
                                    <div class="bg" data-bg="/wp-content/uploads/group-63-1.png"></div>
                                    <div class="overlay op7"></div>
                                </div>
                                <div class="container small-container">
                                    <div class="intro-item fl-wrap">
                                        <span>Акционные предложения <br>сети Solid Auto Service</span>
                                        <!--<h3>Мы гарантируем соблюдение технологии ремонта производителя <br>Вашего автомобиля квалифицированным персоналом</h3>-->
                                        <a href="/promo/" class="btn color2-bg mt-3">Подробнее об акциях</a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!--hero-slider-item end-->
                        <!--hero-slider-item-->
                        <!--<div class="swiper-slide">
                            <div class="hero-slider-item fl-wrap">
                                <div class="bg-tabs-wrap">
                                    <div class="bg" data-bg="/wp-content/uploads/group-68.png"></div>
                                    <div class="overlay op7"></div>
                                </div>
                                <div class="container small-container">
                                    <div class="intro-item fl-wrap">
                                        <h1>Совместная акция Solid Auto Service и сети магазинов АРМТЕК</h1>
                                        <h3>- Скидка 50% на развал-схождение при шиномонтаже 4х колес <br>- Скидка 10% на все услуги СТО</h3>
                                        <a href="/promo/sovmestnaja-akcija-solid-auto-service-i-seti-magazinov-armtek/" class="btn color2-bg">Подробнее об акции</a>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <!--hero-slider-item end-->
                    </div>
                </div>
            </div>
            <div class="listing-carousel_pagination hero_pagination">
                <div class="listing-carousel_pagination-wrap"></div>
            </div>
            <div class="slider-hero-button-prev shb"><i class="fas fa-caret-left"></i></div>
            <div class="slider-hero-button-next shb"><i class="fas fa-caret-right"></i></div>
        </div>
        <!-- Карточки услуг -->
        <section id="services-desktop" class="hide-on-small">
            <div class="container">
                <div class="section-title">
                    <div>Популярные услуги</div>
                    <span class="section-separator"></span>
                </div>
                <div class="listing-item-grid_container fl-wrap">
                    <div class="row">
                        <div class="col-sm-8">
                            <a href="/service/diagnostika-i-remont-tormoznoj-siste/" class="listing-item-grid">
                                <div class="bg" data-bg="/wp-content/uploads/tormoza.png"></div>
                                <div class="listing-counter color2-bg">
                                    <span> <?php echo get_term_by('slug', 'diagnostika-i-remont-tormoznoj-siste', 'service')->count; ?></span>
                                    станций
                                </div>
                                <div class="listing-item-grid_title">
                                    <span>Диагностика и ремонт тормозной системы</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="/service/zamena-masla-dvs/" class="listing-item-grid">
                                <div class="bg" data-bg="/wp-content/uploads/zamena-masla.png"></div>
                                <div class="listing-counter color2-bg">
                                    <span> <?php echo get_term_by('slug', 'zamena-masla-dvs', 'service')->count; ?></span>
                                    станций
                                </div>
                                <div class="listing-item-grid_title">
                                    <span>Замена масла ДВС</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="/service/diagnostika-i-remont-hodovoj-chasti/" class="listing-item-grid">
                                <div class="bg" data-bg="/wp-content/uploads/hodovaja.png"></div>
                                <div class="listing-counter color2-bg">
                                    <span> <?php echo get_term_by('slug', 'diagnostika-i-remont-hodovoj-chasti', 'service')->count; ?></span>
                                    станций
                                </div>
                                <div class="listing-item-grid_title">
                                    <span>Ремонт ходовой части</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="/service/remont-vyhlopnoj-sistemy/" class="listing-item-grid">
                                <div class="bg" data-bg="/wp-content/uploads/vyhlopnaja.png"></div>
                                <div class="listing-counter color2-bg">
                                    <span> <?php echo get_term_by('slug', 'remont-vyhlopnoj-sistemy', 'service')->count; ?></span>
                                    станций
                                </div>
                                <div class="listing-item-grid_title">
                                    <span>Ремонт выхлопной системы</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="/service/tehnicheskoe-obsluzhivanie/" class="listing-item-grid">
                                <div class="bg" data-bg="/wp-content/uploads/tehobsluzhivaanie.png"></div>
                                <div class="listing-counter color2-bg">
                                    <span> <?php echo get_term_by('slug', 'tehnicheskoe-obsluzhivanie', 'service')->count; ?></span>
                                    станций
                                </div>
                                <div class="listing-item-grid_title">
                                    <span>Техническое обслуживание</span>
                                </div>
                            </a>
                        </div>
                        <!--  listing-item-grid  -->
                    </div>
                </div>
            </div>
        </section>
        <!-- О компании -->
        <section id="about-us">
            <div class="container">
                <div class="section-title">
                    <h1>Solid Auto Service</h1>
                    <span class="section-separator"></span>
                </div>
                <div class="about-wrap">
                    <div class="row" style="display: flex;align-items: center;">
                        <div class="col-md-6">
                            <div class="list-single-main-media fl-wrap" style="box-shadow: 0 9px 26px rgba(58, 87, 135, 0.2);">
                                <img src="/wp-content/uploads/2021/12/service.png" class="respimg" alt="">
                                <a data-dynamicPath="[{'src': '/wp-content/uploads/2021/12/service.png'},{'src': '/wp-content/uploads/rectangle-439-2-1.png'},  {'src': '/wp-content/uploads/rectangle-440-1.png'}]" class="promo-link dynamic-gal gdop-list-link"><i class="fa fa-camera"></i><span>Галерея фото</span></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ab_text">

                                <p>Solid Auto Service — это самая крупная и быстро растущая сеть автосервисов в Республике Беларусь.</p>
                                <p>Мы объединили СТО под общим брендом с целью получения конкурентного преимущества на рынке по сравнению с остальными СТО и повышения удовлетворенности клиентов за счет обеспечения полноты и качества сервисного обслуживания!</p>
                                <a href="/about/" class="btn color2-bg float-btn custom-scroll-link">Подробнее о нас</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Баннер преимуществ -->
        <section id="features-banner" class="parallax-section" data-scrollax-parent="true">
            <div class="bg par-elem " data-bg="<?php echo get_template_directory_uri() ?>/images/long-bg.png" data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay op7"></div>
            <!--container-->
            <div class="container">
                <div class="section-title center-align big-title">
                    <span>Более 630 клиентов каждый день доверяют <br>нам свои автомобили</span>
                    <span class="section-separator"></span>
                </div>
            </div>
        </section>

        <!-- Блог -->
        <section id="services-blog" class="hide-on-small">
            <div class="container">
                <div class="section-title">
                    <div>Блог</div>
                    <span class="section-separator"></span>
                </div>
                <div id="article-cards">
                    <?php 
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                              $query->the_post();
                              $args = ['title' => get_the_title(), 'id' => get_the_ID(),'link'=>get_the_permalink(),'date'=>get_the_time('j F Y'),'excerpt'=>get_the_excerpt()];
                              get_template_part('template-parts/card', 'article', $args);
                            }
                          }
                          wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>

        <!-- Карточки преимуществ -->
        <section id="features-cards" class="absolute-wrap_section">
            <div class="container">
                <div class="absolute-wrap fl-wrap">
                    <!-- features-box-container -->
                    <div class="features-box-container fl-wrap">
                        <div class="row">
                            <!--features-box -->
                            <div class="col-md-4">
                                <div class="features-box">
                                    <i class="fas fa-map-marked-alt"></i>
                                    <span>В нашей сети 70 СТО в 35 городах Беларуси</span>
                                </div>
                            </div>
                            <!-- features-box end  -->
                            <!--features-box -->
                            <div class="col-md-4">
                                <div class="features-box">
                                    <i class="fas fa-file-search"></i>
                                    <span>Ежеквартальный аудит качества работы каждой СТО</span>
                                </div>
                            </div>
                            <!-- features-box end  -->
                            <!--features-box -->
                            <div class="col-md-4">
                                <div class="features-box ">
                                    <i class="fas fa-award"></i>
                                    <span>89% оценивают нашу работу на 8 и выше баллов</span>
                                </div>
                            </div>
                            <!-- features-box end  -->
                        </div>
                    </div>
                    <!-- features-box-container end  -->
                </div>
            </div>
        </section>
        <!-- Услуги на мобилке -->
        <section id="services-mobile" class="hide-on-large">
            <div class="container">
                <div class="section-title">
                    <h2>Наши услуги</h2>
                    <span class="section-separator"></span>
                </div>
                <div class="service-slider_wrap fl-wrap">
                    <div class="service-slider">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="/service/diagnostika-i-remont-tormoznoj-siste/" class="listing-item-grid">
                                    <div class="bg" data-bg="/wp-content/uploads/tormoza.png"></div>
                                    <div class="listing-counter color2-bg">
                                        <span> <?php echo get_term_by('slug', 'diagnostika-i-remont-tormoznoj-siste', 'service')->count; ?></span>
                                        станций
                                    </div>
                                    <div class="listing-item-grid_title">
                                        <span>Диагностика и ремонт тормозной системы</span>
                                    </div>
                                </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="/service/zamena-masla-dvs/" class="listing-item-grid">
                                        <div class="bg" data-bg="/wp-content/uploads/zamena-masla.png"></div>
                                        <div class="listing-counter color2-bg">
                                            <span> <?php echo get_term_by('slug', 'zamena-masla-dvs', 'service')->count; ?></span>
                                            станций
                                        </div>
                                        <div class="listing-item-grid_title">
                                            <span>Замена масла ДВС</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="/service/tehnicheskoe-obsluzhivanie/" class="listing-item-grid">
                                        <div class="bg" data-bg="/wp-content/uploads/tehobsluzhivaanie.png"></div>
                                        <div class="listing-counter color2-bg">
                                            <span> <?php echo get_term_by('slug', 'tehnicheskoe-obsluzhivanie', 'service')->count; ?></span>
                                            станций
                                        </div>
                                        <div class="listing-item-grid_title">
                                            <span>Техническое обслуживание</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="listing-carousel_pagination service_pagination">
                        <div class="listing-carousel_pagination-wrap-service"></div>
                    </div>
                    <div class="slider-service-button-prev shb"><i class="fas fa-caret-left"></i></div>
                    <div class="slider-service-button-next shb"><i class="fas fa-caret-right"></i></div>
                </div>
            </div>
        </section>
        <!-- Отзывы -->
        <section id="reviews">
            <div class="container">
                <div class="section-title">
                    <h2>Отзывы наших клиентов</h2>
                    <span class="section-separator"></span>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="testimonilas-carousel-wrap fl-wrap">
                <div class="listing-carousel-button listing-carousel-button-next"><i class="fas fa-caret-right"></i></div>
                <div class="listing-carousel-button listing-carousel-button-prev"><i class="fas fa-caret-left"></i></div>
                <div class="testimonilas-carousel">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php $posts = get_posts(['post_type' => 'review', 'posts_per_page' => 10]);
                            foreach ($posts as $post) {
                                setup_postdata($post); ?>
                                <div class="swiper-slide">
                                    <?php $args = [
                                        'person' => get_the_title(),
                                        'sto' => get_the_title(get_field('sto-review')),
                                        'review' => get_field('текст'),
                                        'rating' => get_field('оценка'),
                                        'link' => get_the_permalink(get_field('sto-review')),
                                        'class' => 'fl-wrap',
                                    ];
                                    get_template_part('template-parts/card', 'testimonial', $args) ?>
                                </div>
                            <?php }
                            wp_reset_postdata(); ?>

                        </div>
                    </div>
                </div>
                <div class="tc-pagination"></div>
            </div>
        </section>
        <!-- Карта -->
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

        <section id="map-section">
            <div class="container">
                <div class="section-title">
                    <h2>Наша сеть СТО</h2>
                    <span class="section-separator"></span>
                </div>

                <div class="map-wrapper">
                    <input id="autoComplete" type="search" dir="ltr" spellcheck=false autocorrect="off" autocomplete="off" autocapitalize="off">
                    <div id="map-secondary"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </section>
        <!--CTA
        <section id="cta">
            <div class="container">
                <div class="section-title">
                    <h2>Спецпредложение</h2>
                    <span class="section-separator"></span>
                </div>
                <!--about-wrap
                <div class="about-wrap">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="promo-text">
                                Чтобы знакомство с нами было приятным для вас, мы предлагаем вам поучаствовать в
                                <span>самой любимой акции</span> наших клиентов:
                                <br><br>
                                Замените масло ДВС и масляный фильтр всего за <span>1 копейку</span>,
                                при покупке масла и фильтра на СТО
                            </p>
                        </div>
                        <div class="col-md-4">
                            <?php
                            $stations = get_posts(['post_type' => 'sto', 'fields' => 'ids', 'posts_per_page' => -1]);
                            $cities = get_terms(['taxonomy' => 'city']);
                            ?>
                            <div class="list-single-main-item fl-wrap block_box">
                                <div class="list-single-main-item-title">
                                    <h3 class="text-center">Записаться на акцию</h3>
                                </div>
                                <div class="list-single-main-item_content fl-wrap">
                                    <div class="custom-form">
                                        <form id="specialoffer" class="main-register-form">
                                            <label><i class="fal fa-user"></i></label>
                                            <input name="name" type="text" placeholder="Ваше имя *" required>
                                            <div class="listsearch-input-item">
                                                <select data-placeholder="Город" name="city" class="chosen-select nice-select">
                                                    <option selected disabled value="">Выберите город</option>
                                                    <?php foreach ($cities as $c) {
                                                        echo '<option value="' . $c->term_id . '">' . $c->name . '</option>';
                                                    } ?>

                                                </select>
                                            </div>
                                            <div class="listsearch-input-item station-select">
                                                <select data-placeholder="СТО" name="station" class="chosen-select nice-select">
                                                    <option selected disabled value="">Выберите станцию</option>
                                                    <?php foreach ($stations as $s) {
                                                        echo '<option value="' . $s . '">' . get_the_title($s) . '</option>';
                                                    } ?>

                                                </select>
                                            </div>
                                            <label><i class="fal fa-phone"></i></label>
                                            <input name="phone" type="tel" required minlength="12">
                                            <button type="submit" class="btn color2-bg">Записаться</button>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        about-wrap end-->
    </div>
</div>
<?php get_footer() ?>
