<?php
$obj_cat = get_queried_object();

$args = array(
    'taxonomy' => $obj_cat->taxonomy,
    'post_type' => 'product',
    $obj_cat->taxonomy => $obj_cat->slug,
);

$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) :
        $query->the_post();

        $product_id = get_the_ID();
        $product_single_non_page = carbon_get_the_post_meta('product_none_page');

        ?>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="smt-product">
                <?php if ($product_single_non_page) : ?>
                    <div class="sp-img">
                        <div>
                            <?php the_post_thumbnail(); ?>
                        </div>
                    </div>
                    <div class="sp-title">
                        <?= the_title(); ?>
                    </div>
                <?php else: ?>
                    <div class="sp-img">
                        <a href="<?= the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </div>
                    <div class="sp-title">
                        <a href="<?= the_permalink(); ?>">
                            <?= the_title(); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    <?php
    endwhile;
endif;