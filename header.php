<?php

/**
 * Header Template
 * 
 * @package Lich
 */
?>

<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
  <meta charset="<?php echo get_bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head() ?>
</head>

<body <?php body_class() ?>>

  <?php wp_body_open() ?>

  <div id="main" class="main">
    <header>Header</header>