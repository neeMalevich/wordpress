<?php $term_title = single_term_title('', 0); ?>
<div class="list-single-main-media fl-wrap">
    <?php if ($args['images']) { ?>
        <img class="respimg" src="<?php echo wp_get_attachment_image_src($args['images'][0]['id'], 'full')[0]; ?>" alt="<?php echo $term_title ?>">
        <a data-dynamicPath="[{'src': '<?php echo $args['images'][0]['url']; ?>' },{'src': '<?php echo $args['images'][1]['url']; ?>' },  {'src': '<?php echo $args['images'][2]['url']; ?>' }]" class="promo-link dynamic-gal gdop-list-link"><i class="fa fa-camera"></i><span>Галерея фото</span></a>
    <?php } elseif($args['image']) { ?>
        <img class="respimg" src="<?php echo wp_get_attachment_image_src($args['image'], 'full')[0]; ?>" alt="<?php echo $term_title ?>">
    <?php } else {?>
        <img class="respimg" src="<?php echo wp_get_attachment_image_src(135, 'full')[0]; ?>" alt="<?php echo $term_title ?>">
    <?php } ?>
</div>