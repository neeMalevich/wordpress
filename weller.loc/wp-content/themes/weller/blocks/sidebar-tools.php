<div class="col-xs-3 menu big">
    <div class="wrapper">
        <ul>
            <li class="title">Каталог</li>

            <?php
            $taxonomy = 'catalog-tools';
            $show_count = 0;      // 1 for yes, 0 for no
            $pad_counts = 0;      // 1 for yes, 0 for no
            $hierarchical = 1;      // 1 for yes, 0 for no
            $title = '';
            $empty = 0;

            $args = array(
                'post_type' => 'product-tools',
                'taxonomy' => $taxonomy,
                'parent' => '',
                'show_count' => $show_count,
                'pad_counts' => $pad_counts,
                'hierarchical' => $hierarchical,
                'title_li' => $title,
                'hide_empty' => $empty
            );

            $catalog_lists = get_terms([
                'taxonomy' => $taxonomy,
                'parent' => 0,
                'hide_empty' => false,
            ]);

            foreach ($catalog_lists as $catalog_list) :
                $catalog_list_name = $catalog_list->name;
                $category_link = get_term_link($catalog_list->term_id);

                $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

                ?>
            <li class="<?php echo (strstr($url, $category_link)) ? ' active' : ''; ?>">
                <a href="<?= $category_link; ?>"><?= $catalog_list_name; ?></a>
                <?php
                $child_cats = get_categories([
                    'taxonomy' => $catalog_list->taxonomy,
                    'child_of' => $catalog_list->term_id,
                    'parent' => $catalog_list->term_id,
                    'hide_empty' => 0
                ]);

                echo '<ul>';

                foreach ($child_cats as $child_cat) :
                    if ($child_cat) :
                        $catalog_lists_child_name = $child_cat->name;
                        $catalog_lists_child_link = get_term_link($child_cat->term_id);
                        ?>
                        <li class="<?php echo (strstr($url, $catalog_lists_child_link)) ? ' active' : ''; ?>">
                        <a href="<?= $catalog_lists_child_link; ?>"><?= $catalog_lists_child_name; ?></a>
                        <?php
                        $child_child_cats = get_categories([
                            'taxonomy' => $child_cat->taxonomy,
                            'child_of' => $child_cat->term_id,
                            'parent' => $child_cat->term_id,
                            'hide_empty' => 0
                        ]);

                        echo '<ul>';
                        foreach ($child_child_cats as $child_child_cat) :
                            if ($child_child_cat) :
                                $catalog_lists_child_name = $child_child_cat->name;
                                $catalog_lists_child_link = get_term_link($child_child_cat->term_id);
                                ?>
                                <li>
                                    <a href="<?= $catalog_lists_child_link; ?>"><?= $catalog_lists_child_name; ?></a>
                                </li>
                            <?php endif;
                        endforeach;
                        echo '</ul>';
                        ?>
                        </li>
                    <?php endif;
                endforeach;
                echo '</ul>';
                ?>
                </li>
            <?php endforeach; ?>

        </ul>

    </div>
</div>