<?php 
/*
 *    Advised; won't work, will revisit
 */
?>

<?php get_header(); ?>

	<div class='main-section'>
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
