<?php get_header(); ?>





<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>    
	<?php if (has_post_thumbnail()): ?>
	<?php the_post_thumbnail(); ?>
	<?php endif; ?>
	<div class="container">
	    <?php the_content();?>
	</div>
	
	<?php endwhile; ?>
<?php endif; ?>






















<?php get_footer(); ?>