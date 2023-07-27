<?php
/*
Template Name: Страница продукции архив каталога
*/

get_template_part('/blocks/header');

?>

<main>

    <!-- Хлебные крошки -->
    <?php get_template_part('/blocks/breadcrumbs'); ?>

    <script>
        const breadcrumb = document.querySelector('.breadcrumb');

        let archive_catalog = `
            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a href="/catalog-tools/" itemprop="item">
                    <span itemprop="name">Продукция Weller</span>
                </a>
            </span>
            <span class="kb_sep"> &gt; </span>
        `;

        let kb_sep = document.querySelectorAll('.breadcrumb .kb_sep')[0].innerHTML += archive_catalog;

    </script>

    <?php
    $obj_cat = get_queried_object();
    $category_name = $obj_cat->name;
    ?>

    <!--    Навигация по категориям  -->
    <?php get_template_part('/blocks/tools-navigation'); ?>

    <div class="catalog-description">
        <div class="container">
            <div class="row no-gutter">
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

                    $category_desc_tax = carbon_get_term_meta($catalog_list->term_id, 'catalog_tools_desc');

                    if ($catalog_list && strstr($url, $category_link)) : ?>

                        <div class="col-xs-3">
                            <div class="inner <?php
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
                                <strong class="title"><?= $catalog_list_name; ?></strong>
                                <?= $category_desc_tax; ?>
                            </div>
                        </div>
                        <div class="col-xs-9">
                            <div class="inner">
                                <ul class="links <?php
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
                                    <?php
                                    $child_cats = get_categories([
                                        'taxonomy' => $catalog_list->taxonomy,
                                        'child_of' => $catalog_list->term_id,
                                        'parent' => $catalog_list->term_id,
                                        'hide_empty' => 0
                                    ]);
                                    $child_cats_count = 0;
                                    foreach ($child_cats as $child_cat) :
//                                        debug(count($child_cats));
                                        if ($child_cat) :
                                            $catalog_lists_child_name = $child_cat->name;
                                            $catalog_lists_child_link = get_term_link($child_cat->term_id);

                                            $category_img_id = carbon_get_term_meta($child_cat->term_id, 'catalog_img_images');
                                            $category_img = wp_get_attachment_image_url($category_img_id, 'full');

                                            $child_cats_count++;
                                            ?>
                                            <li class="<?= ($child_cats_count < 5) ? '' : 'nb'; ?>">
                                                <a href="<?= $catalog_lists_child_link; ?>"
                                                   style="background-image:url('<?= $category_img; ?>');">
                                                    <?= $catalog_lists_child_name; ?>
                                                </a>
                                            </li>
                                        <?php
                                        endif;
                                    endforeach; ?>
                                    <div class="clearfix"></div>
                            </div>
                        </div>
                    <?php
                    endif;
                endforeach; ?>
            </div>
        </div>
    </div>


    <div class="catalog" id="products-list">
        <div class="container">
            <div class="row no-gutter">


                <!--    Навигация по категориям  -->
                <?php get_template_part('/blocks/sidebar-tools'); ?>

                <div class="col-xs-9">

                    <?php
                    $args = array(
                        'post_type' => 'product-tools',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'catalog-tools',
                                'field' => 'term_id',
                                'terms' => $obj_cat->term_id,
                                'include_children' => 0
                            ),
                        ),
                    );
                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) :
                            $query->the_post();
                            $product_sku = get_field('product_sku', get_the_ID());
                            $product_img = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID(), 'full'));

                            ?>
                            <div class="catalog-weller_cart">
                                <div class="product item big">
                                    <div class="title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </div>
                                    <div class="preview">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?= $product_img; ?>"
                                                 alt="<?php the_title(); ?>"/>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="sku">Артикул: <strong><?= $product_sku; ?></strong></div>
                                        <button class="btn price product-popup" data-src="<?= $product_img; ?>" data-title="<?php the_title(); ?>">Оставить заявку</button>

                                        <div class="stock"><a href="<?php the_permalink(); ?>" class="question">Подробнее</a>
                                        </div>
                                    </div>
                                    <div class="specs">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="to-cart">
                                        <div class="to-cart_top"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                        <?php

                        endwhile; ?>
                        <?php
                    // пагинация
                        wp_corenavi();

                    else: ?>
                        <div class="product-page">
                            <div class="title">Нет продуктов в данной категории</div>
                        </div>
                    <?php endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>

</main>
<div class="modal-order">
    <div class="modal-order-content">
        <span class="close-button-order">×</span>
        <div class="modal-order__img">
            <img class="modal-order__img_popup" src="" alt="">
        </div>
        <div class="modal_product_title"></div>

        <?php echo do_shortcode('[contact-form-7 id="733" title="Продукты"]'); ?>
    </div>
</div>
<script>
    function modalCustomProduct() {
        let modal = document.querySelector(".modal-order");
        let trigger = document.querySelectorAll(".product-popup");
        let closeButton = document.querySelector(".close-button-order");
        let body = document.querySelector("body");

        function toggleModal(e) {
            let modalImg = document.querySelector(".modal-order__img_popup");
            let modalTitle = document.querySelector(".modal-order__img_popup");
            const target = e.target;
            if (target !== null){
                modalImg.setAttribute('src', target.getAttribute('data-src'));
                document.querySelector(".modal_product_title").innerHTML = target.getAttribute('data-title');
            }
            modal.classList.toggle("show-modal-order");
            body.classList.toggle("_is-no-scroll");
        }

        function windowOnClick(event) {
            if (event.target === modal) {
                toggleModal(event);
            }
        }

        trigger.forEach(item => {
            item.addEventListener("click", toggleModal);
        });
        closeButton.addEventListener("click", toggleModal);
        window.addEventListener("click", windowOnClick);
    }

    function modalSendTitleImage() {
        let productImage = document.querySelector('.modal-order__img_popup').getAttribute('data-src');
        let productTitle = document.querySelector('.modal_product_title').textContent;

        let productTitleInput = document.querySelector('.modal-order-content input[name="product_title"]');
        let productUrlInput = document.querySelector('.modal-order-content input[name="product_url"]');
        let productFileImage = document.querySelector('.modal-image-product');

        productTitleInput.value = productTitle;
        productFileImage.value = productImage;
        productUrlInput.value = window.location.href;
    }

    modalCustomProduct();
    modalSendTitleImage();
</script>

<?php
get_template_part('/blocks/footer');
?>
