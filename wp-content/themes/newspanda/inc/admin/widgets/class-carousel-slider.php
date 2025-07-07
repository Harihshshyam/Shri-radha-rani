<?php
if (!defined('ABSPATH')) {
    exit;
}

class NewsPanda_Carousel_Slider_Post extends NewsPanda_Widget_Base
{
    public function __construct()
    {
        $this->widget_cssclass = 'newspanda-slider-widget';
        $this->widget_description = __("Displays recent posts in a carousel slider with an image", 'newspanda');
        $this->widget_id = 'newspanda_carousel_slider_posts';
        $this->widget_name = __('NewsPanda: Carousel Posts', 'newspanda');
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
                'label' => __('Title', 'newspanda'),
                'std' => __('Carousel Posts', 'newspanda'),
            ),
            'display_layout' => array(
                'type' => 'select',
                'label' => __('Display Layout', 'newspanda'),
                'options' => array(
                    'display-regular-layout' => __('Wrapper Layout', 'newspanda'),
                    'display-fullwidth-layout' => __('Full Width Layout', 'newspanda'),
                ),
                'std' => 'display-regular-layout',
                'desc' => __('Works exclusively in the fullwidth widget area', 'newspanda'),
            ),
            'vertical_alignment' => array(
                'type' => 'select',
                'label' => __('Vertical Alignment', 'newspanda'),
                'options' => array(
                    'vertical-align-top' => __('Top', 'newspanda'),
                    'vertical-align-middle' => __('Middle', 'newspanda'),
                    'vertical-align-bottom' => __('Bottom', 'newspanda'),
                ),
                'std' => 'vertical-align-bottom',
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
            'display_style' => array(
                'type' => 'select',
                'label' => __('Display Style', 'newspanda'),
                'options' => array(
                    'wpi-post-regular' => __('Regular View', 'newspanda'),
                    'wpi-slides-card' => __('Card View', 'newspanda'),
                ),
                'std' => 'wpi-post-regular',
            ),
            'category' => array(
                'type' => 'dropdown-taxonomies',
                'label' => __('Select Category', 'newspanda'),
                'args' => array(
                    'taxonomy' => 'category',
                    'class' => 'widefat',
                    'hierarchical' => true,
                    'show_count' => 1,
                    'show_option_all' => __('&mdash; Select &mdash;', 'newspanda'),
                ),
            ),
            'number' => array(
                'type' => 'number',
                'step' => 1,
                'min' => 1,
                'std' => 7,
                'label' => __('Total Number of posts to slider', 'newspanda'),
            ),
            'number_of_slides' => array(
                'type' => 'number',
                'step' => 1,
                'min' => 2,
                'max' => 5,
                'std' => 3,
                'label' => __('Number of Slides to show', 'newspanda'),
            ),
            'offset' => array(
                'type' => 'number',
                'step' => 1,
                'min' => 0,
                'max' => '',
                'std' => '',
                'label' => __('Offset', 'newspanda'),
                'desc' => __('Offsets are used to skip a certain number of WordPress posts before starting output. Set it to 0 if you do not wish to use this feature.', 'newspanda'),
            ),
            'font_size' => array(
                'type' => 'select',
                'label' => __('Entry title font size', 'newspanda'),
                'options' => array(
                    'entry-title-small' => __('Small', 'newspanda'),
                    'entry-title-medium' => __('Medium', 'newspanda'),
                    'entry-title-big' => __('Big', 'newspanda'),
                    'entry-title-large' => __('Large', 'newspanda'),
                ),
                'std' => 'entry-title-medium',
            ),
            'font_style' => array(
                'type' => 'select',
                'label' => __('Entry title font style', 'newspanda'),
                'options' => array(
                    'entry-title-normal' => __('Normal', 'newspanda'),
                    'entry-title-italic' => __('Italic', 'newspanda'),
                ),
                'std' => 'entry-title-normal',
            ),
            'image_size' => array(
                'type' => 'select',
                'label' => __('Image size', 'newspanda'),
                'options' => array(
                    'medium' => __('Medium', 'newspanda'),
                    'medium_large' => __('Medium Large', 'newspanda'),
                    'large' => __('Large', 'newspanda'),
                    'full' => __('Full', 'newspanda'),
                ),
                'std' => 'large',

            ),
            'image_hover_effects' => array(
                'type' => 'select',
                'label' => __('Image hover effects', 'newspanda'),
                'options' => array(
                    'hover-effect-shine' => __('Shine', 'newspanda'),
                    'hover-effect-slide' => __('Slide', 'newspanda'),
                    'hover-effect-zoom' => __('Zoom', 'newspanda'),
                ),
                'std' => 'hover-effect-shine',
            ),
            'show_overlay' => array(
                'type' => 'checkbox',
                'label' => __('Enable background overlay', 'newspanda'),
                'std' => true,
            ),
            'image_overlay_style' => array(
                'type' => 'select',
                'label' => __('Background overlay style', 'newspanda'),
                'options' => array(
                    'regular' => __('Regular', 'newspanda'),
                    'gradient' => __('Gradient', 'newspanda'),
                ),
                'std' => 'gradient',
            ),
            'height' => array(
                'type' => 'number',
                'step' => 1,
                'min' => 150,
                'max' => '',
                'std' => 440,
                'label' => __('Height (px)', 'newspanda'),
                'desc' => __('Change Height of Slides.', 'newspanda'),
            ),
            'arrows' => array(
                'type' => 'checkbox',
                'label' => __('Enable Arrows', 'newspanda'),
                'std' => true,
            ),
            'dots' => array(
                'type' => 'checkbox',
                'label' => __('Enable Dots', 'newspanda'),
                'std' => true,
            ),
            'autoplay' => array(
                'type' => 'checkbox',
                'label' => __('Autoplay', 'newspanda'),
                'std' => true,
            ),
            'centered' => array(
                'type' => 'checkbox',
                'label' => __('Centered Mode', 'newspanda'),
                'std' => false,
            ),
            'spacebetween' => array(
                'type' => 'number',
                'step' => 1,
                'min' => 0,
                'max' => '40',
                'std' => 20,
                'label' => __('Space Between', 'newspanda'),
                'desc' => __('Distance between slides in px.', 'newspanda'),
            ),

            'orderby' => array(
                'type' => 'select',
                'std' => 'date',
                'label' => __('Order by', 'newspanda'),
                'options' => array(
                    'date' => __('Date', 'newspanda'),
                    'ID' => __('ID', 'newspanda'),
                    'title' => __('Title', 'newspanda'),
                    'rand' => __('Random', 'newspanda'),
                ),
            ),
            'order' => array(
                'type' => 'select',
                'std' => 'desc',
                'label' => __('Order', 'newspanda'),
                'options' => array(
                    'asc' => __('ASC', 'newspanda'),
                    'desc' => __('DESC', 'newspanda'),
                ),
            ),
            'show_date' => array(
                'type' => 'checkbox',
                'label' => __('Show Date', 'newspanda'),
                'std' => true,
            ),
            'date_format' => array(
                'type' => 'select',
                'label' => __('Date Format', 'newspanda'),
                'options' => array(
                    'format_1' => __('Format 1', 'newspanda'),
                    'format_2' => __('Format 2', 'newspanda'),
                ),
                'std' => 'format_2',
            ),
            'show_author' => array(
                'type' => 'checkbox',
                'label' => __('Show Author', 'newspanda'),
                'std' => true,
            ),
            'display_author_option' => array(
                'type' => 'select',
                'label' => __('Author Option', 'newspanda'),
                'options' => array(
                    'with_label' => __('With Label', 'newspanda'),
                    'with_icon' => __('With Icon', 'newspanda'),
                    'with_avatar_image' => __('With Avatar Image', 'newspanda'),
                ),
                'std' => 'with_icon',
            ),
            'author_text' => array(
                'type' => 'text',
                'label' => __('Author Text', 'newspanda'),
                'std' => __('By:', 'newspanda'),
                'desc' => __('This only works when the "With Label" option is selected under "Author Option"', 'newspanda'),
            ),
            'show_category' => array(
                'type' => 'checkbox',
                'label' => __('Show Category', 'newspanda'),
                'std' => true,
            ),
            'category_text' => array(
                'type' => 'text',
                'label' => __('Category Text', 'newspanda'),
            ),
            'display_category_option' => array(
                'type' => 'select',
                'label' => __('Category Option', 'newspanda'),
                'options' => array(
                    'none' => __('None', 'newspanda'),
                    'has-background' => __('Has background', 'newspanda'),
                    'has-text-color' => __('Has text color', 'newspanda'),
                ),
                'std' => 'has-text-color',
            ),
            'number_of_cat' => array(
                'type' => 'number',
                'step' => 1,
                'min' => 1,
                'std' => 1,
                'label' => __('Number of Category to show', 'newspanda'),
            ),
            'show_excerpt' => array(
                'type' => 'checkbox',
                'label' => __('Enable Excerpt', 'newspanda'),
                'std' => false,
            ),
        );
    }

    /**
     * Query the posts and return them.
     */
    protected function get_posts($args, $instance)
    {
        $query_args = array(
            'posts_per_page' => !empty($instance['number']) ? absint($instance['number']) : $this->settings['number']['std'],
            'post_status' => 'publish',
            'no_found_rows' => 1,
            'orderby' => !empty($instance['orderby']) ? sanitize_text_field($instance['orderby']) : $this->settings['orderby']['std'],
            'order' => !empty($instance['order']) ? sanitize_text_field($instance['order']) : $this->settings['order']['std'],
            'offset' => !empty($instance['offset']) ? sanitize_text_field($instance['offset']) : $this->settings['offset']['std'],
            'ignore_sticky_posts' => 1
        );

        if (isset($instance['offset']) && absint($instance['offset']) != 0) {
            $query_args['offset'] = absint($instance['offset']);
        }

        if (!empty($instance['category']) && -1 != $instance['category'] && 0 != $instance['category']) {
            $query_args['tax_query'][] = array(
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => $instance['category'],
            );
        }

        return new WP_Query(apply_filters('newspanda_carousel_slider_posts_query_args', $query_args));
    }

    /**
     * Output widget content.
     */
    public function widget($args, $instance)
    {
        $posts = $this->get_posts($args, $instance);

        if (!$posts->have_posts()) {
            return;
        }

        echo $args['before_widget'];
        do_action('newspanda_before_carousel_slider_posts_with_image');

        $class = isset($instance['display_layout']) ? $instance['display_layout'] : $this->settings['display_layout']['std'];

        $vertical_alignment = !empty($instance['vertical_alignment']) ? $instance['vertical_alignment'] : $this->settings['vertical_alignment']['std'];
        if ($vertical_alignment) {
            $class .= ' ' . $vertical_alignment;
        }

        $slider_nav = '';
        $data_slider = array();
        $number_of_slides = isset($instance['number_of_slides']) ? $instance['number_of_slides'] : $this->settings['number_of_slides']['std'];

        if ($number_of_slides == 2) {
            $data_slider['breakpoints'] = array(
                '576' => array(
                    'slidesPerView' => 2,
                ),
            );
        } elseif ($number_of_slides == 3) {
            $data_slider['breakpoints'] = array(
                '576' => array(
                    'slidesPerView' => 2,
                ),
                '768' => array(
                    'slidesPerView' => 3,
                ),
            );
        } elseif ($number_of_slides == 4) {
            $data_slider['breakpoints'] = array(
                '576' => array(
                    'slidesPerView' => 2,
                ),
                '768' => array(
                    'slidesPerView' => 3,
                ),
                '992' => array(
                    'slidesPerView' => 4,
                ),
            );
        } elseif ($number_of_slides == 5) {
            $data_slider['breakpoints'] = array(
                '576' => array(
                    'slidesPerView' => 2,
                ),
                '768' => array(
                    'slidesPerView' => 3,
                ),
                '992' => array(
                    'slidesPerView' => 4,
                ),
                '1200' => array(
                    'slidesPerView' => 5,
                ),
            );
        }

        $autoplay = isset($instance['autoplay']) ? $instance['autoplay'] : $this->settings['autoplay']['std'];
        if ($autoplay) :
            $data_slider['autoplay'] = array(
                'delay' => 4000,
            );
        endif;

        $centered = isset($instance['centered']) ? $instance['centered'] : $this->settings['centered']['std'];
        if ($centered) {
            $data_slider['centeredSlides'] = true;
        }
        $spacebetween = isset($instance['spacebetween']) ? $instance['spacebetween'] : $this->settings['spacebetween']['std'];
        if ($spacebetween) {
            $data_slider['spaceBetween'] = absint($spacebetween);
        }

        $dots = isset($instance['dots']) ? $instance['dots'] : $this->settings['dots']['std'];
        if ($dots) {
            $slider_nav .= '<div class="swiper-pagination wpi-swiper-pagination wpi-widget-pagination"></div>';
        }
        $arrows = isset($instance['arrows']) ? $instance['arrows'] : $this->settings['arrows']['std'];
        if ($arrows) {
            $slider_nav .= '<div class="widget-slider-next swiper-button-next"></div><div class="widget-slider-prev swiper-button-prev"></div>';
        }
        if (!empty($instance['title'])) {
            echo $args['before_title'] . esc_html($instance['title']) . $args['after_title'];
        } ?>
        <div class="wpi-carousel-widget <?php echo esc_attr($class); ?>">
            <div class="swiper wpi-swiper-init" data-slider='<?php echo esc_attr(json_encode($data_slider)); ?>'>
                <div class="swiper-wrapper">
                    <?php
                    while ($posts->have_posts()) : $posts->the_post();
                        $this->render_post($instance);
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
                <?php
                if ($slider_nav) :
                    echo $slider_nav;
                endif;
                ?>
            </div>
        </div>
        <?php
        do_action('newspanda_after_carousel_slider_posts_with_image');
        echo $args['after_widget'];
    }

    /**
     * Render a single post item.
     */
    protected function render_post($instance)
    {
        $style = '';
        $display_style = !empty($instance['display_style']) ? $instance['display_style'] : $this->settings['display_style']['std'];

        $image_size = !empty($instance['image_size']) ? $instance['image_size'] : $this->settings['image_size']['std'];
        $image_hover_effects = !empty($instance['image_hover_effects']) ? $instance['image_hover_effects'] : $this->settings['image_hover_effects']['std'];
        $show_overlay = !empty($instance['show_overlay']) ? $instance['show_overlay'] : $this->settings['show_overlay']['std'];
        $image_overlay_style = !empty($instance['image_overlay_style']) ? $instance['image_overlay_style'] : $this->settings['image_overlay_style']['std'];

        $text_alignment = !empty($instance['text_alignment']) ? $instance['text_alignment'] : $this->settings['text_alignment']['std'];
        $font_size = !empty($instance['font_size']) ? $instance['font_size'] : $this->settings['font_size']['std'];
        $font_style = !empty($instance['font_style']) ? $instance['font_style'] : $this->settings['font_style']['std'];
        $height = isset($instance['height']) ? $instance['height'] : $this->settings['height']['std'];

        $show_author = !empty($instance['show_author']) ? $instance['show_author'] : $this->settings['show_author']['std'];
        $author_text = !empty($instance['author_text']) ? $instance['author_text'] : $this->settings['author_text']['std'];
        $display_author_option = !empty($instance['display_author_option']) ? $instance['display_author_option'] : $this->settings['display_author_option']['std'];

        $category_text = !empty($instance['category_text']) ? $instance['category_text'] : '';
        $display_category_option = !empty($instance['display_category_option']) ? $instance['display_category_option'] : $this->settings['display_category_option']['std'];
        $number_of_cat = !empty($instance['number_of_cat']) ? absint($instance['number_of_cat']) : $this->settings['number_of_cat']['std'];
        $show_excerpt = !empty($instance['show_excerpt']) ? $instance['show_excerpt'] : $this->settings['show_excerpt']['std'];

        $style = 'height:' . esc_attr($height) . 'px;';
        ?>
        <div class="swiper-slide wpi-swiper-slide">
            <article id="widget-slide-<?php the_ID(); ?>" <?php post_class('wpi-post ' . esc_attr($display_style)); ?>>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="entry-image image-hover-effect <?php echo $image_hover_effects; ?> <?php if ($show_overlay) {
                        echo "entry-image-overlay";
                    } ?> image-overlay-<?php echo $image_overlay_style; ?>">
                        <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                            <?php
                            the_post_thumbnail(
                                $image_size,
                                array(
                                    'alt' => the_title_attribute(
                                        array(
                                            'echo' => false,
                                        )
                                    ),
                                    'style' => esc_attr($style)
                                )
                            );
                            ?>
                        </a>
                    </div>
                <?php endif; ?>
                <div class="entry-details <?php echo $text_alignment; ?>">
                    <?php
                    if (!empty($instance['show_category']) && $instance['show_category']) {
                        newspanda_post_category($display_category_option, $category_text, $number_of_cat);
                    }
                    ?>
                    <header class="entry-header">
                        <?php the_title('<h3 class="entry-title ' . $font_size . ' ' . $font_style . '"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
                    </header>

                    <div class="entry-meta-wrapper">
                        <?php if (!empty($instance['show_date']) && $instance['show_date']) : ?>
                            <div class="entry-meta entry-date posted-on">
                                <span class="screen-reader-text"><?php _e('Post Date', 'newspanda'); ?></span>
                                <?php newspanda_the_theme_svg('calendar'); ?>
                                <?php
                                $date_format = !empty($instance['date_format']) ? $instance['date_format'] : 'format_1';
                                if ('format_1' === $date_format) {
                                    echo esc_html(human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ' . __('ago', 'newspanda'));
                                } else {
                                    echo esc_html(get_the_date());
                                }
                                ?>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($instance['show_author']) && $instance['show_author']) : ?>

                                <?php
                                if ($show_author) {
                                    newspanda_posted_by($display_author_option, $author_text);
                                }
                                ?>

                        <?php endif; ?>
                    </div>
                    <?php if ($show_excerpt) { ?>
                        <div class="entry-content">
                            <?php
                            newspanda_the_archive_excerpt();
                            newspanda_the_archive_readmore();
                            ?>
                        </div><!-- .entry-content -->
                    <?php } ?>
                </div>
            </article>
        </div>
        <?php
    }
}