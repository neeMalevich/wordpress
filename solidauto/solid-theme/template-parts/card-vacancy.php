<div class="testi-item <?php echo $args['class']; ?>">
    <div class="vacancy-text">
        <div class="vacancy-text_title"><?php echo $args['person']; ?></div>
        <a href="<?php echo $args['link']; ?>">
            <?php echo '<span>'. $args['sto']. ' (' .$args['city']. ')' .'</span>'; ?>
        </a>
        <div class="vacancy-text_task">Основные задачи:</div>
        <p><?php echo $args['text']; ?></p>
        <a href="<?php echo $args['vacancy']; ?>" target="_blank" class="btn btn-small color2-bg">
            Подробнее                                        
        </a>
    </div>
</div>