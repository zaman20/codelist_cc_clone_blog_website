<?php

function mainStyle(){
    //style css
    wp_enqueue_style('main_css',get_stylesheet_uri(),'','1.0.0');
    //responsive css
    wp_enqueue_style('responsive_css',get_template_directory_uri().'/responsive.css','','1.0.0');
    //font-awesome
    wp_enqueue_style('icon_lib',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css");
    //bootstrap css
    wp_enqueue_style('bots_css',"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css",array(),'5.3.0','all');

   //js
   wp_enqueue_script('jq',"https://code.jquery.com/jquery-3.6.3.min.js");
   wp_enqueue_script('main_js',get_template_directory_uri().'/js/scripts.js',array(),'1.0.0','true');
    
}
add_action('wp_enqueue_scripts', 'mainStyle');














?>