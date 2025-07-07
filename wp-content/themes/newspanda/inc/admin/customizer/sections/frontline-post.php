<?php
// Frontline Posts Options.
$wp_customize->add_section(
    'home_page_frontline_options',
    array(
        'title' => __('Frontline Section', 'newspanda'),
        'panel' => 'front_page_theme_options_panel',
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_frontlines]',
    array(
        'default' => $newspanda_default['enable_frontlines'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_frontlines]',
    array(
        'label' => __('Enable Frontline', 'newspanda'),
        'section' => 'home_page_frontline_options',
        'type' => 'checkbox',
    )
);

// Frontline Posts Category.
$wp_customize->add_setting(
    'newspanda_options[frontline_cat]',
    array(
        'default' => $newspanda_default['frontline_cat'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new NewsPanda_Dropdown_Taxonomies_Control(
        $wp_customize,
        'newspanda_options[frontline_cat]',
        array(
            'label' => __('Choose Frontline category', 'newspanda'),
            'section' => 'home_page_frontline_options',
        )
    )
);
$wp_customize->add_setting(
    'newspanda_options[frontline_layout_style]',
    array(
        'default' => $newspanda_default['frontline_layout_style'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[frontline_layout_style]',
    array(
        'label' => __('Select Layout Style', 'newspanda'),
        'section' => 'home_page_frontline_options',
        'type' => 'select',
        'choices' => array(
            'frontline-layout-1' => __('Layout - 1', 'newspanda'),
            'frontline-layout-2' => __('Layout - 2', 'newspanda'),
            'frontline-layout-3' => __('Layout - 3', 'newspanda'),
        ),
    )
);
// No of posts.
$wp_customize->add_setting(
    'newspanda_options[no_of_frontlines_posts]',
    array(
        'default' => $newspanda_default['no_of_frontlines_posts'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[no_of_frontlines_posts]',
    array(
        'label' => __('Number of Posts', 'newspanda'),
        'section' => 'home_page_frontline_options',
        'type' => 'number',
    )
);

// No of posts offset.
$wp_customize->add_setting(
    'newspanda_options[no_of_frontlines_posts_offsets]',
    array(
        'default' => $newspanda_default['no_of_frontlines_posts_offsets'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[no_of_frontlines_posts_offsets]',
    array(
        'label' => __('Post Offset Number', 'newspanda'),
        'section' => 'home_page_frontline_options',
        'type' => 'number',
    )
);
// Posts Orderby.
$wp_customize->add_setting(
    'newspanda_options[frontline_orderby]',
    array(
        'default' => $newspanda_default['frontline_orderby'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[frontline_orderby]',
    array(
        'label' => __('Orderby', 'newspanda'),
        'section' => 'home_page_frontline_options',
        'type' => 'select',
        'choices' => array(
            'date' => __('Date', 'newspanda'),
            'id' => __('ID', 'newspanda'),
            'title' => __('Title', 'newspanda'),
            'rand' => __('Random', 'newspanda'),
        ),
    )
);
// Posts Order.
$wp_customize->add_setting(
    'newspanda_options[frontline_order]',
    array(
        'default' => $newspanda_default['frontline_order'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[frontline_order]',
    array(
        'label' => __('Order', 'newspanda'),
        'section' => 'home_page_frontline_options',
        'type' => 'select',
        'choices' => array(
            'asc' => __('ASC', 'newspanda'),
            'desc' => __('DESC', 'newspanda'),
        ),
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_frontline_author_meta]',
    array(
        'default' => $newspanda_default['enable_frontline_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_frontline_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'newspanda'),
        'section' => 'home_page_frontline_options',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_frontline_author_meta]',
    array(
        'default' => $newspanda_default['select_frontline_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_frontline_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'newspanda'),
        'section' => 'home_page_frontline_options',
        'type' => 'select',
        'choices' => newspanda_author_meta(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[frontline_author_meta_title]',
    array(
        'default' => $newspanda_default['frontline_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[frontline_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'newspanda'),
        'section' => 'home_page_frontline_options',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_frontline_date_meta]',
    array(
        'default' => $newspanda_default['enable_frontline_date_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_frontline_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'newspanda'),
        'section' => 'home_page_frontline_options',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_frontline_date]',
    array(
        'default' => $newspanda_default['select_frontline_date'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_frontline_date]',
    array(
        'label' => esc_html__('Select Date Meta', 'newspanda'),
        'section' => 'home_page_frontline_options',
        'type' => 'select',
        'choices' => newspanda_date_meta(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_frontline_date_meta_title]',
    array(
        'default' => $newspanda_default['select_frontline_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_frontline_date_meta_title]',
    array(
        'label' => __('Date Meta Text', 'newspanda'),
        'section' => 'home_page_frontline_options',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_frontline_date_format]',
    array(
        'default' => $newspanda_default['select_frontline_date_format'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_frontline_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'newspanda'),
        'section' => 'home_page_frontline_options',
        'type' => 'select',
        'choices' => newspanda_get_date_formats(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_frontline_category_meta]',
    array(
        'default' => $newspanda_default['enable_frontline_category_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_frontline_category_meta]',
    array(
        'label' => esc_html__('Enable Category Meta', 'newspanda'),
        'section' => 'home_page_frontline_options',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_frontline_number_of_category]',
    array(
        'default' => $newspanda_default['select_frontline_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_frontline_number_of_category]',
    array(
        'label' => __('Number of Category', 'newspanda'),
        'section' => 'home_page_frontline_options',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'newspanda_options[frontline_category_label]',
    array(
        'default' => $newspanda_default['frontline_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[frontline_category_label]',
    array(
        'label' => __('Category Label', 'newspanda'),
        'section' => 'home_page_frontline_options',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_frontline_category_color]',
    array(
        'default' => $newspanda_default['select_frontline_category_color'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_frontline_category_color]',
    array(
        'label' => esc_html__('Select Category Color', 'newspanda'),
        'section' => 'home_page_frontline_options',
        'type' => 'select',
        'choices' => newspanda_category_color(),
    )
);
