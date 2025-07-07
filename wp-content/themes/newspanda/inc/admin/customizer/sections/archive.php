<?php
/**
 * All settings related to archive.
 *
 * @package NewsPanda
 */
$wp_customize->add_section(
	'archive_options',
	array(
		'title' => esc_html__( 'Archive Options', 'newspanda' ),
		'panel' => 'archive_options_panel',
	)
);

// Archive Layout.
$wp_customize->add_setting(
    'newspanda_options[archive_layout]',
    array(
        'default'           => $newspanda_default['archive_layout'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'newspanda_sanitize_radio'
    )
);

$wp_customize->add_control(
    new NewsPanda_Custom_Radio_Image_Control(
        $wp_customize,
        'newspanda_options[archive_layout]',
        array(
            'label'         => esc_html__( 'Archive Layout', 'newspanda' ),
            'section'       => 'archive_options',
            'choices'       => newspanda_get_archive_layouts(),
        )
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_archive_featured_post]',
    array(
        'default'           => $newspanda_default['enable_archive_featured_post'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_archive_featured_post]',
    array(
        'label'    => __( 'Enable Featured Post', 'newspanda' ),
        'description' => __( 'After enabling, set \'Mark as Featured\' to \'Yes\' in the single post options to display the post in the top section of the relevant archive page.', 'newspanda' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',

    )
);

$wp_customize->add_setting(
    'newspanda_section_seperator_archive_1',
    array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

$wp_customize->add_control(
    new NewsPanda_Seperator_Control(
        $wp_customize,
        'newspanda_section_seperator_archive_1',
        array(
            'label'         => esc_html__( 'Archive Meta Options', 'newspanda' ),
            'settings' => 'newspanda_section_seperator_archive_1',
            'section' => 'archive_options',
        )
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_archive_post_count]',
    array(
        'default'           => $newspanda_default['enable_archive_post_count'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_archive_post_count]',
    array(
        'label'    => __( 'Enable Archive Post Count', 'newspanda' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',

    )
);


$wp_customize->add_setting(
    'newspanda_options[archive_posts_title_limit]',
    array(
        'default'           => $newspanda_default['archive_posts_title_limit'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[archive_posts_title_limit]',
    array(
        'label'    => __( 'Title Line Limit', 'newspanda' ),
        'section'  => 'archive_options',
        'type'     => 'select',
        'choices'  => newspanda_line_limit_choices(),
    )
);


$wp_customize->add_setting(
    'newspanda_options[enable_excerpt_on_archive_1]',
    array(
        'default'           => $newspanda_default['enable_excerpt_on_archive_1'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_excerpt_on_archive_1]',
    array(
        'label'    => __( 'Enable Excerpt On Archive', 'newspanda' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
        'active_callback' => 'newspanda_is_archive_excerpt_callbac_1',

    )
);



$wp_customize->add_setting(
    'newspanda_options[enable_excerpt_on_archive_2]',
    array(
        'default'           => $newspanda_default['enable_excerpt_on_archive_2'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_excerpt_on_archive_2]',
    array(
        'label'    => __( 'Enable Excerpt On Archive', 'newspanda' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
        'active_callback' => 'newspanda_is_archive_excerpt_callbac_2',
        
    )
);


$wp_customize->add_setting(
    'newspanda_options[enable_excerpt_on_archive_3]',
    array(
        'default'           => $newspanda_default['enable_excerpt_on_archive_3'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_excerpt_on_archive_3]',
    array(
        'label'    => __( 'Enable Excerpt On Archive', 'newspanda' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
        'active_callback' => 'newspanda_is_archive_excerpt_callbac_3',
        
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_archive_author_meta]',
    array(
        'default'           => $newspanda_default['enable_archive_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_archive_author_meta]',
    array(
        'label'       => esc_html__( 'Show Author Meta', 'newspanda' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_author_meta]',
    array(
        'default'           => $newspanda_default['select_author_meta'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_author_meta]',
    array(
        'label'         => esc_html__( 'Author Meta Display Options', 'newspanda' ),
        'section'     => 'archive_options',
        'type'        => 'select',
        'choices'       => newspanda_author_meta(),
        'active_callback' => 'newspanda_is_archive_author_meta_enabled',


    )
);

$wp_customize->add_setting(
    'newspanda_options[archive_author_meta_title]',
    array(
        'default'           => $newspanda_default['archive_author_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[archive_author_meta_title]',
    array(
        'label'    => __( 'Author Meta Text', 'newspanda' ),
        'section'  => 'archive_options',
        'type'     => 'text',
        'active_callback' => function ( $control ) {
            return (
                newspanda_is_archive_author_meta_enabled( $control )
                &&
                newspanda_archive_author_meta_title( $control )
            );
        },
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_archive_date_meta]',
    array(
        'default'           => $newspanda_default['enable_archive_date_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_archive_date_meta]',
    array(
        'label'       => esc_html__( 'Show Date Meta', 'newspanda' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_archive_date]',
    array(
        'default'           => $newspanda_default['select_archive_date'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_archive_date]',
    array(
        'label'         => esc_html__( 'Date Meta Display Options', 'newspanda' ),
        'section'     => 'archive_options',
        'type'        => 'select',
        'choices'       => newspanda_date_meta(),
        'active_callback' => 'newspanda_is_archive_date_meta_enabled',

    )
);

$wp_customize->add_setting(
    'newspanda_options[archive_date_meta_title]',
    array(
        'default'           => $newspanda_default['archive_date_meta_title'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[archive_date_meta_title]',
    array(
        'label'    => __( 'Date Meta Text', 'newspanda' ),
        'section'  => 'archive_options',
        'type'     => 'text',
        'active_callback' => function ( $control ) {
            return (
                newspanda_is_archive_date_meta_enabled( $control )
                &&
                newspanda_archive_date_meta_title( $control )
            );
        },
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_date_format]',
    array(
        'default'           => $newspanda_default['select_date_format'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_date_format]',
    array(
        'label'         => esc_html__( 'Select Date Format', 'newspanda' ),
        'section'     => 'archive_options',
        'type'        => 'select',
        'choices'  		=> newspanda_get_date_formats(),
        'active_callback' => 'newspanda_is_archive_date_meta_enabled',
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_category_meta]',
    array(
        'default'           => $newspanda_default['enable_category_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_category_meta]',
    array(
        'label'       => esc_html__( 'Enable Category Meta', 'newspanda' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[number_of_category_to_display]',
    array(
        'default' => $newspanda_default['number_of_category_to_display'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[number_of_category_to_display]',
    array(
        'label' => __('Number of Category', 'newspanda'),
        'section' => 'archive_options',
        'type' => 'number',
    )
);

$wp_customize->add_setting(
    'newspanda_options[archive_category_label]',
    array(
        'default'           => $newspanda_default['archive_category_label'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[archive_category_label]',
    array(
        'label'    => __( 'Category Title', 'newspanda' ),
        'section'  => 'archive_options',
        'type'     => 'text',
        'active_callback' => 'newspanda_is_archive_category_meta_enabled',
    )
);

$wp_customize->add_setting(
    'newspanda_options[select_category_color]',
    array(
        'default'           => $newspanda_default['select_category_color'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_category_color]',
    array(
        'label'         => esc_html__( 'Select Category Color', 'newspanda' ),
        'section'     => 'archive_options',
        'type'        => 'select',
        'choices'  		=> newspanda_category_color(),
        'active_callback' => 'newspanda_is_archive_category_meta_enabled',

    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_tag_meta]',
    array(
        'default'           => $newspanda_default['enable_tag_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_tag_meta]',
    array(
        'label'       => esc_html__( 'Enable Tag Meta', 'newspanda' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
    )
);

$wp_customize->add_setting(
    'newspanda_options[enable_comment_meta]',
    array(
        'default'           => $newspanda_default['enable_comment_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_comment_meta]',
    array(
        'label'       => esc_html__( 'Enable Comment Meta', 'newspanda' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
    )
);


$wp_customize->add_setting(
    'newspanda_options[enable_read_time_meta]',
    array(
        'default'           => $newspanda_default['enable_read_time_meta'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_read_time_meta]',
    array(
        'label'       => esc_html__( 'Enable Read Time', 'newspanda' ),
        'section'     => 'archive_options',
        'type'        => 'checkbox',
    )
);
