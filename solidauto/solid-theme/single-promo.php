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
                        <div class="list-single-main-media fl-wrap">
                            <img width="100%" src="<?php echo wp_get_attachment_image_src(get_field('обложка'), 'full')[0]; ?>">
                        </div>
                        <div class="list-single-main-item fl-wrap block_box">
                            <h1 class="post-opt-title"><?php the_title(); ?></h1>
                            <div id="promo-deadline">
                                Сроки проведения акции:
                                <?php if (get_field('дата_начала') && get_field('дата_окончания')) {
                                    echo ' с <span>'.get_field('дата_начала').'</span> по <span>'. get_field('дата_окончания') .'</span>';
                                } else{
                                    echo 'бессрочно';
                                } ?>
                            </div>
                            <span class="fw-separator"></span>
                            <div class="clearfix"></div>
                            <div id="description-with-picture-content"><?php the_content(); ?></div>
                            
                                <?php $cities = get_field('город');
                                if ($cities) {
                                    echo '<div id="promo-cities"><span>Города: </span>';

                                    foreach ($cities as $term) { ?>

                                        <a href="/sto/?city=<?php echo $term->slug; ?>"><span><?php echo $term->name; ?></span><span>, </span></a>

                                <?php 
                                }
                                echo '</div>';
                                } ?>
                            
                        </div>

                    </article>
                </div>

                <div id="widget-promo-location" class="list-single-main-item fl-wrap block_box">
                    <div class="list-single-main-item-title">
                        <h2>Акция действует в следующих СТО</h2>
                    </div>
                    <div class="list-single-main-item_content fl-wrap">
                        <script>
                            var locations = [];
                        </script>
                        
                        <?php $stations = get_field('sto-promo');
                        foreach ($stations as $s) { ?>
                            <script>
                                var listing = [
                                    locationData("<?php echo get_permalink($s); ?>", "/wp-content/uploads/65.png", "<?php echo get_the_title($s); ?>", "<?php echo get_field('адрес', $s) ?>", "5", <?php echo get_field('phone', $s)[0]['номер'] ?>),
                                    <?php echo get_field('карта', $s)['lat']; ?>, <?php echo get_field('карта', $s)['lng']; ?>, "", '/wp-content/uploads/group-64-2.png'
                                ];
                                locations.push(listing);
                            </script>
                        <?php } ?>
                        <div id="map-secondary"></div>
                    </div>
                </div>
                
                <?php if(get_field('ended') == 0) { ?>
                <div id="widget-form" class="list-single-main-item fl-wrap block_box">
                    <div class="list-single-main-item-title fl-wrap">
                        <span>Записаться на СТО по акции</span>
                    </div>
                    <div class="promo-form-box">
                        <form id="appeal-form" class="promo-form custom-form">
                            <fieldset>
                                <div class="list-single-main-item_content fl-wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label><i class="fal fa-user"></i></label>
                                            <input type="text" name="client" placeholder="Ваше имя *">
                                            <div class="clearfix"></div>
                                            <label><i class="fal fa-phone"></i> </label>
                                            <input type="tel" name="phone" placeholder="Телефон *">
                                            <label><i class="fal fa-cogs"></i> </label>
                                            <input type="text" value="<?php the_title(); ?>" required name="promo" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="listsearch-input-item">
                                                <select data-placeholder="Город" name="city" class="chosen-select nice-select">
                                                    <option selected disabled value="none">Выберите город</option>
                                                    <?php foreach ($cities as $c) {
                                                        echo '<option value="' . $c->term_id . '">' . $c->name . '</option>';
                                                    } ?>
                
                                                </select>
                                            </div>
                                            <div class="listsearch-input-item station-select">
                                                <select data-placeholder="Город" name="station" class="chosen-select nice-select">
                                                    <option selected value="none">Выберите СТО</option>
                                                    <?php foreach ($stations as $s) {
                                                        echo '<option value="' . $s . '">' . get_the_title($s) . '</option>';
                                                    } ?>
                
                                                </select>
                                            </div>
                                            <button class="btn  color2-bg  d-block" style="width:100%; margin-top:0; padding:15px; padding-bottom:13px">Записаться</button>

                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <?php } ?>

            </div>

            <div class="col-md-4">

                <?php $args = ['title' => 'Акции Solid Auto'];
                get_template_part('template-parts/sidebar', 'posts', $args) ?>

            </div>

        </div>

    </div>
</section>
<div class="limit-box fl-wrap"></div>

<?php get_footer() ?>