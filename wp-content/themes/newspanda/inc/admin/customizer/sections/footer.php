<?php
// Popular Posts Options.
$wp_customize->add_section(
    'footer_section_options',
    array(
        'title' => __('Footer Copyright Options', 'newspanda'),
        'panel' => 'footer_options_panel',
    )
);


/*Copyright Text.*/
$wp_customize->add_setting('newspanda_options[copyright_text]'
    ,
    array(
        'default'           => $newspanda_default['copyright_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control('newspanda_options[copyright_text]'
    ,
    array(
        'label'           => __( 'Copyright Text', 'newspanda' ),
        'description'     => __( 'Use {{ date }} to get the current date.', 'newspanda' ),
        'section'         => 'footer_section_options',
        'type'            => 'text',
    )
);

/*Copyright Date Format*/
$wp_customize->add_setting(
    'newspanda_options[copyright_date_format]',
    array(
        'default'           => $newspanda_default['copyright_date_format'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[copyright_date_format]',
    array(
        'label'           => __( 'Copyright Date Format', 'newspanda' ),
        'description'     => sprintf(
            wp_kses(
                __( '<a href="%s" target="_blank">Date and Time Formatting Documentation</a>.', 'newspanda' ),
                array(
                    'a' => array(
                        'href'   => array(),
                        'target' => array(),
                    ),
                )
            ),
            esc_url( 'https://wordpress.org/support/article/formatting-date-and-time' )
        ),
        'section'         => 'footer_section_options',
        'type'            => 'text',
    )
);
/*Enable Footer Nav*/
$wp_customize->add_setting(
    'newspanda_options[enable_footer_nav]',
    array(
        'default'           => $newspanda_default['enable_footer_nav'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_footer_nav]',
    array(
        'label'       => __( 'Show Footer Nav Menu', 'newspanda' ),
        'description' => sprintf( __( 'You can add/edit footer nav menu from <a href="%s">here</a>.', 'newspanda' ), "javascript:wp.customize.control( 'nav_menu_locations[footer]' ).focus();" ),
        'section'     => 'footer_section_options',
        'type'     => 'checkbox',
    )
);


/*Enable Footer Social Nav*/

$wp_customize->add_setting(
    'newspanda_options[enable_footer_social_nav]',
    array(
        'default'           => $newspanda_default['enable_footer_social_nav'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_footer_social_nav]',
    array(
        'label'       => __( 'Show Social Nav Menu in Footer', 'newspanda' ),
        'description' => sprintf( __( 'You can add/edit social nav menu from <a href="%s">here</a>.', 'newspanda' ), "javascript:wp.customize.control( 'nav_menu_locations[social]' ).focus();" ),
        'section'     => 'footer_section_options',
        'type'     => 'checkbox',
    )
);



$wp_customize->add_setting(
    'newspanda_options[select_footer_social_menu_style]',
    array(
        'default'           => $newspanda_default['select_footer_social_menu_style'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_footer_social_menu_style]',
    array(
        'label'         => esc_html__( 'Social Menu Options', 'newspanda' ),
        'section'     => 'footer_section_options',
        'type'        => 'select',
        'choices'       => newspanda_social_menu_style(),


    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_footer_social_nav_border_radius]',
    array(
        'default'           => $newspanda_default['enable_footer_social_nav_border_radius'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_footer_social_nav_border_radius]',
    array(
        'label'    => __( 'Enable Border Radius', 'newspanda' ),
        'section'  => 'footer_section_options',
        'type'     => 'checkbox',
    )
);

// Popular Posts Options.
$wp_customize->add_section(
    'footer_scroll_to_top_options',
    array(
        'title' => __('Footer Scroll To Top', 'newspanda'),
        'panel' => 'footer_options_panel',
    )
);


/*Copyright Text.*/
$wp_customize->add_setting('newspanda_options[enable_footer_scroll_to_top]'
    ,
    array(
        'default'           => $newspanda_default['enable_footer_scroll_to_top'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
        
    )
);
$wp_customize->add_control('newspanda_options[enable_footer_scroll_to_top]'
    ,
    array(
        'label'           => __( 'Enable Footer Scroll To Top', 'newspanda' ),
        'section'         => 'footer_scroll_to_top_options',
        'type'            => 'checkbox',
    )
);


// Popular Posts Options.
$wp_customize->add_section(
    'footer_progressbar_options',
    array(
        'title' => __('Footer ProgressBar', 'newspanda'),
        'panel' => 'footer_options_panel',
    )
);


/*Copyright Text.*/
$wp_customize->add_setting('newspanda_options[enable_footer_progressbar]'
    ,
    array(
        'default'           => $newspanda_default['enable_footer_progressbar'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',

    )
);
$wp_customize->add_control('newspanda_options[enable_footer_progressbar]'
    ,
    array(
        'label'           => __( 'Enable Footer ProgressBar', 'newspanda' ),
        'description'     => __( 'Screen Progressbar enable option', 'newspanda' ),
        'section'         => 'footer_progressbar_options',
        'type'            => 'checkbox',
    )
);

