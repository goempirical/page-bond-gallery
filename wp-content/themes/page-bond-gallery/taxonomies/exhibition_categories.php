<?php
  add_action('init', 'exhibition_categories_taxonomy_register');

  function exhibition_categories_taxonomy_register () {
    $labels = array(
      "singular_label" => "Exhibition Category",
      "all_items" => "All Exhibition Categories",
      "edit_item" => "Edit Exhibition Category",
      "add_new" => "Add new Exhibition Category",
      "add_new_item" => "Add new Exhibition Category",
      "new_item_name" => "Add new Exhibition Category name",
      "parent_item" => "Parent Site"
    );

    register_taxonomy(
      "exhibition_categories",
      array("exhibitions"),
      array(
        "hierarchical" => true,
        'show_admin_column' => true,
        "label" => "Exhibition Categories",
        "labels" => $labels,
        "rewrite" => true
      )
    );
  }
