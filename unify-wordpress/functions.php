<?php 
/**
 * Template Name : Functions.php
 * Description : Add functions to wordpress
 */

 function fn_theme_scripts(){
     wp_enqueue_style("robertofont",'https://fonts.googleapis.com/css?family=Open+Sans:600|Roboto&display=swap');
     wp_enqueue_style("custom-stlye",get_template_directory_uri().'/dist/css/style.css');
     wp_enqueue_style("fontawesome",'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
     wp_enqueue_style("bootstrap4",'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
     wp_enqueue_style("bootstraplocal",'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css');
     wp_enqueue_style("fontsgstatic",'https://fonts.gstatic.com');
     wp_enqueue_style("poppins",'https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
     wp_enqueue_style("owlcarouselmin",'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css ');
     wp_enqueue_style("owlcarousel",'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');
     wp_enqueue_style("fontawesomemin",'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
     wp_enqueue_style("merriweather",'https://fonts.googleapis.com/css?family=Merriweather:400,900,900i');
     wp_enqueue_style("custom-stlye",get_template_directory_uri().'/dist/css/style.css');
     //wp_enqueue_style("custom-stlye",get_stylesheet_uri());

     //adding js files
     wp_enqueue_script('jquery2','https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js',array('jquery'),false,false);
   
     wp_enqueue_script('jqueryslim','https://code.jquery.com/jquery-3.2.1.slim.min.js',array('jquery'),false,false);
     wp_enqueue_script('poppers','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',array('jquery'),false,false);
     wp_enqueue_script('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',array('jquery'),false,false);
     wp_enqueue_script('jquery3','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js',array('jquery'),false,false);
     wp_enqueue_script('carousel','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js',array('jquery'),false,false);
     wp_enqueue_script('slick','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js',array('jquery'),false,false);
     wp_enqueue_script('custom',get_template_directory_uri().'/dist/js/custom.js',array('jquery'),false,true);
 }
 add_action('wp_enqueue_scripts','fn_theme_scripts');
 
?>
