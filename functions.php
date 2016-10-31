<?php 
  function Setupshop_script_enqueue() {
    wp_enqueue_style('customstyle', get_stylesheet_directory_uri() . "/style.css", array(), '1.0.0');
    wp_enqueue_script('customjs', get_stylesheet_directory_uri() . "/js/setupshop.js", array(), '1.0.0', true);

  }
  add_action('wp_enqueue_scripts', 'Setupshop_script_enqueue');

?>



<?php

  /**  ------- my additions below --------
  * Register our sidebars and widgetized areas.
  *
  */
  function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Filters',
		'id'            => 'filter',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

  }
  add_action( 'widgets_init', 'arphabet_widgets_init' );
?>

<?php
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );
?>

<!--<?php
add_filter( 'wp_title', 'wpdocs_hack_wp_title_for_home' );

/**
 * Customize the title for the home page, if one is not set.
 *
 * @param string $title The original title.
 * @return string The title to use.
 */
function wpdocs_hack_wp_title_for_home( $title )
{
  if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
    $title = __( 'Home', 'textdomain' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}
?>
-->