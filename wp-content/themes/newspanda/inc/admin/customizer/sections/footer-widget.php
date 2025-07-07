<?php
// footer widget Options.
$wp_customize->add_section(
    'footer_widget_section',
    array(
        'title' => __('Footer Widget Options', 'newspanda'),
        'panel' => 'footer_options_panel',
    )
);



/*Enable Footer Nav*/
$wp_customize->add_setting(
    'newspanda_options[enable_footer_widget]',
    array(
        'default'           => $newspanda_default['enable_footer_widget'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[enable_footer_widget]',
    array(
        'label'       => __( 'Show Footer widgetarea', 'newspanda' ),
        'section'     => 'footer_widget_section',
        'type'     => 'checkbox',
    )
);

// Option to choose footer column layout.
$wp_customize->add_setting(
	'newspanda_options[footer_column_layout]',
	array(
		'default'           => $newspanda_default['footer_column_layout'],
		'sanitize_callback' => 'newspanda_sanitize_radio',
	)
);
$wp_customize->add_control(
	new NewsPanda_Custom_Radio_Image_Control(
		$wp_customize,
		'newspanda_options[footer_column_layout]',
		array(
			'label'       => __( 'Footer Column Layout', 'newspanda' ),
			'description' => __( 'Some footer widgetareas will not be used based on the footer column layout chosen. Also make sure to insert at least one widget on the respective widgetarea for it to display.', 'newspanda' ),
			'section'     => 'footer_widget_section',
			'choices'     => newspanda_get_footer_layouts(),
			'priority'    => 40,
		)
	)
);
