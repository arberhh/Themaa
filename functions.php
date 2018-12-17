<?php

/**
 * Themaa functions and definitions
 *
 * @package WordPress
 * @since 1.0
 */


    // theme setup 
function themaa_setup()
{
        // translation
    load_theme_textdomain('wpmu', get_stylesheet_directory() . '/languages');
        // post formats
    add_theme_support('post_formats');
        // Post thumbnails or featured images
    add_theme_support('post-thumbnails', array('post', 'page'));
        // RSS feed links to head
    add_theme_support('automatic-feed-links');
        // navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Navigation', 'primary')
    ));
}
add_action('after_setup_theme', 'Themaa_setup');


// navigation menu setup
function wp_nav_menu_no_ul()
{
    $options = array(
        'echo' => false,
        'container' => false,
        'theme_location' => 'primary',
        'fallback_cb' => 'fall_back_menu'
    );

    $menu = wp_nav_menu($options);
    echo preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '', $menu);

}

function fall_back_menu()
{
    return;
}


// get pages by slug
// Usage:
// get_id_by_slug('any-page-slug');

function get_id_by_slug($page_slug) {
	$page = get_page_by_path($page_slug);
	if ($page) {
		return $page->ID;
	} else {
		return null;
	}
}
        
// infite scroll to load all the posts via ajax 
add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');

function load_posts_by_ajax_callback()
{
    check_ajax_referer('load_more_posts', 'security');
    $btpgid = get_queried_object_id();
    $btmetanm = get_post_meta($btpgid, 'WP_Catid', 'true');
    $paged = $_POST["page"];
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => $btmetanm,
        'posts_per_page' => 6,
        'paged' => $paged
    );
    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()) : ?>
        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?> 
            <div class='col-md-4 col-sm-6 portfolio-item'>
                <a class='portfolio-link' data-toggle='modal' href='<?php echo get_permalink(); ?>' class='modalOpen'>
            <div class='portfolio-hover'>
                <div class='portfolio-hover-content'>
                <i class='fas fa-plus fa-3x'></i>
                </div>
            </div>
            <div class="portfolio-caption">
                <h3>
                <?php the_title(); ?>
                </h3>
                <?php echo the_post_thumbnail('thumbnail'); ?>
            </div> 
            </a> 
            </div>   
        <?php endwhile; ?>    
    <?php wp_reset_postdata();
    endif;
    wp_die();
}

// uses the action API to execute functions
function category_callback()
{
    check_ajax_referer('load_more_posts', 'security');
    $categories = get_the_category();
// waits for the category and page to be send by our javasript/ajax function
    $category_id = $_POST['category'];
    $paged = $_POST["page"];
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'cat' => $category_id,
        'posts_per_page' => 6,
        'paged' => $paged,
    );
    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()) : ?>
    <?php while ($wp_query->have_posts()) : $wp_query->the_post();
    ?> 
        <div class='col-md-4 col-sm-6 portfolio-item'>
            <a class='portfolio-link' data-toggle='modal' href='<?php echo get_permalink(); ?>' class='modalOpen'>
        <div class='portfolio-hover'>
            <div class='portfolio-hover-content'>
            <i class='fas fa-plus fa-3x'></i>
            </div>
        </div>
        <div class="portfolio-caption">
            <h3>
            <?php the_title(); ?>
            </h3>
            <?php echo the_post_thumbnail('thumbnail'); ?>
        </div> 
        </a> 
        </div>   
        <?php endwhile; ?>    
    <?php wp_reset_postdata();
    endif;
    wp_die();
}

// ajax function to load posts by category
add_action('wp_ajax_category', 'category_callback');
add_action('wp_ajax_nopriv_category', 'category_callback');

// enque scripts
    function my_theme_scripts()
    {
        wp_enqueue_script('jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array('jquery'), 1.1, true);
        wp_enqueue_script('bootstrap-boundle', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), 1.1, true);
        wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), 1.1, true);
        wp_enqueue_style('bootstrap-js', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.csss');
    }
    add_action('wp_enqueue_scripts', 'my_theme_scripts');
    ?>