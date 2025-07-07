<?php
$wp_customize->add_section(
	'breadcrumb_options',
	array(
		'title' => __( 'Breadcrumb Options', 'newspanda' ),
		'panel' => 'general_options_panel',
	)
);

$wp_customize->add_setting(
    'newspanda_options[enable_breadcrumb]',
    array(
        'default'           => $newspanda_default['enable_breadcrumb'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_breadcrumb]',
    array(
		'label'    => __( 'Enable Breadcrumb', 'newspanda' ),
        'section'     => 'breadcrumb_options',
        'type'        => 'checkbox',
    )
);
