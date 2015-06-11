<?php 

//Namespace: tjj 
function tjj_theme_styles(){
	wp_enqueue_style('foundation_css', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.min.css');
	wp_enqueue_style('normalize_css', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/normalize.min.css');
	wp_enqueue_style('normalize_css', get_template_directory_uri() . 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic');
	wp_enqueue_style('main_css', get_template_directory_uri(). '/style.css');
}
add_action('wp_enqueue_scripts', 'tjj_theme_styles');

function tjj_theme_js(){
	//Params: name, link_to_file, dependent_files (array), set verison, appear in footer (boolean?
	wp_enqueue_script('modernizr_js', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/vendor/modernizr.js', '','',false);
	wp_enqueue_script('foundation_js', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation.min.js', array('jquery'),'',true);
	wp_enqueue_script('main_js', get_template_directory_uri('/js/app.js'), array('jquery', 'foundation'),'',true);
}
add_action('wp_enqueue_scripts','tjj_theme_js');
?>