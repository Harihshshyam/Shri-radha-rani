<?php
/**
 * Elementor Widget Base class.
 *
 * @package    NewsPanda
 * @since      NewsPanda 1.0.0
 */
// Declare required namespace.
namespace elementor\widgets;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}
/**
 * Elementor Widget Base class.
 *
 * Class NewsPanda_Elementor_Widget_Base
 */
abstract class NewsPanda_Elementor_Widget_Base extends Widget_Base
{
    /**
     * Post number.
     *
     * @var int
     */
    public $post_number = 5;
    /**
     * Register NewsPanda_Elementor_Widget_Base widget controls.
     *
     * @access protected
     */
    protected function register_controls()
    {
        // Controls related to widget title section.
        $this->widget_title_controls();
        // Controls related to widget title style section.
        $this->widget_title_style_controls();
        // Controls related to posts section.
        $this->posts_controls();
        // Controls related to posts filter section.
        $this->posts_filter_controls();
    }
    /**
     * Controls related to widget title section.
     */
    public function widget_title_controls()
    {
        // Widget title section.
        $this->start_controls_section(
            'section_newspanda_widget_title_manage',
            array(
                'label' => esc_html__('Block Title', 'newspanda'),
            )
        );
        // Widget title.
        $this->add_control(
            'widget_title',
            array(
                'label' => esc_html__('Title:', 'newspanda'),
                'type' => Controls_Manager::TEXT,
                'placeholder' => esc_html__('Add your custom block title', 'newspanda'),
                'label_block' => true,
            )
        );
        // Extra option control related to widget title section.
        $this->widget_title_controls_extra();
        $this->end_controls_section();
    }
    /**
     * Extra option control related to widget title section.
     */
    public function widget_title_controls_extra()
    {
    }
    /**
     * Controls related to widget title style section.
     */
    public function widget_title_style_controls()
    {
        // Widget design section.
        $this->start_controls_section(
            'section_newspanda_widget_title_design_manage',
            array(
                'label' => esc_html__('Widget Title', 'newspanda'),
                'tab' => Controls_Manager::TAB_STYLE,
            )
        );
        $this->add_control(
            'widget_title_color',
            array(
                'label' => esc_html__('Color:', 'newspanda'),
                'type' => Controls_Manager::COLOR,
                'default' => '#2eb85d',
                'selectors' => array(
                    '{{WRAPPER}} .newspanda-element-wrapper .module-title span' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} .newspanda-element-wrapper .module-title' => 'border-bottom-color: {{VALUE}}',
                ),
            )
        );
        $this->add_control(
            'widget_title_text_color',
            array(
                'label' => esc_html__('Text Color:', 'newspanda'),
                'type' => Controls_Manager::COLOR,
                'default' => '#ffffff',
                'selectors' => array(
                    '{{WRAPPER}} .newspanda-element-wrapper .module-title span' => 'color: {{VALUE}}',
                ),
            )
        );
        $this->end_controls_section();
        // Widget design section.
        $this->start_controls_section(
            'section_newspanda_widget_font_design_manage',
            array(
                'label' => esc_html__('Widget Font', 'newspanda'),
                'tab' => Controls_Manager::TAB_STYLE,
            )
        );
        $this->widget_title_font_controls();
        $this->add_responsive_control(
            'meta_font_size',
            [
                'label' => esc_html__('Meta Font Size', 'newspanda') . ' (px)',
                'type' => Controls_Manager::NUMBER,
                'placeholder' => 20,
                'selectors' => [
                    '{{WRAPPER}} > .entry-meta' => 'font-size: {{VALUE}}px', //Need the full path for exclude the inner section
                ],
            ]
        );
        $this->add_responsive_control(
            'content_font_size',
            [
                'label' => esc_html__('Content Font Size', 'newspanda') . ' (px)',
                'type' => Controls_Manager::NUMBER,
                'placeholder' => 20,
                'selectors' => [
                    '{{WRAPPER}} > .entry-content' => 'font-size: {{VALUE}}px', //Need the full path for exclude the inner section
                ],
            ]
        );
        // Extra option control related to widget title style section.
        $this->widget_title_style_controls_extra();
        $this->end_controls_section();
    }
    /**
     * Extra option control related to widget title style section.
     */
    public function widget_title_font_controls()
    {
    }
    /**
     * Extra option control related to widget title style section.
     */
    public function widget_title_style_controls_extra()
    {
    }
    /**
     * Controls related to posts section.
     */
    public function posts_controls()
    {
        // Widget posts section.
        $this->start_controls_section(
            'section_newspanda_posts_manage',
            array(
                'label' => esc_html__('Posts', 'newspanda'),
            )
        );
        $this->add_control(
            'posts_number',
            array(
                'label' => esc_html__('Number of posts to display:', 'newspanda'),
                'type' => Controls_Manager::TEXT,
                'default' => $this->post_number,
            )
        );
        $this->add_control(
            'offset_posts_number',
            array(
                'label' => esc_html__('Offset Posts:', 'newspanda'),
                'type' => Controls_Manager::TEXT,
            )
        );

        $this->posts_controls_excerpt();

        $this->end_controls_section();
        $this->start_controls_section(
            'section_newspanda_posts_category',
            array(
                'label' => esc_html__('Posts Category', 'newspanda'),
            )
        );
        $this->add_control(
            'enable_category_meta',
            [
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label' => esc_html__('Category Meta', 'newspanda'),
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'category_meta_text',
            array(
                'label' => esc_html__('Category Title', 'newspanda'),
                'type' => Controls_Manager::TEXT,
                'default' => '',
            )
        );
        $this->add_control(
            'display_category_option',
            [
                'type' => \Elementor\Controls_Manager::SELECT,
                'label' => esc_html__('Category Option', 'newspanda'),
                'options' => [
                    'none' => esc_html__('None', 'newspanda'),
                    'has-background' => esc_html__('Has background', 'newspanda'),
                    'has-text-color' => esc_html__('Has text color', 'newspanda'),
                ],
                'default' => 'has-text-color',
            ]
        );
        $this->add_control(
            'number_of_cat',
            array(
                'label' => esc_html__('Number of Category', 'newspanda'),
                'type' => Controls_Manager::TEXT,
                'default' => '1',
            )
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section_newspanda_posts_author',
            array(
                'label' => esc_html__('Posts Author', 'newspanda'),
            )
        );
        $this->add_control(
            'enable_author_meta',
            [
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label' => esc_html__('Author Meta', 'newspanda'),
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'display_author_option',
            [
                'type' => \Elementor\Controls_Manager::SELECT,
                'label' => esc_html__('Author Option', 'newspanda'),
                'options' => [
                    'with_label' => esc_html__('With Label', 'newspanda'),
                    'with_icon' => esc_html__('With Icon', 'newspanda'),
                    'with_avatar_image' => esc_html__('With Avatar Image', 'newspanda'),
                ],
                'default' => 'with_icon',
            ]
        );
        $this->add_control(
            'author_text',
            array(
                'label' => esc_html__('Author Text', 'newspanda'),
                'type' => Controls_Manager::TEXT,
                'default' => 'By',
            )
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section_newspanda_posts_date',
            array(
                'label' => esc_html__('Posts Date', 'newspanda'),
            )
        );
        $this->add_control(
            'enable_date_meta',
            [
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label' => esc_html__('Date Meta', 'newspanda'),
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'date_format',
            [
                'type' => \Elementor\Controls_Manager::SELECT,
                'label' => esc_html__('Date Format', 'newspanda'),
                'options' => [
                    'format_1' => esc_html__('Format 1', 'newspanda'),
                    'format_2' => esc_html__('Format 2', 'newspanda'),
                ],
                'default' => 'format_1',
            ]
        );
        // Extra option control related to posts section.
        $this->posts_controls_extra();
        $this->end_controls_section();
    }
    /**
     * Extra option control related to posts section.
     */
    public function posts_controls_excerpt()
    {
    }
    /**
     * Extra option control related to posts section.
     */
    public function posts_controls_extra()
    {
    }
    /**
     * Controls related to posts filter section.
     */
    public function posts_filter_controls()
    {
        // Posts filter section.
        $this->start_controls_section(
            'section_newspanda_posts_filter_manage',
            array(
                'label' => esc_html__('Filter', 'newspanda'),
            )
        );
        $this->add_control(
            'display_type',
            array(
                'label' => esc_html__('Display the posts from:', 'newspanda'),
                'type' => Controls_Manager::SELECT,
                'default' => 'latest',
                'options' => array(
                    'latest' => esc_html__('Latest Posts', 'newspanda'),
                    'categories' => esc_html__('Categories', 'newspanda'),
                ),
            )
        );
        $this->add_control(
            'categories_selected',
            array(
                'label' => esc_html__('Select categories:', 'newspanda'),
                'type' => Controls_Manager::SELECT,
                'options' => newspanda_elementor_categories(),
                'condition' => array(
                    'display_type' => 'categories',
                ),
            )
        );
        // Extra option control related to posts filter section.
        $this->posts_filter_controls_extra();
        $this->end_controls_section();
    }
    /**
     * Extra option control related to posts filter section.
     */
    public function posts_filter_controls_extra()
    {
    }
    /**
     * Query of the posts within the widgets.
     *
     * @param int $posts_number The number of posts to display.
     * @param string $display_type The display posts from the widget setting.
     * @param int $categories_selected The category id of the widget setting.
     * @param int $offset_posts_number The offset posts number of the widget setting.
     *
     * @return \WP_Query
     */
    public function query_posts($posts_number, $display_type, $categories_selected, $offset_posts_number)
    {
        $query_args = array(
            'posts_per_page' => $posts_number,
            'post_type' => 'post',
            'ignore_sticky_posts' => true,
            'no_found_rows' => true,
        );
        // Display from the category selected.
        if ('categories' == $display_type) {
            $query_args['category__in'] = $categories_selected;
        }
        // Offset the posts.
        if (!empty($offset_posts_number)) {
            $query_args['offset'] = $offset_posts_number;
        }
        // Start the WP_Query Object/Class.
        $get_featured_posts = new \WP_Query($query_args);
        return $get_featured_posts;
    }
    /**
     * Displays the widget title.
     *
     * @param string $widget_title The available widget title.
     */
    public function widget_title($widget_title)
    {
        // Return if $widget_title is empty.
        if (!$widget_title) {
            return;
        }
        ?>
        <div class="elementor-entry-title-wrap">
            <h4 class="module-title">
                <span><?php echo esc_html($widget_title); ?></span>
            </h4>
        </div><!-- elementor-entry-title-wrap -->
        <?php
    }
    /**
     * Displays the post title within the widgets.
     */
    public function the_title($font_class = null)
    {
        ?>
        <h3 class="elementor-entry-title entry-title <?php echo $font_class; ?>">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <?php
    }
    /**
     * Displays the featured image of the post within the widgets.
     *
     * @param string $size The featured image size.
     */
    public function the_post_thumbnail($size = '')
    {
        ?>
        <a href="<?php the_permalink(); ?>" class="post-thumbnail">
            <?php the_post_thumbnail($size); ?>
        </a>
        <?php
    }
}
