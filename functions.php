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

<?php
/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep   Optional separator.
 * @return string The filtered title.
 */
function wpdocs_theme_name_wp_title( $title, $sep ) {
    if ( is_feed() ) {
        return $title;
    }
     
    global $page, $paged;
 
    // Add the blog name
    $title .= get_bloginfo( 'name', 'display' );
 
    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ) {
        $title .= " $sep $site_description";
    }
 
    // Add a page number if necessary:
    if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
        $title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
    }
    return $title;
}
add_filter( 'wp_title', 'wpdocs_theme_name_wp_title', 10, 2 );
?>