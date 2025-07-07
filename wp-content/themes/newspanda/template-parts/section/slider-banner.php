<?php
/**
 * Displays Banner Section
 *
 * @package NewsPanda
 */
$is_banner_section = newspanda_get_option('enable_slider_banner_section');
$title_slider_banner_section = newspanda_get_option('title_slider_banner_section');
$enable_banner_overlay = newspanda_get_option('enable_banner_overlay');
$enable_banner_control_icon = newspanda_get_option('enable_banner_control_icon');
$banner_section_cat = newspanda_get_option('banner_section_cat');
$no_of_banner_slider_posts = newspanda_get_option('no_of_banner_slider_posts');
$no_of_banner_slider_posts_offsets = newspanda_get_option('no_of_banner_slider_posts_offsets');
$slider_post_content_alignment = newspanda_get_option('slider_post_content_alignment');
$enable_banner_cat_meta_color = newspanda_get_option('enable_banner_cat_meta_color');
$enable_banner_post_description = newspanda_get_option('enable_banner_post_description');
$enable_banner_slider_author_meta = newspanda_get_option('enable_banner_slider_author_meta');
$select_banner_slider_author_meta = newspanda_get_option('select_banner_slider_author_meta');
$banner_slider_author_meta_title = newspanda_get_option('banner_slider_author_meta_title');
$enable_banner_slider_date_meta = newspanda_get_option('enable_banner_slider_date_meta');
$select_banner_slider_date = newspanda_get_option('select_banner_slider_date');
$select_banner_slider_date_meta_title = newspanda_get_option('select_banner_slider_date_meta_title');
$select_banner_slider_date_format = newspanda_get_option('select_banner_slider_date_format');
$enable_banner_slider_category_meta = newspanda_get_option('enable_banner_slider_category_meta');
$banner_slider_category_label = newspanda_get_option('banner_slider_category_label');
$select_banner_slider_category_color = newspanda_get_option('select_banner_slider_category_color');
$select_banner_slider_number_of_category = newspanda_get_option('select_banner_slider_number_of_category');
$banner_overlay_class = '';
if ($enable_banner_overlay) {
    $banner_overlay_class = 'slider-banner-has-overlay';
}
if ($is_banner_section) :
    ?>
    <section class="wpi-section wpi-slider-banner <?php echo $banner_overlay_class; ?>">
        <div class="wrapper">
            <header class="wpi-section-header has-header-controls">
                <?php if (!empty($title_slider_banner_section)) { ?>
                    <h2 class="section-header-title">
                        <?php echo esc_html($title_slider_banner_section); ?>
                    </h2>
                <?php } ?>
                <?php if ($enable_banner_control_icon) { ?>
                    <div class="section-header-controls">
                        <div class="banner-slider-control banner-slider-prev">
                            <?php newspanda_the_theme_svg('chevron-left'); ?>
                        </div>
                        <div class="banner-slider-control banner-slider-next">
                            <?php newspanda_the_theme_svg('chevron-right'); ?>
                        </div>
                    </div>
                <?php } ?>
            </header>

            <?php

            if ($no_of_banner_slider_posts_offsets) {
                $slider_banner_post_offset = $no_of_banner_slider_posts_offsets;
            } else {
                $slider_banner_post_offset = '';
            }

            $post_args = array(
                'post_type' => 'post',
                'posts_per_page' => absint($no_of_banner_slider_posts),
                'post_status' => 'publish',
                'no_found_rows' => 1,
                'offset' => $slider_banner_post_offset,
                'ignore_sticky_posts' => 1,
            );
            // Check for category.
            if (!empty($banner_section_cat)) :
                $post_args['tax_query'] = array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'term_id',
                        'terms' => $banner_section_cat,
                    ),
                );
            endif;

            $banner_post_query = new WP_Query($post_args);
            if ($banner_post_query->have_posts()): ?>
                <div class="swiper site-banner-hero">
                    <div class="swiper-wrapper">
                        <?php while ($banner_post_query->have_posts()): $banner_post_query->the_post(); ?>
                            <div class="swiper-slide swiper-hero-slide has-border-divider <?php echo esc_attr($slider_post_content_alignment); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="swiper-slide-image hero-slide-image">

                                        <?php
                                        the_post_thumbnail('medium_large', array(
                                            'alt' => the_title_attribute(array(
                                                'echo' => false,
                                            )),
                                        ));
                                        ?>
                                    </div>
                                <?php endif; ?>
                                <div class="site-banner-description">
                                    <header class="entry-header">
                                        <?php
                                        if ($enable_banner_slider_category_meta) {
                                            newspanda_post_category($select_banner_slider_category_color, $banner_slider_category_label, $select_banner_slider_number_of_category);
                                        }
                                        ?>
                                        <?php the_title('<h2 class="entry-title entry-title-medium limit-line-3"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                                    </header>
                                    <div class="entry-meta-wrapper">
                                        <?php
                                        if ($enable_banner_slider_date_meta) {
                                            newspanda_posted_on($select_banner_slider_date_format, $select_banner_slider_date_meta_title, $select_banner_slider_date);
                                        }
                                        ?>
                                        <?php
                                        if ($enable_banner_slider_date_meta && $enable_banner_slider_author_meta) { ?>
                                            <div class="entry-meta-separator"></div>
                                        <?php } ?>
                                        <?php
                                        if ($enable_banner_slider_author_meta) {
                                            newspanda_posted_by($select_banner_slider_author_meta, $banner_slider_author_meta_title);
                                        }
                                        ?>
                                    </div>
                                    <?php
                                    if ($enable_banner_post_description && has_excerpt()): ?>
                                        <div class="entry-content">
                                            <?php the_excerpt(); ?>
                                        </div>
                                    <?php elseif ($enable_banner_post_description): ?>
                                        <div class="entry-content">
                                            <?php echo esc_html(wp_trim_words(get_the_content(), 25, '...')); ?>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif;