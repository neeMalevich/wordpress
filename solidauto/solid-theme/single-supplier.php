<?php get_header() ?>
<?php $args = ['title' => get_the_title()];
get_template_part('template-parts/banner', null, $args) ?>

        <div class="row">

            <div class="col-md-8">
                <!-- list-single-main-wrapper -->
                <div class="list-single-main-wrapper fl-wrap" id="sec2">

                    <?php $args = ['gallery' => false, 'image' => get_field('обложка')];
                    get_template_part('template-parts/widget', 'gallery', $args) ?>

                    <?php $args = ['title' => get_the_title(), 'content' => get_the_content()];
                    get_template_part('template-parts/widget', 'description', $args) ?>

                </div>
            </div>

            <div class="col-md-4">

                <?php $args = ['title' => 'Блог Solid Auto'];
                get_template_part('template-parts/sidebar', 'posts', $args) ?>

            </div>
            
        </div>

    </div>
</section>
<div class="limit-box fl-wrap"></div>

<?php get_footer() ?>