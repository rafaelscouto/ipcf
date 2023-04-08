<?php
function customizer($wp_customize) {
	$wp_customize->add_panel( 'information', array(
		'priority'       => 100,
		'theme_supports' => '',
		'title'          => __( 'Configurações Gerais', 'rctheme' ),
		'description'    => __( 'Configurações gerais do tema, todas as informações aqui serão exibidas no rodapé.', 'rctheme' ),
	));

	$wp_customize->add_section(
		'section_informations',
		array(
			'title' => __('Rodapé - Informações de Contato', 'rctheme'),
			'panel' => 'information',
			'priority' => 9,
		)
	);

	// Rodapé - Contato //
	$wp_customize->add_setting(
		'rodape_contato',
	);
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'rodape_contato',
		array(
				'label' => __('Contato:', 'rctheme'),
				'description' => 'Insira as informações de contato',
				'section' => 'section_informations',
				'settings' => 'rodape_contato',
				'type' => 'textarea'
			)
		)
	);

	// Rodapé - Endereço //
	$wp_customize->add_setting(
		'rodape_endereco'
	);
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'rodape_endereco',
		array(
				'label' => __('Endereço:', 'rctheme'),
				'description' => 'Insira o endereço',
				'section' => 'section_informations',
				'settings' => 'rodape_endereco',
				'type' => 'textarea'
			)
		)
	);

	// Rodapé - Horário de Funcionamento //
	$wp_customize->add_setting(
		'rodape_horario_funcionamento'
	);
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'rodape_horario_funcionamento',
		array(
				'label' => 'Horário de Funcionamento:',
				'description' => 'Insira o horário de funcionamento',
				'section' => 'section_informations',
				'settings' => 'rodape_horario_funcionamento',
				'type' => 'textarea'
			)
		)
	);
}
add_action('customize_register', 'customizer');
