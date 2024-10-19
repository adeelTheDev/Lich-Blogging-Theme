<?php

/**
 * Theme Functions
 * 
 * @package Lich
 */

if (!defined('LICH_DIR_PATH')) {
  define('LICH_DIR_PATH', get_template_directory());
}

if (!defined('LICH_DIR_URI')) {
  define('LICH_DIR_URI', get_template_directory_uri());
}

/**
 * Require the autoloader.
 * This will help us to use classes in multiple files without including those classes/files.
 * This function will automatically include the class when we instantiate them.
 */
require_once LICH_DIR_PATH . '/inc/helpers/autoloader.php';


/**
 * Include and instantiate the main theme class
 * After including this class, we don't need to include other classes in functions.php
 * Because, we are going to include other classes in this main class (Lich_Theme)
 */
\LICH\Inc\Lich_Theme::get_instance();
