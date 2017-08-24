<?php get_header(); ?>
        <!--Paradise Slider Start-->

        <section>
            <div class="slider">
                <div class="carousel ps_control_bround ps_easeInOut ps_zoom_i swipe_x"data-duration=2000 data-interval=5000 data-pause=hover data-ride=carousel id=fw_al_004>
               <div class=carousel-inner role=listbox>
                  
                  
                  <?php 
						$obaffo_post=null;
						$obaffo_post=new WP_Query(array(
						'post_type'=> 'slider',
						'posts_per_page'=>-1,
						
					)); 
				 if ($obaffo_post -> have_posts() ) {
					 $x=0;
					 while ($obaffo_post -> have_posts() ) {  
                         $x++;
                         $obaffo_post ->the_post();
						 $caption_position = get_post_meta(get_the_id(),'_adolfix_caption_position',true);
						 $sub_title = get_post_meta(get_the_id(),'_adolfix_sub_title',true);
						 $title_animation = get_post_meta(get_the_id(),'_adolfix_title_animation',true);
						 $sub_title_animation = get_post_meta(get_the_id(),'_adolfix_sub_title_animation',true);
						 ?>
                         
                         <div class="item <?php if($x==1){echo 'active';} ?>">
                             <?php the_post_thumbnail(); ?>
                             <div class="fw_al_004_slide fw_al_004_slide_<?php echo $caption_position; ?>">
                                <h1 class="animated <?php echo $title_animation; ?>" ><?php the_title(); ?></h1>
                                <p data-animation="animated zoomInLeft"><?php echo $sub_title; ?></p>
                                <a href=# data-animation="animated zoomInRight">select one</a> <a href=# data-animation="animated zoomInRight">select two</a>
                             </div>
                          </div>
                         
                         
                         <?php }
				 
					} 
		
				  else{ echo 'No post';}
                  wp_reset_postdata();
				
                ?>
                  
                  
                  
<!--
                  <div class=item>
                     <img alt=fw_al_004_02 src=<?php echo get_template_directory_uri(); ?>/img/fw_al_004_02.jpg>
                     <div class="fw_al_004_slide fw_al_004_slide_right">
                        <h1 data-animation="animated zoomInLeft">paradise slider</h1>
                        <p data-animation="animated zoomInLeft">We have prepared 100+ pre-made layouts of different types.</p>
                        <a href=# data-animation="animated zoomInLeft">select one</a> <a href=# data-animation="animated zoomInLeft">select two</a>
                     </div>
                  </div>
                  <div class=item>
                     <img alt=fw_al_004_03 src=<?php echo get_template_directory_uri(); ?>/img/fw_al_004_03.jpg>
                     <div class=fw_al_004_slide>
                        <h1 data-animation="animated zoomInRight">paradise slider</h1>
                        <p data-animation="animated zoomInRight">We have prepared 100+ pre-made layouts of different types.</p>
                        <a href=# data-animation="animated zoomInRight">select test</a> <a href=# data-animation="animated zoomInLeft">select two</a>
                     </div>
                  </div>
                    <div class=item>
                     <img alt=fw_al_004_03 src=<?php echo get_template_directory_uri(); ?>/img/fw_al_004_03.jpg>
                     <div class=fw_al_004_slide>
                        <h1 data-animation="animated zoomInRight">paradise slider</h1>
                        <p data-animation="animated zoomInRight">We have prepared 100+ pre-made layouts of different types.</p>
                        <a href=# data-animation="animated zoomInRight">select another</a> <a href=# data-animation="animated zoomInLeft">select two</a>
                     </div>
                  </div>
-->
               </div>
               <a href=#fw_al_004 class="carousel-control left"data-slide=prev role=button><span class="fa fa-angle-left"aria-hidden=true></span> <span class=sr-only>Previous</span> </a><a href=#fw_al_004 class="carousel-control right"data-slide=next role=button><span class="fa fa-angle-right"aria-hidden=true></span> <span class=sr-only>Next</span></a>
            </div>

            </div>
        </section>
         

<!--Slider End-->
<!--        Under slider start-->
    <?php if(have_posts('under_slider')):?>
        <section class="para">
            <div class="underslider">
                <div class="container">
                    <div class="row">
                       
                       <?php 
						$obaffo_post=null;
						$obaffo_post=new WP_Query(array(
						'post_type'=> 'under_slider',
						'posts_per_page'=>3,
						
					)); 
				 if ($obaffo_post -> have_posts() ) {
					
					 while ($obaffo_post -> have_posts() ) {  
                        
                         $obaffo_post ->the_post();
						 $under_icons = get_post_meta(get_the_id(),'_adolfix_under_icons',true);
						 $under_description = get_post_meta(get_the_id(),'_adolfix_under_description',true);
						 
						 ?>
                         
                        <div class="col-md-4 underslider_item">
                           <div class="row">
                               <div class="col-md-2">
                                   <i class="fa fa-<?php echo $under_icons; ?>" aria-hidden="true"></i>
                               </div>
                               <div class="col-md-10">
                                   <p class="white-color"><?php echo $under_description; ?></p>
                               </div>
                           </div>
                        </div>
                         
                         <?php }
				 
					} 
		
				 
                  wp_reset_postdata();
				
                ?>
                
                        
                    </div>
                </div>
            </div>
        </section>
        <?php else: ?>
        <?php endif; ?>

