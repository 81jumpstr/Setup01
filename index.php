<?php 
get_header();
get_sidebar();
if ( have_posts() ) : 
?>
  <div class='post-section'>
	  <ul>   
	    <?php while ( have_posts() ) : the_post(); ?>
		  <li class='single-post'>
		    <?php the_content(); ?>
		  </li>
	    <?php endwhile; ?>  
	  </ul>
  </div>

<?php
  endif;
  get_footer();
?>
