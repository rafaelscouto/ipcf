<?php
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
require get_template_directory() . '/inc/sidebar.php';

function loadStyles() {
	wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
	wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style('mobile-css', get_template_directory_uri() . '/assets/css/mobile.css');
	wp_enqueue_style('altocontraste-css', get_template_directory_uri() . '/assets/css/altocontraste.css');
	wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css');
	wp_enqueue_style('fontawesome-icons', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/fontawesome.min.css');
	wp_enqueue_script('jquery-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js', array(), false, true);
	wp_enqueue_script('popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js');
	wp_enqueue_script('bootsrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js');
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery-js'), false, true);
	wp_enqueue_script('mask-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js', array('jquery-js'), null, false);
	wp_enqueue_script('altocontraste-js', get_template_directory_uri() . '/assets/js/altocontraste.js', array('jquery-js'), false, true);
}

function theme_support() {
    register_nav_menus(array(
        'menu-main' => __('Main Menu', 'rctheme'),
        'menu-bottom-1' => __('Bottom Menu 1', 'rctheme'),
        'menu-bottom-2' => __('Bottom Menu 2', 'rctheme'),
        'menu-bottom-3' => __('Bottom Menu 3', 'rctheme'),
    ));
    add_theme_support(
        'custom-logo',
        array(
            'flex-height' => true,
            'flex-width'  => true,
            'class'       => 'navbar-brand',
            'header-text'=> array(
                'site-title',
                'site-description'
            )
        )
    );
    add_theme_support('post-thumbnails');
}

function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}

function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

function catch_that_image($post_id) {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();

	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);

	$first_img = $matches [1] [0];
  
	if(empty($first_img)){ //Defines a default image
	  $first_img = "";
	}

	return $first_img;
}

function debug($param) {
	echo '<pre>';
	print_r($param);
	echo '</pre>';
	return;
}

add_action( 'after_setup_theme', 'register_navwalker' );
add_action('after_setup_theme', 'theme_support');
add_action('wp_enqueue_scripts', 'loadStyles');