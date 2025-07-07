<?php
// Tags Posts Options.
$wp_customize->add_section(
	'home_page_tags_options',
	array(
		'title' => __( 'Tags Options', 'newspanda' ),
		'panel' => 'header_options_panel',
	)
);

$wp_customize->add_setting(
    'newspanda_options[enable_tags]',
    array(
        'default'           => $newspanda_default['enable_tags'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_tags]',
    array(
		'label'    => __( 'Enable Tags Section', 'newspanda' ),
        'section'     => 'home_page_tags_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_tags_only_on_frontpage]',
    array(
        'default' => $newspanda_default['enable_tags_only_on_frontpage'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_tags_only_on_frontpage]',
    array(
        'label' => __('Display only on the Homepage', 'newspanda'),
        'section' => 'home_page_tags_options',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_tags_label]',
    array(
        'default'           => $newspanda_default['enable_tags_label'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);

$wp_customize->add_control(
    'newspanda_options[enable_tags_label]',
    array(
        'label'           => __( 'Enable Tags Label', 'newspanda' ),
        'section'     => 'home_page_tags_options',
        'type'        => 'checkbox',
    )
);

// Tags Label Style.
$wp_customize->add_setting(
    'newspanda_options[tags_label_style]',
    array(
        'default'           => $newspanda_default['tags_label_style'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[tags_label_style]',
    array(
        'label'           => __( 'Label Style', 'newspanda' ),
        'section'         => 'home_page_tags_options',
        'type'            => 'select',
        'choices'         => array(
            'style_1' => __( 'Plain', 'newspanda' ),
            'style_2' => __( 'With Icon', 'newspanda' ),
        ),
    )
);


// Tags Label Text.
$wp_customize->add_setting(
    'newspanda_options[tags_label_text]',
    array(
        'default'           => $newspanda_default['tags_label_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[tags_label_text]',
    array(
        'label'           => __( 'Tags Label Text', 'newspanda' ),
        'description'     => __( 'Leave empty if you want it blank', 'newspanda' ),
        'section'         => 'home_page_tags_options',
        'type'            => 'text',
    )
);

// No of posts.
$wp_customize->add_setting(
    'newspanda_options[no_of_tags]',
    array(
        'default'           => $newspanda_default['no_of_tags'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[no_of_tags]',
    array(
		'label'           => __( 'Number of Tags', 'newspanda' ),
		'section'         => 'home_page_tags_options',
		'type'            => 'number',
    )
);


// Posts Orderby.
$wp_customize->add_setting(
    'newspanda_options[tags_orderby]',
    array(
        'default'           => $newspanda_default['tags_orderby'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[tags_orderby]',
    array(
		'label'           => __( 'Orderby', 'newspanda' ),
		'section'         => 'home_page_tags_options',
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
    'newspanda_options[tags_order]',
    array(
        'default'           => $newspanda_default['tags_order'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[tags_order]',
    array(
		'label'           => __( 'Orderby', 'newspanda' ),
		'section'         => 'home_page_tags_options',
		'type'            => 'select',
		'choices'         => array(
			'asc'  => __( 'ASC', 'newspanda' ),
			'desc' => __( 'DESC', 'newspanda' ),
		),
    )
);


$wp_customize->add_setting(
    'newspanda_options[hide_tags_label_responsive]',
    array(
        'default'           => $newspanda_default['hide_tags_label_responsive'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[hide_tags_label_responsive]',
    array(
		'label'           => __( 'Hide Label on Responsive', 'newspanda' ),
        'section'     => 'home_page_tags_options',
        'type'        => 'checkbox',
    )
);