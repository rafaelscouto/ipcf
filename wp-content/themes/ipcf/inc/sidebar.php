<?php
defined( 'ABSPATH' ) || die( "Can't access directly" );

function sidebarPositions() {
	register_sidebar(
		array (
		   'name' => 'Main Menu',
		   'id' => 'main-menu',
		   'description' => 'Menu principal',
		   'before_widget' => '',
		   'after_widget' => '',
		   'before_title' => '',
		   'after_title' => ''
		),
		array (
			'name' => 'Bottom 1',
			'id' => 'bottom-1',
			'description' => '',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<div class=""><h4 class="">',
			'after_title' => '</h4></div>'
		 ),
		 array (
			 'name' => 'Bottom 2',
			 'id' => 'bottom-2',
			 'description' => '',
			 'before_widget' => '',
			 'after_widget' => '',
			 'before_title' => '<div class=""><h4 class="">',
			 'after_title' => '</h4></div>'
		  ),
		  array (
			  'name' => 'Bottom 3',
			  'id' => 'bottom-3',
			  'description' => '',
			  'before_widget' => '',
			  'after_widget' => '',
			  'before_title' => '<div class=""><h4 class="">',
			  'after_title' => '</h4></div>'
		   )
	);
}
add_action('widgets_init', 'sidebarPositions');