<?php
$wp_customize->add_section(
    'single_related_options',
    array(
        'title' => esc_html__( 'Single Related Options', 'newspanda' ),
        'panel' => 'single_options_panel',
    )
);
/*Show Related Posts
*-------------------------------*/
$wp_customize->add_setting(
    'newspanda_options[show_related_posts]',
    array(
        'default'           => $newspanda_default['show_related_posts'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[show_related_posts]',
    array(
        'label'    => __( 'Show Related Posts', 'newspanda' ),
        'section'  => 'single_related_options',
        'type'     => 'checkbox',
    )
);

/*Related Posts Text.*/
$wp_customize->add_setting(
    'newspanda_options[related_posts_text]',
    array(
        'default'           => $newspanda_default['related_posts_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[related_posts_text]',
    array(
        'label'    => __( 'Related Posts Text', 'newspanda' ),
        'section'  => 'single_related_options',
        'type'     => 'text',
    )
);

/* Number of Related Posts */
$wp_customize->add_setting(
    'newspanda_options[no_of_related_posts]',
    array(
        'default'           => $newspanda_default['no_of_related_posts'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[no_of_related_posts]',
    array(
        'label'       => __( 'Number of Related Posts', 'newspanda' ),
        'section'     => 'single_related_options',
        'type'        => 'number',
    )
);

// No of posts offset.
$wp_customize->add_setting(
    'newspanda_options[related_posts_number_of_post_offsets]',
    array(
        'default' => $newspanda_default['related_posts_number_of_post_offsets'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[related_posts_number_of_post_offsets]',
    array(
        'label' => __('Post Offset Number', 'newspanda'),
        'section' => 'single_related_options',
        'type' => 'number',
    )
);


/*Related Posts Orderby*/
$wp_customize->add_setting(
    'newspanda_options[related_posts_orderby]',
    array(
        'default'           => $newspanda_default['related_posts_orderby'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[related_posts_orderby]',
    array(
        'label'       => __( 'Orderby', 'newspanda' ),
        'section'     => 'single_related_options',
        'type'        => 'select',
        'choices' => array(
            'date' => __('Date', 'newspanda'),
            'id' => __('ID', 'newspanda'),
            'title' => __('Title', 'newspanda'),
            'rand' => __('Random', 'newspanda'),
        ),
    )
);

/*Related Posts Order*/
$wp_customize->add_setting(
    'newspanda_options[related_posts_order]',
    array(
        'default'           => $newspanda_default['related_posts_order'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[related_posts_order]',
    array(
        'label'       => __( 'Order', 'newspanda' ),
        'section'     => 'single_related_options',
        'type'        => 'select',
        'choices' => array(
            'asc' => __('ASC', 'newspanda'),
            'desc' => __('DESC', 'newspanda'),
        ),
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_related_posts_author_meta]',
    array(
        'default'           => $newspanda_default['enable_related_posts_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_related_posts_author_meta]',
    array(
        'label'       => esc_html__( 'Show Author Meta', 'newspanda' ),
        'section'     => 'single_related_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_related_posts_author_meta]',
    array(
        'default'           => $newspanda_default['select_related_posts_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_related_posts_author_meta]',
    array(
        'label'         => esc_html__( 'Author Meta Display Options', 'newspanda' ),
        'section'     => 'single_related_options',
        'type'        => 'select',
        'choices'       => newspanda_author_meta(),


    )
);

$wp_customize->add_setting(
    'newspanda_options[related_posts_author_meta_title]',
    array(
        'default'           => $newspanda_default['related_posts_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[related_posts_author_meta_title]',
    array(
        'label'    => __( 'Author Meta Text', 'newspanda' ),
        'section'  => 'single_related_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_related_posts_date_meta]',
    array(
        'default'           => $newspanda_default['enable_related_posts_date_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_related_posts_date_meta]',
    array(
        'label'       => esc_html__( 'Display Published Date', 'newspanda' ),
        'section'     => 'single_related_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_related_posts_date]',
    array(
        'default'           => $newspanda_default['select_related_posts_date'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_related_posts_date]',
    array(
        'label'         => esc_html__( 'Select Date Meta', 'newspanda' ),
        'section'     => 'single_related_options',
        'type'        => 'select',
        'choices'       => newspanda_date_meta(),

    )
);

$wp_customize->add_setting(
    'newspanda_options[single_related_post_date_meta_title]',
    array(
        'default'           => $newspanda_default['single_related_post_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[single_related_post_date_meta_title]',
    array(
        'label'    => __( 'Date Meta Text', 'newspanda' ),
        'section'  => 'single_related_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_related_posts_date_format]',
    array(
        'default'           => $newspanda_default['select_related_posts_date_format'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_related_posts_date_format]',
    array(
        'label'         => esc_html__( 'Select Date Format', 'newspanda' ),
        'section'     => 'single_related_options',
        'type'        => 'select',
        'choices'       => newspanda_get_date_formats(),
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_related_posts_category_meta]',
    array(
        'default'           => $newspanda_default['enable_related_posts_category_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_related_posts_category_meta]',
    array(
        'label'       => esc_html__( 'Enable Category Meta', 'newspanda' ),
        'section'     => 'single_related_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_related_posts_number_of_category]',
    array(
        'default'           => $newspanda_default['select_related_posts_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_related_posts_number_of_category]',
    array(
        'label'       => __( 'Number of Category', 'newspanda' ),
        'section'     => 'single_related_options',
        'type'        => 'number',
    )
);

$wp_customize->add_setting(
    'newspanda_options[related_posts_category_label]',
    array(
        'default'           => $newspanda_default['related_posts_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[related_posts_category_label]',
    array(
        'label'    => __( 'Category Label', 'newspanda' ),
        'section'  => 'single_related_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_related_posts_category_color]',
    array(
        'default'           => $newspanda_default['select_related_posts_category_color'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_related_posts_category_color]',
    array(
        'label'         => esc_html__( 'Select Category Color', 'newspanda' ),
        'section'     => 'single_related_options',
        'type'        => 'select',
        'choices'       => newspanda_category_color(),

    )
);