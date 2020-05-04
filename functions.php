<?php
/**
 * PHP functions / logic we can run before our template(s) output.
 */


add_action( 'wp_enqueue_scripts', function() {
  // Theme script.
  wp_enqueue_script(
    // Name of script.
    'example-theme-scripts',
    // Public path to script.
    get_theme_file_uri(
      '/assets/js/scripts.js'
    ),
    // Dependency scripts (by name, in array.)
    array(),
    // Should a version number be appended?
    strftime( get_theme_file_uri(
      '/assets/js/scripts.js'
    ) ),
    // Output in head.
    TRUE
  );

  // Theme styles.
  wp_enqueue_style(
    'example-theme-styles',
    // Public path to script.
    get_theme_file_uri(
      '/assets/css/main.css'
    )
  );
} );
//add navigation menus to wordpress
 register_nav_menus (
     array (
        'main-menu'=> 'Main Menu'

     )
  );

