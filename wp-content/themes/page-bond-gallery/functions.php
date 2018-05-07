<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    // wrap in if is artists or exhibits?
    wp_enqueue_script( 'pb_loadmore', get_stylesheet_directory_uri() . '/js/pb_loadmore.js', array(), false);
    wp_localize_script( 'pb_loadmore', 'pb_loadmore', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' )
    ));
}

function pb_ajax_artists() {
    // prepare our arguments for the query
    $args = array('post_type' => 'artist', 'order' =>  'ASC', 'orderby' => 'title', 'posts_per_page' => 12 );
    $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
    $args['post_status'] = 'publish';

    // it is always better to use WP_Query but not here
    query_posts( $args );
 
    if( have_posts() ) :
 
        // run the loop
        while( have_posts() ): the_post();
 
            get_template_part( 'loop-templates/content-grid-artist' );
 
        endwhile;
 
    endif;
    die; // here we exit the script and even no wp_reset_query() required!
}

add_action( 'wp_ajax_artists', 'pb_ajax_artists' );
add_action( 'wp_ajax_nopriv_artists', 'pb_ajax_artists' );

function google_map_api() {
    $api['key'] = 'AIzaSyBfUJ2B05OTiOmiPpaGLNK8_BaXeFXiATA';
        return $api;
}

add_filter('acf/fields/google_map/api', 'google_map_api');

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
}

// Catching var query via URL

function query_range_years( $vars ) {
    $vars[] = 'range';
    return $vars;
}

add_filter('query_vars', 'query_range_years');

// Add support to files upload SVG
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_filter('nav_menu_css_class' , 'nav_class_active' , 10 , 2);

function nav_class_active ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

//Adding another image size for gallery
add_image_size( 'slider', 1200, 645, true);
add_image_size( 'post', 732, 383, true);


include 'custom-post-types/index.php';
include 'taxonomies/index.php';

function misha_loadmore_ajax_handler(){
 
    // prepare our arguments for the query
    $args = json_decode( stripslashes( $_POST['query'] ), true );
    $args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
    $args['post_status'] = 'publish';
 
    // it is always better to use WP_Query but not here
    query_posts( $args );
 
    if( have_posts() ) :
 
        // run the loop
        while( have_posts() ): the_post();
 
            // look into your theme code how the posts are inserted, but you can use your own HTML of course
            // do you remember? - my example is adapted for Twenty Seventeen theme
            get_template_part( 'template-parts/post/content', get_post_format() );
            // for the test purposes comment the line above and uncomment the below one
            // the_title();
 
 
        endwhile;
 
    endif;
    die; // here we exit the script and even no wp_reset_query() required!
}
 
 
 
add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}