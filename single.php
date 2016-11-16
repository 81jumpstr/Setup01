
<?php get_header(); ?>

	<div class='main-section'>
	  <?php get_sidebar(); ?>
	  <ul class="posts">
		<?php 
		  if ( have_posts() ) :
	      while ( have_posts() ) : the_post();
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php the_title('<h1 class="entry-title">','</h1>' ); ?>

		<small>
			<?php the_category(); ?>
		</small>

		<div>
		  <?php the_content(); ?>
		</div>

		<?php 
			endwhile;
			endif;
		?>
	  </ul>
	</div>

<?php get_footer(); ?>
