<?php
include 'blocks/header.php';
?>

<main>

    <section class="bg_main_product">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 bg_main_product_tax">

                    <?php
                    $obj_cat = get_queried_object();
                    $category_desc_tax = carbon_get_term_meta($obj_cat->term_id, 'catalog_desc');

                    $catalog_lists = get_terms($obj_cat->taxonomy, [
                        'parent' => $obj_cat->term_id,
                        'hide_empty' => false
                    ]);
                    if ($catalog_lists) : ?>
                        <article>
                            <div class="smt-categories">
                                <div class="container">
                                    <?php foreach ($catalog_lists as $catalog_list) :
                                        $_GET['catalog_list'] = $catalog_list;
                                        if ($catalog_list) : ?>
                                            <?php include 'blocks/catalog-cart.php'; ?>
                                        <?php
                                        endif;
                                    endforeach; ?>
                                </div>
                            </div>
                            <?php if (isset($category_desc_tax) && !empty($category_desc_tax)) : ?>
                                <div class="product_text product_text-cat">
                                    <?= $category_desc_tax; ?>
                                </div>
                            <?php endif; ?>
                        </article>

                    <?php else: ?>
                        <div class="smt-products">
                            <?php include 'blocks/product-cart.php'; ?>
                        </div>
                        <?php if (isset($category_desc_tax) && !empty($category_desc_tax)) : ?>
                            <div class="product_text product_text-cat">
                                <?= $category_desc_tax; ?>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

</main>

<?php
include 'blocks/footer.php';
?>
