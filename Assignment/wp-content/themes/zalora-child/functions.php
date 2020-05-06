<?php
define("THEME_NAME", "zalorachild");
define("THEME_VERSION", '1.0');

add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style(THEME_NAME, get_template_directory_uri() . '/style.css', array(), THEME_VERSION);
});

include('custom-shortcodes.php');
?>