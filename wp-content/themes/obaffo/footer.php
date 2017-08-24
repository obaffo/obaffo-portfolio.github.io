<!--        Footer area start-->
        <footer>
            <div class="footer-up">
                <div class="container">
                    <div class="row">
                       
                       <?php if(! dynamic_sidebar('footer_wid')): ?>
                       
                        <div class="col-md-3">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" alt="logo">
                                
                            </div>
                            <h3>Obaffo.com</h3>
                            <br>
                        </div>
                        <br>
                        <div class="col-md-3">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <h3>FOLLOW US</h3>
                            <hr>
                            <p>loading....</p>
                        </div>
                        <div class="col-md-3">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h3>CONTACT</h3>
                            <hr>
                            <address>
                                
                                2536 Zamora Road, Missisipi, 74C
                                    Telephone:+1 348 271 9483
                                    E-mail: mail@yourweb.com 
                            </address>
                        </div>
                        <div class="col-md-3 footer-link">
                            <i class="fa fa-link" aria-hidden="true"></i>
                            <h3>Links</h3>
                            <hr>
                            <button type="button" class="btn btn-primary">Default button</button>                          
                            <button type="button" class="btn btn-primary">Default button</button>
                            <button type="button" class="btn btn-primary">Default button</button>
                            <button type="button" class="btn btn-primary">Default button</button>
                            <button type="button" class="btn btn-primary">Default button</button>
                            <button type="button" class="btn btn-primary">Default button</button>
                          
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <div class="footer-down">
                <div class="container">
                    
                        <p><?php global $obaffo_demo; echo $obaffo_demo['copyright_option']; ?></p>
                   
                </div>
            </div>
        </footer>
<!--        Footer area end-->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
       
    <?php echo wp_footer(); ?>
    </body>
</html>
