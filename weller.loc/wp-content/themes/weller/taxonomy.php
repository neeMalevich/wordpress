<?php
include 'blocks/header.php';
?>





<?php
// get the currently queried taxonomy term, for use later in the template file
$destination_location = get_queried_object();

// getting post ids that are assigned to current taxonomy term
$destination_post_IDs = get_posts(array(
  'post_type' => 'mt_destinations',
  'posts_per_page' => -1,
  'tax_query' => array(
    array(
      'taxonomy' => 'destination_location',
      'field' => 'slug',
      'terms' => $destination_location->slug
    )
  ),
  'fields' => 'ids'
));

// getting the terms of 'destination_category', which are assigned to these posts
$destination_category = wp_get_object_terms($destination_post_IDs, 'destination_category');

echo '<ul>';
foreach( $destination_category as $category ){
    echo '<li><a href="' . esc_url( site_url("destinations/".$destination_location->slug."/".$category->slug) ) . '">'.$category->name.'</a></li>';
}
echo '</ul>'; 
?>
            <?php 
                $obj_cat = get_queried_object(); 
                
                echo '<pre>';
                echo print_r($obj_cat);
                echo '</pre>';
            ?>

            <div class="list-single-main-item_content fl-wrap">
                <div id="widget-description-content">
                    <?= $obj_cat->description; ?>
                </div>
            </div>
<?php
include 'blocks/footer.php';
?>
