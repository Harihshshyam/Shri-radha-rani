<?php
/**
 * All settings related to footer recommended post.
 *
 * @package NewsPanda
 */
$wp_customize->add_section(
	'footer_recommended_post',
	array(
		'title' => esc_html__( 'Recommended Section', 'newspanda' ),
		'panel' => 'front_page_theme_options_panel',
	)
);

$wp_customize->add_setting(
    'newspanda_options[enable_recommended_post]',
    array(
        'default'           => $newspanda_default['enable_recommended_post'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_recommended_post]',
    array(
        'label'       => esc_html__( 'Enable Recommended Post', 'newspanda' ),
        'section'     => 'footer_recommended_post',
        'type'        => 'checkbox',
    )
);


$wp_customize->add_setting(
    'newspanda_options[recommended_post_layout]',
    array(
        'default'           => $newspanda_default['recommended_post_layout'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'newspanda_sanitize_radio'
    )
);


$wp_customize->add_control(
    new NewsPanda_Custom_Radio_Image_Control(
        $wp_customize,
        'newspanda_options[recommended_post_layout]',
        array(
            'label'         => esc_html__( 'Recommended Post Layout', 'newspanda' ),
            'section'       => 'footer_recommended_post',
            'choices'       => newspanda_get_recommended_post(),
        )
    )
);



$wp_customize->add_setting(
    'newspanda_options[recommended_post_title]',
    array(
        'default'           => $newspanda_default['recommended_post_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[recommended_post_title]',
    array(
        'label'    => __( 'Recommended Post', 'newspanda' ),
        'section'  => 'footer_recommended_post',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_options[recommended_post_category]',
    array(
        'default'           => $newspanda_default['recommended_post_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new NewsPanda_Dropdown_Taxonomies_Control(
        $wp_customize,
        'newspanda_options[recommended_post_category]',
        array(
            'label'           => __( 'Choose Category', 'newspanda' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'newspanda' ),
            'section'         => 'footer_recommended_post',
        )
    )
);









$wp_customize->add_setting(
    'newspanda_options[enable_recommended_post_author_meta]',
    array(
        'default' => $newspanda_default['enable_recommended_post_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_recommended_post_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'newspanda'),
        'section' => 'footer_recommended_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_recommended_post_author_meta]',
    array(
        'default' => $newspanda_default['select_recommended_post_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_recommended_post_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'newspanda'),
        'section' => 'footer_recommended_post',
        'type' => 'select',
        'choices' => newspanda_author_meta(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[recommended_post_author_meta_title]',
    array(
        'default' => $newspanda_default['recommended_post_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[recommended_post_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'newspanda'),
        'section' => 'footer_recommended_post',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_recommended_post_date_meta]',
    array(
        'default' => $newspanda_default['enable_recommended_post_date_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_recommended_post_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'newspanda'),
        'section' => 'footer_recommended_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_recommended_post_date]',
    array(
        'default' => $newspanda_default['select_recommended_post_date'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_recommended_post_date]',
    array(
        'label' => esc_html__('Select Date Meta', 'newspanda'),
        'section' => 'footer_recommended_post',
        'type' => 'select',
        'choices' => newspanda_date_meta(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_recommended_post_date_meta_title]',
    array(
        'default' => $newspanda_default['select_recommended_post_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_recommended_post_date_meta_title]',
    array(
        'label' => __('Date Meta Text', 'newspanda'),
        'section' => 'footer_recommended_post',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_recommended_post_date_format]',
    array(
        'default' => $newspanda_default['select_recommended_post_date_format'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_recommended_post_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'newspanda'),
        'section' => 'footer_recommended_post',
        'type' => 'select',
        'choices' => newspanda_get_date_formats(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_recommended_post_category_meta]',
    array(
        'default' => $newspanda_default['enable_recommended_post_category_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_recommended_post_category_meta]',
    array(
        'label' => esc_html__('Enable Category Meta', 'newspanda'),
        'section' => 'footer_recommended_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_recommended_post_number_of_category]',
    array(
        'default' => $newspanda_default['select_recommended_post_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_recommended_post_number_of_category]',
    array(
        'label' => __('Number of Category', 'newspanda'),
        'section' => 'footer_recommended_post',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'newspanda_options[recommended_post_category_label]',
    array(
        'default' => $newspanda_default['recommended_post_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[recommended_post_category_label]',
    array(
        'label' => __('Category Label', 'newspanda'),
        'section' => 'footer_recommended_post',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_recommended_post_category_color]',
    array(
        'default' => $newspanda_default['select_recommended_post_category_color'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_recommended_post_category_color]',
    array(
        'label' => esc_html__('Select Category Color', 'newspanda'),
        'section' => 'footer_recommended_post',
        'type' => 'select',
        'choices' => newspanda_category_color(),
    )
);