<?php

include 'blocks/header.php';

global $post;
$product_id = get_the_ID();

$product_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post');

$product_atr = carbon_get_post_meta($product_id, 'product_atr');
$product_atr_model = carbon_get_post_meta($product_id, 'product_atr_model');
?>

<section class="bg_main_product">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <article>

                    <h1><?= the_title(); ?></h1>
                    <div class="smt-item">
                        <div class="col-xs-12 col-md-9">
                            <div class="si-img">
                                <a href="#" id="zoom">
                                    <?php the_post_thumbnail('full'); ?>
                                </a>
                            </div>
                        </div>
                        <?php if (isset($product_atr) || isset($product_atr_model)) : ?>
                            <div class="col-xs-12 col-md-3 product-options">
                                <div class="si-brands">
                                    <table>
                                        <tbody>
                                        <?php if (isset($product_atr) && !empty($product_atr)) : ?>
                                            <tr>
                                                <td>Производитель:</td>
                                                <td><?= $product_atr; ?></td>
                                            </tr>
                                        <?php endif; ?>
                                        <?php if (isset($product_atr_model) && !empty($product_atr_model)) : ?>
                                            <tr>
                                                <td>Модель:</td>
                                                <td><?= $product_atr_model; ?></td>
                                            </tr>
                                        <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="col-xs-12">
                            <div class="si-text">
                                <?= the_content(); ?>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal"><span
                                                aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
                                    <img src="<?= $product_img[0]; ?>" id="preview"
                                         style="max-width: 700px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<?php
include 'blocks/footer.php';
?>
