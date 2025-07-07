<?php
$wp_customize->add_section(
   'topbar_options' ,
    array(
        'title' => __( 'Topbar Options', 'newspanda' ),
        'panel' => 'header_options_panel',
    )
);

/*Enable Top Bar*/
$wp_customize->add_setting(
    'newspanda_options[enable_top_bar]',
    array(
        'default'           => $newspanda_default['enable_top_bar'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_top_bar]',
    array(
        'label'    => __( 'Enable Top Bar', 'newspanda' ),
        'section'  => 'topbar_options',
        'type'     => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[hide_topbar_on_mobile]',
    array(
        'default'           => $newspanda_default['hide_topbar_on_mobile'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[hide_topbar_on_mobile]',
    array(
        'label'    => __( 'Hide Top Bar on Mobile', 'newspanda' ),
        'section'  => 'topbar_options',
        'type'     => 'checkbox',
    )
);



/*Enable Today's Date*/
$wp_customize->add_setting(
    'newspanda_options[enable_header_time]',
    array(
        'default'           => $newspanda_default['enable_header_time'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_header_time]',
    array(
        'label'    => __( 'Enable Current Time', 'newspanda' ),
        'section'  => 'topbar_options',
        'type'     => 'checkbox',
    )
);

/*Enable Today's Date*/
$wp_customize->add_setting(
    'newspanda_options[enable_header_date]',
    array(
        'default'           => $newspanda_default['enable_header_date'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_header_date]',
    array(
        'label'    => __( 'Enable Today\'s Date', 'newspanda' ),
        'section'  => 'topbar_options',
        'type'     => 'checkbox',
    )
);

// Date Label Text
$wp_customize->add_setting(
    'newspanda_options[date_label_text]',
    array(
        'default'           => $newspanda_default['date_label_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[date_label_text]',
    array(
        'label'           => __( 'Date Label Text', 'newspanda' ),
        'description'     => __( 'Leave empty if you want to use the default text "Today".', 'newspanda' ),
        'section'  => 'topbar_options',
        'type'     => 'text',
    )
);


/*Todays Date Format*/
$wp_customize->add_setting(
    'newspanda_options[todays_date_format]',
    array(
        'default'           => $newspanda_default['todays_date_format'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[todays_date_format]',
    array(
        'label'    => __( 'Today\'s Date Format', 'newspanda' ),
        'description' => sprintf( wp_kses( __( '<a href="%s" target="_blank">Date and Time Formatting Documentation</a>.', 'newspanda' ), array(  'a' => array( 'href' => array(), 'target' => array() ) ) ), esc_url( 'https://wordpress.org/support/article/formatting-date-and-time' ) ),
        'section'  => 'topbar_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_social_nav_on_topbar]',
    array(
        'default'           => $newspanda_default['enable_social_nav_on_topbar'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_social_nav_on_topbar]',
    array(
        'label'    => __( 'Enable Social Nav on TopBar', 'newspanda' ),
        'section'  => 'topbar_options',
        'type'     => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_top_bar_social_menu_style]',
    array(
        'default'           => $newspanda_default['select_top_bar_social_menu_style'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_top_bar_social_menu_style]',
    array(
        'label'         => esc_html__( 'Social Menu Options', 'newspanda' ),
        'section'     => 'topbar_options',
        'type'        => 'select',
        'choices'       => newspanda_social_menu_style(),


    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_social_nav_border_radius]',
    array(
        'default'           => $newspanda_default['enable_social_nav_border_radius'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_social_nav_border_radius]',
    array(
        'label'    => __( 'Enable Border Radius', 'newspanda' ),
        'section'  => 'topbar_options',
        'type'     => 'checkbox',
    )
);
