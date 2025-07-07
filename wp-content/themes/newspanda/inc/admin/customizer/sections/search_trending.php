<?php
$wp_customize->add_section(
   'search_latest_post_options' ,
    array(
        'title' => __( 'Within Search Modal', 'newspanda' ),
        'panel' => 'header_options_panel',
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_search_latest_posts]',
    array(
        'default'           => $newspanda_default['enable_search_latest_posts'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_search_latest_posts]',
    array(
		'label'    => __( 'Enable Trending', 'newspanda' ),
        'section'     => 'search_latest_post_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_search_latest_label]',
    array(
        'default'           => $newspanda_default['enable_search_latest_label'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_search_latest_label]',
    array(
		'label'           => __( 'Enable Trending Label', 'newspanda' ),
        'section'     => 'search_latest_post_options',
        'type'        => 'checkbox',
    )
);

// Trending Label Text.
$wp_customize->add_setting(
    'newspanda_options[search_latest_label_text]',
    array(
        'default'           => $newspanda_default['search_latest_label_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[search_latest_label_text]',
    array(
        'label'           => __( 'Trending Label Text', 'newspanda' ),
        'section'         => 'search_latest_post_options',
        'type'            => 'text',
    )
);

// Trending Posts Category.
$wp_customize->add_setting(
	'newspanda_options[search_latest_posts_cat]',
	array(
		'default'           => $newspanda_default['search_latest_posts_cat'],
		'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	new NewsPanda_Dropdown_Taxonomies_Control(
		$wp_customize,
		'newspanda_options[search_latest_posts_cat]',
		array(
			'label'           => __( 'Choose Trending posts category', 'newspanda' ),
			'section'         => 'search_latest_post_options',
		)
	)
);

// No of posts.
$wp_customize->add_setting(
	'newspanda_options[no_of_search_latest_posts]',
	array(
		'default'           => $newspanda_default['no_of_search_latest_posts'],
		'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	'newspanda_options[no_of_search_latest_posts]',
	array(
		'label'           => __( 'Number of Posts', 'newspanda' ),
		'section'         => 'search_latest_post_options',
		'type'            => 'number',
	)
);


// No of posts offset.
$wp_customize->add_setting(
    'newspanda_options[search_latest_posts_offsets]',
    array(
        'default' => $newspanda_default['search_latest_posts_offsets'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[search_latest_posts_offsets]',
    array(
        'label' => __('Post Offset Number', 'newspanda'),
        'section' => 'search_latest_post_options',
        'type' => 'number',
    )
);


// Posts Orderby.
$wp_customize->add_setting(
	'newspanda_options[search_latest_posts_orderby]',
	array(
		'default'           => $newspanda_default['search_latest_posts_orderby'],
		'sanitize_callback' => 'newspanda_sanitize_select',
	)
);
$wp_customize->add_control(
	'newspanda_options[search_latest_posts_orderby]',
	array(
		'label'           => __( 'Orderby', 'newspanda' ),
		'section'         => 'search_latest_post_options',
		'type'            => 'select',
		'choices'         => array(
			'date'  => __( 'Date', 'newspanda' ),
			'id'    => __( 'ID', 'newspanda' ),
			'title' => __( 'Title', 'newspanda' ),
			'rand'  => __( 'Random', 'newspanda' ),
		),
	)
);

// Posts Order.
$wp_customize->add_setting(
	'newspanda_options[search_latest_posts_order]',
	array(
		'default'           => $newspanda_default['search_latest_posts_order'],
		'sanitize_callback' => 'newspanda_sanitize_select',
	)
);
$wp_customize->add_control(
	'newspanda_options[search_latest_posts_order]',
	array(
		'label'           => __( 'Order', 'newspanda' ),
		'section'         => 'search_latest_post_options',
		'type'            => 'select',
		'choices'         => array(
			'asc'  => __( 'ASC', 'newspanda' ),
			'desc' => __( 'DESC', 'newspanda' ),
		),
	)
);


$wp_customize->add_setting(
    'newspanda_options[enable_search_latest_posts_author_meta]',
    array(
        'default'           => $newspanda_default['enable_search_latest_posts_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_search_latest_posts_author_meta]',
    array(
        'label'       => esc_html__( 'Display Author Meta', 'newspanda' ),
        'section'     => 'search_latest_post_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_search_latest_posts_author_meta]',
    array(
        'default'           => $newspanda_default['select_search_latest_posts_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_search_latest_posts_author_meta]',
    array(
        'label'         => esc_html__( 'Select Author Meta', 'newspanda' ),
        'section'     => 'search_latest_post_options',
        'type'        => 'select',
        'choices'       => newspanda_author_meta(),


    )
);

$wp_customize->add_setting(
    'newspanda_options[search_latest_posts_author_meta_title]',
    array(
        'default'           => $newspanda_default['search_latest_posts_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[search_latest_posts_author_meta_title]',
    array(
        'label'    => __( 'Author Meta Text', 'newspanda' ),
        'section'  => 'search_latest_post_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_search_latest_posts_date_meta]',
    array(
        'default'           => $newspanda_default['enable_search_latest_posts_date_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_search_latest_posts_date_meta]',
    array(
        'label'       => esc_html__( 'Display Published Date', 'newspanda' ),
        'section'     => 'search_latest_post_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_search_latest_posts_date]',
    array(
        'default'           => $newspanda_default['select_search_latest_posts_date'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_search_latest_posts_date]',
    array(
        'label'         => esc_html__( 'Select Date Meta', 'newspanda' ),
        'section'     => 'search_latest_post_options',
        'type'        => 'select',
        'choices'       => newspanda_date_meta(),

    )
);

$wp_customize->add_setting(
    'newspanda_options[single_search_latest_post_date_meta_title]',
    array(
        'default'           => $newspanda_default['single_search_latest_post_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[single_search_latest_post_date_meta_title]',
    array(
        'label'    => __( 'Date Meta Text', 'newspanda' ),
        'section'  => 'search_latest_post_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_search_latest_posts_date_format]',
    array(
        'default'           => $newspanda_default['select_search_latest_posts_date_format'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_search_latest_posts_date_format]',
    array(
        'label'         => esc_html__( 'Select Date Format', 'newspanda' ),
        'section'     => 'search_latest_post_options',
        'type'        => 'select',
        'choices'       => newspanda_get_date_formats(),
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_search_latest_posts_category_meta]',
    array(
        'default'           => $newspanda_default['enable_search_latest_posts_category_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_search_latest_posts_category_meta]',
    array(
        'label'       => esc_html__( 'Enable Category Meta', 'newspanda' ),
        'section'     => 'search_latest_post_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_search_latest_posts_number_of_category]',
    array(
        'default'           => $newspanda_default['select_search_latest_posts_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_search_latest_posts_number_of_category]',
    array(
        'label'       => __( 'Number of Category', 'newspanda' ),
        'section'     => 'search_latest_post_options',
        'type'        => 'number',
    )
);

$wp_customize->add_setting(
    'newspanda_options[search_latest_posts_category_label]',
    array(
        'default'           => $newspanda_default['search_latest_posts_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[search_latest_posts_category_label]',
    array(
        'label'       => esc_html__( 'Category Label', 'newspanda' ),
        'section'  => 'search_latest_post_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_search_latest_posts_category_color]',
    array(
        'default'           => $newspanda_default['select_search_latest_posts_category_color'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_search_latest_posts_category_color]',
    array(
        'label'         => esc_html__( 'Select Category Color', 'newspanda' ),
        'section'     => 'search_latest_post_options',
        'type'        => 'select',
        'choices'       => newspanda_category_color(),

    )
);