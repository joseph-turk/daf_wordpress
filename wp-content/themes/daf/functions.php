<?php
/////////////////////////////////////
// Enqueue stylesheets and scripts //
/////////////////////////////////////

function daf_styles() {
  wp_enqueue_style('daf_styles', get_stylesheet_uri());
}

function daf_scripts() {
  wp_enqueue_script('jquery');
  wp_enqueue_script('nav', get_template_directory_uri() . '/js/nav.js');
}

add_action('wp_enqueue_scripts', 'daf_styles');
add_action('wp_enqueue_scripts', 'daf_scripts');

///////////////////////////////////////////////////////
// Style the previous and next page links as buttons //
///////////////////////////////////////////////////////

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="button"';
}
?>
