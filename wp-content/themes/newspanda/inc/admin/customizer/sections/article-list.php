<?php
/**
 * All settings related to footer recommended post.
 *
 * @package NewsPanda
 */
$wp_customize->add_section(
    'article_list_post',
    array(
        'title' => esc_html__('Article List Section', 'newspanda'),
        'panel' => 'front_page_theme_options_panel',
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_article_list_post]',
    array(
        'default' => $newspanda_default['enable_article_list_post'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_article_list_post]',
    array(
        'label' => esc_html__('Enable Article List Post', 'newspanda'),
        'section' => 'article_list_post',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[article_list_title]',
    array(
        'default' => $newspanda_default['article_list_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[article_list_title]',
    array(
        'label' => __('Section Title', 'newspanda'),
        'section' => 'article_list_post',
        'type' => 'text',
    )
);

$wp_customize->add_setting(
    'newspanda_section_seperator_article_list_1',
    array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
$wp_customize->add_control(
    new NewsPanda_Seperator_Control(
        $wp_customize,
        'newspanda_section_seperator_article_list_1',
        array(
            'label' => esc_html__('Article List Column - Left', 'newspanda'),
            'settings' => 'newspanda_section_seperator_article_list_1',
            'section' => 'article_list_post',
        )
    )
);
$wp_customize->add_setting(
    'newspanda_options[article_list_post_category_left]',
    array(
        'default' => $newspanda_default['article_list_post_category_left'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new NewsPanda_Dropdown_Taxonomies_Control(
        $wp_customize,
        'newspanda_options[article_list_post_category_left]',
        array(
            'label' => __('Choose Category', 'newspanda'),
            'description' => __('Leave Empty if you don\'t want the posts to be category specific', 'newspanda'),
            'section' => 'article_list_post',
        )
    )
);
$wp_customize->add_setting(
    'newspanda_section_seperator_article_list_3',
    array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
$wp_customize->add_control(
    new NewsPanda_Seperator_Control(
        $wp_customize,
        'newspanda_section_seperator_article_list_3',
        array(
            'label' => esc_html__('Article List Column - Right', 'newspanda'),
            'settings' => 'newspanda_section_seperator_article_list_3',
            'section' => 'article_list_post',
        )
    )
);
$wp_customize->add_setting(
    'newspanda_options[article_list_post_category_right]',
    array(
        'default' => $newspanda_default['article_list_post_category_right'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    new NewsPanda_Dropdown_Taxonomies_Control(
        $wp_customize,
        'newspanda_options[article_list_post_category_right]',
        array(
            'label' => __('Choose Category', 'newspanda'),
            'description' => __('Leave Empty if you don\'t want the posts to be category specific', 'newspanda'),
            'section' => 'article_list_post',
        )
    )
);
$wp_customize->add_setting(
    'newspanda_section_seperator_article_list_meta',
    array(
        'default' => '',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
$wp_customize->add_control(
    new NewsPanda_Seperator_Control(
        $wp_customize,
        'newspanda_section_seperator_article_list_meta',
        array(
            'label' => esc_html__('Article List Meta Option', 'newspanda'),
            'settings' => 'newspanda_section_seperator_article_list_meta',
            'section' => 'article_list_post',
        )
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_article_list_post_author_meta]',
    array(
        'default' => $newspanda_default['enable_article_list_post_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_article_list_post_author_meta]',
    array(
        'label' => esc_html__('Display Author Meta', 'newspanda'),
        'section' => 'article_list_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_article_list_post_author_meta]',
    array(
        'default' => $newspanda_default['select_article_list_post_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_article_list_post_author_meta]',
    array(
        'label' => esc_html__('Select Author Meta', 'newspanda'),
        'section' => 'article_list_post',
        'type' => 'select',
        'choices' => newspanda_author_meta(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[article_list_post_author_meta_title]',
    array(
        'default' => $newspanda_default['article_list_post_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[article_list_post_author_meta_title]',
    array(
        'label' => __('Author Meta Text', 'newspanda'),
        'section' => 'article_list_post',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_article_list_post_date_meta]',
    array(
        'default' => $newspanda_default['enable_article_list_post_date_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_article_list_post_date_meta]',
    array(
        'label' => esc_html__('Display Published Date', 'newspanda'),
        'section' => 'article_list_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_article_list_post_date]',
    array(
        'default' => $newspanda_default['select_article_list_post_date'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_article_list_post_date]',
    array(
        'label' => esc_html__('Select Date Meta', 'newspanda'),
        'section' => 'article_list_post',
        'type' => 'select',
        'choices' => newspanda_date_meta(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_article_list_post_date_meta_title]',
    array(
        'default' => $newspanda_default['select_article_list_post_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_article_list_post_date_meta_title]',
    array(
        'label' => __('Date Meta Text', 'newspanda'),
        'section' => 'article_list_post',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_article_list_post_date_format]',
    array(
        'default' => $newspanda_default['select_article_list_post_date_format'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_article_list_post_date_format]',
    array(
        'label' => esc_html__('Select Date Format', 'newspanda'),
        'section' => 'article_list_post',
        'type' => 'select',
        'choices' => newspanda_get_date_formats(),
    )
);
$wp_customize->add_setting(
    'newspanda_options[enable_article_list_post_category_meta]',
    array(
        'default' => $newspanda_default['enable_article_list_post_category_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_article_list_post_category_meta]',
    array(
        'label' => esc_html__('Enable Category Meta', 'newspanda'),
        'section' => 'article_list_post',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_article_list_post_number_of_category]',
    array(
        'default' => $newspanda_default['select_article_list_post_number_of_category'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_article_list_post_number_of_category]',
    array(
        'label' => __('Number of Category', 'newspanda'),
        'section' => 'article_list_post',
        'type' => 'number',
    )
);
$wp_customize->add_setting(
    'newspanda_options[article_list_post_category_label]',
    array(
        'default' => $newspanda_default['article_list_post_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[article_list_post_category_label]',
    array(
        'label' => __('Category Label', 'newspanda'),
        'section' => 'article_list_post',
        'type' => 'text',
    )
);
$wp_customize->add_setting(
    'newspanda_options[select_article_list_post_category_color]',
    array(
        'default' => $newspanda_default['select_article_list_post_category_color'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_article_list_post_category_color]',
    array(
        'label' => esc_html__('Select Category Color', 'newspanda'),
        'section' => 'article_list_post',
        'type' => 'select',
        'choices' => newspanda_category_color(),
    )
);