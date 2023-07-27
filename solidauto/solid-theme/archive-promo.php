<?php get_header() ?>
<?php $args = ['title' => 'Акции'];
get_template_part( 'template-parts/banner', null, $args ) ?>

        <div id="promo-cards">
        <?php while( have_posts() ){
		    the_post();
		    //$bg = get_field('обложка_на_карточку') ? wp_get_attachment_image_url( get_field('обложка_на_карточку'), 'full' )  : get_template_directory_uri().'/images/front-bg.png' ;
		    $bg = get_field('обложка_на_карточку') ? wp_get_attachment_image_url( get_field('обложка_на_карточку'), 'full' )  : get_template_directory_uri().'/images/front-bg.png' ;
		    ?>

            <a class="promo-card" href="<?php the_permalink() ?>" style="background-image: url( <?php echo $bg; ?> )" >
                <span><?php the_title(); ?></span>
            </a>

        <?php } ?>
        </div>
        
        <?php $args = [
            'prev_text'    => '<i class="fas fa-caret-left"></i><span>Назад</span>',
            'next_text'    => '<span>Вперёд</span><i class="fas fa-caret-right"></i>',
        ];
        the_posts_pagination($args); ?>

    </div>
</section>
<?php get_footer() ?>