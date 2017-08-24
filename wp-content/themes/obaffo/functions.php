<?php 

function obaffo_files(){
   
    wp_register_style('apple', get_template_directory_uri().'/apple-touch-icon.png', array(), '3.1.0', 'all');
    wp_register_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css', array(), '3.1.0', 'all');
	wp_register_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), '3.1.0', 'all');
	
	wp_register_style('bootstrap-ad', get_template_directory_uri().'/css/bootstrap.min.css', array(), '3.1.0', 'all');
	wp_register_style('hover', get_template_directory_uri().'/css/hover.css', array(), '3.1.0', 'all');
	wp_register_style('owl.carousel', get_template_directory_uri().'/css/owl/owl.carousel.min.css', array(), '3.1.0', 'all');
	
	wp_register_style('animate', get_template_directory_uri().'/css/slider/animate.min.css', array(), '3.1.0', 'all');
	wp_register_style('plugin', get_template_directory_uri().'/css/slider/plugin.min.css', array(), '3.1.0', 'all');
	wp_register_style('theme.min', get_template_directory_uri().'/css/slider/theme.min.css', array(), '3.1.0', 'all');
	wp_register_style('uikit', get_template_directory_uri().'/css/uikit.min.css', array(), '3.1.0', 'all');
	wp_register_style('style_ad', get_template_directory_uri().'/css/style.css', array(), '3.1.0', 'all');
    wp_register_style('responsive', get_template_directory_uri().'/css/responsive.css', array(), '3.1.0', 'all');
	
    wp_register_style('main', get_stylesheet_uri());
    
     wp_enqueue_style('apple');
     wp_enqueue_style('font-awesome');
	wp_enqueue_style('normalize');
	
	wp_enqueue_style('bootstrap-ad');
	wp_enqueue_style('hover');
	wp_enqueue_style('owl.carousel');
	wp_enqueue_style('animate');
	wp_enqueue_style('plugin');
	
	wp_enqueue_style('theme.min');
	wp_enqueue_style('uikit');
	wp_enqueue_style('style_ad');
	wp_enqueue_style('responsive');
	

	
	wp_enqueue_style('main');
    
    wp_enqueue_script('jquery');
	wp_enqueue_script('obaffo-bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array(), '1.3', true);
	wp_enqueue_script('owl',get_template_directory_uri().'/js/owl/owl.carousel.min.js',array(), '1.3', true);
	wp_enqueue_script('obaffo-custom',get_template_directory_uri().'/js/custom.js',array('jquery'), '1.3', true);
	wp_enqueue_script('touchSwipe',get_template_directory_uri().'/js/slider/jquery.touchSwipe.js',array(), '1.3', true);
	wp_enqueue_script('owl-plugin',get_template_directory_uri().'/js/slider/plugin.min.js',array(), '1.3', true);
	wp_enqueue_script('uikit',get_template_directory_uri().'/js/uikit.min.js',array(), '1.3', true);
	
	
}
add_action('wp_enqueue_scripts','obaffo_files');

//Menu Register
register_nav_menus(array(
    'main_menu'=>'Main Menu',
    'footer_menu'=>'Footer Menu',
));

//Slider Area
function slider_register(){
    register_post_type(slider,array(
        'public'=>true,
        'label'=>'Slider',
        'labels'=>array(
            'name'=>'Slider',
            'singular_name'=>'Slider',
            'add_new'=>'Add new slider',
            'add_new_item'=>'Add new slider item',
        ),
        'supports'=>array('title','custom-fields','thumbnail'),
    ));
}
add_action('init','slider_register');
add_theme_support( 'post-thumbnails' ); 


// cmb2 custom field metabox

if ( file_exists(  __DIR__ . '/inc/CMB2/init.php' ) ) {
  require_once  __DIR__ . '/inc/CMB2/init.php';
} elseif ( file_exists(  __DIR__ . '/inc/CMB2/init.php' ) ) {
  require_once  __DIR__ . '/inc/CMB2/init.php';
}

include_once('inc/cmb2-custom-field.php');
include_once('inc/CMB2/init.php');
//Under Slider Item Register
function under_slider(){
    register_post_type(under_slider,array(
		'public'=>true,
		'label'=>'Feature',
		'labels'=>array(
			'name'=>'Under Slider Feature',
			'singular_name'=>'Under Slider Feature',
			'add_new'=>'Add a new feature',
			'add_new_item'=>'Add New Feature Item',
		),
		'supports'  => array( 'title',   'custom-fields' ),
	));
}
add_action('init','under_slider');
// Feature Area
function register_feature(){
    register_post_type(feature,array(
		'public'=>true,
		'label'=>'Feature',
		'labels'=>array(
			'name'=>'Feature',
			'singular_name'=>'Feature',
			'add_new'=>'Add a new feature',
			'add_new_item'=>'Add New Feature Item',
		),
		'supports'  => array( 'title', 'editor',   'custom-fields' ),
	));
}
add_action('init','register_feature');
// Project Area
//function register_project(){
//    register_post_type(project,array(
//		'public'=>true,
//		'label'=>'Feature',
//		'labels'=>array(
//			'name'=>'Project',
//			'singular_name'=>'Project',
//			'add_new'=>'Add a new project',
//			'add_new_item'=>'Add New Project Item',
//		),
//		'supports'  => array( 'title', 'editor', 'thumbnail',  'custom-fields' ),
//	));
//}
//add_action('init','register_project');

add_image_size('post1-img',480,220, true);

//Footer Widget
function obaffo_footer_widget(){
    register_sidebar(array(
        'name'=>'Footer Widgets',
        'id'=>'footer_wid',
        'description'=>'Use this widget for site footer content',
        'before_widget'=>'<div class="col-md-3">',
        'after_widget'=>'</div>',
        'before_title'=>'<h3>',
        'after_title'=>'</h3><hr>',
    ));
}
add_action('widgets_init','obaffo_footer_widget');

function obaffo_blog_widget(){
    register_sidebar(array(
        'name'=>'Blog Widgets',
        'id'=>'blog_wid',
        'description'=>'Use this widget for blog site content',
        'before_widget'=>'',
        'after_widget'=>'',
        'before_title'=>'<h3>',
        'after_title'=>'</h3><hr>',
    ));
}
add_action('widgets_init','obaffo_blog_widget');

//Redux FrameWork
require_once('inc/redux-framework/redux-framework.php');
require_once('inc/obaffo-redux.php');

//Skill 
function skill_project(){
    register_post_type(skill,array(
		'public'=>true,
		'label'=>'Skill',
		'labels'=>array(
			'name'=>'Skill',
			'singular_name'=>'Skill',
			'add_new'=>'Add a new Skill',
			'add_new_item'=>'Add New Skill Item',
		),
		'supports'  => array( 'title', 'custom-fields' ),
	));
}
add_action('init','skill_project');
//Our Team
function team_project(){
    register_post_type(team,array(
		'public'=>true,
		'label'=>'Team',
		'labels'=>array(
			'name'=>'Team',
			'singular_name'=>'Team',
			'add_new'=>'Add a new Team Member',
			'add_new_item'=>'Add New Team Member',
		),
		'supports'  => array( 'title', 'thumbnail',  'custom-fields' ),
	));
}
add_action('init','team_project');
add_image_size('team_img',260,230,true);