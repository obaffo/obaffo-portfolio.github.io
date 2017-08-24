<?php get_header(); ?>




<section class="single">
    <div class="container">
        <div class="row">
           <?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?> 
            <div class="col-md-8">
                <?php the_post_thumbnail(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?> 
                <?php if ( comments_open() || get_comments_number() ) :
				comments_template(); ?><?php endif; ?>
            </div>
            <div class="col-md-4">
               <div class="author">
                   <i class="fa fa-user-o"></i><h4>Posted By: <?php the_author(); ?></h4>
                   <hr>
               </div>
               <div class="time">
                   <i class="fa fa-clock-o"></i><h4>Posted At-<?php echo get_the_time(); ?></h4>
                   <hr>
               </div>
               <?php if(has_tag()): ?>
                <div class="tags">
                    <h4>Tags:</h4>
                    <?php the_tags('<button type="button" class="btn btn-primary">','</button><button type="button" class="btn btn-success">','</button'); ?>
                    
                </div>
                <?php endif; ?>
            </div>
            <?php endwhile; ?>
<?php endif; ?>
        </div>
    </div>
</section>



<?php get_footer(); ?>