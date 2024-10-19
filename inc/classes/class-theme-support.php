<?php

/**
 * Add Theme Support
 * 
 * @package Lich
 */

namespace LICH\Inc;

use LICH\Inc\Traits\Singleton;

class Theme_Support {

  use Singleton;

  protected function __construct() {
    // Load classes
    $this->setup_hooks();
  }

  protected function setup_hooks() {
    add_action('after_setup_theme', [$this, 'add_theme_support']);
  }

  public function add_theme_support() {
    add_theme_support('align-wide');
    add_theme_support('automatic-feed-links');
    add_theme_support('custom-background');
    add_theme_support('title-tag');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
      'flex-height'          => true,
      'flex-width'           => true,
      'unlink-homepage-logo' => true,
    ]);
    add_theme_support('html5', [
      'comment-list',
      'comment-form',
      'search-form',
      'gallery',
      'caption',
      'style',
      'script'
    ]);
  }
}
