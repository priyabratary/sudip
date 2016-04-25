<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>

 <?php wp_head(); ?>
  </head>
  
  <body <?php body_class(); ?>>
  <!--header-->
         <header>
         	<!--start-nav-->
        	<nav class="navbar navbar-default navbar-fixed-top" id="header">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-responsive" alt=""/></a>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 
                  <?php
            wp_nav_menu( array(
                'theme_location'    => 'navbar-lower-right',
                'depth'             => 3,
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
      
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          <!--end-nav-->
         </header>
      <!--end-header-->
      <?php echo do_shortcode('[slider]'); ?>