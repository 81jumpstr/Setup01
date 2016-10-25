<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title(); ?></title>
    
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Loved+by+the+King|Pontano+Sans|Wire+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Over+the+Rainbow" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    
    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>
    
    <section id='header'>
      <h1>Setupshop</h1>
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </section>
