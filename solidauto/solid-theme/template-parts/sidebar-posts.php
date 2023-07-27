<div id="sidebar-posts" class="box-widget-item fl-wrap block_box">
    <div class="box-widget-item-header">
        <span><?php echo $args['title']; ?></span>
    </div>
    <div class="box-widget  fl-wrap">
        <div class="box-widget-content">
            <!--widget-posts-->
            <div class="widget-posts  fl-wrap">
                <ul class="no-list-style">
                    <?php $query = get_posts(['post_type' => 'promo','posts_per_page' => 5, 'exclude' => get_the_ID()]);

                    foreach ($query as $post) {
                        setup_postdata($post); ?>
                        
                        <li>
                            <div class="widget-posts-img">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo wp_get_attachment_image_src(get_field('обложка'), 'slider-thumb')[0]; ?>">
                                </a>
                            </div>
                            <div class="widget-posts-descr">
                                <div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                <div class="geodir-category-location fl-wrap"><a>
                                <?php if (get_field('дата_начала') && get_field('дата_окончания')) {
                                echo get_field('дата_начала').' - '. get_field('дата_окончания');
                                } else{
                                    echo 'Без срока действия';
                                } ?>
                                </a></div>

                            </div>
                        </li>

                    <?php }
                    wp_reset_postdata(); ?>
                </ul>
            </div>
            <!-- widget-posts end-->
        </div>
    </div>
</div>