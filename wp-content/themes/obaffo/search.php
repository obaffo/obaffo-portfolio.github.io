<?php get_header(); ?>


<div class="container center">
<h2><?php printf ('Search Result For : %s',get_search_query()); ?></h2>
  <?php 
				 if ( have_posts() ) {
					 
					 while ( have_posts() ) {  the_post();
						 
						 ?>
					
					<h2><i class="fa fa-hand-o-right" aria-hidden="true"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></i></h2>
					
					
					<?php }	} 
		
				  else{ echo '<h2>Not Found</h2>';} 
				
		 wp_reset_postdata(); ?>

</div>





<?php get_footer(); ?>