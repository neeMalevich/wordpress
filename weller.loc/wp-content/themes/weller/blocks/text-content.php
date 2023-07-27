<?php
//$page_id = get_the_ID();
//$the_content = get_the_content();
?>

<section class="bg_main_product">
    <div class="container">
        <?php if (!is_front_page()): ?>
            <h1><?= the_title(); ?></h1>
        <?php endif; ?>
        <div class="row">
            <div class="col-xs-12">
                <div>
                    <?= the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>