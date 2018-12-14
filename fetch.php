<?php 
function get_ajax_posts() {
    // Query Arguments
    if(isset($_POST["limit"], $_POST["start"]))
    {
    $btpgid=get_queried_object_id();
    $btmetanm=get_post_meta( $btpgid, 'WP_Catid','true' );
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        
        $args = array( 
            'posts_per_page' => 5, 
            'category_name' => $btmetanm,
            'paged' => $paged,
            'post_type' => 'post' );

    // The Query
    $ajaxposts = new WP_Query( $args ); 
    if ( $ajaxposts->have_posts() ) :
        while ( $ajaxposts->have_posts() ) : $ajaxposts->the_post(); 
    ?>
    <h3><?php the_title(); ?></h3>
    <div><?php the_content(); ?> </div>
    <hr />

   <?php 
    endwhile;
    wp_reset_postdata();
    endif;
    }
}
function my_enqueue() {
    wp_enqueue_script( 'ajax-loadmore', get_template_directory_uri() . 'js/ajax_loadmore.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue' );
add_action('wp_ajax_get_ajax_posts', 'get_ajax_posts');
add_action('wp_nopriv_get_ajax_posts', 'get_ajax_posts');
?>