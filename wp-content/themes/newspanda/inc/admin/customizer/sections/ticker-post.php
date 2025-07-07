<?php
// Ticker Posts Options.
$wp_customize->add_section(
	'home_page_ticker_posts_options',
	array(
		'title' => __( 'News Ticker Options', 'newspanda' ),
		'panel' => 'header_options_panel',
	)
);

$wp_customize->add_setting(
    'newspanda_options[enable_ticker_posts]',
    array(
        'default'           => $newspanda_default['enable_ticker_posts'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_ticker_posts]',
    array(
		'label'    => __( 'Enable News Ticker Section', 'newspanda' ),
        'section'     => 'home_page_ticker_posts_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_ticker_only_on_frontpage]',
    array(
        'default' => $newspanda_default['enable_ticker_only_on_frontpage'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_ticker_only_on_frontpage]',
    array(
        'label' => __('Display only on the Homepage', 'newspanda'),
        'section' => 'home_page_ticker_posts_options',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_ticker_label]',
    array(
        'default'           => $newspanda_default['enable_ticker_label'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_ticker_label]',
    array(
        'label'           => __( 'Enable Ticker Label', 'newspanda' ),
        'section'     => 'home_page_ticker_posts_options',
        'type'        => 'checkbox',
    )
);

// Ticker Label Text.
$wp_customize->add_setting(
    'newspanda_options[ticker_label_text]',
    array(
        'default'           => $newspanda_default['ticker_label_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[ticker_label_text]',
    array(
        'label'           => __( 'Ticker Label', 'newspanda' ),
        'description'     => __( 'Leave blank to use the default text "Latest".', 'newspanda' ),
        'section'         => 'home_page_ticker_posts_options',
        'type'            => 'text',
    )
);

// Ticker Posts Category.
$wp_customize->add_setting(
	'newspanda_options[ticker_posts_cat]',
	array(
		'default'           => $newspanda_default['ticker_posts_cat'],
		'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	new NewsPanda_Dropdown_Taxonomies_Control(
		$wp_customize,
		'newspanda_options[ticker_posts_cat]',
		array(
			'label'           => __( 'Choose Category', 'newspanda' ),
			'section'         => 'home_page_ticker_posts_options',
		)
	)
);

// No of posts.
$wp_customize->add_setting(
	'newspanda_options[no_of_ticker_posts]',
	array(
		'default'           => $newspanda_default['no_of_ticker_posts'],
		'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	'newspanda_options[no_of_ticker_posts]',
	array(
		'label'           => __( 'Number of Posts', 'newspanda' ),
		'section'         => 'home_page_ticker_posts_options',
		'type'            => 'number',
	)
);

// No of posts offset.
$wp_customize->add_setting(
    'newspanda_options[ticker_posts_number_of_post_offsets]',
    array(
        'default' => $newspanda_default['ticker_posts_number_of_post_offsets'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[ticker_posts_number_of_post_offsets]',
    array(
        'label' => __('Post Offset Number', 'newspanda'),
        'section' => 'home_page_ticker_posts_options',
        'type' => 'number',
    )
);


// Posts Orderby.
$wp_customize->add_setting(
	'newspanda_options[ticker_posts_orderby]',
	array(
		'default'           => $newspanda_default['ticker_posts_orderby'],
		'sanitize_callback' => 'newspanda_sanitize_select',
	)
);
$wp_customize->add_control(
	'newspanda_options[ticker_posts_orderby]',
	array(
		'label'           => __( 'Orderby', 'newspanda' ),
		'section'         => 'home_page_ticker_posts_options',
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
	'newspanda_options[ticker_posts_order]',
	array(
		'default'           => $newspanda_default['ticker_posts_order'],
		'sanitize_callback' => 'newspanda_sanitize_select',
	)
);
$wp_customize->add_control(
	'newspanda_options[ticker_posts_order]',
	array(
		'label'           => __( 'Order', 'newspanda' ),
		'section'         => 'home_page_ticker_posts_options',
		'type'            => 'select',
		'choices'         => array(
			'asc'  => __( 'ASC', 'newspanda' ),
			'desc' => __( 'DESC', 'newspanda' ),
		),
	)
);


$wp_customize->add_setting(
    'newspanda_options[enable_ticker_posts_author_meta]',
    array(
        'default'           => $newspanda_default['enable_ticker_posts_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_ticker_posts_author_meta]',
    array(
        'label'       => esc_html__( 'Display Author Meta', 'newspanda' ),
        'section'     => 'home_page_ticker_posts_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_ticker_posts_author_meta]',
    array(
        'default'           => $newspanda_default['select_ticker_posts_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_ticker_posts_author_meta]',
    array(
        'label'         => esc_html__( 'Select Author Meta', 'newspanda' ),
        'section'     => 'home_page_ticker_posts_options',
        'type'        => 'select',
        'choices'       => newspanda_author_meta(),


    )
);

$wp_customize->add_setting(
    'newspanda_options[ticker_posts_author_meta_title]',
    array(
        'default'           => $newspanda_default['ticker_posts_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[ticker_posts_author_meta_title]',
    array(
        'label'    => __( 'Author Meta Text', 'newspanda' ),
        'section'  => 'home_page_ticker_posts_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_ticker_posts_date_meta]',
    array(
        'default'           => $newspanda_default['enable_ticker_posts_date_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_ticker_posts_date_meta]',
    array(
        'label'       => esc_html__( 'Display Published Date', 'newspanda' ),
        'section'     => 'home_page_ticker_posts_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_ticker_posts_date]',
    array(
        'default'           => $newspanda_default['select_ticker_posts_date'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_ticker_posts_date]',
    array(
        'label'         => esc_html__( 'Select Date Meta', 'newspanda' ),
        'section'     => 'home_page_ticker_posts_options',
        'type'        => 'select',
        'choices'       => newspanda_date_meta(),

    )
);

$wp_customize->add_setting(
    'newspanda_options[single_ticker_post_date_meta_title]',
    array(
        'default'           => $newspanda_default['single_ticker_post_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[single_ticker_post_date_meta_title]',
    array(
        'label'    => __( 'Date Meta Text', 'newspanda' ),
        'section'  => 'home_page_ticker_posts_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_ticker_posts_date_format]',
    array(
        'default'           => $newspanda_default['select_ticker_posts_date_format'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_ticker_posts_date_format]',
    array(
        'label'         => esc_html__( 'Select Date Format', 'newspanda' ),
        'section'     => 'home_page_ticker_posts_options',
        'type'        => 'select',
        'choices'       => newspanda_get_date_formats(),
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_ticker_posts_category_meta]',
    array(
        'default'           => $newspanda_default['enable_ticker_posts_category_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_ticker_posts_category_meta]',
    array(
        'label'       => esc_html__( 'Enable Category Meta', 'newspanda' ),
        'section'     => 'home_page_ticker_posts_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_ticker_posts_number_of_category]',
    array(
        'default'           => $newspanda_default['select_ticker_posts_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_ticker_posts_number_of_category]',
    array(
        'label'       => __( 'Number of Category', 'newspanda' ),
        'section'     => 'home_page_ticker_posts_options',
        'type'        => 'number',
    )
);

$wp_customize->add_setting(
    'newspanda_options[ticker_posts_category_label]',
    array(
        'default'           => $newspanda_default['ticker_posts_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[ticker_posts_category_label]',
    array(
        'label'       => esc_html__( 'Category Label', 'newspanda' ),
        'section'  => 'home_page_ticker_posts_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_ticker_posts_category_color]',
    array(
        'default'           => $newspanda_default['select_ticker_posts_category_color'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_ticker_posts_category_color]',
    array(
        'label'         => esc_html__( 'Select Category Color', 'newspanda' ),
        'section'     => 'home_page_ticker_posts_options',
        'type'        => 'select',
        'choices'       => newspanda_category_color(),

    )
);