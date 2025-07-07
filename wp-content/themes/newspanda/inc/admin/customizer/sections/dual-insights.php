<?php
/**
 * All settings related to footer recommended post.
 *
 * @package NewsPanda
 */
$wp_customize->add_section(
	'dual_insights',
	array(
		'title' => esc_html__( 'Dual Insights Section', 'newspanda' ),
		'panel' => 'front_page_theme_options_panel',
	)
);

$wp_customize->add_setting(
    'newspanda_options[enable_dual_insights]',
    array(
        'default'           => $newspanda_default['enable_dual_insights'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_dual_insights]',
    array(
        'label'       => esc_html__( 'Enable Dual Insights', 'newspanda' ),
        'section'     => 'dual_insights',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
  'newspanda_options[dual_insights_title]',
  array(
      'default' => $newspanda_default['dual_insights_title'],
      'sanitize_callback' => 'sanitize_text_field',
  )
);
$wp_customize->add_control(
  'newspanda_options[dual_insights_title]',
  array(
      'label' => __('Section Title', 'newspanda'),
      'section' => 'dual_insights',
      'type' => 'text',
  )
);

$wp_customize->add_setting(
    'newspanda_section_seperator_dual_insights_1',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new NewsPanda_Seperator_Control(
        $wp_customize,
        'newspanda_section_seperator_dual_insights_1',
        array(
            'label'         => esc_html__( 'Dual Insights Column - 1', 'newspanda' ),
            'settings' => 'newspanda_section_seperator_dual_insights_1',
            'section' => 'dual_insights',
        )
    )
);

$wp_customize->add_setting(
    'newspanda_options[main_insights_category]',
    array(
        'default'           => $newspanda_default['main_insights_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new NewsPanda_Dropdown_Taxonomies_Control(
        $wp_customize,
        'newspanda_options[main_insights_category]',
        array(
            'label'           => __( 'Choose Column - 1 Category', 'newspanda' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'newspanda' ),
            'section'         => 'dual_insights',
        )
    )
);

$wp_customize->add_setting(
    'newspanda_section_seperator_dual_insights_2',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new NewsPanda_Seperator_Control(
        $wp_customize,
        'newspanda_section_seperator_dual_insights_2',
        array(
            'label'         => esc_html__( 'Dual Insights Column - 2', 'newspanda' ),
            'settings' => 'newspanda_section_seperator_dual_insights_2',
            'section' => 'dual_insights',
        )
    )
);

$wp_customize->add_setting(
  'newspanda_options[dual_inner_column_title]',
  array(
      'default' => $newspanda_default['dual_inner_column_title'],
      'sanitize_callback' => 'sanitize_text_field',
  )
);
$wp_customize->add_control(
  'newspanda_options[dual_inner_column_title]',
  array(
      'label' => __('Inner Column Title', 'newspanda'),
      'section' => 'dual_insights',
      'type' => 'text',
  )
);

$wp_customize->add_setting(
    'newspanda_options[trending_insights_category]',
    array(
        'default'           => $newspanda_default['trending_insights_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new NewsPanda_Dropdown_Taxonomies_Control(
        $wp_customize,
        'newspanda_options[trending_insights_category]',
        array(
            'label'           => __( 'Choose Column - 2 Category', 'newspanda' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'newspanda' ),
            'section'         => 'dual_insights',
        )
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_insights_author_meta]',
    array(
        'default' => $newspanda_default['enable_insights_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_insights_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'newspanda'),
        'section' => 'dual_insights',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_insights_author_meta]',
    array(
        'default' => $newspanda_default['select_insights_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_insights_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'newspanda'),
        'section' => 'dual_insights',
        'type' => 'select',
        'choices' => newspanda_author_meta(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[insights_author_meta_title]',
    array(
        'default' => $newspanda_default['insights_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[insights_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'newspanda'),
        'section' => 'dual_insights',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_insights_date_meta]',
    array(
        'default' => $newspanda_default['enable_insights_date_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_insights_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'newspanda'),
        'section' => 'dual_insights',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_insights_date]',
    array(
        'default' => $newspanda_default['select_insights_date'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_insights_date]',
    array(
        'label' => esc_html__('Select Date Meta', 'newspanda'),
        'section' => 'dual_insights',
        'type' => 'select',
        'choices' => newspanda_date_meta(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_insights_date_meta_title]',
    array(
        'default' => $newspanda_default['select_insights_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_insights_date_meta_title]',
    array(
        'label' => __('Date Meta Text', 'newspanda'),
        'section' => 'dual_insights',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_insights_date_format]',
    array(
        'default' => $newspanda_default['select_insights_date_format'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_insights_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'newspanda'),
        'section' => 'dual_insights',
        'type' => 'select',
        'choices' => newspanda_get_date_formats(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_insights_category_meta]',
    array(
        'default' => $newspanda_default['enable_insights_category_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_insights_category_meta]',
    array(
        'label' => esc_html__('Enable Category Meta', 'newspanda'),
        'section' => 'dual_insights',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_insights_number_of_category]',
    array(
        'default' => $newspanda_default['select_insights_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_insights_number_of_category]',
    array(
        'label' => __('Number of Category', 'newspanda'),
        'section' => 'dual_insights',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'newspanda_options[insights_category_label]',
    array(
        'default' => $newspanda_default['insights_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[insights_category_label]',
    array(
        'label' => __('Category Label', 'newspanda'),
        'section' => 'dual_insights',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_insights_category_color]',
    array(
        'default' => $newspanda_default['select_insights_category_color'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_insights_category_color]',
    array(
        'label' => esc_html__('Select Category Color', 'newspanda'),
        'section' => 'dual_insights',
        'type' => 'select',
        'choices' => newspanda_category_color(),
    )
);