<?php 
get_header();
get_sidebar();
if ( have_posts() ) : 
?>
  <div class='post-section'>
	  <ul>
	      <div class='single-post'>
		    <?php while ( have_posts() ) : the_post(); ?>
			  <li>
			    <?php the_content(); ?>
			  </li>
		    <?php endwhile; ?>
		  </div>  
	  </ul>
  </div>

<?php
  endif;
  get_footer();
?>
