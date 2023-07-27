<?php
$category_img_id = carbon_get_term_meta($catalog_list->term_id, 'catalog_images');
$category_img = wp_get_attachment_image_url($category_img_id, 'full');

$category_name = $catalog_list->name;
$category_desc = $catalog_list->description;
$category_link = get_term_link($catalog_list);
?>

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
    <div class="smt-category">
        <a href="<?= $category_link; ?>">
            <img src="<?= $category_img; ?>" alt="<?= $category_name; ?>"/>
        </a>
        <h2>
            <a href="<?= $category_link; ?>"><?= $category_name; ?></a>
        </h2>
        <p class="sc-text"><?= $category_desc; ?></p>
    </div>
</div>