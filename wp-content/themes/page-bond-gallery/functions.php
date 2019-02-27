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
    wp_enqueue_style( 'featherlight-styles', '//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css', array(), $the_theme->get( 'Version' ) );

    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );

    wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'popper-scripts', get_stylesheet_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    // wrap in if is artists or exhibits?
    wp_enqueue_script( 'pb_loadmore', get_stylesheet_directory_uri() . '/js/pb_loadmore.js', array(), false);
    wp_localize_script( 'pb_loadmore', 'pb_loadmore', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' )
    ));

    wp_enqueue_script( 'featherlite', '//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js', array(), false);
}

function pb_ajax_artists() {
    // prepare our arguments for the query
    $args = array('post_type' => 'artist', 'order' =>  'ASC', 'orderby' => 'menu_order', 'posts_per_page' => 100, 'paged' => $paged );
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

function pbg_google_map_api() {
    $api['key'] = 'AIzaSyBfUJ2B05OTiOmiPpaGLNK8_BaXeFXiATA';
        return $api;
}

add_filter('acf/fields/google_map/api', 'pbg_google_map_api');

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
add_image_size( 'slider', 1200, 645, false);
add_image_size( 'gallery-thumb', 700, 466, true);
add_image_size( 'post', 732, 383, true);
add_image_size( 'lightbox', 2000, 2000, false);

add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);

function add_search_form($items, $args) {
    if( $args->theme_location == 'primary' ) {
        $search_query = get_search_query(); 
        $search_query = $search_query === 'search' ? '' : $search_query;
        $items .= '<li class="search"><form method="get" id="searchform-header" class="searchform" action="'.home_url( '/' ).'" role="search"><label class="assistive-text sr-only" for="s">Search</label><div class="input-group"><input class="field form-control" id="s" name="s" type="text" placeholder="SEARCH …" value="wp all import"><span class="input-group-append"><input class="submit btn btn-primary searchsubmit" id="searchsubmit-header" name="submit" type="submit" value="Search"></span></div></form><a href="#" class="search-icon">Show Search</a></li>';
    }
    return $items;
}


include 'custom-post-types/index.php';
include 'taxonomies/index.php';