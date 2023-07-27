<?php
/*
Template Name:  Контакты
*/
?>
<?php
$page_id = get_the_ID();
?>

<?php get_header(); ?>

    <section class="s-contact">
        <div class="container">
            <div class="contact">
                <div class="contact__item">
                    <h2 class="section-title"><?php echo get_the_title(); ?></h2>
                    <div class="contact__text">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="contact__item">
                    <div id="map" class="map">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A28aeb296b09c1fe2dc23b273e7ca186d1881c965a6de12201a3257b7d893ef36&amp;source=constructor" width="100%" height="412" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>