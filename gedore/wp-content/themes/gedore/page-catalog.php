<?php
/*
Template Name:  Каталог
*/
?>

<?php get_header(); ?>

<section class="s-catalog">
    <div class="container">
        <div class="catalog">
            <?php get_sidebar(); ?>
            <div class="catalog__inner">
                <h3 class="catalog__section-title"><?= the_title(); ?></h3>
                <div class="catalog__box">
                    <?php
                    $catalog_nav_items = get_terms([
                        'taxonomy' => 'categories',
                        'parent'   => 0,
                        'hide_empty'   => 1
                    ]);
                    ?>
                    <?php foreach ($catalog_nav_items as $item) :
                        $catalog_img_id = carbon_get_term_meta( $item->term_id, 'categories__img' );
                        $catalog_img = wp_get_attachment_image_url($catalog_img_id, 'full');
                        $catalog_link =  get_term_link($item);
                        ?>
                        <div class="catalog__item">
                            <a href="<?php echo $catalog_link; ?>" class="catalog__img">
                                <img src="<?php echo $catalog_img; ?>" alt="<?php echo $item->name; ?>">
                            </a>
                            <a href="<?php echo $catalog_link; ?>" class="catalog__title"><?php echo $item->name; ?></a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

