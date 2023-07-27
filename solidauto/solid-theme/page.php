<?php get_header(); ?>
<?php $args = ['title' => get_the_title()];
get_template_part('template-parts/banner', null, $args) ?>
<!--<section class="gray-bg no-top-padding">-->
<!--    <div class="container">-->
<!--        <div class="inline-breadcrumbs fl-wrap block-breadcrumbs">-->
<!--            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>-->
<!--            <div class="showshare brd-show-share color2-bg">Поделиться<i class="fas fa-share"></i></div>-->
<!--        </div>-->
<!--        <div class="clearfix"></div>-->
        <div class="row">
            <div class="col-md-8">
                <!-- list-single-main-wrapper -->
                <div id="widget-description-with-picture" class="list-single-main-wrapper fl-wrap" id="sec2">
                    <div class="post-article single-post-article">
                        <div class="list-single-main-item fl-wrap block_box" style="border-radius: 10px;">
                            <div id="description-with-picture-content"><?php the_content(); ?></div>
                        </div>

                    </div>
                </div>
                
                <?php if(is_page(322)) { ?>
                <div class="list-single-main-item fl-wrap block_box">
                    <div class="list-single-main-item-title fl-wrap">
                        <span>Заполните форму и мы свяжемся с Вами!</span>
                    </div>
                    <div class="list-single-main-item_content fl-wrap">
                        <?php echo do_shortcode('[contact-form-7 id="290"]'); ?>
                    </div>
                </div>
                <?php } ?>
                
            </div>

            <div class="col-md-4">

                <!--Акции-->
                <?php $args = ['title' => 'Акции Solid Auto'];
                get_template_part('template-parts/sidebar', 'posts', $args) ?>
                <!--Категории
                <?php $args = ['title' => 'Акции Solid Auto'];
                get_template_part('template-parts/sidebar', 'terms', $args) ?>
                -->

            </div>

        </div>

    </div>
</section>
<div class="limit-box fl-wrap"></div>

<?php get_footer() ?>