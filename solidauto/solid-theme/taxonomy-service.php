<?php get_header() ?>
<?php $args = ['title' => single_term_title('', 0)];
get_template_part('template-parts/banner', null, $args) ?>

<div id="single-service" class="row">

    <div class="col-md-8">
        <div class="list-single-main-wrapper fl-wrap">
            <?php $term = get_queried_object();
            $args = ['gallery' => false, 'image' => get_field('обложка', $term)];
            get_template_part('template-parts/widget', 'gallery', $args) ?>

            <?php $args = ['title' => 'Описание услуги', 'content' => get_field('content', $term)];
            get_template_part('template-parts/widget', 'description', $args) ?>

            <div id="widget-form" class="list-single-main-item fl-wrap block_box">
                    
                <div class="list-single-main-item-title fl-wrap">
                    <span>Записаться на услугу</span>
                </div>
                <div class="service-form-box">
                    <form id="appeal-form" class="service-form custom-form">
                        <fieldset>
                            <div class="list-single-main-item_content fl-wrap">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label><i class="fal fa-user"></i></label>
                                        <input type="text" required name="client" placeholder="Ваше имя *">
                                        <div class="clearfix"></div>
                                        <label><i class="fal fa-phone"></i> </label>
                                        <input type="tel" required name="phone" placeholder="Номер телефона *">
                                        <label><i class="fal fa-cogs"></i> </label>
                                        <input type="text" value="<?php echo single_term_title('', 0); ?>" required name="service" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="listsearch-input-item">
                                            <select data-placeholder="Город" name="city" class="chosen-select nice-select">
                                                <option selected disabled value="none">Выберите город</option>
                                                <?php
                                                
                                                $stations = get_posts([
                                                    'post_type'     => 'sto', 
                                                    'fields' => 'ids',
                                                    'posts_per_page' => -1,
                                                    'tax_query' => [
                                                		[
                                                			'taxonomy' => 'service',
                                                			'field'    => 'id',
                                                			'terms'    => get_queried_object()->term_id,
                                                		],
                                                	]
                                                ]);
                                                
                                                $cities = [];
                                                foreach ($stations as $s) {
                                                    array_push($cities, get_field('город', $s));
                                                }
                                                
                                                foreach (array_unique($cities) as $c) {
                                                    echo '<option value="' . get_term($c)->term_id . '">' . get_term($c)->name . '</option>';
                                                } 
                                                
                                                ?>
            
                                            </select>
                                        </div>
                                        <div class="listsearch-input-item station-select">
                                            <select data-placeholder="Город" name="station" class="chosen-select nice-select">
                                                <option selected value="none">Выберите СТО</option>
                                                <?php 
                                                
                                                
                                                
                                                foreach ($stations as $s) {
                                                    echo '<option value="' . $s . '">' . get_the_title($s) . '</option>';
                                                } 
                                                
                                                ?>
            
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

            <div class="blog-slider_wrap fl-wrap">
                <div class="blog-slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper ">
                            <?php $query = get_posts(['post_type' => 'post', 'posts_per_page' => 3]);
                            foreach ($query as $post) {
                                setup_postdata($post); ?>

                                <div class="swiper-slide">
                                    <div class="blog-slider-item fl-wrap">

                                        <?php $args = ['title' => get_the_title(), 'link' => get_the_permalink(), 'date' => get_the_time('j F Y'), 'excerpt' => get_the_excerpt()];
                                        get_template_part('template-parts/card', 'article', $args) ?>

                                    </div>
                                </div>

                            <?php }
                            wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
                <div class="slider-blog-button-prev shb"><i class="fas fa-caret-left"></i></div>
                <div class="slider-blog-button-next shb"><i class="fas fa-caret-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="box-widget-item fl-wrap block_box">
            <div class="box-widget">
                <div id="map-secondary"></div>
            </div>
        </div>
        <?php $args = ['title' => 'Акции Solid Auto'];
        get_template_part('template-parts/sidebar', 'posts', $args) ?>

    </div>

</div>

</div>
</section>
<div class="limit-box fl-wrap"></div>

<script>
    var locations = [];
</script>
<?php
$args = [
    'post_type' => 'sto',
    'posts_per_page' => -1,
    'meta_query' => [[
        'key' => 'услуги',
        'value' => get_queried_object()->term_id,
        'compare' => 'LIKE',
    ]]
];
$query = get_posts($args);

foreach ($query as $post) {

    setup_postdata($post); ?>
    <script>
        var listing = [
            locationData("<?php the_permalink(); ?>", "/wp-content/uploads/65.png", "<?php the_title(); ?>", "<?php echo get_field('адрес') ?>", "5", <?php echo get_field('phone')[0]['номер'] ?>),
            <?php echo get_field('карта')['lat']; ?>, <?php echo get_field('карта')['lng']; ?>, "", '/wp-content/uploads/group-64-2.png'
        ];
        locations.push(listing);
    </script> 
<?php }
wp_reset_postdata(); ?>

<?php get_footer() ?>