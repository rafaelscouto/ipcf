<?php
function customizer($wp_customize) {
	$wp_customize->add_panel( 'information', array(
		'priority'       => 100,
		'theme_supports' => '',
		'title'          => __( 'Configurações Gerais', 'rctheme' ),
		'description'    => __( 'Configurações gerais do tema, todas as informações aqui serão exibidas no rodapé.', 'rctheme' ),
	));

	// section copyrtight
	$wp_customize->add_section(
		'section_informations_copyrtight',
		array(
			'title' => __('Copyright', 'rctheme'),
			'panel' => 'information',
			'priority' => 9,
		)
	);

	$wp_customize->add_setting(
		'footer_copy',
	);
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'footer_copy',
		array(
				'label' => __('Copyright:', 'rctheme'),
				'description' => 'Insira as informações de copyright',
				'section' => 'section_informations_copyrtight',
				'settings' => 'footer_copy',
				'type' => 'textarea'
			)
		)
	);

	// section social media
	$wp_customize->add_section(
		'section_informations_social_media',
		array(
			'title' => __('Mídias Sociais', 'rctheme'),
			'panel' => 'information',
			'priority' => 9,
		)
	);

	$wp_customize->add_setting(
		'footer_social_media_instagram_icon'
	);
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'footer_social_media_instagram_icon',
		array(
				'label' => __('Instagram:', 'rctheme'),
				'description' => 'Insira a classe do ícone do instagram',
				'section' => 'section_informations_social_media',
				'settings' => 'footer_social_media_instagram_icon',
				'type' => 'text'
			)
		)
	);
	$wp_customize->add_setting(
		'footer_social_media_instagram_url'
	);
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'footer_social_media_instagram_url',
		array(
				'description' => 'Insira a url do perfil do instagram',
				'section' => 'section_informations_social_media',
				'settings' => 'footer_social_media_instagram_url',
				'type' => 'url',
			)
		)
	);

	$wp_customize->add_setting(
		'footer_social_media_facebook_icon'
	);
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'footer_social_media_facebook_icon',
		array(
				'label' => __('Facebook:', 'rctheme'),
				'description' => 'Insira a classe do ícone do facebook',
				'section' => 'section_informations_social_media',
				'settings' => 'footer_social_media_facebook_icon',
				'type' => 'text'
			)
		)
	);
	$wp_customize->add_setting(
		'footer_social_media_facebook_url'
	);
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'footer_social_media_facebook_url',
		array(
				'description' => 'Insira a url do perfil do facebook',
				'section' => 'section_informations_social_media',
				'settings' => 'footer_social_media_facebook_url',
				'type' => 'url'
			)
		)
	);

	$wp_customize->add_setting(
		'footer_social_media_twitter_icon'
	);
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'footer_social_media_twitter_icon',
		array(
				'label' => __('Twitter:', 'rctheme'),
				'description' => 'Insira a classe do ícone do twitter',
				'section' => 'section_informations_social_media',
				'settings' => 'footer_social_media_twitter_icon',
				'type' => 'text'
			)
		)
	);
	$wp_customize->add_setting(
		'footer_social_media_twitter_url'
	);
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'footer_social_media_twitter_url',
		array(
				'description' => 'Insira a url do perfil do twitter',
				'section' => 'section_informations_social_media',
				'settings' => 'footer_social_media_twitter_url',
				'type' => 'url'
			)
		)
	);

	$wp_customize->add_setting(
		'footer_social_media_youtube_icon'
	);
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'footer_social_media_youtube_icon',
		array(
				'label' => __('YouTube:', 'rctheme'),
				'description' => 'Insira a classe do ícone do youtube',
				'section' => 'section_informations_social_media',
				'settings' => 'footer_social_media_youtube_icon',
				'type' => 'text'
			)
		)
	);
	$wp_customize->add_setting(
		'footer_social_media_youtube_url'
	);
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'footer_social_media_youtube_url',
		array(
				'description' => 'Insira a url do perfil do youtube',
				'section' => 'section_informations_social_media',
				'settings' => 'footer_social_media_youtube_url',
				'type' => 'url'
			)
		)
	);
}
add_action('customize_register', 'customizer');
