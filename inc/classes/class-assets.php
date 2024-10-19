<?php

/**
 * Enqueue Scripts & Styles
 * 
 * @package Lich
 */

namespace LICH\Inc;

use LICH\Inc\Traits\Singleton;

class Assets {

  use Singleton;

  protected function __construct() {
    // Load classes
    $this->setup_hooks();
  }

  protected function setup_hooks() {

    // Actions
    add_action('wp_enqueue_scripts', [$this, 'register_styles']);
    add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
  }

  public function register_styles() {
    // Register styles
    wp_register_style('bootstrap', LICH_DIR_URI . '/assets/lib/bootstrap/bootstrap.min.css', [], false);
    wp_register_style('lich-style', LICH_DIR_URI . '/assets/css/style.css', [], filemtime(LICH_DIR_PATH . '/assets/css/style.css'));

    // Enqueue styles
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('lich-style');
  }

  public function register_scripts() {
    // Register scripts
    wp_register_script('lich-script', LICH_DIR_URI . '/assets/js/script.js', [], filemtime(LICH_DIR_PATH . '/assets/js/script.js'), true);
    wp_register_script('popper-script', LICH_DIR_URI . '/assets/lib/bootstrap/popper.min.js', ['jquery'], false, true);
    wp_register_script('bootstrap-script', LICH_DIR_URI . '/assets/lib/bootstrap/bootstrap.min.js', ['jquery'], false, true);

    // Enqueue scripts
    wp_enqueue_script('lich-script');
    wp_enqueue_script('popper-script');
    wp_enqueue_script('bootstrap-script');
  }
}
