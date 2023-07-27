<?php
/*
Template Name: Страница продукции Weller
*/

get_template_part('/blocks/header')
?>

<main>

    <section class="bg_main_product product_page">
        <div class="container">
            <div class="row">
                <h1 class="products-header"><?php the_title(); ?></h1>
                <?php
                $catalog_wellers = get_posts([
                    'post_type' => 'product-weller',
                    'post_status' => 'publish',
                    'numberposts' => -1
                ]);
                if ($catalog_wellers) : ?>
                    <div class="weller-products">
                        <?php foreach ($catalog_wellers as $wellers_item) :
                            $wellers_content = carbon_get_post_meta($wellers_item->ID, 'catalog_items');
                            $wellers_color = carbon_get_post_meta($wellers_item->ID, 'catalog_color');
                            ?>
                            <div class="weller-products-block">
                                <div class="weller-products-img">
                                    <a href="<?php the_permalink($wellers_item->ID); ?>">
                                        <?php echo get_the_post_thumbnail($wellers_item->ID, 'full'); ?>
                                    </a>
                                </div>
                                <div class="weller-products-caption" style="background-color: <?= $wellers_color; ?> ">
                                    <ul>
                                        <?php foreach ($wellers_content as $wellers_content_item) : ?>
                                            <li><?= $wellers_content_item['catalog_text']; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

</main>

<?php
get_template_part('/blocks/footer');
?>
