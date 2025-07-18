<?php
$enable_frontlines = newspanda_get_option('enable_frontlines');
if (!$enable_frontlines) {
    return;
}
$frontline_cat = newspanda_get_option('frontline_cat');
$frontline_layout_style = newspanda_get_option('frontline_layout_style');
$no_of_frontlines_posts = newspanda_get_option('no_of_frontlines_posts');
$no_of_frontlines_posts_offsets = newspanda_get_option('no_of_frontlines_posts_offsets');
$frontline_orderby = newspanda_get_option('frontline_orderby', 'date');
$frontline_order = newspanda_get_option('frontline_order', 'desc');
$enable_frontline_author_meta = newspanda_get_option('enable_frontline_author_meta');
$select_frontline_author_meta = newspanda_get_option('select_frontline_author_meta');
$frontline_author_meta_title = newspanda_get_option('frontline_author_meta_title');
$enable_frontline_date_meta = newspanda_get_option('enable_frontline_date_meta');
$select_frontline_date = newspanda_get_option('select_frontline_date');
$select_frontline_date_meta_title = newspanda_get_option('select_frontline_date_meta_title');
$select_frontline_date_format = newspanda_get_option('select_frontline_date_format');
$enable_frontline_category_meta = newspanda_get_option('enable_frontline_category_meta');
$frontline_category_label = newspanda_get_option('frontline_category_label');
$select_frontline_category_color = newspanda_get_option('select_frontline_category_color');
$select_frontline_number_of_category = newspanda_get_option('select_frontline_number_of_category');

// Convert id to ID to make it work with query
if ('id' == $frontline_orderby) {
    $frontline_orderby = 'ID';
}
if ($no_of_frontlines_posts_offsets) {
    $frontline_offset = $no_of_frontlines_posts_offsets;
} else {
    $frontline_offset = '';
}

$post_args = array(
    'post_type' => 'post',
    'posts_per_page' => absint($no_of_frontlines_posts),
    'post_status' => 'publish',
    'no_found_rows' => 1,
    'ignore_sticky_posts' => 1,
    'offset' => $frontline_offset,
    'orderby' => esc_attr($frontline_orderby),
    'order' => esc_attr($frontline_order),
);

// Check for category.
if (!empty($frontline_cat)) {
    $post_args['tax_query'] = array(
        array(
            'taxonomy' => 'category',
            'field' => 'term_id',
            'terms' => $frontline_cat,
        ),
    );
}
$count = 1;
$frontlines = new WP_Query($post_args);
if ($frontlines->have_posts()) :
    ?>
    <section class="wpi-section wpi-frontline-section <?php echo esc_attr($frontline_layout_style); ?>">
        <div class="wrapper">
            <div class="wpi-frontline-wrapper">
                <?php
                while ($frontlines->have_posts()) :
                    $frontlines->the_post();
                    ?>
                    <article id="must-read-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-default wpi-post-frontline'); ?>>
                        <header class="entry-header">
                            <?php
                            if ($enable_frontline_category_meta) {
                                newspanda_post_category($select_frontline_category_color, $frontline_category_label, $select_frontline_number_of_category);
                            }
                            ?>
                            <?php the_title('<h2 class="entry-title entry-title-large"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>

                            <div class="entry-meta-wrapper">
                                <?php
                                if ($enable_frontline_date_meta) {
                                    newspanda_posted_on($select_frontline_date_format, $select_frontline_date_meta_title, $select_frontline_date);
                                }

                                if ($enable_frontline_date_meta && $enable_frontline_author_meta) { ?>
                                    <div class="entry-meta-separator"></div>
                                <?php }

                                if ($enable_frontline_author_meta) {
                                    newspanda_posted_by($select_frontline_author_meta, $frontline_author_meta_title);
                                }
                                ?>
                            </div>
                        </header>

                        <?php if (($frontline_layout_style == 'frontline-layout-1') || (($frontline_layout_style == 'frontline-layout-3') && ($count == 1))) { ?>
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="entry-image entry-image-large image-hover-effect hover-effect-shine">
                                    <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                                        <?php
                                        the_post_thumbnail(
                                            'large',
                                            array(
                                                'alt' => the_title_attribute(array('echo' => false)),
                                            )
                                        );
                                        ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        <?php } ?>


                        <div class="entry-details">
                            <?php if (
                                $frontline_layout_style == 'frontline-layout-1' || 
                                ($frontline_layout_style == 'frontline-layout-3' && $count == 1)
                            ) {
                                if (has_excerpt()) : ?>
                                    <div class="entry-content">
                                        <?php the_excerpt(); ?>
                                    </div>
                                <?php else : ?>
                                    <div class="entry-content">
                                        <?php echo esc_html(wp_trim_words(get_the_content(), 25, '...')); ?>
                                    </div>
                                <?php endif;
                            } elseif ($frontline_layout_style == 'frontline-layout-2') {
                                
                            } ?>
                        </div>

                    </article>
                    <?php
                    $count++;
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
<?php
endif;