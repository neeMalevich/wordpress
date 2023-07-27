<?php get_header() ?>
<?php $args = ['title' => 'Наши поставщики'];
get_template_part('template-parts/banner', null, $args) ?>

<div id="supplier-cards">
    <?php while (have_posts()) {
        the_post(); ?>

        <a class="supplier-card" href="<?php the_permalink() ?>">
            <img src="<?php echo wp_get_attachment_image_src(get_field('лого'), 'full')[0]; ?>">
            <div class="ab_text-title fl-wrap">
                <div><?php the_title() ?></div>
                <span class="section-separator fl-sec-sep"></span>
                <span><?php the_field('название'); ?> </span>
            </div>
        </a>

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