<?php
/**
 * Enqueue Kadence parent + child styles properly.
 */
function grovespark_child_enqueue_styles() {
  // 1) Enqueue the parent theme’s main stylesheet
  wp_enqueue_style(
    'kadence-parent-style',
    get_template_directory_uri() . '/style.css'
  );

  // 2) Enqueue your child theme’s stylesheet, dependent on the parent 
  wp_enqueue_style(
    'grovespark-child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array( 'kadence-parent-style' ),
    filemtime( get_stylesheet_directory() . '/style.css' )
  );
}
add_action( 'wp_enqueue_scripts', 'grovespark_child_enqueue_styles' );


  
  
