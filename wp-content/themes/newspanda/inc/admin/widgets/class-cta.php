<?php
if (!defined('ABSPATH')) {
    exit;
}

class NewsPanda_CTA extends NewsPanda_Widget_Base
{
    public function __construct()
    {
        $this->widget_cssclass = 'widget_newspanda_cat';
        $this->widget_description = __("Displays call to action button and text with background", 'newspanda');
        $this->widget_id = 'newspanda_cat';
        $this->widget_name = __('NewsPanda: CTA', 'newspanda');
        $this->settings = $this->get_widget_settings();
        parent::__construct();
    }

    /**
     * Define widget settings.
     */
    protected function get_widget_settings()
    {
        return array(
            'title' => array(
                'type' => 'text',
                'label' => __('Widget Title', 'newspanda'),
            ),
            'title_text' => array(
                'type' => 'text',
                'label' => __('CTA Title', 'newspanda'),
            ),
            'font_size' => array(
                'type' => 'select',
                'label' => __('Heading font size', 'newspanda'),
                'options' => array(
                    'entry-title-small' => __('Small', 'newspanda'),
                    'entry-title-medium' => __('Medium', 'newspanda'),
                    'entry-title-big' => __('Big', 'newspanda'),
                    'entry-title-large' => __('Large', 'newspanda'),
                ),
                'std' => 'entry-title-large',
            ),
            'font_style' => array(
                'type' => 'select',
                'label' => __('Heading font style', 'newspanda'),
                'options' => array(
                    'entry-title-normal' => __('Normal', 'newspanda'),
                    'entry-title-italic' => __('Italic', 'newspanda'),
                ),
                'std' => 'entry-title-normal',
            ),
            'text_alignment' => array(
                'type' => 'select',
                'label' => __('Text Alignment', 'newspanda'),
                'options' => array(
                    'align-text-center' => __('Center', 'newspanda'),
                    'align-text-left' => __('Left', 'newspanda'),
                    'align-text-right' => __('Right', 'newspanda'),
                ),
                'std' => 'align-text-left',
            ),
            'description' => array(
                'type' => 'textarea',
                'label' => __('CTA Description', 'newspanda'),
                'rows' => 10,
            ),
            'button_text_1' => array(
                'type' => 'text',
                'label' => __('Button Text - 1', 'newspanda'),
            ),
            'button_link_1' => array(
                'type' => 'url',
                'label' => __('Link to url - 1', 'newspanda'),
                'desc' => __('Enter a proper url with http: OR https:', 'newspanda'),
            ),
            'link_target_1' => array(
                'type' => 'checkbox',
                'label' => __('Open Link in new Tab - 1', 'newspanda'),
                'std' => true,
            ),
            'button_text_2' => array(
                'type' => 'text',
                'label' => __('Button Text - 2', 'newspanda'),
            ),
            'button_link_2' => array(
                'type' => 'url',
                'label' => __('Link to url - 2', 'newspanda'),
                'desc' => __('Enter a proper url with http: OR https:', 'newspanda'),
            ),
            'link_target_2' => array(
                'type' => 'checkbox',
                'label' => __('Open Link in new Tab - 2', 'newspanda'),
                'std' => true,
            ),
            'widget_settings' => array(
                'type' => 'heading',
                'label' => __('Widget Settings', 'newspanda'),
            ),
            'display_layout' => array(
                'type' => 'select',
                'label' => __('Display Layout', 'newspanda'),
                'options' => array(
                    'display-regular-layout' => __('Regular layout', 'newspanda'),
                    'display-fullwidth-layout' => __('Full Width Layout', 'newspanda'),
                ),
                'std' => 'display-regular-layout',
            ),
            'vertical_alignment' => array(
                'type' => 'select',
                'label' => __('Vertical Alignment', 'newspanda'),
                'options' => array(
                    'vertical-align-top' => __('Top', 'newspanda'),
                    'vertical-align-middle' => __('Middle', 'newspanda'),
                    'vertical-align-bottom' => __('Bottom', 'newspanda'),
                ),
                'std' => 'vertical-align-middle',
            ),
            'text_color' => array(
                'type' => 'color',
                'label' => __('Text Color', 'newspanda'),
                'std' => '#ffffff',
            ),
            'bg_color' => array(
                'type' => 'color',
                'label' => __('Background Color', 'newspanda'),
                'std' => '#000000',
                'desc' => __('Will be overridden if used background image.', 'newspanda'),
            ),
            'bg_image' => array(
                'type' => 'image',
                'label' => __('Background Image', 'newspanda'),
            ),
            'enable_fixed_bg' => array(
                'type' => 'checkbox',
                'label' => __('Enable Fixed Background Image', 'newspanda'),
                'std' => false,
            ),
            'bg_overlay_color' => array(
                'type' => 'color',
                'label' => __('Overlay Color', 'newspanda'),
                'std' => '#000000',
            ),
            'overlay_opacity' => array(
                'type' => 'number',
                'step' => 10,
                'min' => 0,
                'max' => 100,
                'std' => 50,
                'label' => __('Overlay Opacity', 'newspanda'),
            ),
            'height' => array(
                'type' => 'number',
                'step' => 1,
                'min' => 150,
                'max' => '',
                'std' => 560,
                'label' => __('Height (px)', 'newspanda'),
                'desc' => __('Works when there is either a background color or image.', 'newspanda'),
            ),
        );
    }

