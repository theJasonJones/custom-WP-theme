<?php 
add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('post-thumbnails' );

function tjj_excerpt_length( $length ){
	return 16;
}
//last param makes the fucntion execute later
add_filter( 'excerpt_length', 'tjj_excerpt_length', 999);

function register_theme_menus(){
	register_nav_menus(
		array(
			'main-menu' => __('Main Menu')
		)
	);
}
add_action('init', 'register_theme_menus');

function tjj_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

}

tjj_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
tjj_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );

//Namespace: tjj 
function tjj_theme_styles(){
	//for local files use 'get_template_directory_uri() . /folder/file_name.css'
	wp_enqueue_style('foundation_css', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.min.css');
	//wp_enqueue_style('normalize_css', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/normalize.min.css');
	wp_enqueue_style('googlefont_css', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic');
	wp_enqueue_style('main_css', get_template_directory_uri(). '/style.css');
}
add_action('wp_enqueue_scripts', 'tjj_theme_styles');

function tjj_theme_js(){
	//Params: name, link_to_file, dependent_files (array), set verison, appear in footer (boolean)
	wp_enqueue_script('modernizr_js', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/vendor/modernizr.js', '','',false);
	wp_enqueue_script('foundation_js', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation.min.js', array('jquery'),'',true);
	wp_enqueue_script('app_js', get_template_directory_uri(). '/js/app.js', array('jquery', 'foundation_js'),'',true);
}
add_action('wp_enqueue_scripts','tjj_theme_js');
?>