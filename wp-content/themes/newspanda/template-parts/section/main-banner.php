<?php
$enable_main_banner_section = newspanda_get_option('enable_main_banner_section');
$banner_right_list_post_title = newspanda_get_option('banner_right_list_post_title');
$banner_left_grid_category = newspanda_get_option('banner_left_grid_category');
$banner_left_grid_posts_offsets = newspanda_get_option('banner_left_grid_posts_offsets');
$banner_right_list_category = newspanda_get_option('banner_right_list_category');
$banner_right_list_posts_offsets = newspanda_get_option('banner_right_list_posts_offsets');
$enable_banner_author_meta = newspanda_get_option('enable_banner_author_meta');
$select_banner_author_meta = newspanda_get_option('select_banner_author_meta');
$banner_author_meta_title = newspanda_get_option('banner_author_meta_title');
$enable_banner_date_meta = newspanda_get_option('enable_banner_date_meta');
$select_banner_date = newspanda_get_option('select_banner_date');
$select_banner_date_meta_title = newspanda_get_option('select_banner_date_meta_title');
$select_banner_date_format = newspanda_get_option('select_banner_date_format');
$enable_banner_category_meta = newspanda_get_option('enable_banner_category_meta');
$banner_category_label = newspanda_get_option('banner_category_label');
$select_banner_category_color = newspanda_get_option('select_banner_category_color');
$select_banner_number_of_category = newspanda_get_option('select_banner_number_of_category');

