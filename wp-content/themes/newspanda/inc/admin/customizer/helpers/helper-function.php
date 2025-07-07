<?php
if (!function_exists('newspanda_get_option')) :
    /**
     * Get customizer value by key.
     *
     * @param string $key Option key.
     * @return mixed Option value.
     * @since 1.0.0
     *
     */
    function newspanda_get_option($key)
    {
        $key_value = '';
        if (!$key) {
            return $key_value;
        }
        $default_values = newspanda_get_all_customizer_default_values();
        $customizer_values = get_theme_mod('newspanda_options');
        $customizer_values = wp_parse_args($customizer_values, $default_values);

        $key_value = (isset($customizer_values[$key])) ? $customizer_values[$key] : '';
        return $key_value;
    }
endif;

if ( ! function_exists( 'newspanda_get_archive_layouts' ) ) :
	/**
	 * Returns archive layout options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newspanda_get_archive_layouts() {
		$options = apply_filters(
			'newspanda_get_archive_layouts',
			array(
				'archive_style_1' => array(
					'url'   => get_template_directory_uri() . '/assets/images/archive-1.webp',
					'label' => esc_html__( 'Archive List View', 'newspanda' ),
				),
				'archive_style_2' => array(
					'url'   => get_template_directory_uri() . '/assets/images/archive-2.webp',
					'label' => esc_html__( 'Archive Grid View', 'newspanda' ),
				),
				'archive_style_3' => array(
					'url'   => get_template_directory_uri() . '/assets/images/archive-3.webp',
					'label' => esc_html__( 'Archive Alternate Grid View', 'newspanda' ),
				),
			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'newspanda_get_date_formats' ) ) :
	/**
	 * Returns title Alignments
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newspanda_get_date_formats() {
		$options = apply_filters(
			'newspanda_archive_date_format',
			array(
				'classic'   => __( 'Classic', 'newspanda' ),
				'time_ago' => __( 'Time Ago', 'newspanda' ),
			)
		);
		return $options;
	}
endif;


if ( ! function_exists( 'newspanda_line_limit_choices' ) ) :
	/**
	 * Returns title limit options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newspanda_line_limit_choices() {
		$options = apply_filters(
			'newspanda_title_limit_options',
			array(
				''              => __( '&mdash; No Limit &mdash;', 'newspanda' ),
				'limit-line-1' => __( '1 Line', 'newspanda' ),
				'limit-line-2' => __( '2 Lines', 'newspanda' ),
				'limit-line-3' => __( '3 Lines', 'newspanda' ),
				'limit-line-4' => __( '4 Lines', 'newspanda' ),
				'limit-line-5' => __( '5 Lines', 'newspanda' ),
			)
		);
		return $options;
	}
endif;
if ( ! function_exists( 'newspanda_archive_category_style' ) ) :
	/**
	 * Returns title Alignments
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newspanda_archive_category_style() {
		$options = apply_filters(
			'newspanda_archive_category_style',
			array(
				'archive_cat_style_1'   => __( 'Category Style 1', 'newspanda' ),
				'archive_cat_style_2'   => __( 'Category Style 2', 'newspanda' ),
				'archive_cat_style_3'   => __( 'Category Style 3', 'newspanda' ),

			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'newspanda_archive_read_time_style' ) ) :
	/**
	 * Returns title Alignments
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newspanda_archive_read_time_style() {
		$options = apply_filters(
			'newspanda_archive_read_time_style',
			array(
				'archive_read_time_style_1'   => __( 'Read Time Style 1', 'newspanda' ),
				'archive_read_time_style_2'   => __( 'Read Time Style 2', 'newspanda' ),
				'archive_read_time_style_3'   => __( 'Read Time Style 3', 'newspanda' ),

			)
		);
		return $options;
	}
endif;


if ( ! function_exists( 'newspanda_get_header_layout' ) ) :
	/**
	 * Returns header layout options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newspanda_get_header_layout() {
		$options = apply_filters(
			'newspanda_get_header_layout',
			array(
				'header_style_1' => array(
					'url'   => get_template_directory_uri() . '/assets/images/header-1.webp',
					'label' => esc_html__( 'Header Style 1', 'newspanda' ),
				),
				'header_style_2' => array(
					'url'   => get_template_directory_uri() . '/assets/images/header-2.webp',
					'label' => esc_html__( 'Header Style 2', 'newspanda' ),
				),
        'header_style_3' => array(
            'url'   => get_template_directory_uri() . '/assets/images/header-3.webp',
            'label' => esc_html__( 'Header Style 3', 'newspanda' ),
        ),
        'header_style_4' => array(
            'url'   => get_template_directory_uri() . '/assets/images/header-4.webp',
            'label' => esc_html__( 'Header Style 4', 'newspanda' ),
        ),
			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'newspanda_social_menu_style' ) ) :
	/**
	 * Returns title Alignments
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newspanda_social_menu_style() {
		$options = apply_filters(
			'newspanda_social_menu_style',
			array(
				'has-brand-background'   => __( 'Has Brand Background', 'newspanda' ),
				'has-brand-color'   => __( 'Has Brand Color', 'newspanda' ),
				'none'   => __( 'None', 'newspanda' ),

			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'newspanda_pagination_style_choice' ) ) :
	/**
	 * Returns title Alignments
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newspanda_pagination_style_choice() {
		$options = apply_filters(
			'newspanda_pagination_style_choice',
			array(
				'pagination_none'   => __( 'None', 'newspanda' ),
				'pagination_numeric'   => __( 'Numeric', 'newspanda' ),
				'pagination_default'   => __( 'Default(New/Old Post)', 'newspanda' ),
				'pagination_ajax_on_scroll'   => __( 'Load More On Scroll', 'newspanda' ),
				'pagination_ajax_on_click'   => __( 'Load More On Click', 'newspanda' ),

			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'newspanda_category_color' ) ) :
	/**
	 * Returns title Alignments
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newspanda_category_color() {
		$options = apply_filters(
			'newspanda_category_color',
			array(
				'none'   => __( 'None', 'newspanda' ),
				'has-background'   => __( 'Has background', 'newspanda' ),
				'has-text-color'   => __( 'Has text color', 'newspanda' ),

			)
		);
		return $options;
	}
endif;


if ( ! function_exists( 'newspanda_get_footer_layouts' ) ) :
	/**
	 * Returns footer layout options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newspanda_get_footer_layouts() {
		$options = apply_filters(
			'newspanda_footer_layouts',
			array(
				'footer_layout_1' => array(
					'url'   => get_template_directory_uri() . '/assets/images/footer-col-4.webp',
					'label' => esc_html__( 'Four Columns', 'newspanda' ),
				),
				'footer_layout_2' => array(
					'url'   => get_template_directory_uri() . '/assets/images/footer-col-3.webp',
					'label' => esc_html__( 'Three Columns', 'newspanda' ),
				),
				'footer_layout_3' => array(
					'url'   => get_template_directory_uri() . '/assets/images/footer-col-2.webp',
					'label' => esc_html__( 'Two Columns', 'newspanda' ),
				),
				'footer_layout_4' => array(
					'url'   => get_template_directory_uri() . '/assets/images/footer-col-2-big-left.webp',
					'label' => esc_html__( 'Two Columns Big Left', 'newspanda' ),
				),
				'footer_layout_5' => array(
					'url'   => get_template_directory_uri() . '/assets/images/footer-col-3-big-middle.webp',
					'label' => esc_html__( 'Three Columns Big Middle', 'newspanda' ),
				),
				'footer_layout_6' => array(
					'url'   => get_template_directory_uri() . '/assets/images/footer-col-2-big-right.webp',
					'label' => esc_html__( 'Two Columns Big Right', 'newspanda' ),
				),
				'footer_layout_7' => array(
					'url'   => get_template_directory_uri() . '/assets/images/footer-col-1.webp',
					'label' => esc_html__( 'Single Column', 'newspanda' ),
				),
			)
		);
		return $options;
	}
endif;


if ( ! function_exists( 'newspanda_preloader_style_option' ) ) :
	/**
	 * Returns title Alignments
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newspanda_preloader_style_option() {
		$options = apply_filters(
			'newspanda_preloader_style_option',
			array(
				'style-1'   => __( 'Style - 1', 'newspanda' ),
				'style-2'   => __( 'Style - 2', 'newspanda' ),
				'style-3'   => __( 'Style - 3', 'newspanda' ),
				'style-4'   => __( 'Style - 4', 'newspanda' ),
				'style-5'   => __( 'Style - 5', 'newspanda' ),
				'style-6'   => __( 'Style - 6', 'newspanda' ),
				'style-7'   => __( 'Style - 7', 'newspanda' ),
				'style-8'   => __( 'Style - 8', 'newspanda' ),
				'style-9'   => __( 'Style - 9', 'newspanda' ),
				'style-10'   => __( 'Style - 10', 'newspanda' ),

			)
		);
		return $options;
	}
endif;


if ( ! function_exists( 'newspanda_get_recommended_post' ) ) :
	/**
	 * Returns recommended layout options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newspanda_get_recommended_post() {
		$options = apply_filters(
			'newspanda_get_recommended_post',
			array(
				'wpi-post-recommendation-1' => array(
					'url'   => get_template_directory_uri() . '/assets/images/recommended-1.webp',
					'label' => esc_html__( 'Recommended List View', 'newspanda' ),
				),
				'wpi-post-recommendation-2' => array(
					'url'   => get_template_directory_uri() . '/assets/images/recommended-2.webp',
					'label' => esc_html__( 'Recommended Grid View', 'newspanda' ),
				),
				'wpi-post-recommendation-3' => array(
					'url'   => get_template_directory_uri() . '/assets/images/recommended-3.webp',
					'label' => esc_html__( 'Recommended Alternate Grid View', 'newspanda' ),
				),
			)
		);
		return $options;
	}
endif;



if ( ! function_exists( 'newspanda_author_meta' ) ) :
	/**
	 * Returns title Alignments
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newspanda_author_meta() {
		$options = apply_filters(
			'newspanda_author_meta',
			array(
				'with_label'   => __( 'With Label', 'newspanda' ),
				'with_icon'   => __( 'With Icon', 'newspanda' ),
				'with_avatar_image'   => __( 'With Avatar Image', 'newspanda' ),

			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'newspanda_date_meta' ) ) :
	/**
	 * Returns title Alignments
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newspanda_date_meta() {
		$options = apply_filters(
			'newspanda_date_meta',
			array(
				'with_label'   => __( 'With Label', 'newspanda' ),
				'with_icon'   => __( 'With Icon', 'newspanda' ),

			)
		);
		return $options;
	}
endif;

if ( ! function_exists( 'newspanda_get_sidebar_layouts' ) ) :
	/**
	 * Returns general layout options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newspanda_get_sidebar_layouts() {
		$options = apply_filters(
			'newspanda_sidebar_layouts',
			array(
				'left-sidebar'      => array(
					'url'   => get_template_directory_uri() . '/assets/images/left-sidebar.webp',
					'label' => esc_html__( 'Left Sidebar', 'newspanda' ),
				),
				'right-sidebar'     => array(
					'url'   => get_template_directory_uri() . '/assets/images/right-sidebar.webp',
					'label' => esc_html__( 'Right Sidebar', 'newspanda' ),
				),
				'no-sidebar'        => array(
					'url'   => get_template_directory_uri() . '/assets/images/no-sidebar.webp',
					'label' => esc_html__( 'No Sidebar - Wide', 'newspanda' ),
				),
			)
		);
		return $options;
	}
endif;


if ( ! function_exists( 'newspanda_get_social_links_styles' ) ) :
	/**
	 * Returns social links styles options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function newspanda_get_social_links_styles() {
		$options = apply_filters(
			'newspanda_social_links_styles',
			array(
				'style_1' => __( 'Style 1', 'newspanda' ),
				'style_2' => __( 'Style 2', 'newspanda' ),
				'style_3' => __( 'Style 3', 'newspanda' ),
				'style_4' => __( 'Style 4', 'newspanda' ),
			)
		);
		return $options;
	}
endif;
