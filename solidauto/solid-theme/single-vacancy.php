<?php get_header() ?>

<section class="gray-bg no-top-padding">
    <div class="container">
        <div class="inline-breadcrumbs fl-wrap block-breadcrumbs">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
            <div class="showshare brd-show-share color2-bg">Поделиться<i class="fas fa-share"></i></div>
        </div>

        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-8">
                <div id="widget-description-with-picture" class="list-single-main-wrapper fl-wrap" id="sec2">
                    <article class="post-article single-post-article">
                        <div class="list-single-main-item fl-wrap block_box" style="border-radius: 10px;">
                            <h1 class="post-opt-title">
                                <?php the_title(); ?>
                                (<?php echo get_term(get_field('город'))->name; ?>, 
                                <?php
                                    $sv = get_field('sto-vacancy');
                                    if( $sv ): ?>
                                        <?php echo esc_html( $sv->post_title ); ?>
                                    <?php endif; ?>
                                    
                                )
                            </h1>
                            <span class="fw-separator"></span>
                            <div class="clearfix"></div>
                            <div id="promo-deadline">Описание вакансии:</div>
                            <div id="description-with-picture-content"><?php the_field('текст'); ?></div>
                        </div>

                    </article>
                </div>

                <div id="widget-form" class="list-single-main-item fl-wrap block_box">
                    <div class="list-single-main-item-title fl-wrap">
                        <span>Откликнуться на вакансию</span>
                    </div>
                    <div class="add-review-box">
                        <form id="send_cv" class="add-comment custom-form">
                        <input type="hidden" name="vacancy" value="<?php echo get_the_title(); ?>" />
                            <fieldset>
                                <div class="list-single-main-item_content fl-wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label><i class="fal fa-user"></i></label>
                                            <input required type="text" name="name" placeholder="Ваше имя *" value="" />
                                        </div>
                                        <div class="col-md-6">
                                            <label><i class="fal fa-phone"></i> </label>
                                            <input required type="tel" name="phone" placeholder="Телефон *" value="" />
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <button class="btn  color2-bg  float-btn">Отправить</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="box-widget-item fl-wrap block_box">
                    <div class="box-widget">
                        <div class="map-container">
                            <div id="singleMap" 
                                data-latitude="<?php echo get_field('карта', get_field('sto-vacancy'))['lat']; ?>" 
                                data-longitude="<?php echo get_field('карта', get_field('sto-vacancy'))['lng']; ?>" 
                                data-mapTitle="СТО на карте">
                            </div>
                        </div>
                        <?php $phones = get_field('phone', get_field('sto-vacancy'));
                        $timetable = get_field('время_работы', get_field('sto-vacancy')); ?>
                        <div class="box-widget-content bwc-nopad">
                                <div class="list-author-widget-contacts list-item-widget-contacts bwc-padside">
                                    <ul class="no-list-style">
                                        <li><span><i class="fal fa-map-marker"></i></span> <a href="#"><?php the_field('адрес', get_field('sto-vacancy')) ?></a></li>
                                        <li>
                                            <span><i class="fal fa-phone"></i></span>
                                            <div class="tel-wrapper">
                                                <?php foreach ($phones as $phone) {
                                                    echo '<a href="tel:+' . $phone['номер'] . '">+' . $phone['номер'] . '<b>,</b></a>';
                                                } ?>
                                            </div>
                                        </li>
                                        <li><span><i class="fal fa-envelope"></i></span> <a href="mailto:<?php the_field('email', get_field('sto-vacancy')) ?>"><?php the_field('email', get_field('sto-vacancy')) ?></a></li>
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
                                    <a href="https://www.google.com/maps/dir/?api=1&destination=<?php echo get_field('карта', get_field('sto-vacancy'))['lat']; ?>,<?php echo get_field('карта', get_field('sto-vacancy'))['lng']; ?>" class="btn color2-bg w-100">Построить маршрут</a>
                                </div>


                            </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
<div class="limit-box fl-wrap"></div>

<?php get_footer() ?>