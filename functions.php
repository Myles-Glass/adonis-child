<?php
/**
 * Loads the parent stylesheet.
 */
function load_parent_stylesheet() {
  wp_enqueue_style( 'parent-styles', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'load_parent_stylesheet' );


//To remove the search function, but doesnt work
//remove_filter( 'wp_nav_menu_items', 'divina_add_search_box_to_divina_menu', 10, 2 );
?>
