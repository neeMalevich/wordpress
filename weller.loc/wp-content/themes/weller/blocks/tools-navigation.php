<div class="categories dropdown">
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

                        $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

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
                        } ?> <?php echo (strstr($url, $category_link)) ? ' active' : ''; ?>">
                            <a href="<?= $category_link; ?>">
                                <strong><?= $catalog_list_name; ?></strong>
                            </a>
                            <div class="holder">
                                <ul class="links">
                                    <?php
                                    $child_cats = get_categories([
                                        'taxonomy' => $catalog_list->taxonomy,
                                        'child_of' => $catalog_list->term_id,
                                        'parent' => $catalog_list->term_id,
                                        'hide_empty' => 0
                                    ]);

                                    foreach ($child_cats as $child_cat) :
                                        if ($child_cat) :
                                            $catalog_lists_child_name = $child_cat->name;
                                            $catalog_lists_child_link = get_term_link($child_cat->term_id);

                                            $category_img_id = carbon_get_term_meta($child_cat->term_id, 'catalog_img_images');
                                            $category_img = wp_get_attachment_image_url($category_img_id, 'full');

                                            ?>
                                            <li>
                                                <a href="<?= $catalog_lists_child_link; ?>"
                                                   style="background-image:url('<?= $category_img; ?>');">
                                                    <?= $catalog_lists_child_name; ?>
                                                </a>
                                            </li>
                                        <?php
                                        endif;
                                    endforeach; ?>
                                </ul>
                            </div>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </div>
        </div>
    </div>
</div>
