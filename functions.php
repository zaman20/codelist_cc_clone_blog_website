<?php

function mainStyle(){
    //style css
    wp_enqueue_style('main_css',get_stylesheet_uri(),'','1.1.78');
    //responsive css
    wp_enqueue_style('responsive_css',get_template_directory_uri().'/responsive.css','','1.0.42');
    //font-awesome
    wp_enqueue_style('icon_lib',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css");
    //google apis
    wp_enqueue_style('icon_lib2',"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0");
    //bootstrap css
    wp_enqueue_style('bots_css',"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css",array(),'5.3.0','all');

   //js
   wp_enqueue_script('jq',"https://code.jquery.com/jquery-3.6.3.min.js");
   wp_enqueue_script('main_js',get_template_directory_uri().'/js/scripts.js',array(),'1.0.50','true');
    
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
        'User Menu' => __('User Menu',''),
        'Sidebar Menu' => __('Sidebar Menu',''),
        'Register Menu' => __('Register Menu',''),
        'Sidebar Script Menu' => __('Sidebar Script Menu',''),
        'Sidebar Wordpress Menu' => __('Sidebar Wordpress Menu',''),
        'Sidebar Mobile Menu' => __('Sidebar Mobile Menu',''),
        'Sidebar Other Menu' => __('Sidebar Other Menu',''),
        'Sidebar CMS Menu' => __('Sidebar CMS Menu',''),
        'Footer Menu' => __('Footer Menu',''),
        'Mega Menu' => __('Mega Menu',''),
    ));
}
add_filter('init','myMenu');


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

//widget register
function za_widgets(){
    register_sidebar(array(
        'name'=>__('Monthly Popular'),
        'id'=>'home-1',
        'before_title'=>'<h3 class="popular-title">',
        'after_title'=>'</h3>',
    ));
}
add_action('widgets_init','za_widgets');




//codestar framework include
require_once get_theme_file_path() .'/inc/codestar-framework-master/codestar-framework.php';
//frame work start
include_once('inc/frameworksetup.php');




