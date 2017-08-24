<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.8.3.min.js"></script>
     <?php wp_head(); ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
<!--        Header Area Start-->
        <header>
            <div class="container">
                <div class="row">
<!--
                    <div class="col-md-3">
                        <div class="brand">
                            <img src="logo.png" alt="logo">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <nav >
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
-->
                    <nav class="navbar navbar-default nav-border ">
                      <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="<?php echo esc_url( site_url( '/' ) ); ?>">
                              <img src="<?php global $obaffo_demo;echo $obaffo_demo['site_logo']['url']; ?>" alt="logo" class="img-responsive">
                              
                          </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                         
<!--
                          <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.html">Home</a></li>
                            
                            <li><a href="about.html">About</a></li>
                            <li><a href="project.html">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            
                          </ul>
-->
                          <?php wp_nav_menu(array(
                            'theme_location'=>'main_menu',
                            'menu_class'=>'nav navbar-nav navbar-right'
                        )); ?>
                        </div><!-- /.navbar-collapse -->
                      </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </header>

<!--
        <div class="undermenuarea">
            <div class="boxedshadow"></div>
        </div>
-->

        
<!--        Header Area End-->
<!--       Breadcrumb Section start-->
      
<!--       Breadcrumb Section End-->