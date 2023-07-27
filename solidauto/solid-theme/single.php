<?php get_header() ?>
<section class="gray-bg no-top-padding">
    <div class="container">
        <div class="inline-breadcrumbs fl-wrap block-breadcrumbs">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
            <div class="showshare brd-show-share color2-bg">Поделиться<i class="fas fa-share"></i></div>
        </div>

        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-8">
                <!-- list-single-main-wrapper -->
                <div id="widget-description-with-picture" class="list-single-main-wrapper fl-wrap" id="sec2">
                    <article class="post-article single-post-article">
                        <div class="list-single-main-media fl-wrap">
                            <?php 
                            if (get_the_post_thumbnail_url( get_the_ID() )) {
                                echo '<img width="100%" src="'.get_the_post_thumbnail_url( get_the_ID(), "full" ).'">';
                            } else {
                                echo '<img width="100%" src="'.get_template_directory_uri().'/images/front-bg.png">';
                            }?>
                        </div>
                        <div class="list-single-main-item fl-wrap block_box">
                            <div class="post-opt-title"><?php the_title(); ?></div>
                            <div class="post-opt">
                                <ul class="no-list-style">
                                    <li><i class="fal fa-calendar"></i> <span><?php the_time('j F Y'); ?></span></li>
                                    <!--<li><i class="fal fa-tags"></i> <?php the_terms(get_the_ID(), 'category'); ?> </li>-->
                                </ul>
                            </div>
                            <span class="fw-separator"></span>
                            <div class="clearfix"></div>
                            <div id="description-with-picture-content"><?php the_content(); ?></div>
                        </div>

                    </article>
                </div>
                <div class="post-nav-wrap fl-wrap">
                    <?php $next_post = get_adjacent_post(0, '', 0);
                    if($next_post){ ?>
                    <a class="post-nav post-nav-prev" href="<?php echo get_permalink($next_post->ID) ?>">
                        <span class="post-nav-img"><img src="<?php echo get_the_post_thumbnail_url( $next_post->ID ); ?>" alt="" width="100%"></span>
                        <span class="post-nav-text"><strong>Предыдущая новость</strong> <br><?php echo $next_post->post_title; ?></span>
                    </a>
                    <?php } ?>
                    <?php /* else { ?>
                        <a class="post-nav post-nav-prev" href="/promo/skidki-na-uslugu-sto-2/">
                            <span class="post-nav-img"><img src="<?php echo get_template_directory_uri() ?>/images/all/1.jpg" alt="" width="100%"></span>
                            <span class="post-nav-text"><strong>Наши акции</strong><br>Скидки на услугу СТО</span>
                        </a>
                    <?php } */?>
                    <?php $prev_post = get_adjacent_post(); 
                    if($prev_post){ ?>
                    <a class="post-nav post-nav-next" href="<?php echo get_permalink($prev_post->ID) ?>">
                        <span class="post-nav-img"><img src="<?php echo get_the_post_thumbnail_url( $prev_post->ID ); ?>" alt=""  width="100%"></span>
                        <span class="post-nav-text"><strong>Следующая новость</strong><br><?php echo $prev_post->post_title; ?></span>
                    </a>
                    <?php } ?>
                </div>
            </div>

            <div class="col-md-4">

                <!--Акции-->
                <?php $args = ['title' => 'Акции Solid Auto'];
                get_template_part('template-parts/sidebar', 'posts', $args) ?>
                
                <!--Категории-->
                <?php 
                //$args = ['title' => 'Акции Solid Auto'];
                //get_template_part('template-parts/sidebar', 'terms', $args); 
                ?>

            </div>

        </div>

    </div>
</section>
<div class="limit-box fl-wrap"></div>

<?php get_footer() ?>