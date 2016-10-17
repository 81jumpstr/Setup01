<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width">        
    </div>
    <title><?php wp_title(); ?></title>
    
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Loved+by+the+King|Pontano+Sans|Wire+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Over+the+Rainbow" rel="stylesheet">
    
    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
