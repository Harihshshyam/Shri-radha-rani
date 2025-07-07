<?php
// Upsell.
$wp_customize->add_section(
	'theme_upsell',
	array(
		'title'    => esc_html__( 'Unlock More Features', 'newspanda' ),
		'priority' => 1,
	)
);
$wp_customize->add_setting(
	'theme_pro_features',
	array(
		'sanitize_callback' => '__return_true',
	)
);
$wp_customize->add_control(
	new NewsPanda_Upsell(
		$wp_customize,
		'theme_pro_features',
		array(
			'section' => 'theme_upsell',
			'type'    => 'upsell',
		)
	)
);

$wp_customize->add_section(
	new NewsPanda_Section_Features_List(
		$wp_customize,
		'theme_header_features',
		array(
			'title'         => esc_html__( 'More Options on NewsPanda Pro!', 'newspanda' ),
			'features_list' => array(
				esc_html__( 'Dark mode options', 'newspanda' ),
				esc_html__( 'Menu badge options', 'newspanda' ),
				esc_html__( '17+ Preloader options', 'newspanda' ),
				esc_html__( 'More color options', 'newspanda' ),
				esc_html__( '404 page options', 'newspanda' ),
				esc_html__( '... and many other premium features', 'newspanda' ),
			),
			'panel'         => 'header_options_panel',
			'priority'      => 999,
		)
	)
);
