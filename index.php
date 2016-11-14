<?php get_header(); ?>
	
<!-- adding and sizing - posts with thumbnails -->

	<?php
	  add_action('init', 'setupshop_theme_init');
		function setupshop_theme_init() {
	  add_theme_support( 'post-thumbnails' ); 
	  set_post_thumbnail_size( 100, 50, true );
	} 
	?>

	<div class='main-section'>
	  <?php get_sidebar(); ?>
	  <ul class="posts">
		<?php 
		  if ( have_posts() ) :
	      	while ( have_posts() ) : the_post();
		?>      
	    <li>
		  <?php the_content('&raquo;'); ?>
		</li>
		<?php 
			endwhile;
			endif;
		?>
	  </ul>
	</div>

<?php get_footer(); ?>
