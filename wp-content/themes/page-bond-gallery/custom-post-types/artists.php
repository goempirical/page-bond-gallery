<?php
  add_action('init', 'artist_resources_register');

  function artist_resources_register() {
      $labels = array(
          'name' => _x('Artists', 'post type general name'),
          'singular_name' => _x('Artist', 'post type singular name'),
          'add_new' => _x('Add an artist', 'artist'),
          'add_new_item' => __('Add an artist'),
          'edit_item' => __('Edit an artist'),
          'new_item' => __('New artist'),
          'view_item' => __('View artist'),
          'search_items' => __('Search artists'),
          'not_found' =>  __('Nothing found'),
          'not_found_in_trash' => __('Nothing found in Trash'),
          'parent_item_colon' => ''
      );

      $args = array(
          'labels' => $labels,
          'public' => true,
          'publicly_queryable' => true,
          'show_ui' => true,
          'query_var' => true,
          'rewrite' => true,
          'capability_type' => 'post',
          'hierarchical' => false,
          'menu_position' => 5,
          'supports' => array('title', 'editor'),
          'rewrite' => array('slug' => 'artists', 'with_front' => FALSE)
        );

      register_post_type('artists' , $args);
  }

  function my_admin_scripts_artist() {
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_register_script('my-upload', get_bloginfo('template_url') . '/js/my-script.js', array('jquery','media-upload','thickbox'));
    wp_enqueue_script('my-upload');
  }
  function my_admin_styles_artist () {
    wp_enqueue_style('thickbox');
  }
  add_action('admin_print_scripts', 'my_admin_scripts_artist');
  add_action('admin_print_styles', 'my_admin_styles_artist');


  /*  End custom post types */
