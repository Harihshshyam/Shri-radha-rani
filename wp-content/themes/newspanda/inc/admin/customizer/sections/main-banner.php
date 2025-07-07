<?php
/**
 * All settings related to main banner post.
 *
 * @package NewsPanda
 */
$wp_customize->add_section(
    'main_banner_post',
    array(
        'title' => esc_html__('Main Banner Section', 'newspanda'),
        'panel' => 'front_page_theme_options_panel',
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_main_banner_section]',
    array(
        'default' => $newspanda_default['enable_main_banner_section'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_main_banner_section]',
    array(
        'label' => esc_html__('Enable Main Banner', 'newspanda'),
        'section' => 'main_banner_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_section_seperator_banner_grid',
    array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
$wp_customize->add_control(
    new NewsPanda_Seperator_Control(
        $wp_customize,
        'newspanda_section_seperator_banner_grid',
        array(
            'label' => esc_html__('Banner Grid', 'newspanda'),
            'settings' => 'newspanda_section_seperator_banner_grid',
            'section' => 'main_banner_post',
        )
    )
);
$wp_customize->add_setting(
    'newspanda_options[banner_left_grid_category]',
    array(
        'default' => $newspanda_default['banner_left_grid_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new NewsPanda_Dropdown_Taxonomies_Control(
        $wp_customize,
        'newspanda_options[banner_left_grid_category]',
        array(
            'label' => __('Choose Grid Category', 'newspanda'),
            'description' => __('Leave Empty if you don\'t want the posts to be category specific', 'newspanda'),
            'section' => 'main_banner_post',
        )
    )
);
$wp_customize->add_setting(
    'newspanda_options[banner_left_grid_posts_offsets]',
    array(
        'default' => $newspanda_default['banner_left_grid_posts_offsets'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[banner_left_grid_posts_offsets]',
    array(
        'label' => __('First Category Post Offset', 'newspanda'),
        'section' => 'main_banner_post',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'newspanda_section_seperator_banner_list',
    array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
$wp_customize->add_control(
    new NewsPanda_Seperator_Control(
        $wp_customize,
        'newspanda_section_seperator_banner_list',
        array(
            'label' => esc_html__('Banner List', 'newspanda'),
            'settings' => 'newspanda_section_seperator_banner_list',
            'section' => 'main_banner_post',
        )
    )
);
$wp_customize->add_setting(
    'newspanda_options[banner_right_list_post_title]',
    array(
        'default' => $newspanda_default['banner_right_list_post_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[banner_right_list_post_title]',
    array(
        'label' => __('Panel Title', 'newspanda'),
        'section' => 'main_banner_post',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[banner_right_list_category]',
    array(
        'default' => $newspanda_default['banner_right_list_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new NewsPanda_Dropdown_Taxonomies_Control(
        $wp_customize,
        'newspanda_options[banner_right_list_category]',
        array(
            'label' => __('Choose List Post Category', 'newspanda'),
            'description' => __('Leave Empty if you don\'t want the posts to be category specific', 'newspanda'),
            'section' => 'main_banner_post',
        )
    )
);
$wp_customize->add_setting(
    'newspanda_options[banner_right_list_posts_offsets]',
    array(
        'default' => $newspanda_default['banner_right_list_posts_offsets'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[banner_right_list_posts_offsets]',
    array(
        'label' => __('List Post Offset', 'newspanda'),
        'section' => 'main_banner_post',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'newspanda_section_seperator_banner_meta',
    array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
$wp_customize->add_control(
    new NewsPanda_Seperator_Control(
        $wp_customize,
        'newspanda_section_seperator_banner_meta',
        array(
            'label' => esc_html__('Banner Meta', 'newspanda'),
            'settings' => 'newspanda_section_seperator_banner_meta',
            'section' => 'main_banner_post',
        )
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_banner_author_meta]',
    array(
        'default' => $newspanda_default['enable_banner_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_banner_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'newspanda'),
        'section' => 'main_banner_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_banner_author_meta]',
    array(
        'default' => $newspanda_default['select_banner_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_banner_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'newspanda'),
        'section' => 'main_banner_post',
        'type' => 'select',
        'choices' => newspanda_author_meta(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[banner_author_meta_title]',
    array(
        'default' => $newspanda_default['banner_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[banner_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'newspanda'),
        'section' => 'main_banner_post',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_banner_date_meta]',
    array(
        'default' => $newspanda_default['enable_banner_date_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_banner_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'newspanda'),
        'section' => 'main_banner_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_banner_date]',
    array(
        'default' => $newspanda_default['select_banner_date'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_banner_date]',
    array(
        'label' => esc_html__('Select Date Meta', 'newspanda'),
        'section' => 'main_banner_post',
        'type' => 'select',
        'choices' => newspanda_date_meta(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_banner_date_meta_title]',
    array(
        'default' => $newspanda_default['select_banner_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_banner_date_meta_title]',
    array(
        'label' => __('Date Meta Text', 'newspanda'),
        'section' => 'main_banner_post',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_banner_date_format]',
    array(
        'default' => $newspanda_default['select_banner_date_format'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_banner_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'newspanda'),
        'section' => 'main_banner_post',
        'type' => 'select',
        'choices' => newspanda_get_date_formats(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_banner_category_meta]',
    array(
        'default' => $newspanda_default['enable_banner_category_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_banner_category_meta]',
    array(
        'label' => esc_html__('Enable Category Meta', 'newspanda'),
        'section' => 'main_banner_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_banner_number_of_category]',
    array(
        'default' => $newspanda_default['select_banner_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_banner_number_of_category]',
    array(
        'label' => __('Number of Category', 'newspanda'),
        'section' => 'main_banner_post',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'newspanda_options[banner_category_label]',
    array(
        'default' => $newspanda_default['banner_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[banner_category_label]',
    array(
        'label' => __('Category Label', 'newspanda'),
        'section' => 'main_banner_post',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_banner_category_color]',
    array(
        'default' => $newspanda_default['select_banner_category_color'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_banner_category_color]',
    array(
        'label' => esc_html__('Select Category Color', 'newspanda'),
        'section' => 'main_banner_post',
        'type' => 'select',
        'choices' => newspanda_category_color(),
    )
);