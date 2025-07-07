<?php
/**
 * All settings related to footer recommended post.
 *
 * @package NewsPanda
 */
$wp_customize->add_section(
	'article_group',
	array(
		'title' => esc_html__( 'Article Group Section', 'newspanda' ),
		'panel' => 'front_page_theme_options_panel',
	)
);

$wp_customize->add_setting(
    'newspanda_options[enable_article_group]',
    array(
        'default'           => $newspanda_default['enable_article_group'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_article_group]',
    array(
        'label'       => esc_html__( 'Enable Article Group Post', 'newspanda' ),
        'section'     => 'article_group',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[article_group_title]',
    array(
        'default' => $newspanda_default['article_group_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[article_group_title]',
    array(
        'label' => __('Section Title', 'newspanda'),
        'section' => 'article_group',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_section_seperator_article_group_1',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new NewsPanda_Seperator_Control(
        $wp_customize,
        'newspanda_section_seperator_article_group_1',
        array(
            'label'         => esc_html__( 'Article Group Column - 1', 'newspanda' ),
            'settings' => 'newspanda_section_seperator_article_group_1',
            'section' => 'article_group',
        )
    )
);

$wp_customize->add_setting(
    'newspanda_options[article_group_category]',
    array(
        'default'           => $newspanda_default['article_group_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new NewsPanda_Dropdown_Taxonomies_Control(
        $wp_customize,
        'newspanda_options[article_group_category]',
        array(
            'label'           => __( 'Choose Column - 1 Category', 'newspanda' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'newspanda' ),
            'section'         => 'article_group',
        )
    )
);

$wp_customize->add_setting(
    'newspanda_section_seperator_article_group_2',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new NewsPanda_Seperator_Control(
        $wp_customize,
        'newspanda_section_seperator_article_group_2',
        array(
            'label'         => esc_html__( 'Article Group Column - 2', 'newspanda' ),
            'settings' => 'newspanda_section_seperator_article_group_2',
            'section' => 'article_group',
        )
    )
);

$wp_customize->add_setting(
    'newspanda_options[article_group_slider_category]',
    array(
        'default'           => $newspanda_default['article_group_slider_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new NewsPanda_Dropdown_Taxonomies_Control(
        $wp_customize,
        'newspanda_options[article_group_slider_category]',
        array(
            'label'           => __( 'Choose Column - 2 Category', 'newspanda' ),
            'description'     => __( 'Leave Empty if you don\'t want the posts to be category specific', 'newspanda' ),
            'section'         => 'article_group',
        )
    )
);

$wp_customize->add_setting(
    'newspanda_section_seperator_article_group_meta',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new NewsPanda_Seperator_Control(
        $wp_customize,
        'newspanda_section_seperator_article_group_meta',
        array(
            'label'         => esc_html__( 'Article Group Meta Option', 'newspanda' ),
            'settings' => 'newspanda_section_seperator_article_group_meta',
            'section' => 'article_group',
        )
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_article_group_author_meta]',
    array(
        'default' => $newspanda_default['enable_article_group_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_article_group_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'newspanda'),
        'section' => 'article_group',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_article_group_author_meta]',
    array(
        'default' => $newspanda_default['select_article_group_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_article_group_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'newspanda'),
        'section' => 'article_group',
        'type' => 'select',
        'choices' => newspanda_author_meta(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[article_group_author_meta_title]',
    array(
        'default' => $newspanda_default['article_group_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[article_group_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'newspanda'),
        'section' => 'article_group',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_article_group_date_meta]',
    array(
        'default' => $newspanda_default['enable_article_group_date_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_article_group_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'newspanda'),
        'section' => 'article_group',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_article_group_date]',
    array(
        'default' => $newspanda_default['select_article_group_date'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_article_group_date]',
    array(
        'label' => esc_html__('Select Date Meta', 'newspanda'),
        'section' => 'article_group',
        'type' => 'select',
        'choices' => newspanda_date_meta(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_article_group_date_meta_title]',
    array(
        'default' => $newspanda_default['select_article_group_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_article_group_date_meta_title]',
    array(
        'label' => __('Date Meta Text', 'newspanda'),
        'section' => 'article_group',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_article_group_date_format]',
    array(
        'default' => $newspanda_default['select_article_group_date_format'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_article_group_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'newspanda'),
        'section' => 'article_group',
        'type' => 'select',
        'choices' => newspanda_get_date_formats(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_article_group_category_meta]',
    array(
        'default' => $newspanda_default['enable_article_group_category_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_article_group_category_meta]',
    array(
        'label' => esc_html__('Enable Category Meta', 'newspanda'),
        'section' => 'article_group',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_article_group_number_of_category]',
    array(
        'default' => $newspanda_default['select_article_group_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_article_group_number_of_category]',
    array(
        'label' => __('Number of Category', 'newspanda'),
        'section' => 'article_group',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'newspanda_options[article_group_category_label]',
    array(
        'default' => $newspanda_default['article_group_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[article_group_category_label]',
    array(
        'label' => __('Category Label', 'newspanda'),
        'section' => 'article_group',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_article_group_category_color]',
    array(
        'default' => $newspanda_default['select_article_group_category_color'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_article_group_category_color]',
    array(
        'label' => esc_html__('Select Category Color', 'newspanda'),
        'section' => 'article_group',
        'type' => 'select',
        'choices' => newspanda_category_color(),
    )
);