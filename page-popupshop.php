<?php 
/*
 *		Template Name: Custom Pop-up
 *		Description: Call to Action
 */
?>

<?php get_header(); ?>

	<div class='main-section'>
	  <ul class="posts">
		<?php 
		  if ( have_posts() ) :
	      while ( have_posts() ) : the_post();
			get_template_part( 'content', 'page' );
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php the_title('<h1 class="entry-title">','</h1>' ); ?>

		<small>
			<?php the_category(); ?>
		</small>

		<div>
		  <?php the_content(); ?>
		  <h3>Sign Up: </h3>
		  <button href="#" class="intervention">Events</button>
		  <button href="#" class="workshop">Setupshop</button>
		</div>

		<?php 
			endwhile;
			endif;
		?>
	  </ul>
	</div>

<?php get_footer(); ?>
