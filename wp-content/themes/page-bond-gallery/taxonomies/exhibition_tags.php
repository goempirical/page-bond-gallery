<?php
  add_action('init', 'exhibition_tags_taxonomy_register');

  function exhibition_tags_taxonomy_register () {
    $labels = array(
      "singular_label" => "Exhibition Tags",
      "all_items" => "All Exhibition Tags",
      "edit_item" => "Edit Exhibition Tags",
      "add_new" => "Add new Exhibition Tags",
      "add_new_item" => "Add new Exhibition Tags",
      "new_item_name" => "Add new Exhibition Tags name",
      "parent_item" => "Parent Site"
    );

    register_taxonomy(
      "exhibition_tags",
      array("exhibitions"),
      array(
        "hierarchical" => false,
        "label" => "Exhibition Tags",
        "labels" => $labels,
        "rewrite" => true
      )
    );
  }
