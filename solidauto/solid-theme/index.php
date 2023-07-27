<?php get_header() ?>
<?php 
$args = ['title' => 'Блог нашей сети'];

if (is_search()){
    $args = ['title' => 'Результаты поиска'];    
}
get_template_part('template-parts/banner', null, $args) ?>

<div class="row">

    <div class="col-md-8">
        <div id="article-cards">
            <?php 
            while (have_posts()) {
                the_post();
                $args = ['title' => get_the_title(), 'id' => get_the_ID(),'link'=>get_the_permalink(),'date'=>get_the_time('j F Y'),'excerpt'=>get_the_excerpt()];
                get_template_part('template-parts/card', 'article', $args);

            }
            ?>
        </div>

        <?php $args = [
            'prev_text'    => '<i class="fas fa-caret-left"></i><span>Назад</span>',
            'next_text'    => '<span>Вперёд</span><i class="fas fa-caret-right"></i>',
        ];
        the_posts_pagination($args); ?>

    </div>

    <div class="col-md-4">
        <div class="box-widget-wrap fl-wrap fixed-bar fixbar-action" style="z-index: auto; position: relative; top: 0px;">
            <!--Акции-->
            <?php $args = ['title' => 'Акции Solid Auto'];
            get_template_part('template-parts/sidebar', 'posts', $args) ?>
        </div>
    </div>
</div>

</div>
</section>
<div class="limit-box fl-wrap"></div>

<?php get_footer() ?>