if (empty($enable_main_banner_section)) {
    return;
}
?>
<section class="wpi-section wpi-banner-section">
    <div class="wrapper">
        <div class="row-group">
            <div class="column-lg-8 column-md-12 column-sm-12">
                <div class="wpi-banner-area">
                    <?php
                    if ($banner_left_grid_posts_offsets) {
                        $first_category_offset = $banner_left_grid_posts_offsets;
                    } else {
                        $first_category_offset = '';
                    }
                    // Post grid middle section
                    $banner_args_col_1 = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'post_status' => 'publish',
                        'no_found_rows' => 1,
                        'offset' => $first_category_offset,
                        'ignore_sticky_posts' => 1,
                    );

                    // Check for category.
                    if (!empty($banner_left_grid_category)) {
                        $banner_args_col_1['tax_query'] = array(
                            array(
                                'taxonomy' => 'category',
                                'field' => 'term_id',
                                'terms' => $banner_left_grid_category,
                            ),
                        );
                    }

                    $counts = 1;
                    $grid_posts = new WP_Query($banner_args_col_1);
                    if ($grid_posts->have_posts()) :
                        while ($grid_posts->have_posts()) : $grid_posts->the_post();
                            $image_class = '';
                            $title_class = '';

                            switch ($counts) {
                                case 1:
                                    $image_class = "entry-image-large";
                                    $title_class = "entry-title-large";
                                    break;
                                case 2:
                                case 3:
                                    $image_class = "entry-image-medium";
                                    $title_class = "entry-title-medium";
                                    break;
                                default:
                                    $image_class = "entry-image-medium";
                                    $title_class = "entry-title-medium";
                            }
                            ?>
                            <?php if ($counts == 1) { ?>
                                <article id="banner-prime-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-default wpi-banner-prime'); ?>>
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="entry-image <?php echo esc_attr($image_class); ?> image-hover-effect hover-effect-shine">
                                            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                                                <?php the_post_thumbnail('large', array('alt' => the_title_attribute(array('echo' => false)))); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <div class="entry-details">
                                        <?php if ($enable_banner_category_meta) {
                                            newspanda_post_category($select_banner_category_color, $banner_category_label, $select_banner_number_of_category);
                                        } ?>
                                        <h3 class="entry-title <?php echo esc_attr($title_class); ?>">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="entry-meta-wrapper mb-2">
                                            <?php if ($enable_banner_date_meta) {
                                                newspanda_posted_on($select_banner_date_format, $select_banner_date_meta_title, $select_banner_date);
                                            } ?>
                                            <?php if ($enable_banner_author_meta) {
                                                newspanda_posted_by($select_banner_author_meta, $banner_author_meta_title);
                                            } ?>
                                        </div>

                                        <div class="entry-summary">
                                            <?php echo esc_html(wp_trim_words(get_the_content(), 25, '...')); ?>
                                        </div>
                                    </div>
                                </article>

                            <?php } else { ?>

                                <article id="banner-subprime-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-default wpi-banner-subprime'); ?>>
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="entry-image <?php echo esc_attr($image_class); ?> image-hover-effect hover-effect-shine">
                                            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                                                <?php the_post_thumbnail('medium_large', array('alt' => the_title_attribute(array('echo' => false)))); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <div class="entry-details">
                                        <?php if ($enable_banner_category_meta) {
                                            newspanda_post_category($select_banner_category_color, $banner_category_label, $select_banner_number_of_category);
                                        } ?>
                                        <h3 class="entry-title <?php echo esc_attr($title_class); ?>">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="entry-meta-wrapper">
                                            <?php if ($enable_banner_date_meta) {
                                                newspanda_posted_on($select_banner_date_format, $select_banner_date_meta_title, $select_banner_date);
                                            } ?>
                                            <?php if ($enable_banner_author_meta) {
                                                newspanda_posted_by($select_banner_author_meta, $banner_author_meta_title);
                                            } ?>
                                        </div>
                                    </div>
                                </article>

                            <?php } ?>
                            <?php if ($grid_posts->current_post + 1 == $grid_posts->post_count) { ?>

                            <?php } ?>
                            <?php $counts++;
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>

            <div class="column-lg-4 column-md-12 column-sm-12">
                <?php
                if ($banner_right_list_posts_offsets) {
                    $third_category_offset = $banner_right_list_posts_offsets;
                } else {
                    $third_category_offset = '';
                }
                // Post list middle section
                $banner_args_col_3 = array(
                    'post_type' => 'post',
                    'posts_per_page' => 6,
                    'post_status' => 'publish',
                    'no_found_rows' => 1,
                    'offset' => $third_category_offset,
                    'ignore_sticky_posts' => 1,
                );

                // Check for category.
                if (!empty($banner_right_list_category)) {
                    $banner_args_col_3['tax_query'] = array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'term_id',
                            'terms' => $banner_right_list_category,
                        ),
                    );
                }

                $count = 1;
                $list_posts = new WP_Query($banner_args_col_3); ?>

                <header class="section-header header-has-style">
                    <h2 class="section-title">
                        <?php echo esc_html($banner_right_list_post_title); ?>
                    </h2>
                </header>
                
                <?php if ($list_posts->have_posts()) :
                    while ($list_posts->have_posts()) : $list_posts->the_post(); ?>
                        <article id="banner-right-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-list'); ?>>
                            <div class="count-number"><?php echo $count++; ?></div>
                            <div class="entry-details">
                                <?php if ($enable_banner_category_meta) {
                                    newspanda_post_category($select_banner_category_color, $banner_category_label, $select_banner_number_of_category);
                                } ?>

                                <h3 class="entry-title entry-title-small">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <div class="entry-meta-wrapper">
                                    <?php if ($enable_banner_date_meta) {
                                        newspanda_posted_on($select_banner_date_format, $select_banner_date_meta_title, $select_banner_date);
                                    } ?>
                                    <?php if ($enable_banner_author_meta) {
                                        newspanda_posted_by($select_banner_author_meta, $banner_author_meta_title);
                                    } ?>
                                </div>
                            </div>

                            <?php if (has_post_thumbnail()) : ?>
                                <div class="entry-image entry-image-thumbnail image-hover-effect hover-effect-shine">
                                    <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                                        <?php the_post_thumbnail('medium', array('alt' => the_title_attribute(array('echo' => false)))); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </article>
                    <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </div>
</section>