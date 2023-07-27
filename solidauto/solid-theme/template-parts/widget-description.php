<div id="widget-description" class="list-single-main-item fl-wrap block_box">
    <div class="list-single-main-item-title">
        <span><?php echo $args['title']; ?></span>
    </div>
    <div class="list-single-main-item_content fl-wrap">
        <div id="widget-description-content">
            <?php echo $args['content']; ?>
        </div>
        <?php if ($args['spoiler'] == true) { 
            echo '<a href="#" class="btn color2-bg float-btn">Подробнее</a>';
        } ?>
    </div>
</div>