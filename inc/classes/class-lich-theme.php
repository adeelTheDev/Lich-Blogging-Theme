<?php

/**
 * Bootstraps the entire Theme
 * This is the main class of the theme
 * 
 * @package Lich
 */

namespace LICH\Inc;

use LICH\Inc\Traits\Singleton;

class Lich_Theme {

  use Singleton;

  protected function __construct() {
    // Load classes
    Assets::get_instance();

    $this->setup_hooks();
  }

  protected function setup_hooks() {

    // Actions
  }
}
