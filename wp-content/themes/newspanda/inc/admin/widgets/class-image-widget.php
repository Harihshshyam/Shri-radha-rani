<?php
if (!defined('ABSPATH')) {
    exit;
}

class NewsPanda_Image_Widget extends NewsPanda_Widget_Base
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->widget_cssclass = 'newspanda-image-widget';
        $this->widget_description = __("The Image Widget offers versatile design with two style variations. Effortlessly incorporate images, titles, descriptions, and links for dynamic and engaging content presentation in a single widget.", 'newspanda');
        $this->widget_id = 'newspanda_image_widget';
        $this->widget_name = __('NewsPanda: Image Widget', 'newspanda');
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
                'label' => __('Widget Description', 'newspanda'),
            ),
            'bg_image' => array(
                'type' => 'image',
                'label' => __('Background Image', 'newspanda'),
            ),
            'btn_text' => array(
                'type' => 'text',
                'label' => __('Button Text', 'newspanda'),
            ),
            'btn_link' => array(
                'type' => 'url',
                'label' => __('Link to URL', 'newspanda'),
                'desc' => __('Please make sure to provide a complete URL that includes either "http://" or "https://" to ensure the widget operates correctly.', 'newspanda'),
            ),
            'link_target' => array(
                'type' => 'checkbox',
                'label' => __('Open Link in new Tab', 'newspanda'),
                'std' => true,
            ),
            'text_alignment' => array(
                'type' => 'select',
                'label' => __('Text Alignment', 'newspanda'),
                'options' => array(
                    'align-text-center' => __('Center', 'newspanda'),
                    'align-text-left' => __('Left', 'newspanda'),
                    'align-text-right' => __('Right', 'newspanda'),
                ),
                'std' => 'align-text-center',
            ),
            'style' => array(
                'type' => 'select',
                'label' => __('Style', 'newspanda'),
                'options' => array(
                    'style_1' => __('Style 1', 'newspanda'),
                    'style_2' => __('Style 2', 'newspanda'),
                ),
                'std' => 'style_1',
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
        $class = '';
        ob_start();
        echo $args['before_widget'];
        $class .= $instance['style'];
        $class .= ' ' . $instance['text_alignment'];
        do_action('newspanda_before_image');
        ?>
        <div class="wpi-image-widget <?php echo esc_attr($class); ?>">
            <div class="image-widget-background">
                <?php echo wp_get_attachment_image($instance['bg_image'], 'full'); ?>
            </div>
            <div class="image-widget-description">
                <?php if ($instance['title']) : ?>
                    <h3 class="image-widget-title">
                        <?php echo esc_html($instance['title']); ?>
                    </h3>
                <?php endif; ?>
                <?php if ($instance['title_text']) : ?>
                    <div class="image-widget-details">
                        <?php echo esc_html($instance['title_text']); ?>
                    </div>
                <?php endif; ?>
                <?php if ($instance['btn_text']) : ?>
                    <a href="<?php echo ($instance['btn_link']) ? esc_url($instance['btn_link']) : ''; ?>"
                       target="<?php echo ($instance['link_target']) ? "_blank" : '_self'; ?>"
                       class="wpi-button wpi-button-small wpi-button-primary">
                        <?php echo esc_html(($instance['btn_text'])); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <?php
        do_action('newspanda_after_image');
        echo $args['after_widget'];
        echo ob_get_clean();
    }
}