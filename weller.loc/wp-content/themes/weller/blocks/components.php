<section class="bg_main_product product_page">
    <div class="container">
        <div class="row">
            <div class="products">
                <?php
                $components = get_posts([
                    'post_type' => 'component',
                    'post_status' => 'publish',
                    'numberposts' => -1
                ]);

                foreach ($components as $component) :
                    ?>
                    <div class="products_block">
                        <div class="products_img">
                            <a href="<?php the_permalink($component->ID); ?>">
                                <?php echo get_the_post_thumbnail($component->ID, 'full'); ?>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
        <div class="row block_products">
            <div class="col-xs-12">
                <?php if (is_single()) : ?>
                    <div class="product_head">
                        <?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
                    </div>
                <?php endif; ?>
                <div class="product_text">
                    <?= the_content(); ?>
                </div>
                <?php if (is_single()) : ?>
                    <div class="product_pdf_link">
                        <a target="_blank" href="/public/hybrid/11/pdlink/5947bd64d8a0b.pdf">Скачать каталог
                            продукции</a>
                    </div>
                    <div class="product_form_link">
                        <a href="/form">Проектная поддержка</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>