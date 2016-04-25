<?php

function vcode_enqueues() {

	wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-1.11.3.min.js', __FILE__, false, '1.11.3', true);
	wp_enqueue_script( 'jquery' );

	wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', false, '3.3.4', null);
	wp_enqueue_style('bootstrap-css');
    wp_register_style('fontawasome-css', get_template_directory_uri() . '/css/font-awesome.min.css', false, '4.5.0', null);
	wp_enqueue_style('fontawasome-css');
    
  	wp_register_style('vcode-css', get_template_directory_uri() . '/css/vcode.css', false, null);
	wp_enqueue_style('vcode-css');
    
    wp_register_style('custom-responsive-css', get_template_directory_uri() . '/css/custom-responsive.css', false, null);
	wp_enqueue_style('custom-responsive-css');
    
    wp_register_style('owl-carousel-css', get_template_directory_uri() . '/css/owl.carousel.css', false, null);
	wp_enqueue_style('owl-carousel-css');
    
    wp_register_style('owl-transitions-css', get_template_directory_uri() . '/css/owl.transitions.css', false, null);
	wp_enqueue_style('owl-transitions-css');
    
    wp_register_style('isotop-css', get_template_directory_uri() . '/css/isotop.css', false, null);
	wp_enqueue_style('isotop-css');
    
    wp_register_style('magnific-popup-css', get_template_directory_uri() . '/css/magnific-popup.css', false, null);
	wp_enqueue_style('magnific-popup-css');
    
    
    wp_register_style('onlinewebfonts-light', 'http://db.onlinewebfonts.com/c/539a8782377a5882e762852504de5662?family=BoosterNextFYW01-Light');
    wp_enqueue_style( 'onlinewebfonts-light');
	wp_register_style('onlinewebfonts-regular', 'http://db.onlinewebfonts.com/c/6f9181759743577f816fec52bf6c44a8?family=BoosterNextFYW01-Regular');
    wp_enqueue_style( 'onlinewebfonts-regular');
	wp_register_style('onlinewebfonts-bold', 'http://db.onlinewebfonts.com/c/59a5f95fa6cbfbc6a7dfa063dee0ab1b?family=BoosterNextFYW01-Bold');
    wp_enqueue_style( 'onlinewebfonts-bold');
	wp_register_style('onlinewebfonts-thin', 'http://db.onlinewebfonts.com/c/fc63fa4dd8df8990b64f8a878695de8b?family=BoosterNextFYW01-Thin');
    wp_enqueue_style( 'onlinewebfonts-thin');
    
  	wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.8.3.min.js', false, null, false);
	wp_enqueue_script('modernizr');
    
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);
	wp_enqueue_script('bootstrap-js');
    
    wp_register_script('bootstrap-hover-dropdown', get_template_directory_uri() . '/js/bootstrap-hover-dropdown.js', false, null, true);
	wp_enqueue_script('bootstrap-hover-dropdown');
    
    wp_register_script('isotope-js', get_template_directory_uri() . '/js/isotope.pkgd.min.js', false, null, true);
	wp_enqueue_script('isotope-js');
    
    wp_register_script('imagesloaded-js', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', false, null, true);
	wp_enqueue_script('imagesloaded-js');
    
    wp_register_script('magnific-popup-js', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', false, null, true);
	wp_enqueue_script('magnific-popup-js');
	
    wp_register_script('owl-carousel-js', get_template_directory_uri() . '/js/owl.carousel.min.js', false, null, true);
	wp_enqueue_script('owl-carousel-js');
    
	wp_register_script('vcode-js', get_template_directory_uri() . '/js/vcode.js', false, null, true);
	wp_enqueue_script('vcode-js');
    
    
    
	wp_enqueue_script('mediaqueries-js');
    wp_register_script('html5shiv-js', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', false, null, false);
	wp_enqueue_script('html5shiv-js');
    wp_register_script('respond-js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', false, null, false);
	wp_enqueue_script('respond-js');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'vcode_enqueues', 100);
