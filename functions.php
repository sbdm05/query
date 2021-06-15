<?php

function style_css(){
    wp_enqueue_style('main', get_stylesheet_uri()); 
    wp_enqueue_style('bootstrap', get_template_directory_uri(). '/assets/dist/css/bootstrap.min.css'); 
    wp_enqueue_script('js-1', '//code.jquery.com/jquery-3.5.1.slim.min.js', '', '', true); 
    wp_enqueue_script('js-3', get_template_directory_uri(). '/assets/dist/js/bootstrap.bundle.min.js', '', '', true); 
}

add_action('wp_enqueue_scripts', 'style_css'); 

/**Déclarer un emplacement de widget */

function init_widgets($id){
    register_sidebar(array(
        'name'  =>'Top Bar', 
        'id'    => 'topbar',
        'before_widget' => '<div>', 
        'after_widget'  => '</div>', 
        'before_title'  => '<h3>', 
        'after_title'   => '</h3>'
        
    ));
}


add_action('widgets_init', 'init_widgets'); 