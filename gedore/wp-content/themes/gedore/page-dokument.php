<?php
/*
Template Name:  Документы
*/
?>
<?php
$page_id = get_the_ID();
?>

<?php get_header(); ?>

    <section class="s-document">
        <div class="document__top" style="background-image: url(<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id,'banner_img'), 'full'); ?>) ;">
            <div class="document__box">
                <h1 class="document__title"><?php echo carbon_get_post_meta($page_id,'banner_title'); ?></h1>
            </div>
        </div>
        <div class="container">
            <div class="document__inner">
                <?php
                $document_items = carbon_get_post_meta($page_id,'document_item');
                $document_attributes = carbon_get_post_meta($page_id,'document_attributes');

                ?>
                <?php if($document_items) : ?>
                    <?php foreach($document_items as $document_item) : ?>
                        <div class="document__pdf-box">
                            <?php if($document_item['document_sec-title']) : ?>
                                <div class="document__pdf-title"><?= $document_item['document_sec-title']; ?></div>
                            <?php endif; ?>

                            <div class="document__pdf-inner">

                                <?php
                                $document_attributes = $document_item['document_attributes'];
                                if(isset($document_attributes) && !empty($document_attributes)) : ?>
                                    <?php foreach($document_attributes as $document_attribut) : ?>
                                        <?php if(isset($document_attribut['document_title']) && !empty($document_attribut['document_title']) && isset($document_attribut['document_file']) && !empty($document_attribut['document_file'])) : ?>
                                            <div class="document__pdf-item">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pdf.svg" alt="<?= $document_attribut['document_title']; ?>">
                                                <a href="<?php echo wp_get_attachment_url($document_attribut['document_file']); ?>" class="document__pdf-text"><?= $document_attribut['document_title']; ?></a>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>