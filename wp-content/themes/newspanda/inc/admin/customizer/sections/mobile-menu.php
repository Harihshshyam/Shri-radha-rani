<?php
$wp_customize->add_section(
   'mobile_menu_options' ,
    array(
        'title' => __( 'Mobile Menu Options', 'newspanda' ),
        'panel' => 'header_options_panel',
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_social_mobile_menu]',
    array(
        'default'           => $newspanda_default['enable_social_mobile_menu'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_social_mobile_menu]',
    array(
        'label'         => esc_html__( 'Social Menu to Display in Mobile', 'newspanda' ),
        'section'     => 'mobile_menu_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_mobile_social_menu_style]',
    array(
        'default'           => $newspanda_default['select_mobile_social_menu_style'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_mobile_social_menu_style]',
    array(
        'label'         => esc_html__( 'Social Menu Options', 'newspanda' ),
        'section'     => 'mobile_menu_options',
        'type'        => 'select',
        'choices'       => newspanda_social_menu_style(),


    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_mobile_social_nav_border_radius]',
    array(
        'default'           => $newspanda_default['enable_mobile_social_nav_border_radius'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_mobile_social_nav_border_radius]',
    array(
        'label'    => __( 'Enable Border Radius', 'newspanda' ),
        'section'  => 'mobile_menu_options',
        'type'     => 'checkbox',
    )
);


$wp_customize->add_setting(
    'newspanda_options[enable_copyright_in_menu]',
    array(
        'default'           => $newspanda_default['enable_copyright_in_menu'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_copyright_in_menu]',
    array(
        'label'         => esc_html__( 'Copyright in Mobile', 'newspanda' ),
        'section'     => 'mobile_menu_options',
        'type'        => 'checkbox',
    )
);


