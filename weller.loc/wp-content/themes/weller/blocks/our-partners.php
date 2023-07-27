<?php
$page_id = get_the_ID();
$partner_items = carbon_get_post_meta($page_id, 'partner_items');
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <section class="our-partners">
                <h2>Наши партнёры</h2>
                <ul class="caro-slider">
                    <?php
//                    $isFirstElement = true;
                    foreach ($partner_items as $partner_item) : ?>
                        <li>
                            <img src="<?= wp_get_attachment_image_url($partner_item['partner_img'], 'thumbnail') ?>" alt="<?= $partner_item['partner_text']; ?>">
                        </li>
                        <?php
//                        $isFirstElement = false;
                    endforeach; ?>
                </ul>
            </section>
        </div>
    </div>
</div>