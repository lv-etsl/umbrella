<!doctype html>
<html lang="<?php language_attributes(); ?>">
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php wp_title('|'); ?> <?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="<?php bloginfo('name'); ?>">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >

    <div class="container">

      <header class="header">

        <h1>
          <?php bloginfo('name'); ?>
        </h1>


        <h2>
          <?php bloginfo('description'); ?>
        </h2>

      </header>
