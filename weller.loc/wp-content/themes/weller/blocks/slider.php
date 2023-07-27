<?php
$page_id = get_the_ID();
$slider_items = carbon_get_post_meta($page_id, 'banner_items');
?>

<section class="main_slider">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <?php
            $isFirstElement = true;
            foreach ($slider_items as $slider_item) : ?>
                <div class="item <?php echo ($isFirstElement) ? ' active' : '' ?>">
                    <img src="<?= wp_get_attachment_image_url($slider_item['banner_img'], 'full') ?>" alt="slider"
                         width="1140"
                         class="slider_img">
                    <div class="carousel-caption"></div>
                </div>
                <?php
                $isFirstElement = false;
            endforeach; ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="left_prev"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="right_next"></span>
        </a>
    </div>
</section>