<?php
include 'blocks/header.php';
?>

<main>

    <section class="bg_main_product">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <article>
                        <div class="smt-categories">
                            <?php
                            $taxonomy_catalog = 'catalog';
                            $catalog_lists = get_terms([
                                'taxonomy' => $taxonomy_catalog,
                                'parent' => 0,
                                'hide_empty' => false,
                                'exclude' => [36],
                            ]);

                            foreach ($catalog_lists as $catalog_list) :
//                                    debug($catalog_list);
                                if ($catalog_list) :
                                    $_GET['catalog_list'] = $catalog_list;
                                    ?>
                                    <?php include 'blocks/catalog-cart.php'; ?>
                                <?php
                                endif;
                            endforeach; ?>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
include 'blocks/footer.php';
?>
