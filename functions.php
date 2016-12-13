<?php
if ( !function_exists('setupshop_setup') ) {
  // Theme setup
  add_action('after_setup_theme', 'setupshop_setup');
  function setupshop_setup() {
    // adding and sizing - posts with thumbnails
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 100, 50, true );

    // Comment
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }

}

// SetupShop theme styles and scripts
add_action('wp_enqueue_scripts', 'setupshop_script_enqueue');
function setupshop_script_enqueue() {
    
    wp_enqueue_style(
      'setupshop-style',
      get_stylesheet_directory_uri() . "/style.css", 
      array(), 
      '1.0.0'
    );
    
    wp_enqueue_script(
      'setupshop-script', 
      get_stylesheet_directory_uri() . "/js/setupshop.js",
      array(), 
      '1.0.0', 
      true
    );
}

/**       ------- my additions below --------
*         Register sidebars and widgetized areas.
*
*/
add_action( 'widgets_init', 'setupshop_widgets_init' );
function setupshop_widgets_init() {
  register_sidebar( array(
  	'name'          => 'Filters',
  	'id'            => 'filter',
  	'before_widget' => '<div>',
  	'after_widget'  => '</div>',
  	'before_title'  => '<h2 class="rounded">',
  	'after_title'   => '</h2>', ) );
}
?>

<?php 
  add_post_meta( 5 , 'setupshop_interventions_focus' , 'education' , false ); 
  add_post_meta( 5 , 'setupshop_interventions_focus' , 'health' , false );
  add_post_meta( 5 , 'setupshop_interventions_focus' , 'games' , false );
  

  $projects_focus = get_post_meta( 5 , 'projects_focus' , false);

  echo '<ul class="projects-focus">';

  foreach ( $projects_focus as $focus ) {
    echo '<li>' .$focus .'</li>';
  }

  echo '</ul>';
?>
