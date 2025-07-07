<?php
/**
 * All settings related to preloader.
 *
 * @package NewsPanda
 */
$wp_customize->add_section(
	'preloader_options',
	array(
		'title' => esc_html__( 'Preloader Options', 'newspanda' ),
		'panel' => 'general_options_panel',
	)
);

$wp_customize->add_setting(
    'newspanda_options[enable_preloader_options]',
    array(
        'default'           => $newspanda_default['enable_preloader_options'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_preloader_options]',
    array(
        'label'       => esc_html__( 'Enable Preloader Option', 'newspanda' ),
        'section'     => 'preloader_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[newspanda_preloader_style]',
    array(
        'default'           => $newspanda_default['newspanda_preloader_style'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[newspanda_preloader_style]',
    array(
        'label'         => esc_html__( 'Select Preloader Style', 'newspanda' ),
        'section'     => 'preloader_options',
        'type'        => 'select',
        'choices'       => newspanda_preloader_style_option(),

    )
);
