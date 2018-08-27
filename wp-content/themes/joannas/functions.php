<?php
require 'assets/inc/customizer.php';



function carrega_scripts(){
	// CSS
	wp_enqueue_style( 'bootstrap', 		get_template_directory_uri(). '/assets/css/bootstrap.min.css', array(), '1.0', 'all');
	wp_enqueue_style( 'font-awesome', 	get_template_directory_uri(). '/assets/css/font-awesome.min.css', array(), '1.0', 'all');
	wp_enqueue_style( 'swipercss', 		get_template_directory_uri(). '/assets/css/swiper.min.css', array(), '1.0', 'all');
	wp_enqueue_style( 'style', 			get_template_directory_uri(). '/assets/css/style.css', array(), '1.0', 'all');
	
	// JS
	wp_enqueue_script( 'bootstrap',     get_template_directory_uri(). '/assets/js/vendor/bootstrap.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'swiper', 		get_template_directory_uri(). '/assets/js/vendor/swiper.min.js', array('jquery'), null, true);	
	wp_enqueue_script( 'video', 		get_template_directory_uri(). '/assets/js/vendor/jquery.vide.min.js', array('jquery'), null, true);	
	wp_enqueue_script( 'waypoints', 	get_template_directory_uri(). '/assets/js/vendor/waypoints.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'counter', 		get_template_directory_uri(). '/assets/js/vendor/jquery.counterup.min.js', array('jquery'), null, true);	
	wp_enqueue_script( 'typed', 		get_template_directory_uri(). '/assets/js/vendor/typed.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'scroll', 	get_template_directory_uri(). '/assets/js/vendor/scrollreveal.min.js', array('jquery'), null, true);	
	wp_enqueue_script( 'scripts', 		get_template_directory_uri(). '/assets/js/scripts.js', array('jquery'), null, true);
	
}
add_action( 'wp_enqueue_scripts', 'carrega_scripts');


register_nav_menus(
	array(
		'meu_menu_principal' => 'Menu Principal'
	)
);

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'custom-logo' );
add_theme_support('category-thumbnails');
add_theme_support('html5', array('search-form'));

// sidebars
if ( function_exists('register_sidebar') )
    register_sidebar();

function my_theme_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }
  
    return $title;
}

// Registrando sidebars
if (function_exists('register_sidebar')){
	register_sidebar(
		array(
			'name'		=> 'Barra Lateral 1',
			'id'		=> 'sidebar-1',
			'description'	=> 'Barra lateral da página Notícias',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> ':</h2>',			
		)
	);
}


function custom_excerpt_length( $length ) {
 return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length');
function erikasarti_personaliza_widget_tags($args){

	if(isset($args['taxonomy']) && $args['taxonomy'] == 'post_tag') {
	
		// Veja todos os parametros disponiveis no Codex do WordPress
		// http://codex.wordpress.org/Template_Tags/wp_tag_cloud
	
		$args['number'] = 15;
		$args['smallest'] = 10;
		$args['largest'] = 20;
		

	}
	
	return $args;

}

 $args = array(
	'walker'            => null,
	'max_depth'         => '',
	'style'             => 'ul',
	'callback'          => null,
	'end-callback'      => null,
	'type'              => 'all',
	'reply_text'        => 'Reply',
	'page'              => '',
	'per_page'          => '',
	'avatar_size'       => 32,
	'reverse_top_level' => null,
	'reverse_children'  => '',
	'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
	'short_ping'        => false,   // @since 3.6
        'echo'              => true     // boolean, default is true
	);

add_filter('widget_tag_cloud_args', 'erikasarti_personaliza_widget_tags');
add_filter( 'get_the_archive_title', 'my_theme_archive_title' );

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
?>