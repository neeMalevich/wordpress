<section id="page-banner" class="parallax-section single-par" data-scrollax-parent="true">
    <div class="bg par-elem " data-bg="<?php echo get_template_directory_uri() ?>/images/front-bg.png" data-scrollax="properties: { translateY: '30%' }" style="background-image: <?php echo get_template_directory_uri() ?>/images/front-bg.png; transform: translateZ(0px) translateY(-2.54777%);"></div>
    <div class="overlay op7"></div>
    <div class="container">
        <div class="section-title">
            <h1><?php echo $args['title']; ?></h1>
        </div>
    </div>
</section>
<section class="gray-bg no-top-padding">
    <div class="container">
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        <div class="clearfix"></div>