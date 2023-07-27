<?php get_header() ?>
<?php 
global $query_string;
query_posts($query_string . "&posts_per_page=-1");
?>
<?php $args = ['title' => 'Отзывы наших клиентов'];
get_template_part('template-parts/banner', null, $args) ?>

<div class="row reviews-filtering">
    <div class="col-md-4">
        <div class="box-widget-item drop-shadow fl-wrap block_box">
            <div class="box-widget-item-header">
                <span>Фильтр</span>
            </div>
            <div class="box-widget fl-wrap">
                <div class="box-widget-content">
                    <form id="review-filter" class="custom-form">
                        <fieldset>
                            <?php
                            $stations = get_posts(['post_type' => 'sto', 'fields' => 'ids', 'posts_per_page' => -1]);
                            $cities = get_terms(['taxonomy' => 'city']);
                            ?>
                            <div class="listsearch-input-item">
                                <select data-placeholder="Город" name="city" class="chosen-select nice-select">
                                    <option selected value="">Все города</option>
                                    <?php foreach ($cities as $c) {
                                        echo '<option value="' . $c->term_id . '">' . $c->name . '</option>';
                                    } ?>

                                </select>
                            </div>
                            <div class="listsearch-input-item">
                                <select data-placeholder="СТО" name="station" class="chosen-select nice-select">
                                    <option selected value="">Все станции</option>
                                    <?php foreach ($stations as $s) {
                                        echo '<option value="' . $s . '">' . get_the_title($s) . '</option>';
                                    } ?>

                                </select>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="sidebar-text">
            <p>Пожалуйста, оставьте отзыв о своем посещении СТО нашей сети</p>
            <a href="#add" class="btn color2-bg">Оставить отзыв</a>
        </div>
    </div>
    <div class="col-md-8">
        <div id="map-secondary"></div>
    </div>
</div>

<div id="review-cards" class="row">
    <script>
        var locations = [];
    </script>
    <?php 
    $prev_posts = [];
    while (have_posts()) {
        the_post();
        $s = get_field('sto-review');

        if (!in_array($s, $prev_posts)) {?>
        <script>
            var listing = [
                locationData("<?php echo get_permalink($s); ?>", "/wp-content/uploads/65.png", "<?php echo get_the_title($s); ?>", "<?php echo get_field('адрес', $s); ?>", "5", <?php echo get_field('phone', $s)[0]['номер']; ?>),
                <?php echo get_field('карта', $s)['lat']; ?>, <?php echo get_field('карта', $s)['lng']; ?>, "", '/wp-content/uploads/group-64-2.png'
            ];
            locations.push(listing);
        </script>
        <?php }
        $args = [
            'person' => get_the_title(),
            'sto' => get_the_title($s),
            'review' => get_field('текст'),
            'rating' => get_field('оценка'),
            'link' => get_the_permalink($s),
            'class' => 'col-md-4',
        ];
        get_template_part('template-parts/card', 'testimonial', $args); 
        array_push($prev_posts, $s); ?>

    <?php } ?>
    
</div>
<div id="add"></div>



<div id="add-review" class="list-single-main-item fl-wrap block_box">
    <div class="list-single-main-item-title fl-wrap">
        <span>Оставить отзыв</span>
    </div>
    <div class="add-review-box">
        <form class="add-review custom-form">
            <fieldset>
                <div class="list-single-main-item_content fl-wrap">
                    <div class="row">
                        <div class="col-md-6">
                            <label><i class="fal fa-user"></i></label>
                            <input type="text" required name="author" placeholder="Ваше имя *">
                            <div class="clearfix"></div>
                            <label><i class="fal fa-phone"></i> </label>
                            <input type="tel" autocomplete="on" required name="phone" placeholder="Номер телефона *">
                            <div class="clearfix"></div>
                            <div class="listsearch-input-item">
                                <select data-placeholder="Город" required name="city" class="chosen-select nice-select">
                                    <option selected value="none">Выберите город</option>
                                    <?php foreach ($cities as $c) {
                                        echo '<option value="' . $c->term_id . '">' . $c->name . '</option>';
                                    } ?>

                                </select>
                            </div>
                            <div class="clearfix"></div>
                            <div class="station-select listsearch-input-item d-none"></div>

                        </div>
                        <div class="col-md-6">
                            <div class="listsearch-input-item">
                                <select data-placeholder="СТО" required name="rating" class="chosen-select no-search-select nice-select">
                                    <option selected value="5">Превосходно ⭐⭐⭐⭐⭐</option>
                                    <option  value="4">Отлично ⭐⭐⭐⭐</option>
                                    <option  value="3">Нормально ⭐⭐⭐</option>
                                    <option  value="2">Плохо ⭐⭐</option>
                                    <option  value="1">Очень плохо ⭐</option>
                                </select>
                            </div>
                            <textarea type="text" name="review" required minlength="20" placeholder="Текст вашего отзыва *"></textarea>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <button type="submit" class="btn  color2-bg  float-btn">Отправить отзыв</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>

</div>
</section>
<?php get_footer() ?>