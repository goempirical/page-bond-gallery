<?php
  add_action('init', 'exhibition_resources_register');

  function exhibition_resources_register() {
      $labels = array(
          'name' => _x('Exhibitions', 'post type general name'),
          'singular_name' => _x('Exhibition', 'post type singular name'),
          'add_new' => _x('Add an Exhibition', 'exhibition'),
          'add_new_item' => __('Add an exhibition'),
          'edit_item' => __('Edit an exhibition'),
          'new_item' => __('New exhibition'),
          'view_item' => __('View exhibition'),
          'search_items' => __('Search exhibition'),
          'not_found' =>  __('Nothing found'),
          'not_found_in_trash' => __('Nothing found in Trash'),
          'parent_item_colon' => ''
      );

      $args = array(
          'labels' => $labels,
          'taxonomies' => array('exhibition_categories','exhibition_tags'),
          'public' => true,
          'publicly_queryable' => true,
          'show_ui' => true,
          'query_var' => true,
          'rewrite' => true,
          'capability_type' => 'post',
          'hierarchical' => true,
          'menu_position' => 5,
          'supports' => array('title', 'editor', 'thumbnail'),
          'rewrite' => array('slug' => 'exhibitions', 'with_front' => FALSE)
        );

      register_post_type('exhibitions' , $args);
  }

  function my_admin_scripts_exhibition() {
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_register_script('my-upload', get_bloginfo('template_url') . '/js/my-script.js', array('jquery','media-upload','thickbox'));
    wp_enqueue_script('my-upload');
  }
  function my_admin_styles_exhibition () {
    wp_enqueue_style('thickbox');
  }
  add_action('admin_print_scripts', 'my_admin_scripts_exhibition');
  add_action('admin_print_styles', 'my_admin_styles_exhibition');
