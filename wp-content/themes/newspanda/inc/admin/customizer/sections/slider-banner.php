<?php
$wp_customize->add_section(
    'homepage_slider_banner_option',
    array(
        'title' => __('Carousel Banner', 'newspanda'),
        'panel' => 'front_page_theme_options_panel',
    )
);

/* Home Page Layout */
$wp_customize->add_setting(
    'newspanda_options[enable_slider_banner_section]',
    array(
        'default' => $newspanda_default['enable_slider_banner_section'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_slider_banner_section]',
    array(
        'label' => __('Enable Carousel Banner Section', 'newspanda'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'checkbox',
    )
);


$wp_customize->add_setting(
    'newspanda_options[title_slider_banner_section]',
    array(
        'default'           => $newspanda_default['title_slider_banner_section'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[title_slider_banner_section]',
    array(
        'label'    => __( 'Section Title', 'newspanda' ),
        'section'  => 'homepage_slider_banner_option',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_options[banner_section_cat]',
    array(
        'default'           => $newspanda_default['banner_section_cat'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new NewsPanda_Dropdown_Taxonomies_Control(
        $wp_customize,
        'newspanda_options[banner_section_cat]',
        array(
            'label'           => __( 'Choose  Category', 'newspanda' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'newspanda' ),
            'section'         => 'homepage_slider_banner_option',
        )
    )
);

$wp_customize->add_setting(
    'newspanda_options[no_of_banner_slider_posts]',
    array(
        'default' => $newspanda_default['no_of_banner_slider_posts'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[no_of_banner_slider_posts]',
    array(
        'label' => __('Post In Slider', 'newspanda'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'select',
        'choices' => array(
            '3' => __('3', 'newspanda'),
            '4' => __('4', 'newspanda'),
            '5' => __('5', 'newspanda'),
            '6' => __('6', 'newspanda'),
            '7' => __('7', 'newspanda'),
            '8' => __('8', 'newspanda'),
        ),
    )
);

// No of posts offset.
$wp_customize->add_setting(
    'newspanda_options[no_of_banner_slider_posts_offsets]',
    array(
        'default' => $newspanda_default['no_of_banner_slider_posts_offsets'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[no_of_banner_slider_posts_offsets]',
    array(
        'label' => __('Post Offset Number', 'newspanda'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'number',
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_banner_post_description]',
    array(
        'default' => $newspanda_default['enable_banner_post_description'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_banner_post_description]',
    array(
        'label' => __('Enable Post Description', 'newspanda'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'checkbox',
    )
);


$wp_customize->add_setting(
    'newspanda_options[enable_banner_overlay]',
    array(
        'default' => $newspanda_default['enable_banner_overlay'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_banner_overlay]',
    array(
        'label' => __('Enable Banner Overlay', 'newspanda'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'checkbox',
    )
);


$wp_customize->add_setting(
    'newspanda_options[slider_post_content_alignment]',
    array(
        'default' => $newspanda_default['slider_post_content_alignment'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[slider_post_content_alignment]',
    array(
        'label' => __('Content Vertical Alignment', 'newspanda'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'select',
        'choices' => array(
            'banner-description-top' => __('Vertical alignment top', 'newspanda'),
            'banner-description-space' => __('Vertical alignment space between', 'newspanda'),
            'banner-description-bottom' => __('Vertical alignment bottom', 'newspanda'),
        ),
    )
);

$wp_customize->add_setting(
    'newspanda_section_seperator_banner',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new NewsPanda_Seperator_Control(
        $wp_customize,
        'newspanda_section_seperator_banner',
        array(
            'label'         => esc_html__( 'Banner Slider Meta', 'newspanda' ),
            'settings' => 'newspanda_section_seperator_banner',
            'section' => 'homepage_slider_banner_option',
        )
    )
);


$wp_customize->add_setting(
    'newspanda_options[enable_banner_slider_author_meta]',
    array(
        'default' => $newspanda_default['enable_banner_slider_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_banner_slider_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'newspanda'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_banner_slider_author_meta]',
    array(
        'default' => $newspanda_default['select_banner_slider_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_banner_slider_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'newspanda'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'select',
        'choices' => newspanda_author_meta(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[banner_slider_author_meta_title]',
    array(
        'default' => $newspanda_default['banner_slider_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[banner_slider_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'newspanda'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_banner_slider_date_meta]',
    array(
        'default' => $newspanda_default['enable_banner_slider_date_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_banner_slider_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'newspanda'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_banner_slider_date]',
    array(
        'default' => $newspanda_default['select_banner_slider_date'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_banner_slider_date]',
    array(
        'label' => esc_html__('Select Date Meta', 'newspanda'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'select',
        'choices' => newspanda_date_meta(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_banner_slider_date_meta_title]',
    array(
        'default' => $newspanda_default['select_banner_slider_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_banner_slider_date_meta_title]',
    array(
        'label' => __('Date Meta Text', 'newspanda'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_banner_slider_date_format]',
    array(
        'default' => $newspanda_default['select_banner_slider_date_format'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_banner_slider_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'newspanda'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'select',
        'choices' => newspanda_get_date_formats(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_banner_slider_category_meta]',
    array(
        'default' => $newspanda_default['enable_banner_slider_category_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_banner_slider_category_meta]',
    array(
        'label' => esc_html__('Enable Category Meta', 'newspanda'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_banner_slider_number_of_category]',
    array(
        'default' => $newspanda_default['select_banner_slider_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_banner_slider_number_of_category]',
    array(
        'label' => __('Number of Category', 'newspanda'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'newspanda_options[banner_slider_category_label]',
    array(
        'default' => $newspanda_default['banner_slider_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[banner_slider_category_label]',
    array(
        'label' => __('Category Label', 'newspanda'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_banner_slider_category_color]',
    array(
        'default' => $newspanda_default['select_banner_slider_category_color'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_banner_slider_category_color]',
    array(
        'label' => esc_html__('Select Category Color', 'newspanda'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'select',
        'choices' => newspanda_category_color(),
    )
);

/* Home Page Layout */
$wp_customize->add_setting(
    'newspanda_options[enable_banner_control_icon]',
    array(
        'default' => $newspanda_default['enable_banner_control_icon'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_banner_control_icon]',
    array(
        'label' => __('Enable Slider Control', 'newspanda'),
        'section' => 'homepage_slider_banner_option',
        'type' => 'checkbox',
    )
);