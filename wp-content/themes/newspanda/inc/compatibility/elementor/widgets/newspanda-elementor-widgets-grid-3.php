<?php
/**
 * NewsPanda Elementor Widget Grid 3.
 *
 * @package    NewsPanda
 * @since      NewsPanda 1.0.0
 */

namespace Elementor\Widgets;

use Elementor\Widgets\NewsPanda_Elementor_Widget_Base;

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * NewsPanda Elementor Widget Grid 3.
 *
 * Class NewsPanda_Elementor_Widgets_Grid_3
 */
class NewsPanda_Elementor_Widgets_Grid_3 extends NewsPanda_Elementor_Widget_Base
{

    /**
     * Post number.
     *
     * @var int
     */
    public $post_number = 2;

    /**
     * Retrieve NewsPanda_Elementor_Widgets_Grid_3 widget name.
     *
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name()
    {
        return 'NewsPanda-Posts-Grid-3';
    }

    /**
     * Retrieve NewsPanda_Elementor_Widgets_Grid_3 widget title.
     *
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title()
    {
        return esc_html__('Grid Style 3', 'newspanda');
    }

    /**
     * Retrieve NewsPanda_Elementor_Widgets_Grid_3 widget icon.
     *
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon()
    {
        return 'newspanda-econs-grid-3';
    }

    /**
     * Retrieve the list of categories the NewsPanda_Elementor_Widgets_Grid_3 widget belongs to.
     *
     * Used to determine where to display the widget in the editor.
     *
     * @access public
     *
     * @return array Widget categories.
     */
    public function get_categories()
    {
        return array('newspanda-widget-grid');
    }

    /**
     * Render NewsPanda_Elementor_Widgets_Grid_3 widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @access protected
     */
    protected function render()
    {

        $widget_title = $this->get_settings('widget_title');
        $posts_number = $this->get_settings('posts_number');

        $enable_category_meta = $this->get_settings('enable_category_meta');
        $category_meta_text = $this->get_settings('category_meta_text');
        $display_category_option = $this->get_settings('display_category_option');
        $number_of_cat = $this->get_settings('number_of_cat');

        $enable_author_meta = $this->get_settings('enable_author_meta');
        $display_author_option = $this->get_settings('display_author_option');
        $author_text = $this->get_settings('author_text');

        $enable_date_meta = $this->get_settings('enable_date_meta');
        $date_format = $this->get_settings('date_format');

        $display_type = $this->get_settings('display_type');
        $offset_posts_number = $this->get_settings('offset_posts_number');
        $categories_selected = $this->get_settings('categories_selected');

        // Create the posts query.
        $get_featured_posts = $this->query_posts($posts_number, $display_type, $categories_selected, $offset_posts_number);
        ?>

        <div class="newspanda-module-grid newspanda-module-grid-style-3 newspanda-element-wrapper wrapper-gutter-small">
            <?php
            // Displays the widget title.
            $this->widget_title($widget_title);
            ?>

            <div class="row-group">
                <?php
                $count = 1;
                while ($get_featured_posts->have_posts()) :
                    $get_featured_posts->the_post();

                    $featured_image_size = 'medium_large';
                    ?>

                    <div class="elementor-custom-column">
                        <article id="module-grid-3-<?php the_ID(); ?>" <?php post_class('wpi-post-module-grid wpi-post wpi-tile-post'); ?>>

                            <?php if (has_post_thumbnail()) : ?>
                                <div class="elementor-entry-image entry-image image-hover-effect hover-effect-shine entry-image-big">
                                    <?php
                                    $this->the_post_thumbnail($featured_image_size);
                                    ?>
                                </div>
                            <?php endif; ?>

                            <div class="elementor-entry-details entry-details">
                                <?php
                                if ($enable_category_meta === 'yes') {
                                    newspanda_post_category($display_category_option, $category_meta_text, $number_of_cat);
                                }
                                ?>
                                <?php
                                $font_class = 'entry-title-medium';
                                // Display the post title.
                                $this->the_title($font_class);
                                ?>

                                <div class="entry-meta-wrapper">
                                    <?php
                                    // Displays the entry meta.
                                    if ($enable_date_meta == 'yes') { ?>
                                        <div class="entry-meta entry-date posted-on">
                                            <span class="screen-reader-text"><?php _e('Post Date', 'newspanda'); ?></span>
                                            <?php newspanda_the_theme_svg('calendar'); ?>
                                            <?php
                                            if ('format_1' === $date_format) {
                                                echo esc_html(human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ' . __('ago', 'newspanda'));
                                            } else {
                                                echo esc_html(get_the_date());
                                            }
                                            ?>
                                        </div>
                                        <?php
                                    }
                                    if ($enable_author_meta == 'yes') {
                                        newspanda_posted_by($display_author_option, $author_text);
                                    } ?>
                                </div>
                            </div>

                        </article>

                    </div>

                    <?php
                    $count++;
                endwhile;

                // Reset the postdata.
                wp_reset_postdata();
                ?>
            </div>
        </div>

        <?php
    }

}
