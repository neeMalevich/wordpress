<?php
    /*
    Template Name:  Главная
    */
?>
<?php
    $page_id = get_the_ID();
?>
<?php get_header(); ?>

    <section class="s-home">
        <div class="home__box" style="background-image: url(<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id,'banner_img'), 'full'); ?>);">
            <div class="container">
                <div class="home__inner">
                    <h1 class="section-title"><?php echo carbon_get_post_meta($page_id,'banner_title'); ?></h1>
                    <div class="home__text">
                        <p><?php echo carbon_get_post_meta($page_id,'banner_text'); ?></p>
                    </div>
                    <a href="<?php echo carbon_get_post_meta($page_id,'banner_link'); ?>" class="btn btn--accent btn--white">Читать</a>
                </div>
            </div>
        </div>
        <div class="home__bottom">
            <div class="container">
                <div class="home__carts">
                    <div class="home__cart" style="background-image: url(<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id,'banner_img-1'), 'full'); ?>);">
                        <div class="home__cart-box">
                            <h1 class="section-title"><?php echo carbon_get_post_meta($page_id,'banner_title-1'); ?></h1>
                            <div class="home__text">
                                <p><?php echo carbon_get_post_meta($page_id,'banner_text-1'); ?></p>
                            </div>
                        </div>
                        <a href="<?php echo carbon_get_post_meta($page_id,'banner_link-1'); ?>" class="btn btn--transparent">Читать</a>
                    </div>
                    <div class="home__cart" style="background-image: url(<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id,'banner_img-2'), 'full'); ?>);">
                        <div class="home__cart-box">
                            <h1 class="section-title"><?php echo carbon_get_post_meta($page_id,'banner_title-2'); ?></h1>
                            <div class="home__text">
                                <p><?php echo carbon_get_post_meta($page_id,'banner_text-2'); ?></p>
                            </div>
                        </div>
                        <a href="<?php echo carbon_get_post_meta($page_id,'banner_link-2'); ?>" class="btn btn--transparent">Читать</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>