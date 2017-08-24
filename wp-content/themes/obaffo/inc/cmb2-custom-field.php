<?php 
/**
 * Get the bootstrap!
 */
if ( file_exists(  __DIR__ . '/cmb2/init.php' ) ) {
  require_once  __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once  __DIR__ . '/CMB2/init.php';
}

add_action('cmb2_admin_init', 'obaffo_cmb2');
function obaffo_cmb2(){
	
	$prefix= '_adolfix_';
	/*** Initiate the metabox
     */
    $slider_item = new_cmb2_box( array(
        'id'            => 'slider_metabox',
        'title'         => __( 'Slider Metabox', 'Obaffo' ),
        'object_types'  => array( 'slider', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        
    ) );
	// Service Icon field
    $slider_item->add_field( array(
        'name'       => __( 'Sub-title', 'Obaffo' ),
        'desc'       => __( 'Write Sub-title', 'Obaffo' ),
        'id'         => $prefix . 'sub_title',
        'type'       => 'textarea_small',
        
        
        
    ) );
    // Service Icon field
    $slider_item->add_field( array(
        'name'       => __( 'Caption Position', 'Obaffo' ),
        'desc'       => __( 'Select a position', 'Obaffo' ),
        'id'         => $prefix . 'caption_position',
        'type'       => 'select',
        'show_option_none'=> true,
        'default'    => 'left',
        'options'    => array(
            
            'right'=>__('Right','Obaffo')
        ),
        
        
    ) );
    // Slider Title Animation field
    $slider_item->add_field( array(
        'name'       => __( 'Title Animation', 'Obaffo' ),
        'desc'       => __( 'Select a animation', 'Obaffo' ),
        'id'         => $prefix . 'title_animation',
        'type'       => 'select',
        'show_option_none'=> true,
        'default'    => 'flip',
        'options'    => array(
            
            'bounce'=>__('Bounce','Obaffo'),
            'flash'=>__('Flash','Obaffo'),
            'pulse'=>__('pulse','Obaffo'),
            'rubberBand'=>__('rubberBand','Obaffo'),
            'shake'=>__('shake','Obaffo'),
            'swing'=>__('swing','Obaffo'),
            'tada'=>__('tada','Obaffo'),
            'wobble'=>__('wobble','Obaffo'),
            'jello'=>__('jello','Obaffo'),
            'bounceIn'=>__('bounceIn','Obaffo'),
            'bounceDown'=>__('bounceDown','Obaffo'),
            'bounceLeft'=>__('bounceLeft','Obaffo'),
            'bounceRight'=>__('bounceRight','Obaffo'),
            'bounceUp'=>__('bounceUp','Obaffo'),
          
            'bounceOut'=>__('bounceOut','Obaffo'),
            'bounceOutDown'=>__('bounceOutDown','Obaffo'),
            'bounceOutLeft'=>__('bounceOutLeft','Obaffo'),
            'bounceOutRight'=>__('bounceOutRight','Obaffo'),
            'bounceOutUp'=>__('bounceOutUp','Obaffo'),
            'fadeIn'=>__('fadeIn','Obaffo'),
            'fadeInDown'=>__('fadeInDown','Obaffo'),
            'fadeInDownBig'=>__('fadeInDownBig','Obaffo'),
            'fadeInLeft'=>__('fadeInLeft','Obaffo'),
            'fadeInLeftBig'=>__('fadeInLeftBig','Obaffo'),
            'fadeInRight'=>__('fadeInRight','Obaffo'),
            'fadeInRightBig'=>__('fadeInRightBig','Obaffo'),
            'fadeInUp'=>__('fadeInUp','Obaffo'),
            'fadeInUpBig'=>__('fadeInUpBig','Obaffo'),
            'fadeOut'=>__('fadeOut','Obaffo'),
            'fadeOutDown'=>__('fadeOutDown','Obaffo'),
            'fadeOutDownBig'=>__('fadeOutDownBig','Obaffo'),
            'fadeOutLeft'=>__('fadeOutLeft','Obaffo'),
            'fadeOutLeftBig'=>__('fadeOutLeftBig','Obaffo'),
            'fadeOutRight'=>__('fadeOutRight','Obaffo'),
            'fadeOutRightBig'=>__('fadeOutRightBig','Obaffo'),
            'fadeOutUp'=>__('fadeOutUp','Obaffo'),
            'fadeOutUpBig'=>__('fadeOutUpBig','Obaffo'),
            'flip'=>__('flip','Obaffo'),
            'flipInX'=>__('flipInX','Obaffo'),
            'flipInY'=>__('flipInY','Obaffo'),
            'flipOutX'=>__('flipOutX','Obaffo'),
            'flipOutY'=>__('flipOutY','Obaffo'),
            'lightSpeedIn'=>__('lightSpeedIn','Obaffo'),
            'lightSpeedOut'=>__('lightSpeedOut','Obaffo'),
            
            'rotateIn'=>__('rotateIn','Obaffo'),
            'rotateInDownLeft'=>__('rotateInDownLeft','Obaffo'),
            'rotateInDownRight'=>__('rotateInDownRight','Obaffo'),
            'rotateInUpRight'=>__('rotateInUpRight','Obaffo'),
            'rotateInUpLeft'=>__('rotateInUpLeft','Obaffo'),
            'slideInUp'=>__('slideInUp','Obaffo'),
            'slideInDown'=>__('slideInDown','Obaffo'),
            'slideInLeft'=>__('slideInLeft','Obaffo'),
            'slideInRight'=>__('slideInRight','Obaffo'),
            'slideInRight'=>__('slideInRight','Obaffo'),
            'slideOutRight'=>__('slideOutRight','Obaffo'),
            'slideOutLeft'=>__('slideOutLeft','Obaffo'),
            'slideOutUp'=>__('slideOutUp','Obaffo'),
            'slideOutDown'=>__('slideOutDown','Obaffo'),
            'zoomIn'=>__('zoomIn','Obaffo'),
            'zoomInRight'=>__('zoomInRight','Obaffo'),
            'zoomInUp'=>__('zoomInUp','Obaffo'),
            'zoomInLeft'=>__('zoomInLeft','Obaffo'),
            'zoomInDown'=>__('zoomInDown','Obaffo'),
            'zoomInDown'=>__('zoomInDown','Obaffo'),
            'rollIn'=>__('rollIn','Obaffo')
        ),
        
        
    ) );
    // Slider sub title Animation field
    $slider_item->add_field( array(
        'name'       => __( 'Sub-Title Animation', 'Obaffo' ),
        'desc'       => __( 'Select a sub-title animation', 'Obaffo' ),
        'id'         => $prefix . 'sub_title_animation',
        'type'       => 'select',
        'show_option_none'=> true,
        'default'    => 'flip',
        'options'    => array(
            
            'bounce'=>__('Bounce','Obaffo'),
            'flash'=>__('Flash','Obaffo'),
            'pulse'=>__('pulse','Obaffo'),
            'rubberBand'=>__('rubberBand','Obaffo'),
            'shake'=>__('shake','Obaffo'),
            'swing'=>__('swing','Obaffo'),
            'tada'=>__('tada','Obaffo'),
            'wobble'=>__('wobble','Obaffo'),
            'jello'=>__('jello','Obaffo'),
            'bounceIn'=>__('bounceIn','Obaffo'),
            'bounceDown'=>__('bounceDown','Obaffo'),
            'bounceLeft'=>__('bounceLeft','Obaffo'),
            'bounceRight'=>__('bounceRight','Obaffo'),
            'bounceUp'=>__('bounceUp','Obaffo'),
          
            'bounceOut'=>__('bounceOut','Obaffo'),
            'bounceOutDown'=>__('bounceOutDown','Obaffo'),
            'bounceOutLeft'=>__('bounceOutLeft','Obaffo'),
            'bounceOutRight'=>__('bounceOutRight','Obaffo'),
            'bounceOutUp'=>__('bounceOutUp','Obaffo'),
            'fadeIn'=>__('fadeIn','Obaffo'),
            'fadeInDown'=>__('fadeInDown','Obaffo'),
            'fadeInDownBig'=>__('fadeInDownBig','Obaffo'),
            'fadeInLeft'=>__('fadeInLeft','Obaffo'),
            'fadeInLeftBig'=>__('fadeInLeftBig','Obaffo'),
            'fadeInRight'=>__('fadeInRight','Obaffo'),
            'fadeInRightBig'=>__('fadeInRightBig','Obaffo'),
            'fadeInUp'=>__('fadeInUp','Obaffo'),
            'fadeInUpBig'=>__('fadeInUpBig','Obaffo'),
            'fadeOut'=>__('fadeOut','Obaffo'),
            'fadeOutDown'=>__('fadeOutDown','Obaffo'),
            'fadeOutDownBig'=>__('fadeOutDownBig','Obaffo'),
            'fadeOutLeft'=>__('fadeOutLeft','Obaffo'),
            'fadeOutLeftBig'=>__('fadeOutLeftBig','Obaffo'),
            'fadeOutRight'=>__('fadeOutRight','Obaffo'),
            'fadeOutRightBig'=>__('fadeOutRightBig','Obaffo'),
            'fadeOutUp'=>__('fadeOutUp','Obaffo'),
            'fadeOutUpBig'=>__('fadeOutUpBig','Obaffo'),
            'flip'=>__('flip','Obaffo'),
            'flipInX'=>__('flipInX','Obaffo'),
            'flipInY'=>__('flipInY','Obaffo'),
            'flipOutX'=>__('flipOutX','Obaffo'),
            'flipOutY'=>__('flipOutY','Obaffo'),
            'lightSpeedIn'=>__('lightSpeedIn','Obaffo'),
            'lightSpeedOut'=>__('lightSpeedOut','Obaffo'),
            
            'rotateIn'=>__('rotateIn','Obaffo'),
            'rotateInDownLeft'=>__('rotateInDownLeft','Obaffo'),
            'rotateInDownRight'=>__('rotateInDownRight','Obaffo'),
            'rotateInUpRight'=>__('rotateInUpRight','Obaffo'),
            'rotateInUpLeft'=>__('rotateInUpLeft','Obaffo'),
            'slideInUp'=>__('slideInUp','Obaffo'),
            'slideInDown'=>__('slideInDown','Obaffo'),
            'slideInLeft'=>__('slideInLeft','Obaffo'),
            'slideInRight'=>__('slideInRight','Obaffo'),
            'slideInRight'=>__('slideInRight','Obaffo'),
            'slideOutRight'=>__('slideOutRight','Obaffo'),
            'slideOutLeft'=>__('slideOutLeft','Obaffo'),
            'slideOutUp'=>__('slideOutUp','Obaffo'),
            'slideOutDown'=>__('slideOutDown','Obaffo'),
            'zoomIn'=>__('zoomIn','Obaffo'),
            'zoomInRight'=>__('zoomInRight','Obaffo'),
            'zoomInUp'=>__('zoomInUp','Obaffo'),
            'zoomInLeft'=>__('zoomInLeft','Obaffo'),
            'zoomInDown'=>__('zoomInDown','Obaffo'),
            'zoomInDown'=>__('zoomInDown','Obaffo'),
            'rollIn'=>__('rollIn','Obaffo')
        ),
        
        
    ) );
	
    //Under Slider Item
    
	$under_slider_item = new_cmb2_box( array(
        'id'            => 'under_slider_metabox',
        'title'         => __( 'Under Slider Item Metabox', 'Obaffo' ),
        'object_types'  => array( 'under_slider', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        
    ) );
	// Service Icon field
    $under_slider_item->add_field( array(
        'name'       => __( 'Icon', 'Obaffo' ),
        'desc'       => __( 'Select an Icon Name', 'Obaffo' ),
        'id'         => $prefix . 'under_icons',
        'type'       => 'select',
        'show_option_name'=>true,
        'options'   =>array(
            'bullhorn'=>'bulhorn',
            'cc'=>'cc',
            'arrows'=>'arrows',
            'bell-o'=>'bell-o',
            'blutooth'=>'blutooth',
            'bug'=>'bug',
            'check'=>'check',
            'anchor'=>'anchor',
            'bolt'=>'bolt',
            'bookmark-o'=>'bookmark-o',
            'building'=>'building',
            'barcode'=>'barcode',
            'ban'=>'ban',
            'camera'=>'camera',
            'child'=>'child',
            'diamond'=>'diamond',
            'database'=>'database',
            'code'=>'code',
            'desktop'=>'desktop',
            'flag-o'=>'flag-o',
            'fire'=>'fire',
            'key'=>'key',
            'leaf'=>'leaf',
            'lemon-o'=>'lemon-o',
            'paper-plane'=>'paper-plane',
            'reply'=>'reply',
            'rocket'=>'rocket',
            'search'=>'search',
            'paper-plane-o'=>'paper-plane-o'
        ),
      
    ) ); 
    $under_slider_item->add_field( array(
        'name'       => __( 'Short Description', 'Obaffo' ),
        'desc'       => __( 'Write a short description', 'Obaffo' ),
        'id'         => $prefix . 'under_description',
        'type'       => 'textarea_small',
        
        
        
    ) );
    
	//Under Slider Item
    
	$under_slider_item = new_cmb2_box( array(
        'id'            => 'feature_metabox',
        'title'         => __( 'Feature Metabox', 'Obaffo' ),
        'object_types'  => array( 'feature', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        
    ) );
	// Service Icon field
    $under_slider_item->add_field( array(
        'name'       => __( 'Icon', 'Obaffo' ),
        'desc'       => __( 'Select an Icon Name', 'Obaffo' ),
        'id'         => $prefix . 'feature_icon',
        'type'       => 'select',
        'show_option_name'=>true,
        'options'   =>array(
            'bullhorn'=>'bulhorn',
            'cc'=>'cc',
            'arrows'=>'arrows',
            'bell-o'=>'bell-o',
            'blutooth'=>'blutooth',
            'bug'=>'bug',
            'check'=>'check',
            'anchor'=>'anchor',
            'bolt'=>'bolt',
            'bookmark-o'=>'bookmark-o',
            'building'=>'building',
            'barcode'=>'barcode',
            'ban'=>'ban',
            'camera'=>'camera',
            'child'=>'child',
            'diamond'=>'diamond',
            'database'=>'database',
            'code'=>'code',
            'desktop'=>'desktop',
            'flag-o'=>'flag-o',
            'fire'=>'fire',
            'key'=>'key',
            'leaf'=>'leaf',
            'lemon-o'=>'lemon-o',
            'paper-plane'=>'paper-plane',
            'reply'=>'reply',
            'rocket'=>'rocket',
            'search'=>'search',
            'paper-plane-o'=>'paper-plane-o'
        ),
      
    ) ); 
    $project_item = new_cmb2_box( array(
        'id'            => 'project_metabox',
        'title'         => __( 'Project Metabox', 'Obaffo' ),
        'object_types'  => array( 'project', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        
    ) );
	// Service Icon field
    $project_item->add_field( array(
        'name'       => __( 'Project Short Discription', 'Obaffo' ),
        'desc'       => __( 'Write a short discription about this project', 'Obaffo' ),
        'id'         => $prefix . 'feature_short_dis',
        'type'       => 'textarea_small'
        
        
        
    ) );
    $skill_item = new_cmb2_box( array(
        'id'            => 'skill_metabox',
        'title'         => __( 'Skill Metabox', 'Obaffo' ),
        'object_types'  => array( 'skill', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        
    ) );
	// Skill Value Number
    $skill_item->add_field( array(
        'name'       => __( 'Project Short Discription', 'Obaffo' ),
        'desc'       => __( 'Write a skill value', 'Obaffo' ),
        'id'         => $prefix . 'skill_value',
        'type'       => 'textarea'
        
        
        
    ) );
    $team_item = new_cmb2_box( array(
        'id'            => 'team_metabox',
        'title'         => __( 'Team Metabox', 'Obaffo' ),
        'object_types'  => array( 'team', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        
    ) );
	// Skill Value Number
    $team_item->add_field( array(
        'name'       => __( 'Designation', 'Obaffo' ),
        'desc'       => __( 'Write a designation of team member', 'Obaffo' ),
        'id'         => $prefix . 'team_text',
        'type'       => 'textarea'
        
        
        
    ) );
}