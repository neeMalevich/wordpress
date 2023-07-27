<?php

$owner = wp_get_current_user()->ID; 

$sto = get_field('sto', 'user_'.$owner);
$sto_title = get_the_title($sto);

?>

<section class="dashboard-header-sec" style="background: url(<?php echo get_template_directory_uri(); ?>/images/front-bg.png); background-size:cover;";>
    <div class="container">
        <div class="dashboard-breadcrumbs breadcrumbs">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        </div>
        <!--Tariff Plan menu end-->
        <div class="dashboard-header_conatiner fl-wrap dashboard-header_title">
            <h1>СТО : <span><?php echo $sto_title; ?></span></h1>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="dashboard-header fl-wrap">
        <div class="container">
            <div class="dashboard-header_conatiner fl-wrap">
                <div class="dashboard-header-avatar">
                    <img src="https://solidauto.by/wp-content/uploads/group-67.png" alt="">
                </div>
                <!--<div class="dashboard-header-stats-wrap">-->
                <!--    <div class="dashboard-header-stats">-->
                <!--        <div class="swiper-container">-->
                <!--            <div class="swiper-wrapper">-->
                <!--                <div class="swiper-slide">-->
                <!--                    <div class="dashboard-header-stats-item">-->
                <!--                        <i class="fal fa-map-marked"></i>-->
                <!--                        Инфа 1-->
                <!--                        <span>1</span>-->
                <!--                    </div>-->
                <!--                </div>-->

                <!--                <div class="swiper-slide">-->
                <!--                    <div class="dashboard-header-stats-item">-->
                <!--                        <i class="fal fa-chart-bar"></i>-->
                <!--                        Инфа 2-->
                <!--                        <span>2</span>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="swiper-slide">-->
                <!--                    <div class="dashboard-header-stats-item">-->
                <!--                        <i class="fal fa-comments-alt"></i>-->
                <!--                        Инфа 3-->
                <!--                        <span>3</span>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div class="swiper-slide">-->
                <!--                    <div class="dashboard-header-stats-item">-->
                <!--                        <i class="fal fa-heart"></i>-->
                <!--                        Инфа 4-->
                <!--                        <span>4</span>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="dhs-controls">-->
                <!--        <div class="dhs dhs-prev"><i class="fal fa-angle-left"></i></div>-->
                <!--        <div class="dhs dhs-next"><i class="fal fa-angle-right"></i></div>-->
                <!--    </div>-->
                <!--</div>-->

                <a href="<?php echo get_the_permalink($sto); ?>" class="add_new-dashboard">Перейти к своему СТО</a>
            </div>
        </div>
    </div>
</section>