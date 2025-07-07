<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class NewsPanda_Social_Menu extends NewsPanda_Widget_Base {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->widget_cssclass    = 'widget_newspanda_social_menu';
		$this->widget_description = __( 'Displays social menu if you have set it.', 'newspanda' );
		$this->widget_id          = 'newspanda_social_menu';
		$this->widget_name        = __( 'NewsPanda: Social Menu', 'newspanda' );
		$this->settings = $this->get_widget_settings();

		parent::__construct();

	}

	/**
	 * Define widget settings.
	 */
	protected function get_widget_settings()
	{
	    return array(
			'title'      => array(
				'type'  => 'text',
				'label' => __( 'Title', 'newspanda' ),
			),
			'color'      => array(
				'type'    => 'select',
				'label'   => __( 'Social Links Color', 'newspanda' ),
				'options' => array(
					'has-brand-color' => __( 'Use Brand Color', 'newspanda' ),
					'has-brand-background' => __( 'Use Brand Background', 'newspanda' ),
				),
				'std'     => 'has-brand-background',
			),
			'style'      => array(
				'type'    => 'select',
				'label'   => __( 'Style', 'newspanda' ),
				'options' => newspanda_get_social_links_styles(),
				'std'     => 'style_1',
			),
			'show_label' => array(
				'type'  => 'checkbox',
				'label' => __( 'Show Label', 'newspanda' ),
				'std'   => false,
			),
			'column'     => array(
				'type'    => 'select',
				'label'   => __( 'Column', 'newspanda' ),
				'desc'    => __( 'Will only work when label is enabled from above and there is enough space to display the columns.', 'newspanda' ),
				'options' => array(
					'one'   => __( 'One', 'newspanda' ),
					'two'   => __( 'Two', 'newspanda' ),
					'three' => __( 'Three', 'newspanda' ),
				),
				'std'     => 'two',
			),
			'align'      => array(
				'type'    => 'select',
				'label'   => __( 'Alignment', 'newspanda' ),
				'options' => array(
					'left'   => __( 'Left', 'newspanda' ),
					'center' => __( 'Center', 'newspanda' ),
					'right'  => __( 'Right', 'newspanda' ),
				),
				'std'     => 'left',
			),
	    );
	}

	/**
	 * Output widget.
	 *
	 * @see WP_Widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		ob_start();

		$this->widget_start( $args, $instance );

		do_action( 'newspanda_before_social_menu' );

		$wrapper_class = isset( $instance['align'] ) ? $instance['align'] : $this->settings['align']['std'];

		?>
		<div class="wpi-social-widget is-aligned-<?php echo esc_attr( $wrapper_class ); ?>">
			<?php

			if ( has_nav_menu( 'social' ) ) {

				$social_link_class  = 'widget-social-icons reset-list-style social-icons ';
				$social_link_style  = isset( $instance['style'] ) ? $instance['style'] : $this->settings['style']['std'];
				$social_link_color  = isset( $instance['color'] ) ? $instance['color'] : $this->settings['color']['std'];

				$social_link_class .= $social_link_style . ' ' . $social_link_color;

				$label_class = 'screen-reader-text';
				$show_label  = isset( $instance['show_label'] ) ? $instance['show_label'] : $this->settings['show_label']['std'];
				if ( $show_label ) {
					$label_class        = 'social-widget-label';
					$social_link_class .= ' has-label-enabled';
					$column             = isset( $instance['column'] ) ? $instance['column'] : $this->settings['column']['std'];
					$social_link_class .= ' is-column-' . $column;
				}

				wp_nav_menu(
					array(
						'theme_location'  => 'social',
						'container_class' => 'social-widget-container',
						'fallback_cb'     => false,
						'depth'           => 1,
						'menu_class'      => $social_link_class,
						'link_before'     => '<span class="' . $label_class . '">',
						'link_after'      => '</span>',
					)
				);
			} else {
				esc_html_e( 'Social menu is not set. You need to create menu and assign it to Social Menu on Menu Settings.', 'newspanda' );
			}
			?>
		</div>
		<?php

		do_action( 'newspanda_after_social_menu' );

		$this->widget_end( $args );

		echo ob_get_clean();
	}
}
