<?php
// Popular Posts Options.
$wp_customize->add_section(
    'home_page_popular_post_options',
    array(
        'title' => __('Popular Options', 'newspanda'),
        'panel' => 'header_options_panel',
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_popular_posts]',
    array(
        'default' => $newspanda_default['enable_popular_posts'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_popular_posts]',
    array(
        'label' => __('Enable Popular Section', 'newspanda'),
        'section' => 'home_page_popular_post_options',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_popular_only_on_frontpage]',
    array(
        'default' => $newspanda_default['enable_popular_only_on_frontpage'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_popular_only_on_frontpage]',
    array(
        'label' => __('Display only on the Homepage', 'newspanda'),
        'section' => 'home_page_popular_post_options',
        'type' => 'checkbox',
    )
);


$wp_customize->add_setting(
    'newspanda_options[enable_popular_label]',
    array(
        'default'           => $newspanda_default['enable_popular_label'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_popular_label]',
    array(
        'label'           => __( 'Enable Popular Label', 'newspanda' ),
        'section'     => 'home_page_popular_post_options',
        'type'        => 'checkbox',
    )
);

// Popular Label Text.
$wp_customize->add_setting(
    'newspanda_options[popular_label_text]',
    array(
        'default'           => $newspanda_default['popular_label_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[popular_label_text]',
    array(
        'label'           => __( 'Popular Label', 'newspanda' ),
        'description'     => __( 'Leave blank to use the default text "Latest".', 'newspanda' ),
        'section'         => 'home_page_popular_post_options',
        'type'            => 'text',
    )
);


// Popular Posts Category.
$wp_customize->add_setting(
    'newspanda_options[popular_post_cat]',
    array(
        'default' => $newspanda_default['popular_post_cat'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new NewsPanda_Dropdown_Taxonomies_Control(
        $wp_customize,
        'newspanda_options[popular_post_cat]',
        array(
            'label' => __('Choose Category', 'newspanda'),
            'section' => 'home_page_popular_post_options',
        )
    )
);
// No of posts.
$wp_customize->add_setting(
    'newspanda_options[no_of_popular_posts]',
    array(
        'default' => $newspanda_default['no_of_popular_posts'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[no_of_popular_posts]',
    array(
        'label' => __('Number of Posts', 'newspanda'),
        'section' => 'home_page_popular_post_options',
        'type' => 'number',
    )
);

// No of posts offset.
$wp_customize->add_setting(
    'newspanda_options[no_of_popular_posts_offsets]',
    array(
        'default' => $newspanda_default['no_of_popular_posts_offsets'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[no_of_popular_posts_offsets]',
    array(
        'label' => __('Post Offset Number', 'newspanda'),
        'section' => 'home_page_popular_post_options',
        'type' => 'number',
    )
);


// Posts Orderby.
$wp_customize->add_setting(
    'newspanda_options[popular_post_orderby]',
    array(
        'default' => $newspanda_default['popular_post_orderby'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[popular_post_orderby]',
    array(
        'label' => __('Orderby', 'newspanda'),
        'section' => 'home_page_popular_post_options',
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
    'newspanda_options[popular_post_order]',
    array(
        'default' => $newspanda_default['popular_post_order'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[popular_post_order]',
    array(
        'label' => __('Order', 'newspanda'),
        'section' => 'home_page_popular_post_options',
        'type' => 'select',
        'choices' => array(
            'asc' => __('ASC', 'newspanda'),
            'desc' => __('DESC', 'newspanda'),
        ),
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_popular_post_author_meta]',
    array(
        'default' => $newspanda_default['enable_popular_post_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_popular_post_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'newspanda'),
        'section' => 'home_page_popular_post_options',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_popular_post_author_meta]',
    array(
        'default' => $newspanda_default['select_popular_post_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_popular_post_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'newspanda'),
        'section' => 'home_page_popular_post_options',
        'type' => 'select',
        'choices' => newspanda_author_meta(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[popular_post_author_meta_title]',
    array(
        'default' => $newspanda_default['popular_post_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[popular_post_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'newspanda'),
        'section' => 'home_page_popular_post_options',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_popular_post_date_meta]',
    array(
        'default' => $newspanda_default['enable_popular_post_date_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_popular_post_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'newspanda'),
        'section' => 'home_page_popular_post_options',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_popular_post_date]',
    array(
        'default' => $newspanda_default['select_popular_post_date'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_popular_post_date]',
    array(
        'label' => esc_html__('Select Date Meta', 'newspanda'),
        'section' => 'home_page_popular_post_options',
        'type' => 'select',
        'choices' => newspanda_date_meta(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_popular_post_date_meta_title]',
    array(
        'default' => $newspanda_default['select_popular_post_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_popular_post_date_meta_title]',
    array(
        'label' => __('Date Meta Text', 'newspanda'),
        'section' => 'home_page_popular_post_options',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_popular_post_date_format]',
    array(
        'default' => $newspanda_default['select_popular_post_date_format'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_popular_post_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'newspanda'),
        'section' => 'home_page_popular_post_options',
        'type' => 'select',
        'choices' => newspanda_get_date_formats(),
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_popular_category_meta]',
    array(
        'default' => $newspanda_default['enable_popular_category_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_popular_category_meta]',
    array(
        'label' => esc_html__('Enable Category Meta', 'newspanda'),
        'section' => 'home_page_popular_post_options',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_popular_number_of_category]',
    array(
        'default' => $newspanda_default['select_popular_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_popular_number_of_category]',
    array(
        'label' => __('Number of Category', 'newspanda'),
        'section' => 'home_page_popular_post_options',
        'type' => 'number',
    )
);

$wp_customize->add_setting(
    'newspanda_options[popular_post_offset_number]',
    array(
        'default' => $newspanda_default['popular_post_offset_number'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[popular_post_offset_number]',
    array(
        'label' => __('Post Offset', 'newspanda'),
        'section' => 'home_page_popular_post_options',
        'type' => 'number',
    )
);

$wp_customize->add_setting(
    'newspanda_options[popular_category_label]',
    array(
        'default' => $newspanda_default['popular_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[popular_category_label]',
    array(
        'label' => __('Category Label', 'newspanda'),
        'section' => 'home_page_popular_post_options',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_popular_category_color]',
    array(
        'default' => $newspanda_default['select_popular_category_color'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_popular_category_color]',
    array(
        'label' => esc_html__('Select Category Color', 'newspanda'),
        'section' => 'home_page_popular_post_options',
        'type' => 'select',
        'choices' => newspanda_category_color(),
    )
);

// Enable  Autoplay.
$wp_customize->add_setting(
    'newspanda_options[enable_popular_post_autoplay]',
    array(
        'default' => $newspanda_default['enable_popular_post_autoplay'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_popular_post_autoplay]',
    array(
        'label' => __('Enable Autoplay', 'newspanda'),
        'section' => 'home_page_popular_post_options',
        'type' => 'checkbox',
        'active_callback' => 'newspanda_is_popular_post_enabled',
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_popular_post_arrows]',
    array(
        'default' => $newspanda_default['enable_popular_post_arrows'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_popular_post_arrows]',
    array(
        'label' => __('Enable Arrows', 'newspanda'),
        'section' => 'home_page_popular_post_options',
        'type' => 'checkbox',
        'active_callback' => 'newspanda_is_popular_post_enabled',
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_popular_post_dots]',
    array(
        'default' => $newspanda_default['enable_popular_post_dots'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_popular_post_dots]',
    array(
        'label' => __('Enable Dots', 'newspanda'),
        'section' => 'home_page_popular_post_options',
        'type' => 'checkbox',
        'active_callback' => 'newspanda_is_popular_post_enabled',
    )
);
