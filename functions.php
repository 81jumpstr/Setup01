<?php 
  function Setupshop_script_enqueue() {
    wp_enqueue_style('customstyle', get_stylesheet_directory_uri() . "/style.css", array(), '1.0.0');
    wp_enqueue_script('customjs', get_stylesheet_directory_uri() . "/js/setupshop.js", array(), '1.0.0', true);

  }
  add_action('wp_enqueue_scripts', 'Setupshop_script_enqueue');
?>

<?php
/**       ------- my additions below --------
*         Register sidebars and widgetized areas.
*
*/
function arphabet_widgets_init() {
  register_sidebar( array(
  	'name'          => 'Filters',
  	'id'            => 'filter',
  	'before_widget' => '<div>',
  	'after_widget'  => '</div>',
  	'before_title'  => '<h2 class="rounded">',
  	'after_title'   => '</h2>', ) );
}
  add_action( 'widgets_init', 'arphabet_widgets_init' );
?>

<?php
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
  add_action( 'init', 'register_my_menu' );
?>

<!-- adding and sizing - posts with thumbnails -->

<?php
add_action('init', 'setupshop_theme_init');
function setupshop_theme_init() {
  add_theme_support( 'post-thumbnails' );
}
?>
