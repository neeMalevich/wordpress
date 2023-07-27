<?php get_header(); ?>

<?php
$cat_obj = $wp_query->get_queried_object();
$thiscat_id = $cat_obj->term_id;

$page_id = get_the_ID();

?>

<section class="s-catalog">
    <div class="container">
        <div class="catalog">
            <?php get_sidebar(); ?>
            <div class="catalog__inner">
                <h3 class="catalog__section-title"><?php echo $cat_obj->name; ?></h3>
                <div class="catalog__box">

                    <?php if ( have_posts() ) : ?>

                        <?php while ( have_posts() ) : the_post();
                            $catalog_img =  get_the_post_thumbnail( get_the_ID(), 'full' );
                            $product_link = carbon_get_post_meta( get_post()->ID, 'product__link' );
                        ?>
                            <div class="catalog__item">
                                <a href="<?php echo $product_link; ?>" class="catalog__img">
                                    <?php echo get_the_post_thumbnail( $page_id, 'full' ); ?>
                                </a>
                                <a href="<?php echo $product_link; ?>" class="catalog__title"><?= the_title(); ?></a>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
