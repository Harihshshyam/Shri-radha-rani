<?php
if (!defined('ABSPATH')) {
    exit;
}

class NewsPanda_Recent_Posts extends NewsPanda_Widget_Base
{
    public function __construct()
    {
        $this->widget_cssclass = 'newspanda-recent-widget';
        $this->widget_description = __("Displays recent posts with an image", 'newspanda');
        $this->widget_id = 'newspanda_recent_posts';
        $this->widget_name = __('NewsPanda: Recent Posts', 'newspanda');
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
                'std' => __('Recent Posts', 'newspanda'),
            ),
            'style' => array(
                'type' => 'select',
                'label' => __('Display Style', 'newspanda'),
                'options' => array(
                    'wpi-post-regular' => __('Regular View', 'newspanda'),
                    'wpi-post-list' => __('List View', 'newspanda'),
                    'wpi-post-card' => __('Card View', 'newspanda'),
                ),
                'std' => 'wpi-post-list',
            ),
            'font_size' => array(
                'type' => 'select',
                'label' => __('Entry title font size', 'newspanda'),
                'options' => array(
                    'entry-title-xsmall' => __('Extra Small', 'newspanda'),
                    'entry-title-small' => __('Small', 'newspanda'),
                    'entry-title-medium' => __('Medium', 'newspanda'),
                    'entry-title-big' => __('Big', 'newspanda'),
                ),
                'std' => 'entry-title-xsmall',
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
                'std' => 5,
                'label' => __('Number of posts to show', 'newspanda'),
            ),
            'offset'                  => array(
                'type'  => 'number',
                'step'  => 1,
                'min'   => 0,
                'max'   => '',
                'std'   => '',
                'label' => __( 'Offset', 'newspanda' ),
                'desc'  => __( 'Offsets are used to skip a certain number of WordPress posts before starting output. Set it to 0 if you do not wish to use this feature.', 'newspanda' ),
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
            'show_counter' => array(
                'type' => 'checkbox',
                'label' => __('Show Counter', 'newspanda'),
                'std' => true,
            ),
            'show_image' => array(
                'type' => 'checkbox',
                'label' => __('Show Image', 'newspanda'),
                'std' => true,
            ),
            'image_size' => array(
                'type' => 'select',
                'label' => __('Image size', 'newspanda'),
                'options' => array(
                    'thumbnail' => __('Thumbnail', 'newspanda'),
                    'medium' => __('Medium', 'newspanda'),
                    'medium_large' => __('Medium Large', 'newspanda'),
                    'large' => __('Large', 'newspanda'),
                    'full' => __('Full', 'newspanda'),
                ),
                'std' => 'medium',

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
                'std' => false,
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

        if ( isset($instance['offset']) && absint($instance['offset']) != 0 ) {
            $query_args['offset'] = absint($instance['offset']);
        }

        if (!empty($instance['category']) && -1 != $instance['category'] && 0 != $instance['category']) {
            $query_args['tax_query'][] = array(
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => $instance['category'],
            );
        }

        return new WP_Query(apply_filters('newspanda_recent_posts_query_args', $query_args));
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
        do_action('newspanda_before_recent_posts_with_image');
        if (!empty($instance['title'])) {
            echo $args['before_title'] . esc_html($instance['title']) . $args['after_title'];
        }

        echo '<div class="wpi-recent-widget wpi-widget-list">';
        $counter = 1;
        while ($posts->have_posts()) {
            $posts->the_post();
            $this->render_post($instance, $counter);
            $counter++;
        }

        wp_reset_postdata();

        echo '</div>';

        do_action('newspanda_after_recent_posts_with_image');
        echo $args['after_widget'];
    }

    /**
     * Render a single post item.
     */
    protected function render_post($instance, $counter)
    {
        $counter_class = '';   
        $style = !empty($instance['style']) ? $instance['style'] : $this->settings['style']['std'];
        $font_size = !empty($instance['font_size']) ? $instance['font_size'] : $this->settings['font_size']['std'];
        $font_style = !empty($instance['font_style']) ? $instance['font_style'] : $this->settings['font_style']['std'];

        $image_size = !empty($instance['image_size']) ? $instance['image_size'] : $this->settings['image_size']['std'];
        $image_hover_effects = !empty($instance['image_hover_effects']) ? $instance['image_hover_effects'] : $this->settings['image_hover_effects']['std'];
        $show_counter = !empty($instance['show_counter']) ? $instance['show_counter'] : $this->settings['show_counter']['std'];

        if ($show_counter) {
            $counter_class =  'has-post-counter'; 
        }

        $show_author = !empty($instance['show_author']) ? $instance['show_author'] : $this->settings['show_author']['std'];
        $author_text = !empty($instance['author_text']) ? $instance['author_text'] : $this->settings['author_text']['std'];
        $display_author_option = !empty($instance['display_author_option']) ? $instance['display_author_option'] : $this->settings['display_author_option']['std'];
        $category_text = !empty($instance['category_text']) ? $instance['category_text'] : '';
        $display_category_option = !empty($instance['display_category_option']) ? $instance['display_category_option'] : $this->settings['display_category_option']['std'];
        $number_of_cat = !empty($instance['number_of_cat']) ? absint($instance['number_of_cat']) : $this->settings['number_of_cat']['std'];

        ?>
        <article id="recent-post-<?php echo the_ID(); ?>" <?php post_class('wpi-post  ' . esc_attr($counter_class) . ' ' . esc_attr($style) . ' '); ?>>
            <?php if (!empty($instance['show_counter']) && $instance['show_counter']) { ?>
                <div class="wpi-post-counter">
                    <span><?php echo $counter; ?></span>
                </div>
            <?php } ?>
            <?php if (has_post_thumbnail() && !empty($instance['show_image'])) : ?>
                <div class="entry-image entry-image-thumbnail image-hover-effect <?php echo $image_hover_effects; ?>">
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
                            )
                        );
                        ?>
                    </a>
                </div>
            <?php endif; ?>
            <div class="entry-details">
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

            </div>
        </article>
        <?php
    }
}