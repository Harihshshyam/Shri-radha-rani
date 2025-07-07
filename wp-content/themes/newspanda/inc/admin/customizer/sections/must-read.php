<?php
// Must Read Posts Options.
$wp_customize->add_section(
    'home_page_must_read_options',
    array(
        'title' => __('Must Read Section', 'newspanda'),
        'panel' => 'front_page_theme_options_panel',
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_must_reads]',
    array(
        'default' => $newspanda_default['enable_must_reads'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_must_reads]',
    array(
        'label' => __('Enable Must Read', 'newspanda'),
        'section' => 'home_page_must_read_options',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[must_read_title]',
    array(
        'default'           => $newspanda_default['must_read_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[must_read_title]',
    array(
        'label'    => __( 'Section Title', 'newspanda' ),
        'section'  => 'home_page_must_read_options',
        'type'     => 'text',
    )
);
// Must Read Posts Category.
$wp_customize->add_setting(
    'newspanda_options[must_read_cat]',
    array(
        'default' => $newspanda_default['must_read_cat'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new NewsPanda_Dropdown_Taxonomies_Control(
        $wp_customize,
        'newspanda_options[must_read_cat]',
        array(
            'label' => __('Choose Must Read category', 'newspanda'),
            'section' => 'home_page_must_read_options',
        )
    )
);
// No of posts.
$wp_customize->add_setting(
    'newspanda_options[no_of_must_reads]',
    array(
        'default' => $newspanda_default['no_of_must_reads'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[no_of_must_reads]',
    array(
        'label' => __('Number of Posts', 'newspanda'),
        'section' => 'home_page_must_read_options',
        'type' => 'number',
    )
);

// No of posts offset.
$wp_customize->add_setting(
    'newspanda_options[must_reads_number_of_post_offsets]',
    array(
        'default' => $newspanda_default['must_reads_number_of_post_offsets'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[must_reads_number_of_post_offsets]',
    array(
        'label' => __('Post Offset Number', 'newspanda'),
        'section' => 'home_page_must_read_options',
        'type' => 'number',
    )
);

// Posts Orderby.
$wp_customize->add_setting(
    'newspanda_options[must_read_orderby]',
    array(
        'default' => $newspanda_default['must_read_orderby'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[must_read_orderby]',
    array(
        'label' => __('Orderby', 'newspanda'),
        'section' => 'home_page_must_read_options',
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
    'newspanda_options[must_read_order]',
    array(
        'default' => $newspanda_default['must_read_order'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[must_read_order]',
    array(
        'label' => __('Order', 'newspanda'),
        'section' => 'home_page_must_read_options',
        'type' => 'select',
        'choices' => array(
            'asc' => __('ASC', 'newspanda'),
            'desc' => __('DESC', 'newspanda'),
        ),
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_must_read_author_meta]',
    array(
        'default' => $newspanda_default['enable_must_read_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_must_read_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'newspanda'),
        'section' => 'home_page_must_read_options',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_must_read_author_meta]',
    array(
        'default' => $newspanda_default['select_must_read_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_must_read_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'newspanda'),
        'section' => 'home_page_must_read_options',
        'type' => 'select',
        'choices' => newspanda_author_meta(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[must_read_author_meta_title]',
    array(
        'default' => $newspanda_default['must_read_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[must_read_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'newspanda'),
        'section' => 'home_page_must_read_options',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_must_read_date_meta]',
    array(
        'default' => $newspanda_default['enable_must_read_date_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_must_read_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'newspanda'),
        'section' => 'home_page_must_read_options',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_must_read_date]',
    array(
        'default' => $newspanda_default['select_must_read_date'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_must_read_date]',
    array(
        'label' => esc_html__('Select Date Meta', 'newspanda'),
        'section' => 'home_page_must_read_options',
        'type' => 'select',
        'choices' => newspanda_date_meta(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_must_read_date_meta_title]',
    array(
        'default' => $newspanda_default['select_must_read_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_must_read_date_meta_title]',
    array(
        'label' => __('Date Meta Text', 'newspanda'),
        'section' => 'home_page_must_read_options',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_must_read_date_format]',
    array(
        'default' => $newspanda_default['select_must_read_date_format'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_must_read_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'newspanda'),
        'section' => 'home_page_must_read_options',
        'type' => 'select',
        'choices' => newspanda_get_date_formats(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_must_read_category_meta]',
    array(
        'default' => $newspanda_default['enable_must_read_category_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_must_read_category_meta]',
    array(
        'label' => esc_html__('Enable Category Meta', 'newspanda'),
        'section' => 'home_page_must_read_options',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_must_read_number_of_category]',
    array(
        'default' => $newspanda_default['select_must_read_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_must_read_number_of_category]',
    array(
        'label' => __('Number of Category', 'newspanda'),
        'section' => 'home_page_must_read_options',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'newspanda_options[must_read_category_label]',
    array(
        'default' => $newspanda_default['must_read_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[must_read_category_label]',
    array(
        'label' => __('Category Label', 'newspanda'),
        'section' => 'home_page_must_read_options',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_must_read_category_color]',
    array(
        'default' => $newspanda_default['select_must_read_category_color'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_must_read_category_color]',
    array(
        'label' => esc_html__('Select Category Color', 'newspanda'),
        'section' => 'home_page_must_read_options',
        'type' => 'select',
        'choices' => newspanda_category_color(),
    )
);
