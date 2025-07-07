<?php
$wp_customize->add_section(
   'header_style_options' ,
    array(
        'title' => __( 'Header Layout', 'newspanda' ),
        'panel' => 'header_options_panel',
    )
);


$wp_customize->add_setting(
    'newspanda_options[select_header_layout_style]',
    array(
        'default'           => $newspanda_default['select_header_layout_style'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'newspanda_sanitize_radio'
    )
);

$wp_customize->add_control(
    new NewsPanda_Custom_Radio_Image_Control(
        $wp_customize,
        'newspanda_options[select_header_layout_style]',
        array(
            'label'         => esc_html__( 'Select Header Layout', 'newspanda' ),
            'section'       => 'header_style_options',
            'choices'       => newspanda_get_header_layout(),
        )
    )
);

$wp_customize->add_setting(
    'newspanda_options[header_newsletter_button_text]',
    array(
        'default' => $newspanda_default['header_newsletter_button_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[header_newsletter_button_text]',
    array(
        'label' => __('NewsLetter Button Text', 'newspanda'),
        'section' => 'header_style_options',
        'type' => 'text',
        'active_callback' => 'newspanda_header_button_text',

    )
);
$wp_customize->add_setting(
    'newspanda_options[header_newsletter_button_url]',
    array(
        'default'           => $newspanda_default['header_newsletter_button_url'],
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(
    'newspanda_options[header_newsletter_button_url]',
    array(
        'label'    => __( 'NewsLetter Button URL', 'newspanda' ),
        'section'  => 'header_style_options',
        'type'     => 'text',
        'active_callback' => 'newspanda_header_button_text',

    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_header_advertisement]',
    array(
        'default'           => $newspanda_default['enable_header_advertisement'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_header_advertisement]',
    array(
        'label'    => __( 'Enable Header Advertisement', 'newspanda' ),
        'section'     => 'header_style_options',
        'type'        => 'checkbox',
    )
);


$wp_customize->add_setting(
    'newspanda_options[header_advert_image]',
    array(
        'default' => $newspanda_default['header_advert_image'],
        'sanitize_callback' => 'newspanda_sanitize_image',
    )
);
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'newspanda_options[header_advert_image]',
        array(
            'label' => __('Upload Banner Advertisement', 'newspanda'),
            'section' => 'header_style_options',
            'active_callback' => 'newspanda_header_advertisement',

        )
    )
);


$wp_customize->add_setting(
    'newspanda_options[header_advert_image_url]',
    array(
        'default'           => $newspanda_default['header_advert_image_url'],
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(
    'newspanda_options[header_advert_image_url]',
    array(
        'label'    => __( 'Banner Advertisement URL', 'newspanda' ),
        'section'  => 'header_style_options',
        'type'     => 'text',
        'active_callback' => 'newspanda_header_advertisement',

    )
);