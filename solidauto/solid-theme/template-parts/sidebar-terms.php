<?php $terms = get_terms(['taxonomy' => 'category', 'hide_empty' => true]);
if ($terms) { ?>
    <div id="sidebar-terms" class="box-widget-item fl-wrap block_box">
        <div class="box-widget-item-header">
            <span>Категории</span>
        </div>
        <div class="box-widget fl-wrap">
            <div class="box-widget-content">
                <ul class="cat-item no-list-style">

                    <?php foreach ($terms as $term) { ?>

                        <li><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a> <span><?php echo $term->count; ?></span></li>

                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
<?php } ?>