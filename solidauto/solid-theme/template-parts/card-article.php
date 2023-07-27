<article class="post-article article-card">
    <div class="list-single-main-media fl-wrap">
        <img src="<?php echo $img = get_the_post_thumbnail_url( $args['id'] ) ? get_the_post_thumbnail_url( $args['id'], 'full' )  : get_template_directory_uri().'/images/front-bg.png' ; ?>" alt="">
    </div>
    <div class="list-single-main-item fl-wrap block_box">
        <div class="post-opt-title">
            <a href="<?php echo $args['link']; ?>"><?php echo $args['title']; ?></a>
        </div>
        <div class='article-card-excerpt'><?php echo $args['excerpt']; ?></div>
        <span class="fw-separator"></span>
        <div class="post-opt">
            <ul class="no-list-style">
                <li><i class="fal fa-calendar"></i> <span><?php echo $args['date']; ?></span></li>
            </ul>
        </div>
        <a href="<?php echo $args['link']; ?>" class="btn btn-small color2-bg  float-btn">Читать</a>
    </div>
</article>