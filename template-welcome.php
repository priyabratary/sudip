<?php 
/*
Template Name: Welcome Template
*/
?>

<?php get_template_part('includes/header'); ?>
  
  <!--body-->
  	 <section>
     <!-- start banner -->
         	
         <!-- end banner -->
         
             <!--start-gry-wraper-->
                <div  class="gry-wraper p-t-120 p-b-120" name="myAnchor" id="myAnchor">
                
                	
                            	<!--end-->
                                
                                <?php echo do_shortcode('[services]'); ?>
                                
                                <!--end-->
                                
                                
                                <!--end-->
                                
                                <!--end-->
                                
                      

                </div>
             <!--end-gry-wraper-->
             
             <!-- quick contact -->
             	<div class="quick-contact">
                	<div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12"><h1 class="white text-center bold text-uppercase m-b-40">Quick Contact Us</h1></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12">
                            	<form action="">
                                		<div class="row">
                                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                            	<div class="form-group"><input type="text" placeholder="Name *" class="form-control"></div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                            	<div class="form-group"><input type="text" placeholder="Email *" class="form-control"></div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                            	<div class="form-group"><input type="text" placeholder="Phone *" class="form-control"></div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                            	<div class="form-group"><button class="btn btn-warning btn-block">Submit</button></div>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
             <!-- end quick contact -->
             
             <!--latest-work-->
            
             <!--end-latest-work-->
         <?php echo do_shortcode('[sumer_portfolio]'); ?>
     </section>
  <!--end-body-->
  
  <?php get_template_part('includes/footer'); ?>