<?php get_header() ?>
<?php 
global $query_string;
query_posts($query_string . "&posts_per_page=9");
?>
<?php $args = ['title' => 'Вакансии нашей сети'];
get_template_part('template-parts/banner', null, $args) ?>

<div class="row vacancies-filtering">
    <div class="col-md-4">
        <div class="box-widget-item drop-shadow fl-wrap block_box">
            <div class="box-widget-item-header">
                <span>Фильтр</span>
            </div>
            <div class="box-widget fl-wrap">
                <div class="box-widget-content">
                    <form id="vacancy-filter" class="custom-form">
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
    </div>
    <div class="col-md-8">
        <div id="map-secondary"></div>
    </div>
</div>

<div id="vacancy-cards" class="row">
    <script>
        var locations = [];
    </script>
    <?php 
    $prev_posts = [];
    while (have_posts()) {
        the_post();
        $s = get_field('sto-vacancy');

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
            'vacancy' => get_the_permalink(),
            'sto' => get_the_title($s),
            'city' => get_term(get_field('город', $s), 'city') -> name,
            'text' => get_field('текст'),
            'link' => get_the_permalink($s),
            'class' => 'col-md-4',
        ];
        get_template_part('template-parts/card', 'vacancy', $args); 
        array_push($prev_posts, $s); ?>

    <?php } ?>
</div>

<?php $args = [
    'prev_text'    => '<i class="fas fa-caret-left"></i><span>Назад</span>',
    'next_text'    => '<span>Вперёд</span><i class="fas fa-caret-right"></i>',
];
the_posts_pagination($args); ?>

</div>
</section>
<?php get_footer() ?>