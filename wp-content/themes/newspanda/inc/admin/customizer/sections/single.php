<?php
/**
 * All settings related to single.
 *
 * @package NewsPanda
 */
$wp_customize->add_section(
	'single_options',
	array(
		'title' => esc_html__( 'Single Page Options', 'newspanda' ),
		'panel' => 'single_options_panel',
	)
);

$wp_customize->add_setting(
    'newspanda_options[enable_single_author_meta]',
    array(
        'default'           => $newspanda_default['enable_single_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_single_author_meta]',
    array(
        'label'       => esc_html__( 'Show Author Meta', 'newspanda' ),
        'section'     => 'single_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_single_author_meta]',
    array(
        'default'           => $newspanda_default['select_single_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_single_author_meta]',
    array(
        'label'         => esc_html__( 'Author Meta Display Options', 'newspanda' ),
        'section'     => 'single_options',
        'type'        => 'select',
        'choices'       => newspanda_author_meta(),


    )
);

$wp_customize->add_setting(
    'newspanda_options[single_author_meta_title]',
    array(
        'default'           => $newspanda_default['single_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[single_author_meta_title]',
    array(
        'label'    => __( 'Author Meta Text', 'newspanda' ),
        'section'  => 'single_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_single_date_meta]',
    array(
        'default'           => $newspanda_default['enable_single_date_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_single_date_meta]',
    array(
        'label'       => esc_html__( 'Display Published Date', 'newspanda' ),
        'section'     => 'single_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_single_date]',
    array(
        'default'           => $newspanda_default['select_single_date'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_single_date]',
    array(
        'label'         => esc_html__( 'Select Date Meta', 'newspanda' ),
        'section'     => 'single_options',
        'type'        => 'select',
        'choices'       => newspanda_date_meta(),

    )
);

$wp_customize->add_setting(
    'newspanda_options[single_date_meta_title]',
    array(
        'default'           => $newspanda_default['single_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[single_date_meta_title]',
    array(
        'label'    => __( 'Date Meta Text', 'newspanda' ),
        'section'  => 'single_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_single_date_format]',
    array(
        'default'           => $newspanda_default['select_single_date_format'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_single_date_format]',
    array(
        'label'         => esc_html__( 'Select Date Format', 'newspanda' ),
        'section'     => 'single_options',
        'type'        => 'select',
        'choices'  		=> newspanda_get_date_formats(),
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_single_category_meta]',
    array(
        'default'           => $newspanda_default['enable_single_category_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_single_category_meta]',
    array(
        'label'       => esc_html__( 'Enable Single Category Meta', 'newspanda' ),
        'section'     => 'single_options',
        'type'        => 'checkbox',
    )
);


$wp_customize->add_setting(
    'newspanda_options[single_category_label]',
    array(
        'default'           => $newspanda_default['single_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[single_category_label]',
    array(
        'label'    => __( 'Category Title', 'newspanda' ),
        'section'  => 'single_options',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_single_category_color]',
    array(
        'default'           => $newspanda_default['select_single_category_color'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_single_category_color]',
    array(
        'label'         => esc_html__( 'Select Category Color', 'newspanda' ),
        'section'     => 'single_options',
        'type'        => 'select',
        'choices'  		=> newspanda_category_color(),

    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_single_tag_meta]',
    array(
        'default'           => $newspanda_default['enable_single_tag_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_single_tag_meta]',
    array(
        'label'       => esc_html__( 'Enable Tag Meta', 'newspanda' ),
        'section'     => 'single_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_single_read_time_meta]',
    array(
        'default'           => $newspanda_default['enable_single_read_time_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_single_read_time_meta]',
    array(
        'label'       => esc_html__( 'Enable Read Time', 'newspanda' ),
        'section'     => 'single_options',
        'type'        => 'checkbox',
    )
);



$wp_customize->add_setting(
    'newspanda_section_seperator_single_5',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new NewsPanda_Seperator_Control(
        $wp_customize,
        'newspanda_section_seperator_single_5',
        array(
            'settings' => 'newspanda_section_seperator_single_5',
            'section'       => 'single_options',
        )
    )
);


$wp_customize->add_setting(
    'newspanda_options[show_sticky_article_navigation]',
    array(
        'default'           => $newspanda_default['show_sticky_article_navigation'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[show_sticky_article_navigation]',
    array(
        'label'    => __( 'Show Sticky Article Navigation', 'newspanda' ),
        'section'  => 'single_options',
        'type'     => 'checkbox',
    )
);

/*Show Author Info Box start
*-------------------------------*/
$wp_customize->add_setting(
    'newspanda_section_seperator_single_2',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new NewsPanda_Seperator_Control(
        $wp_customize,
        'newspanda_section_seperator_single_2',
        array(
            'settings' => 'newspanda_section_seperator_single_2',
            'section'       => 'single_options',
        )
    )
);

$wp_customize->add_setting(
    'newspanda_options[show_author_info]',
    array(
        'default'           => $newspanda_default['show_author_info'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[show_author_info]',
    array(
        'label'    => __( 'Show Author Info Box', 'newspanda' ),
        'section'  => 'single_options',
        'type'     => 'checkbox',
    )
);


$wp_customize->add_section(
    'single_sidebar_options',
    array(
        'title' => esc_html__( 'SideBar Options', 'newspanda' ),
        'panel' => 'single_options_panel',
    )
);


$wp_customize->add_setting(
    'single_sidebar_layout_option',
    array(
        'default'           => $newspanda_default['single_sidebar_layout_option'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'newspanda_sanitize_radio'
    )
);

$wp_customize->add_control(
    new NewsPanda_Custom_Radio_Image_Control(
        $wp_customize,
        'single_sidebar_layout_option',
        array(
            'label'         => esc_html__( 'Select Sidebar Layout (Single)', 'newspanda' ),
            'section'       => 'single_sidebar_options',
            'choices'       => newspanda_get_sidebar_layouts(),
        )
    )
);




$wp_customize->add_setting(
    'newspanda_options[enable_sidebar_fix_single]',
    array(
        'default'           => $newspanda_default['enable_sidebar_fix_single'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_sidebar_fix_single]',
    array(
        'label'    => __( 'Enable Sticky Sidebar', 'newspanda' ),
        'section'     => 'single_options_panel',
        'type'        => 'checkbox',
    )
);