    /**
     * Output widget.
     *
     * @param array $args
     * @param array $instance
     * @see WP_Widget
     *
     */
    public function widget($args, $instance)
    {
        ob_start();
        $style = '';
        $font_size = !empty($instance['font_size']) ? $instance['font_size'] : $this->settings['font_size']['std'];
        $font_style = !empty($instance['font_style']) ? $instance['font_style'] : $this->settings['font_style']['std'];
        $text_alignment = !empty($instance['text_alignment']) ? $instance['text_alignment'] : $this->settings['text_alignment']['std'];
        $vertical_alignment = !empty($instance['vertical_alignment']) ? $instance['vertical_alignment'] : $this->settings['vertical_alignment']['std'];
        $class = isset($instance['display_layout']) ? $instance['display_layout'] : $this->settings['display_layout']['std'];
        $image_enabled = false;
        echo $args['before_widget'];
        $bg_color = isset($instance['bg_color']) ? $instance['bg_color'] : $this->settings['bg_color']['std'];
        $text_color = isset($instance['text_color']) ? $instance['text_color'] : $this->settings['text_color']['std'];
        $style = 'background-color:' . esc_attr($bg_color) . ';';
        $style .= '--cta-text-color:' . esc_attr($text_color) . ';';
        $height = isset($instance['height']) ? $instance['height'] : $this->settings['height']['std'];
        $style .= 'min-height:' . esc_attr($height) . 'px;';
        if ((isset($instance['bg_image']) && 0 != $instance['bg_image'])) {
            $image_enabled = true;
            if ($instance['enable_fixed_bg']) {
                $class .= ' background-image-fixed';
            }
        }
        if ($image_enabled) {
            $class .= ' widget-has-background entry-background-image';
        }
        if ($vertical_alignment) {
            $class .= ' ' . $vertical_alignment;
        }
        do_action('newspanda_before_cta');
        ?>
        <div class="wpi-cta-widget wpi-special-widget <?php echo esc_attr($class); ?>" style="<?php echo esc_attr($style); ?>">
            <?php
            if ($image_enabled) {
                $overlay_style = 'background-color:' . $instance['bg_overlay_color'] . ';';
                $overlay_style .= 'opacity:' . ($instance['overlay_opacity'] / 100) . ';';
                ?>
                <span aria-hidden="true" class="background-image-overlay" style="<?php echo esc_attr($overlay_style); ?>"></span>
                <?php echo wp_get_attachment_image($instance['bg_image'], 'full'); ?>
                <?php
            }
            ?>
            <div class="widget-wrapper <?php echo $text_alignment; ?>">
                <?php if ($instance['title']) : ?>
                    <h2 class="widget-title">
                        <?php echo esc_html($instance['title']); ?>
                    </h2>
                <?php endif; ?>

                <?php if (isset($instance['title_text']) && $instance['title_text']) : ?>
                    <h2 class="entry-title <?php echo $font_size . ' ' . $font_style; ?>">
                        <?php echo esc_html($instance['title_text']); ?>
                    </h2>
                <?php endif; ?>
                <?php if (isset($instance['description']) && $instance['description']) : ?>
                    <?php echo wpautop(wp_kses_post($instance['description'])); ?>
                <?php endif; ?>
                <?php
                if ((isset($instance['button_text_1']) && $instance['button_text_1']) || (isset($instance['button_text_2']) && $instance['button_text_2'])):
                    ?>
                    <div class="wpi-button-group">
                        <?php if (isset($instance['button_text_1']) && $instance['button_text_1']): ?>
                            <a href="<?php echo esc_url($instance['button_link_1'] ?? ''); ?>" target="<?php echo isset($instance['link_target_1']) && $instance['link_target_1'] ? '_blank' : '_self'; ?>" class="wpi-button wpi-button-small wpi-button-primary">
                                <?php echo esc_html($instance['button_text_1']); ?>
                            </a>
                        <?php endif; ?>
                        <?php if (isset($instance['button_text_2']) && $instance['button_text_2']): ?>
                            <a href="<?php echo esc_url($instance['button_link_2'] ?? ''); ?>" target="<?php echo isset($instance['link_target_2']) && $instance['link_target_2'] ? '_blank' : '_self'; ?>" class="wpi-button wpi-button-small wpi-button-outline">
                                <?php echo esc_html($instance['button_text_2']); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php
        do_action('newspanda_after_cta');
        echo $args['after_widget'];
        echo ob_get_clean();
    }
}