<!--        Under slider Area end-->
<!--        Feature Area-->
        <section>
            <div class="container">
                <div class="feature">
                    <h1>WELCOME TO SALIQUE, MULTI-PURPOSE THEME</h1>
                    <p>Html theme with awesome features, sliders, unlimited colors  much more!<p>
                    <div class="row">
                        <?php 
						$obaffo_post=null;
						$obaffo_post=new WP_Query(array(
						'post_type'=> 'feature',
						'posts_per_page'=>3,
						
					)); 
				 if ($obaffo_post -> have_posts() ) {
					
					 while ($obaffo_post -> have_posts() ) {  
                        
                         $obaffo_post ->the_post();
						 $feature_icon = get_post_meta(get_the_id(),'_adolfix_feature_icon',true);
				
						 ?>
                        
                        
                        <div class="col-md-4">
                            <div class="feature_item">
                                <div class="feature_heading">
                                    <i class="fa fa-<?php echo $feature_icon; ?>" aria-hidden="true"></i>
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <div class="feature_in">
                                    <?php the_content(); ?>
                                </div>

                            </div>
                        </div>
                        <?php }
				 
					} 
		
				 
                  wp_reset_postdata();
				
                ?>
                       
                    </div>
                </div>
            </div>
        </section>
<!--        Feature Area End-->
<!--        Download area-->
        <section>
            <div class="container">
                <div class="download">
                    <div class="row">
                        <div class="col-md-9">
                            <h4>Salique is incredibly awesome, with a refreshingly clean design</h4>
                            <p>We produce comprehensive mapping of consumers' relationships with communications across bought, owned & earned media based on bespoke insight. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam hendrerit lacus mattis orci fermentum mollis iaculis. </p>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-default btn-lg btn-custom">
                              <span class="glyphicon glyphicon-save" aria-hidden="true"></span>Download
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!--        Download area end-->
<!--Our Skill Area Start-->
        <section class="skill">
            <div class="container">
              <h2>Our Skill</h2>
              <hr>
               <?php 
						$obaffo_post=null;
						$obaffo_post=new WP_Query(array(
						'post_type'=> 'skill',
						'posts_per_page'=>-1,
                        'order'=>'ASC',
						
					)); 
				 if ($obaffo_post -> have_posts() ) {
					
					 while ($obaffo_post -> have_posts() ) {  
                        
                         $obaffo_post ->the_post();
						 $skill_name = get_post_meta(get_the_id(),'_adolfix_skill_name',true);
						 $skill_value = get_post_meta(get_the_id(),'_adolfix_skill_value',true);
				
						 ?>
                <div class="progress">
                 
                  <div class="progress-bar" role="progressbar" style="width: <?php echo $skill_value; ?>%;" aria-valuenow="<?php echo $skill_value; ?>" aria-valuemin="0" aria-valuemax="100"><?php the_title(); ?> <?php echo $skill_value; ?>%</div>
                </div>
                <?php }
				 
					} 
		
				 
                  wp_reset_postdata();
				
                ?>
                
               
            </div>
        </section>
<!--Our Skill Area End-->
<!--Our Team Area Start-->
        <section>
            <div class="container">
               <h2>Our Team</h2>
               <hr>
                <div class="row">
                   <?php 
						$obaffo_post=null;
						$obaffo_post=new WP_Query(array(
						'post_type'=> 'team',
						'posts_per_page'=>4,
                        'order'=>'ASC',
						
					)); 
				 if ($obaffo_post -> have_posts() ) {
					
					 while ($obaffo_post -> have_posts() ) {  
                        
                         $obaffo_post ->the_post();
						 $team_text = get_post_meta(get_the_id(),'_adolfix_team_text',true);
						
				
						 ?>
                    <div class="col-md-3">
                        <div class="single_team">
                            <div class="team_img">
                                <?php the_post_thumbnail('team_img'); ?>
                            </div>
                            <div class="single_team_text">
                                <h2><?php the_title(); ?></h2>
                                <hr>
                                <p><?php echo $team_text; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php }
				 
					} 
		
				 
                  wp_reset_postdata();
				
                ?>
                   
                </div>
            </div>
        </section>
<!--Our Team Area End-->
<!--        Modal for showcase start-->
       
<!--        Modal for showcase end-->
<?php get_footer(); ?>