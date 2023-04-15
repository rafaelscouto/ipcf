<?php
defined( 'ABSPATH' ) || die( "Can't access directly" );

function sidebarPositions() {
	register_sidebar(
	array (
		'name' => 'Banner Topo',
		'id' => 'banner-top-widget',
		'description' => 'Widget para exibição de banner no topo ao lado do logo',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4 class="section-title">',
		'after_title' => '</h4>'
	));
	register_sidebar(
	array (
		'name' => 'Main Menu',
		'id' => 'main-menu',
		'description' => 'Menu principal',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	));
	register_sidebar(
	array (
		'name' => 'Benefícios',
		'id' => 'benefits-widget',
		'description' => 'Widget para exibição dos benefícios',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4 class="section-title">',
		'after_title' => '</h4>'
	));
	register_sidebar(
	array (
		'name' => 'Mídias Sociais',
		'id' => 'social-media-widget',
		'description' => 'Widget para exibição dos posts do instagram',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4 class="section-title">',
		'after_title' => '</h4>'
	));
	register_sidebar(
	array (
		'name' => 'Contato',
		'id' => 'contact-widget',
		'description' => 'Widget para exibição do formulário de contato',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4 class="section-title">',
		'after_title' => '</h4>'
	));
	register_sidebar(
	array (
		'name' => 'Bottom Info',
		'id' => 'bottom-info-widget',
		'description' => 'Widget para exibição para as informações de rodapé',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4 class="">',
		'after_title' => '</h4>'
	));
	register_sidebar(
	array (
		'name' => 'Bottom Menus',
		'id' => 'bottom-menus-widget',
		'description' => 'Widget para exibição dos menus do rodapé',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4 class="">',
		'after_title' => '</h4>'
	));
}
add_action('widgets_init', 'sidebarPositions');
