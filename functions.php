<?php

function mainStyle(){
    //style css
    wp_enqueue_style('main_css',get_stylesheet_uri(),'','1.0.18');
    //responsive css
    wp_enqueue_style('responsive_css',get_template_directory_uri().'/responsive.css','','1.0.1');
    //font-awesome
    wp_enqueue_style('icon_lib',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css");
    //bootstrap css
    wp_enqueue_style('bots_css',"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css",array(),'5.3.0','all');

   //js
   wp_enqueue_script('jq',"https://code.jquery.com/jquery-3.6.3.min.js");
   wp_enqueue_script('main_js',get_template_directory_uri().'/js/scripts.js',array(),'1.0.0','true');
    
}
add_action('wp_enqueue_scripts', 'mainStyle');

//theme support
function theme_support(){
    //fetures image calling
    add_theme_support('post-thumbnails');

}
add_action('after_setup_theme','theme_support');

//menu register
function myMenu(){

      //primary menu register
      register_nav_menus(array(
        'Header Menu' => __('Primary Menu',''),
        'Sidebar Menu' => __('Sidebar Menu',''),
        'Sidebar Menu' => __('Others Menu',''),
        'Sidebar Menu' => __('Footer Menu',''),
    ));
}



//for counting post view

/*
 * Set post views count using post meta//functions.php
 */
function customSetPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '1');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}

//codestar framework include
require_once get_theme_file_path() .'/inc/codestar-framework-master/codestar-framework.php';
//frame work start
include_once('inc/frameworksetup.php');




