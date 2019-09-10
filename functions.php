<?php function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

//support for post thumbnails
add_theme_support( 'post-thumbnails' );

// Old Custom Field Type (From Old Theme)
// if(function_exists("register_field_group"))
// {
// 	register_field_group(array (
// 		'id' => 'acf_home',
// 		'title' => 'Home',
// 		'fields' => array (
// 			array (
// 				'key' => 'field_5b05d4264ae9c',
// 				'label' => 'Call To Action',
// 				'name' => 'calltoaction',
// 				'type' => 'textarea',
// 				'instructions' => 'Text that goes in the banner. A Call to action for the button',
// 				'required' => 1,
// 				'default_value' => 'Looking for affordable website design?',
// 				'placeholder' => 'Looking for ______ website design?',
// 				'maxlength' => '',
// 				'rows' => '',
// 				'formatting' => 'br',
// 			),
// 		),
// 		'location' => array (
// 			array (
// 				array (
// 					'param' => 'post_type',
// 					'operator' => '==',
// 					'value' => 'post',
// 					'order_no' => 0,
// 					'group_no' => 0,
// 				),
// 			),
// 		),
// 		'options' => array (
// 			'position' => 'normal',
// 			'layout' => 'no_box',
// 			'hide_on_screen' => array (
// 			),
// 		),
// 		'menu_order' => 0,
// 	));
// }

?>
