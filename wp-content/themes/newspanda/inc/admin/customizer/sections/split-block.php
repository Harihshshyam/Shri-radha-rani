<?php
/**
 * All settings related to footer recommended post.
 *
 * @package NewsPanda
 */
$wp_customize->add_section(
	'split_block',
	array(
		'title' => esc_html__( 'Split Block Section', 'newspanda' ),
		'panel' => 'front_page_theme_options_panel',
	)
);

$wp_customize->add_setting(
    'newspanda_options[enable_split_block]',
    array(
        'default'           => $newspanda_default['enable_split_block'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_split_block]',
    array(
        'label'       => esc_html__( 'Enable Split Block', 'newspanda' ),
        'section'     => 'split_block',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
  'newspanda_options[split_block_title]',
  array(
      'default' => $newspanda_default['split_block_title'],
      'sanitize_callback' => 'sanitize_text_field',
  )
);
$wp_customize->add_control(
  'newspanda_options[split_block_title]',
  array(
      'label' => __('Section Title', 'newspanda'),
      'section' => 'split_block',
      'type' => 'text',
  )
);

$wp_customize->add_setting(
    'newspanda_options[split_block_category]',
    array(
        'default'           => $newspanda_default['split_block_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new NewsPanda_Dropdown_Taxonomies_Control(
        $wp_customize,
        'newspanda_options[split_block_category]',
        array(
            'label'           => __( 'Choose Category', 'newspanda' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'newspanda' ),
            'section'         => 'split_block',
        )
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_split_block_author_meta]',
    array(
        'default' => $newspanda_default['enable_split_block_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_split_block_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'newspanda'),
        'section' => 'split_block',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_split_block_author_meta]',
    array(
        'default' => $newspanda_default['select_split_block_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_split_block_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'newspanda'),
        'section' => 'split_block',
        'type' => 'select',
        'choices' => newspanda_author_meta(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[split_block_author_meta_title]',
    array(
        'default' => $newspanda_default['split_block_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[split_block_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'newspanda'),
        'section' => 'split_block',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_split_block_date_meta]',
    array(
        'default' => $newspanda_default['enable_split_block_date_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_split_block_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'newspanda'),
        'section' => 'split_block',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_split_block_date]',
    array(
        'default' => $newspanda_default['select_split_block_date'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_split_block_date]',
    array(
        'label' => esc_html__('Select Date Meta', 'newspanda'),
        'section' => 'split_block',
        'type' => 'select',
        'choices' => newspanda_date_meta(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_split_block_date_meta_title]',
    array(
        'default' => $newspanda_default['select_split_block_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_split_block_date_meta_title]',
    array(
        'label' => __('Date Meta Text', 'newspanda'),
        'section' => 'split_block',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_split_block_date_format]',
    array(
        'default' => $newspanda_default['select_split_block_date_format'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_split_block_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'newspanda'),
        'section' => 'split_block',
        'type' => 'select',
        'choices' => newspanda_get_date_formats(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_split_block_category_meta]',
    array(
        'default' => $newspanda_default['enable_split_block_category_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_split_block_category_meta]',
    array(
        'label' => esc_html__('Enable Category Meta', 'newspanda'),
        'section' => 'split_block',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_split_block_number_of_category]',
    array(
        'default' => $newspanda_default['select_split_block_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_split_block_number_of_category]',
    array(
        'label' => __('Number of Category', 'newspanda'),
        'section' => 'split_block',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'newspanda_options[split_block_category_label]',
    array(
        'default' => $newspanda_default['split_block_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[split_block_category_label]',
    array(
        'label' => __('Category Label', 'newspanda'),
        'section' => 'split_block',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_split_block_category_color]',
    array(
        'default' => $newspanda_default['select_split_block_category_color'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_split_block_category_color]',
    array(
        'label' => esc_html__('Select Category Color', 'newspanda'),
        'section' => 'split_block',
        'type' => 'select',
        'choices' => newspanda_category_color(),
    )
);