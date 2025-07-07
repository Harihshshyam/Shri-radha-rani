<?php
/**
 * All Site Panel.
 *
 * @package NewsPanda
 */
$widgets_link = admin_url( 'widgets.php' );
$wp_customize->remove_setting( 'display_header_text' );
$wp_customize->remove_control( 'display_header_text' );

$wp_customize->add_setting('newspanda_options[newspanda_site_logo_height]',
    array(
        'default' => $newspanda_default['newspanda_site_logo_height'],
        'sanitize_callback' => 'newspanda_sanitize_number_range',
    )
);
$wp_customize->add_control(
    'newspanda_options[newspanda_site_logo_height]',
    array(
        'label' => esc_html__('Logo Height', 'newspanda'),
        'section' => 'title_tagline',
        'type' => 'range',
		'priority'    => 10,
        'input_attrs' => array(
            'min' => 60,
            'max' => 200,
            'step' => 5
        ),
    )
);

$wp_customize->add_setting(
    'newspanda_options[hide_title]',
    array(
        'default' => $newspanda_default['hide_title'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[hide_title]',
    array(
			'label'    => __( 'Hide Site Title', 'newspanda' ),
        'section' => 'title_tagline',
        'type' => 'checkbox',
    )
);
$wp_customize->add_setting(
    'newspanda_options[hide_tagline]',
    array(
        'default' => $newspanda_default['hide_tagline'],
        'sanitize_callback' => 'newspanda_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'newspanda_options[hide_tagline]',
    array(
			'label'    => __( 'Hide Tagline', 'newspanda' ),
        'section' => 'title_tagline',
        'type' => 'checkbox',
    )
);

// Move Site Identity section inside our basic panel.
$site_identity = $wp_customize->get_section( 'title_tagline' );
$site_identity->panel = 'general_options_panel';

// Move Header Image section inside our basic panel.
$site_identity = $wp_customize->get_section( 'header_image' );
$site_identity->panel = 'general_options_panel';

// Move background Image section inside our basic panel.
$site_identity = $wp_customize->get_section( 'background_image' );
$site_identity->panel = 'general_options_panel';

// Move background Image section inside our basic panel.
$site_identity = $wp_customize->get_section( 'colors' );
$site_identity->panel = 'general_options_panel';

// Add General Settings Panel.
$wp_customize->add_panel(
	'general_options_panel',
	array(
		'title'       => __( 'General Settings', 'newspanda' ),
		'description' => __( 'Some basic options for the site.', 'newspanda' ),
		'priority'    => 10,
	)
);

// Add Header Options Panel.
$wp_customize->add_panel(
	'header_options_panel',
	array(
		'title'       => __( 'Header Options', 'newspanda' ),
		'description' => __( 'Some basic options for the site.', 'newspanda' ),
		'priority'    => 15,
	)
);

// single options panel
$wp_customize->add_panel(
	'single_options_panel',
	array(
		'title'       => __( 'Single Options', 'newspanda' ),
		'description' => __( 'Some basic options for single page of the site.', 'newspanda' ),
		'priority'    => 15,
	)
);


// archive options panel
$wp_customize->add_panel(
	'archive_options_panel',
	array(
		'title'       => __( 'Archive Options', 'newspanda' ),
		'description' => __( 'Some basic options for Archive of the site.', 'newspanda' ),
		'priority'    => 15,
	)
);


// Add Header Options Panel.
$wp_customize->add_panel(
	'front_page_theme_options_panel',
	array(
		'title'       => __( 'Front Page Option', 'newspanda' ),
		'description' => __( 'Some basic options for the site.', 'newspanda' ),
		'priority'    => 15,
	)
);


// Footer Options
$wp_customize->add_panel(
	'footer_options_panel',
	array(
		'title'       => __( 'Footer Options', 'newspanda' ),
		'description' => __( 'Some basic options for Footer of the site.', 'newspanda' ),
		'priority'    => 15,
	)
);

// general section
require get_template_directory() . '/inc/admin/customizer/sections/breadcrumb.php';
require get_template_directory() . '/inc/admin/customizer/sections/preloader.php';

// header section
require get_template_directory() . '/inc/admin/customizer/sections/header-style.php';
require get_template_directory() . '/inc/admin/customizer/sections/ticker-post.php';
require get_template_directory() . '/inc/admin/customizer/sections/top-bar.php';
require get_template_directory() . '/inc/admin/customizer/sections/mobile-menu.php';
require get_template_directory() . '/inc/admin/customizer/sections/search_trending.php';
require get_template_directory() . '/inc/admin/customizer/sections/tags.php';
require get_template_directory() . '/inc/admin/customizer/sections/popular-post.php';


// archive section
require get_template_directory() . '/inc/admin/customizer/sections/archive.php';
require get_template_directory() . '/inc/admin/customizer/sections/excerpt.php';
require get_template_directory() . '/inc/admin/customizer/sections/sidebar.php';

// single page section
require get_template_directory() . '/inc/admin/customizer/sections/single.php';
require get_template_directory() . '/inc/admin/customizer/sections/single-related-post.php';
require get_template_directory() . '/inc/admin/customizer/sections/show-author-post.php';

// front page section
require get_template_directory() . '/inc/admin/customizer/sections/frontline-post.php';
require get_template_directory() . '/inc/admin/customizer/sections/main-banner.php';
require get_template_directory() . '/inc/admin/customizer/sections/slider-banner.php';
require get_template_directory() . '/inc/admin/customizer/sections/article-list.php';
require get_template_directory() . '/inc/admin/customizer/sections/dual-insights.php';
require get_template_directory() . '/inc/admin/customizer/sections/split-block.php';
require get_template_directory() . '/inc/admin/customizer/sections/grid-list.php';
require get_template_directory() . '/inc/admin/customizer/sections/article-group.php';
require get_template_directory() . '/inc/admin/customizer/sections/must-read.php';
require get_template_directory() . '/inc/admin/customizer/sections/featured-category.php';
require get_template_directory() . '/inc/admin/customizer/sections/footer-recommended.php';

//footer section
require get_template_directory() . '/inc/admin/customizer/sections/footer-widget.php';
require get_template_directory() . '/inc/admin/customizer/sections/footer.php';

// upsell
require get_template_directory() . '/inc/admin/customizer/helpers/theme-upsell.php';


