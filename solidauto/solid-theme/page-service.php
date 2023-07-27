<?php get_header() ?>
<?php $args = ['title' => get_the_title()];
get_template_part('template-parts/banner', null, $args) ?>

<div id="service-search">
    <form class="custom-form">
        <fieldset>
            <label><i class="fal fa-cogs"></i></label>
            <input type="text" name="keyword" placeholder="Введите название услуги..." value="">
        </fieldset>
    </form>
</div>
<div id="service-section">
    <div id="service-cards">

        <?php $terms = get_terms([
            'taxonomy' => 'service',
            'hide_empty' => false,
            'orderby' => 'meta_value_num',
            'meta_key' => 'ordering',
            'order' => 'DESC',
        ]);

        if ($terms) {
            foreach ($terms as $term) {
                $icon_id = get_field('иконка', $term);
                $icon = wp_get_attachment_image_src($icon_id, 'full')[0]; ?>

                <a href="<?php echo $term->slug; ?>/" class="service-card">
                    <img src="<?php echo $icon; ?>" alt="">
                    <span><?php echo $term->name; ?></span>
                </a>

        <?php }
        } ?>
    </div>
    <div class="button-wrapper">
        <a id="loadmore" class="btn color2-bg">Показать еще</a>
    </div>
</div>

</div>
</section>
<?php get_footer() ?>