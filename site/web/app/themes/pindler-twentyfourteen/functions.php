<?php
//REGISTER MENUS
function register_my_menus() {
	register_nav_menus(
		array(
			'nav-website' => __( 'Main Navigation' ),
			'nav-login' => __( 'Login Buttons' ),
			'nav-footer' => __( 'Footer Menu' ),
			'nav-media' => __( 'Media Navigation' )
		)
	);
}
add_action( 'init', 'register_my_menus' );

//REMOVE PARENT THEME PAGE TEMPLATES
function remove_parent_templates( $templates ) {
	unset( $templates['page-templates/contributors.php'] );
	unset( $templates['page-templates/full-width.php'] );
	return $templates;
}
add_filter( 'theme_page_templates', 'remove_parent_templates' );

// LOAD TEMPLATE STYLES
function my_styles_method() {
	wp_register_style( 'fonts',get_stylesheet_directory_uri().'/assets/css/fonts.css' );
    wp_register_style( 'temp',get_stylesheet_directory_uri().'/assets/css/temp.css' );
    wp_register_style( 'unsemantic responsive grid',get_stylesheet_directory_uri().'/assets/css/unsemantic-grid-responsive.css' );
    wp_register_style( 'magnific popup',get_stylesheet_directory_uri().'/assets/css/magnific-popup.css' );
wp_register_style( 'addtohomescreencss',get_stylesheet_directory_uri().'/assets/css/addtohomescreen.css' );    
wp_enqueue_style( 'fonts' );
    wp_enqueue_style( 'temp' );
    wp_enqueue_style( 'unsemantic responsive grid' );
    wp_enqueue_style( 'magnific popup' );
wp_enqueue_style( 'addtohomescreencss' );
}

// LOAD TEMPLATE SCRIPTS & JQUERY
function my_scripts_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js' );
    wp_register_script(
    	'respond',
    	get_stylesheet_directory_uri().'/assets/js/respond.min.js',
    	array( 'jquery' )
    );
    wp_register_script(
    	'controls',
    	get_stylesheet_directory_uri().'/assets/js/pindler-controls.js',
    	array( 'jquery' )
    );
    wp_register_script(
    	'placeholders',
    	get_stylesheet_directory_uri().'/assets/js/jquery.placeholder.js',
    	array( 'jquery' )
    );
 wp_register_script(
		'addtohomescreenjs',
		get_stylesheet_directory_uri().'/assets/js/addtohomescreen.js',
		array( 'jquery' )
	);
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'respond' );
    wp_enqueue_script( 'controls' );
    wp_enqueue_script( 'placeholders' );
wp_enqueue_script( 'addtohomescreenjs' );
}

// CALL TO ACTION (STYLES & SCRIPTS)
add_action( 'wp_enqueue_scripts', 'my_styles_method' );
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
// END CALL (STYLES & SCRIPTS LOADED)

// POST FORMATS
add_action( 'after_setup_theme', 'childtheme_formats', 11 );
function childtheme_formats(){
     add_theme_support( 'post-formats', array() );
}

// ADD EXCERPT TO PAGES
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

//REGISTER WIDGET AREA
function pindler_widgets_init() {
	register_sidebar( array(
		'name' => 'Featured Footer',
		'id' => 'featured_footer',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
	
	register_sidebar( array(
		'name' => 'Social Media Footer',
		'id' => 'social_media_footer',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
}
add_action( 'widgets_init', 'pindler_widgets_init');
?>