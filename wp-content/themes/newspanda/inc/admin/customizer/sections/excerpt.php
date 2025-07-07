<?php
$wp_customize->add_section(
    'pagination_options',
    array(
        'title' => esc_html__( 'Pagination Options', 'newspanda' ),
        'panel' => 'archive_options_panel',
    )
);


$wp_customize->add_setting(
    'newspanda_options[select_pagination_style]',
    array(
        'default'           => $newspanda_default['select_pagination_style'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[select_pagination_style]',
    array(
        'label'         => esc_html__( 'Select Pagination Style', 'newspanda' ),
        'section'     => 'pagination_options',
        'type'        => 'select',
        'choices'       => newspanda_pagination_style_choice(),

    )
);


$wp_customize->add_section(
    'excerpt_options',
    array(
        'title' => esc_html__( 'Excerpt Options', 'newspanda' ),
        'panel' => 'archive_options_panel',
    )
);

$wp_customize->add_setting(
    'newspanda_options[number_of_word_in_excerpt]',
    array(
        'default'           => $newspanda_default['number_of_word_in_excerpt'],
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'newspanda_options[number_of_word_in_excerpt]',
    array(
        'label'         => esc_html__( 'Number Of Excerpt Word', 'newspanda' ),
        'section'     => 'excerpt_options',
        'type'        => 'number',

    )
);


$wp_customize->add_setting(
    'newspanda_options[excerpt_posts_title_limit]',
    array(
        'default'           => $newspanda_default['excerpt_posts_title_limit'],
        'sanitize_callback' => 'newspanda_sanitize_select',
    )
);
$wp_customize->add_control(
    'newspanda_options[excerpt_posts_title_limit]',
    array(
        'label'    => __( 'Excerpt Line Limit', 'newspanda' ),
        'section'  => 'excerpt_options',
        'type'     => 'select',
        'choices'  => newspanda_line_limit_choices(),
    )
);

$wp_customize->add_setting(
    'newspanda_options[archive_excerpt_button_text]',
    array(
        'default'           => $newspanda_default['archive_excerpt_button_text'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'newspanda_options[archive_excerpt_button_text]',
    array(
        'label'    => __( 'Excerpt Button Text', 'newspanda' ),
        'section'  => 'excerpt_options',
        'type'     => 'text',
    )
);