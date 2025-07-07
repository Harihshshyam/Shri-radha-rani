<?php
/**
 * All settings related to footer recommended post.
 *
 * @package NewsPanda
 */
$wp_customize->add_section(
	'grid_list',
	array(
		'title' => esc_html__( 'Grid List Section', 'newspanda' ),
		'panel' => 'front_page_theme_options_panel',
	)
);

$wp_customize->add_setting(
    'newspanda_options[enable_grid_list]',
    array(
        'default'           => $newspanda_default['enable_grid_list'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_grid_list]',
    array(
        'label'       => esc_html__( 'Enable Grid List', 'newspanda' ),
        'section'     => 'grid_list',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[grid_list_title]',
    array(
        'default' => $newspanda_default['grid_list_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[grid_list_title]',
    array(
        'label' => __('Section Title', 'newspanda'),
        'section' => 'grid_list',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_section_seperator_grid_list_1',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new NewsPanda_Seperator_Control(
        $wp_customize,
        'newspanda_section_seperator_grid_list_1',
        array(
            'label'         => esc_html__( 'Grid List Column - 1', 'newspanda' ),
            'settings' => 'newspanda_section_seperator_grid_list_1',
            'section' => 'grid_list',
        )
    )
);

$wp_customize->add_setting(
    'newspanda_options[grid_list_category_1]',
    array(
        'default'           => $newspanda_default['grid_list_category_1'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new NewsPanda_Dropdown_Taxonomies_Control(
        $wp_customize,
        'newspanda_options[grid_list_category_1]',
        array(
            'label'           => __( 'Choose Column - 1 Category', 'newspanda' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'newspanda' ),
            'section'         => 'grid_list',
        )
    )
);

$wp_customize->add_setting(
    'newspanda_section_seperator_grid_list_2',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new NewsPanda_Seperator_Control(
        $wp_customize,
        'newspanda_section_seperator_grid_list_2',
        array(
            'label'         => esc_html__( 'Grid List Column - 2', 'newspanda' ),
            'settings' => 'newspanda_section_seperator_grid_list_2',
            'section' => 'grid_list',
        )
    )
);

$wp_customize->add_setting(
  'newspanda_options[grid_list_inner_title]',
  array(
      'default' => $newspanda_default['grid_list_inner_title'],
      'sanitize_callback' => 'sanitize_text_field',
  )
);
$wp_customize->add_control(
  'newspanda_options[grid_list_inner_title]',
  array(
      'label' => __('Inner Column Title', 'newspanda'),
      'section' => 'grid_list',
      'type' => 'text',
  )
);

$wp_customize->add_setting(
    'newspanda_options[grid_list_category_2]',
    array(
        'default'           => $newspanda_default['grid_list_category_2'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new NewsPanda_Dropdown_Taxonomies_Control(
        $wp_customize,
        'newspanda_options[grid_list_category_2]',
        array(
            'label'           => __( 'Choose Column - 2 Category', 'newspanda' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'newspanda' ),
            'section'         => 'grid_list',
        )
    )
);

$wp_customize->add_setting(
  'newspanda_options[grid_list_more_category_text]',
  array(
      'default' => $newspanda_default['grid_list_more_category_text'],
      'sanitize_callback' => 'sanitize_text_field',
  )
);
$wp_customize->add_control(
  'newspanda_options[grid_list_more_category_text]',
  array(
      'label' => __('Redirect to Category Page Text', 'newspanda'),
      'section' => 'grid_list',
      'type' => 'text',
  )
);

$wp_customize->add_setting(
    'newspanda_section_seperator_grid_list_meta',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new NewsPanda_Seperator_Control(
        $wp_customize,
        'newspanda_section_seperator_grid_list_meta',
        array(
            'label'         => esc_html__( 'Grid List Meta Option', 'newspanda' ),
            'settings' => 'newspanda_section_seperator_grid_list_meta',
            'section' => 'grid_list',
        )
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_grid_list_author_meta]',
    array(
        'default' => $newspanda_default['enable_grid_list_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_grid_list_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'newspanda'),
        'section' => 'grid_list',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_grid_list_author_meta]',
    array(
        'default' => $newspanda_default['select_grid_list_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_grid_list_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'newspanda'),
        'section' => 'grid_list',
        'type' => 'select',
        'choices' => newspanda_author_meta(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[grid_list_author_meta_title]',
    array(
        'default' => $newspanda_default['grid_list_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[grid_list_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'newspanda'),
        'section' => 'grid_list',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_grid_list_date_meta]',
    array(
        'default' => $newspanda_default['enable_grid_list_date_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_grid_list_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'newspanda'),
        'section' => 'grid_list',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_grid_list_date]',
    array(
        'default' => $newspanda_default['select_grid_list_date'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_grid_list_date]',
    array(
        'label' => esc_html__('Select Date Meta', 'newspanda'),
        'section' => 'grid_list',
        'type' => 'select',
        'choices' => newspanda_date_meta(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_grid_list_date_meta_title]',
    array(
        'default' => $newspanda_default['select_grid_list_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_grid_list_date_meta_title]',
    array(
        'label' => __('Date Meta Text', 'newspanda'),
        'section' => 'grid_list',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_grid_list_date_format]',
    array(
        'default' => $newspanda_default['select_grid_list_date_format'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_grid_list_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'newspanda'),
        'section' => 'grid_list',
        'type' => 'select',
        'choices' => newspanda_get_date_formats(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_grid_list_category_meta]',
    array(
        'default' => $newspanda_default['enable_grid_list_category_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_grid_list_category_meta]',
    array(
        'label' => esc_html__('Enable Category Meta', 'newspanda'),
        'section' => 'grid_list',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_grid_list_number_of_category]',
    array(
        'default' => $newspanda_default['select_grid_list_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_grid_list_number_of_category]',
    array(
        'label' => __('Number of Category', 'newspanda'),
        'section' => 'grid_list',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'newspanda_options[grid_list_category_label]',
    array(
        'default' => $newspanda_default['grid_list_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[grid_list_category_label]',
    array(
        'label' => __('Category Label', 'newspanda'),
        'section' => 'grid_list',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_grid_list_category_color]',
    array(
        'default' => $newspanda_default['select_grid_list_category_color'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_grid_list_category_color]',
    array(
        'label' => esc_html__('Select Category Color', 'newspanda'),
        'section' => 'grid_list',
        'type' => 'select',
        'choices' => newspanda_category_color(),
    )
);
