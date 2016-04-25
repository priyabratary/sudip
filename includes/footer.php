<!--footer-->
  	 <footer>
     	   <div class="container">
            	<div class="row">
                <?php dynamic_sidebar('footer-widget-area'); ?>
                	<div class="col-xs-12 col-sm-12 col-md-12  col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1">
                    	<div class="row">
                            <div class="col-xs-12 col-sm-2 col-lg-2">
                            	<h4 class="text-uppercase m-b-30">Quick Links</h4>
                                <ul class="list-unstyled">
                                	<li><a href="#">Who We Are</a></li>
                                    <li><a href="#">What We Do</a></li>
                                    <li><a href="#">Our Work</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Free Estimate</a></li>
                                </ul>
                            </div>
                          <div class="col-xs-12 col-sm-5 col-lg-4">
                            	<div class="contact-detail-box">
                                	<p><i><img src="<?php echo get_template_directory_uri(); ?>/images/envlop.png" alt=""/></i> <a href="mailto:info@veecode.com">info@veecode.com</a></p>
                                    <p><i><img src="<?php echo get_template_directory_uri(); ?>/images/user.png" alt=""/></i> <strong>+1-567-258-2548</strong></p>
                                    <p><i class="pull-left"><img src="<?php echo get_template_directory_uri(); ?>/images/map-pin.png" alt=""/></i> 171 Minglehaze Drive, Toronto, Ontario,
                                  M9V 4W7, Canada</p>
                              </div>
                          </div>
                            <div class="col-xs-12 col-sm-2 col-lg-2 pull-right">
                            	<h4 class="text-uppercase m-b-30">Social Links</h4>
                                <ul class="list-unstyled">
                                	<li class="text-uppercase"><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                                    <li class="text-uppercase"><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                                    <li class="text-uppercase"><a href="#"><i class="fa fa-linkedin-square"></i> linkedin</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-12 col-lg-12">
                    	<span class="line"></span>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-6">
                            	 <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-lg-6 text-right">
                       	    <img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png"  alt=""/>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
     </footer>
  <!--end-footer-->
   <?php wp_footer(); ?>
  </body>
</html>