<div class="sidebar">
    <div class="sidebar-top">
        Каталог
    </div>
    <div class="sidebar-inner">
        <?php

        global $wp_query;
        global $post;
        //global $posts;

        $taxonomy     = 'categories';
        $orderby      = 'name';
        $show_count   = 0;      // 1 for yes, 0 for no
        $pad_counts   = 0;      // 1 for yes, 0 for no
        $hierarchical = 1;      // 1 for yes, 0 for no
        $title        = '';
        $empty        = 0;

        $args = array(
            'post_type'    => 'product',
            'taxonomy'     => $taxonomy,
            'parent'       => '',
            'orderby'      => $orderby,
            'show_count'   => $show_count,
            'pad_counts'   => $pad_counts,
            'hierarchical' => $hierarchical,
            'title_li'     => $title,
            'hide_empty'   => $empty
        );
        $all_categories = get_categories($args);

        foreach ($all_categories as $cat) :
            if($cat->count > 0) :
        ?>
        <div class="sidebar__item">
            <div class="sidebar__item--summary">
                <div class="sidebar__item-toggler">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt="">
                </div>
                <div class="sidebar__item-title"><?php echo $cat->name; ?></div>
            </div>
            <div class="sidebar__item--detail">
                <ul class="sidebar__list">
                    <?php
                    $args = array(
                        'post_type'         => 'product',
                        'categories'            => $cat->slug
                    );
                    $the_query = new WP_Query($args);
                    ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post();
                            $product_link = carbon_get_post_meta( get_post()->ID, 'product__link' );
                        ?>
                            <li class="sidebar__list-item">
                                <a href="<?php echo $product_link; ?>132ях-з+909*/"><?php the_title(); ?></a>
                            </li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>


    </div>
</div>