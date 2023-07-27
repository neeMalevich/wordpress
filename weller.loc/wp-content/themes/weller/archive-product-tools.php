<?php
include 'blocks/header.php';
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/weller-tax.css">
<div class="breadcrumbs">
    <div class="container">
        <div class="row no-gutter">
            <div class="col-xs-12">
                <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' > '); ?>
            </div>
        </div>
    </div>
</div>

<div class="categories_tools categories catalog">
    <div class="container">
        <div class="row no-gutter">
            <div class="col-xs-12">
                <ul class="items">
                    <?php
                    $taxonomy_catalog = 'catalog-tools';
                    $catalog_lists = get_terms([
                        'taxonomy' => $taxonomy_catalog,
                        'parent' => 0,
                        'hide_empty' => false,
                    ]);

                    $catalog_count = 0;
                    foreach ($catalog_lists as $catalog_list) :
                        $catalog_list_name = $catalog_list->name;
                        $category_link = get_term_link($catalog_list->term_id);

                        $category_img_id = carbon_get_term_meta($catalog_list->term_id, 'catalog_img_images');
                        $category_img = wp_get_attachment_image_url($category_img_id, 'full');

                        $catalog_count++;
                        ?>
                        <li class="<?php
                        if ($catalog_count == 1) {
                            echo 'professional';
                        } elseif ($catalog_count == 2) {
                            echo 'consumer';
                        } elseif ($catalog_count == 3) {
                            echo 'filtration';
                        } elseif ($catalog_count == 4) {
                            echo 'erem';
                        } elseif ($catalog_count == 5) {
                            echo 'xcelite';
                        } ?>">
                            <a href="<?= $category_link; ?>">
                                <strong><?= $catalog_list_name; ?></strong>
                                <span class="pic" style="background-image: url('<?= $category_img; ?>');"></span>
                            </a>

                            <ul class="links">
                                <?php
                                $catalog_lists_childs = get_term_children($catalog_list->term_id, $taxonomy_catalog);
                                foreach ($catalog_lists_childs as $catalog_lists_child) :
                                    if ($catalog_lists_child) :
                                        $catalog_lists_child_term = get_term_by( 'id', $catalog_lists_child, $taxonomy_catalog );
                                        $catalog_lists_child_name = $catalog_lists_child_term->name;
                                        $catalog_lists_child_count = $catalog_lists_child_term->count;
                                        $catalog_lists_child_link = get_term_link($catalog_lists_child_term->term_id);
                                        ?>
                                        <li>
                                            <a href="<?= $catalog_lists_child_link; ?>"><?= $catalog_lists_child_name; ?></a>
                                            <span><?= $catalog_lists_child_count; ?></span>
                                        </li>
                                    <?php
                                    endif;
                                endforeach; ?>
                            </ul>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
include 'blocks/footer.php';
?>
