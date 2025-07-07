<?php
$wp_customize->add_section(
	'sidebar_options',
	array(
		'title' => esc_html__( 'SideBar Options', 'newspanda' ),
		'panel' => 'archive_options_panel',
	)
);

$wp_customize->add_setting(
    'newspanda_options[sidebar_layout_option]',
    array(
        'default'           => $newspanda_default['sidebar_layout_option'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'newspanda_sanitize_radio'
    )
);

$wp_customize->add_control(
    new NewsPanda_Custom_Radio_Image_Control(
        $wp_customize,
        'newspanda_options[sidebar_layout_option]',
        array(
            'label'         => esc_html__( 'Select Sidebar Layout (archive)', 'newspanda' ),
            'section'       => 'sidebar_options',
            'choices'       => newspanda_get_sidebar_layouts(),
        )
    )
);


$wp_customize->add_setting(
    'newspanda_options[single_sidebar_layout_option]',
    array(
        'default'           => $newspanda_default['single_sidebar_layout_option'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'newspanda_sanitize_radio'
    )
);

$wp_customize->add_control(
    new NewsPanda_Custom_Radio_Image_Control(
        $wp_customize,
        'newspanda_options[single_sidebar_layout_option]',
        array(
            'label'         => esc_html__( 'Select Sidebar Layout (Single)', 'newspanda' ),
            'section'       => 'sidebar_options',
            'choices'       => newspanda_get_sidebar_layouts(),
        )
    )
);


$wp_customize->add_setting(
    'newspanda_options[enable_sidebar_fix_archive]',
    array(
        'default'           => $newspanda_default['enable_sidebar_fix_archive'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_sidebar_fix_archive]',
    array(
        'label'    => __( 'Enable Sticky Sidebar', 'newspanda' ),
        'section'     => 'sidebar_options',
        'type'        => 'checkbox',
    )
);
