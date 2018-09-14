<?php

function medialab_resourses(){
	wp_enqueue_script('medialab-jquery','//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',NULL,'3.3.1',true);
	wp_enqueue_script('medialab-script',get_theme_file_uri('/assets/js/script.js'),'medialab-jquery','1.0',true);
	wp_enqueue_style('medialab-main-styles',get_stylesheet_uri());
	wp_enqueue_style('font-awesome','//use.fontawesome.com/releases/v5.3.1/css/all.css');
}
add_action('wp_enqueue_scripts','medialab_resourses');


function medialab_features(){
	register_nav_menu('headerMenuLocation','Header Menu Location');
}
add_action('after_setup_theme','medialab_features')

?>