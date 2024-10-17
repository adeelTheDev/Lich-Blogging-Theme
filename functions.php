<?php

/**
 * Theme Functions
 * 
 * @package Lich
 */

function lich_enqueue_scripts() {

  // Register styles
  $lich_style_filemtime = filemtime(get_template_directory() . '/assets/css/style.css');
  wp_register_style('lich-style', get_template_directory_uri() . '/assets/css/style.css', [], $lich_style_filemtime);

  // Enqueue styles
  wp_enqueue_style('lich-style');


  // Register scripts
  $lich_script_filemtime = filemtime(get_template_directory() . '/assets/js/script.js');
  wp_register_script('lich-script', get_template_directory_uri() . '/assets/js/script.js', [], $lich_script_filemtime, true);

  // Enqueue scripts
  wp_enqueue_script('lich-script');
}
add_action('wp_enqueue_scripts', 'lich_enqueue_scripts');
