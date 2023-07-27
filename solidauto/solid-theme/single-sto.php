<?php get_header() ?>

<section id="single-sto-banner" class="listing-hero-section hidden-section" data-scrollax-parent="true" id="sec1">
    <div class="bg par-elem " data-bg="<?php echo get_template_directory_uri() ?>/images/front-bg.png" data-scrollax="properties: { translateY: '30%' }"></div>
    <div class="overlay op7"></div>
    <div class="container">
        <div class="list-single-header-item  fl-wrap">
            <div class="row d-flex">
                <div class="col-12 col-md-12 d-flex">
                    <h1><?php the_title() ?></h1>
                </div>
                <!--<div class="col-12 col-md-3 mt-auto">-->
                <!--    <a class="fl-wrap list-single-header-column" href="#widget-testimonials">-->
                <!--        <div class="listing-rating-count-wrap single-list-count">-->
                <!--            <div class="reviews-count">Отзывы</div>-->
                <!--            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>-->

                <!--        </div>-->
                <!--    </a>-->
                <!--</div>-->
            </div>
        </div>

    </div>
</section>
<section id="sto-main-section" class="gray-bg no-top-padding">
    <div class="container">
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-8">
                <?php if (isMobileDevice()) { ?>
                    <div id="sidebar-form" class="box-widget-item fl-wrap block_box">
                        <div class="box-widget">
                            <span>Получить консультацию мастера</span>
                            <?php echo do_shortcode('[contact-form-7 id="285" title="Получить консультацию мастера"]'); ?>
                        </div>
                    </div>
                <?php } ?>
                
                <!-- Галерея -->
                <?php $args = ['gallery' => true, 'images' => get_field('галерея')];
                get_template_part('template-parts/widget', 'gallery', $args) ?>
                
                <!-- Описание -->
                <?php 
                /*
                $args = ['title' => 'Описание ' . get_the_title(), 'content' => get_field('описание'), 'spoiler' => false];
                get_template_part('template-parts/widget', 'description', $args) 
                */
                ?>
                
                <!-- Контакты на мобилке -->
                <?php if (isMobileDevice()) { ?>
                    <?php $phones = get_field('phone');
                    $timetable = get_field('время_работы'); ?>
                    <div id="sidebar-contacts" class="box-widget-item fl-wrap block_box">
                        <div class="box-widget">
                            <div class="map-container">
                                <div id="singleMap" data-latitude="<?php echo get_field('карта')['lat']; ?>" data-longitude="<?php echo get_field('карта')['lng']; ?>" data-mapTitle="СТО на карте"></div>
                            </div>
                            <div class="box-widget-content bwc-nopad">
                                <div class="list-author-widget-contacts list-item-widget-contacts bwc-padside">
                                    <ul class="no-list-style">
                                        <li><span><i class="fal fa-map-marker"></i></span> <a href="#"><?php the_field('адрес') ?></a></li>
                                        <li>
                                            <span><i class="fal fa-phone"></i></span>
                                            <div class="tel-wrapper">
                                                <?php foreach ($phones as $phone) {
                                                    echo '<a href="tel:+' . $phone['номер'] . '">+' . $phone['номер'] . '<b>,</b></a>';
                                                } ?>
                                            </div>
                                        </li>
                                        <li><span><i class="fal fa-envelope"></i></span> <a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a></li>
                                        <li>
                                            <span><i class="fal fa-browser"></i></span>
                                            <div class="timetable-wrapper">
                                                <?php foreach ($timetable as $row) {
                                                    if (!$row['время_начала'] || !$row['время_окончания']) {
                                                        echo '<a><b>' . $row['день'] . ':</b>выходной</a>';
                                                    } else {
                                                        echo '<a><b>' . $row['день'] . ':</b>' . $row['время_начала'] . '-' . $row['время_окончания'] . '</a>';
                                                    }
                                                } ?>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="https://www.google.com/maps/dir/?api=1&destination=<?php echo get_field('карта')['lat']; ?>,<?php echo get_field('карта')['lng']; ?>" class="btn color2-bg w-100">Построить маршрут</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- Преимущества -->
                <?php $cur_terms = get_the_terms(get_the_ID(), 'features');
                if ($cur_terms) { ?>

                    <div class="list-single-main-item fl-wrap block_box">
                        <div class="listing-features-widget list-single-main-item_content fl-wrap">
                            <div class="listing-features fl-wrap">
                                <ul class="no-list-style">
                                    <?php foreach ($cur_terms as $term) {
                                        $icon_id = get_field('иконка', $term);
                                        $icon = wp_get_attachment_image_src($icon_id, 'full')[0]; ?>
                                        <li>
                                            <img src="<?php echo $icon; ?>" alt="">
                                            <?php echo $term->name ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            
                <!-- Услуги -->
                <?php 
                $terms = get_field('услуги');
                if ($terms) { ?>
                
                <div id="widget-services" class="list-single-main-item fl-wrap block_box">
                    <div class="list-single-main-item-title">
                        <h3>Услуги <?php the_title(); ?></h3>
                    </div>
                    <div class="list-single-main-item_content fl-wrap">
                        <div class="d-flex">
                            <?php
                            foreach ($terms as $term) {
                                    $icon_id = get_field('иконка', 'term_' . $term);
                                    $icon = wp_get_attachment_image_src($icon_id, 'full')[0]; ?>

                                    <a href="/service/<?php echo get_term($term, 'service')->slug; ?>/" class="service-card">
                                        <img src="<?php echo $icon; ?>" alt="">
                                        <h4><?php echo get_term($term, 'service')->name; ?></h4>
                                    </a>
                            <?php } ?>
                        </div>
                        <div class="button-wrapper">
                            <a id="loadmore" class="btn color2-bg">Показать еще</a>
                        </div>
                    </div>
                </div>
                
                <?php } ?>
                
                <?php $query = get_field('sto-review');
                $currentSto = get_the_title();
                if ($query) { ?>
                    <div id="widget-testimonials" class="list-single-main-item fl-wrap block_box">
                        <div class="list-single-main-item-title">
                            <h3>Отзывы</h3>
                        </div>
                        <div class="list-single-main-item_content fl-wrap">
                            <div class="testimonilas-carousel-wrap fl-wrap">
                                <div class="listing-carousel-button listing-carousel-button-next"><i class="fas fa-caret-right"></i></div>
                                <div class="listing-carousel-button listing-carousel-button-prev"><i class="fas fa-caret-left"></i></div>
                                <div class="testimonilas-carousel">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <?php foreach ($query as $post) {
                                                setup_postdata($post); 
                                                if($post->post_status == 'draft'){continue;}
                                                ?>

                                                <div class="swiper-slide">
                                                    <?php $args = [
                                                        'person' => get_the_title(),
                                                        'sto' => $currentSto,
                                                        'review' => get_field('текст'),
                                                        'rating' => get_field('оценка'),
                                                        'link' => '#widget-testimonials',
                                                        'class' => '',
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
                        </div>
                    </div>
                <?php } ?>
                
                <!-- Оставить отзыв -->
                
                <?php $args = ['title' => 'Оставить отзыв'];
                get_template_part('template-parts/widget', 'addreview', $args) ?>

            </div>
            <?php if (!isMobileDevice()) { ?>
                <div class="col-md-4 sticky">
                    <!--Контакты-->
                    <?php $phones = get_field('phone');
                    $timetable = get_field('время_работы'); ?>
                    <div id="sidebar-contacts" class="box-widget-item fl-wrap block_box">
                        <div class="box-widget">
                            <div class="map-container">
                                <div id="singleMap" data-latitude="<?php echo get_field('карта')['lat']; ?>" data-longitude="<?php echo get_field('карта')['lng']; ?>" data-mapTitle="Our Location"></div>
                            </div>
                            <div class="box-widget-content bwc-nopad">
                                <div class="list-author-widget-contacts list-item-widget-contacts bwc-padside">
                                    <ul class="no-list-style">
                                        <li><span><i class="fal fa-map-marker"></i></span> <a href="#"><?php the_field('адрес') ?></a></li>
                                        <li>
                                            <span><i class="fal fa-phone"></i></span>
                                            <div class="tel-wrapper">
                                                <?php foreach ($phones as $phone) {
                                                    echo '<a href="tel:+' . $phone['номер'] . '">+' . $phone['номер'] . '<b>,</b></a>';
                                                } ?>
                                            </div>
                                        </li>
                                        <li><span><i class="fal fa-envelope"></i></span> <a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a></li>
                                        <li>
                                            <span><i class="fal fa-browser"></i></span>
                                            <div class="timetable-wrapper">
                                                <?php foreach ($timetable as $row) {
                                                    if (!$row['время_начала'] || !$row['время_окончания']) {
                                                        echo '<a><b>' . $row['день'] . ':</b>выходной</a>';
                                                    } else {
                                                        echo '<a><b>' . $row['день'] . ':</b>' . $row['время_начала'] . '-' . $row['время_окончания'] . '</a>';
                                                    }
                                                } ?>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="https://www.google.com/maps/dir/?api=1&destination=<?php echo get_field('карта')['lat']; ?>,<?php echo get_field('карта')['lng']; ?>" class="btn color2-bg w-100">Построить маршрут</a>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div id="sidebar-form" class="box-widget-item fl-wrap block_box">
                        <div class="box-widget">
                            <h4>Получить консультацию мастера</h4>
                            <?php echo do_shortcode('[contact-form-7 id="285" title="Получить консультацию мастера"]'); ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php get_footer() ?>