<?php get_header(); ?>

        
<!--Main Blog Area Start-->
        <!--        Blog Start     -->
        <section class="main-blog">
            <div class="container ">
                <div class="row">
                    <div class="col-md-9">
                       
                       <h2>
                           <?php 
                           if(is_category()){
                               echo 'Category: ';single_cat_title();
                           }elseif(is_tag()){
                               echo 'Tag Archives: ';single_cat_title();
                              
                           }elseif(is_author()){
                               the_post();
                               echo 'Author Archives:'.get_the_author();
                               rewind_posts();
                           }elseif(is_day()){
                               echo'Daily Archives: ' .get_the_date();
                           }elseif(is_month()){
                               echo'Monthly Archives: ' .get_the_date('F Y');
                           }elseif(is_year()){
                               echo'Yearly Archives: ' .get_the_date('Y');
                           }else{
                               echo'Archives:';
                           }
                           ?>
                       </h2>
                        
                          <?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>    
                          
                          <?php if (has_post_thumbnail()): ?>
                          <div class="first-post" uk-scrollspy="cls: uk-animation-slide-top-medium; repeat: true">
                           <div class="row">
                                <div class="col-md-6"> 
                                    <div class="blog-img">
                                        <?php the_post_thumbnail('post-img'); ?>
                                    </div>
                                        
                                        
                                   
                                     <div class="first-bottom-txt">
                                         <div class="row">
                                             <div class="col-md-6">
                                                 <i class="fa fa-user-o" aria-hidden="true"><span class="blog-bottom-txt"> Posted By:  <a href="#"><?php the_author(); ?></a></span></i>
                                             </div>
                                             <div class="col-md-6">
                                                 <i class="fa fa-clock-o" aria-hidden="true"><span class="blog-bottom-txt"><?php the_time(); ?></span></i>
                                             </div>
                                         </div>
                                    </div>
                                </div>
                                <div class="col-md-6 post-heading">
                                    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                    <?php the_excerpt(); ?>
                                    
                                </div>
                          </div>
                          
                         
                        <br><hr>
                        </div>
                        <?php else: ?>
                        <div class="first-post" uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true">
                           
                                
                                
                                    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                    <div class="first-bottom-txt">
                                         
                                             
                                                 <i class="fa fa-user-o" aria-hidden="true"><span class="blog-bottom-txt"> Posted By:  <?php the_author_link(); ?></span></i>
                                            
                                            
                                                 <i class="fa fa-clock-o" aria-hidden="true"><span class="blog-bottom-txt"><?php the_time(); ?></span></i>
                                            
                                         
                                    </div>
                                    <?php the_excerpt(); ?>
                                    
                                    
                                <hr>
                         
                          
                         
                        <br>
                        </div>
                        
                        <?php endif; ?>
                        <?php endwhile; ?>
<?php endif; ?>
                        
                        
<!--                          Pagination Start-->
<!--
                        <nav aria-label="Page navigation" class="text-center">
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
-->
                        <?php the_posts_pagination(array(
                                'prev_text'=>'Prev',
                                'next_text'=>'Next',
                                'screen_reader_text'=>' ',
                        )); ?>
<!--                          Pagination End-->
                        
                        </div>
                    
<!--                    Side Bar-->
                    <div class="col-md-3">
                       <?php if(! dynamic_sidebar('blog_wid')): ?>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div>
<!--                        Category Start-->
                        <div class="categories">
                           <h3>Categories</h3>
                            <ul class="nav nav-bar ">
                                <li><a href="#">Web Design <span class="badge pull-right">4</span></a></li>
                                <li><a href="#">Web Development <span class="badge pull-right">14</span></a></li>
                                <li><a href="#">Graphic Design <span class="badge pull-right">4</span></a></li>
                            </ul>
                        </div>
<!--                        Category End-->
<!--                       Advertise Start-->
                        <div class="advertise">
                            <h3>Advertisement Zone</h3>
                            <img src="img/advertising.jpg" alt="">  
                        </div>
<!--                       Advertise End-->
<!--                       Latest Post Start-->
<!--                       Latest Post End-->
                       <div class="latest-post">
                           <h3>Latest Post</h3>
                           <ol class="">
                               <li><a href="#">
                                       It is a long established fact that a reader will be distracted by the readable content of
                                   </a>
                                   <i class="fa fa-user-o" aria-hidden="true"><span class="blog-bottom-txt"> Posted By:  <a href="#">Samiul</a></span></i>
                                </li>
                                <li><a href="#">
                                       It is a long established fact that a reader will be distracted by the readable content of
                                   </a>
                                   <i class="fa fa-user-o" aria-hidden="true"><span class="blog-bottom-txt"> Posted By:  <a href="#">Samiul</a></span></i>
                                </li>
                                <li><a href="#">
                                       It is a long established fact that a reader will be distracted by the readable content of
                                   </a>
                                   <i class="fa fa-user-o" aria-hidden="true"><span class="blog-bottom-txt"> Posted By:  <a href="#">Samiul</a></span></i>
                                </li>
                           </ol>
                       </div>
                       <?php endif; ?>
                    </div>
<!--                    Side Bar end-->
            </div>
            </div>
        </section>
<!--        Blog End     -->
<!--Main Blog Area End-->
<?php get_footer(); ?>