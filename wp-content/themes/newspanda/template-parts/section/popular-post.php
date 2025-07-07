<?php
$enable_popular_posts = newspanda_get_option('enable_popular_posts');
if (!$enable_popular_posts) {
    return;
}
$popular_post_cat = newspanda_get_option('popular_post_cat');
$no_of_popular_posts = newspanda_get_option('no_of_popular_posts', 4);
$popular_post_offset_number = newspanda_get_option('popular_post_offset_number');
$popular_post_orderby = newspanda_get_option('popular_post_orderby', 'date');
$popular_post_order = newspanda_get_option('popular_post_order', 'desc');
$no_of_popular_posts_offsets = newspanda_get_option('no_of_popular_posts_offsets');
$enable_popular_post_author_meta = newspanda_get_option('enable_popular_post_author_meta');
$select_popular_post_author_meta = newspanda_get_option('select_popular_post_author_meta');
$popular_post_author_meta_title = newspanda_get_option('popular_post_author_meta_title');
$enable_popular_post_date_meta = newspanda_get_option('enable_popular_post_date_meta');
$select_popular_post_date = newspanda_get_option('select_popular_post_date');
$select_popular_post_date_meta_title = newspanda_get_option('select_popular_post_date_meta_title');
$select_popular_post_date_format = newspanda_get_option('select_popular_post_date_format');

$enable_popular_category_meta = newspanda_get_option('enable_popular_category_meta');
$popular_category_label = newspanda_get_option('popular_category_label');
$select_popular_category_color = newspanda_get_option('select_popular_category_color');
$select_popular_number_of_category = newspanda_get_option('select_popular_number_of_category');

// Covert id to ID to make it work with query
if ('id' == $popular_post_orderby) {
    $popular_post_orderby = 'ID';
}
if ($no_of_popular_posts_offsets) {
    $popular_post_offset = $no_of_popular_posts_offsets;
} else {
    $popular_post_offset = '';
}
$post_args = array(
    'post_type' => 'post',
    'posts_per_page' => absint($no_of_popular_posts),
    'post_status' => 'publish',
    'no_found_rows' => 1,
    'offset' => $popular_post_offset,
    'ignore_sticky_posts' => 1,
    'orderby' => esc_attr($popular_post_orderby),
    'order' => esc_attr($popular_post_order),
);
// Check for category.
if (!empty($popular_post_cat)) :
    $post_args['tax_query'] = array(
        array(
            'taxonomy' => 'category',
            'field' => 'term_id',
            'terms' => $popular_post_cat,
        ),
    );
endif;
$popular_posts = new WP_Query($post_args);
if ($popular_posts->have_posts()) :
    $popular_label_text = newspanda_get_option('popular_label_text');
    $autoplay = newspanda_get_option('enable_popular_post_autoplay');
    $arrows = newspanda_get_option('enable_popular_post_arrows', true);
    $dots = newspanda_get_option('enable_popular_post_dots');
    $margin = 30;
    // Build attributes.
    $data_slider = array();
    $data_slider['spaceBetween'] = $margin;
    if ($arrows) :
        $data_slider['navigation'] = array(
            'nextEl' => '.wpi-header-popular .swiper-button-next',
            'prevEl' => '.wpi-header-popular .swiper-button-prev',
        );
    endif;
    if ($dots) :
        $data_slider['pagination'] = array(
            'el' => '.wpi-header-popular .swiper-pagination',
            'clickable' => true,
        );
    endif;
    if ($autoplay) :
        $data_slider['autoplay'] = array(
            'delay' => 5000,
        );
    endif;
    ?>
    <div class="wpi-header-popular">
        <div class="wrapper">
            <div class="row-group">
                <?php if (newspanda_get_option('enable_popular_label', true)) : ?>
                    <div class="column-lg-3 column-md-12 column-sm-12">
                        <header class="section-header">
                            <h2 class="section-title">
                                <?php
                                if ($popular_label_text) :
                                    $words = explode(' ', esc_html($popular_label_text), 2); // Split only the first word
                                else :
                                    $words = explode(' ', esc_html__('Top Picks', 'newspanda'), 2);
                                endif;
                                ?>
                                <span class="title-first-word" data-first-word="<?php echo esc_attr($words[0]); ?>"><?php echo esc_html($words[0]); ?></span>
                                <?php echo isset($words[1]) ? ' ' . esc_html($words[1]) : ''; ?>
                            </h2>
                        </header>
                    </div>
                <?php endif; ?>
                <div class="column-lg-9 column-md-12 column-sm-12">
                    <div class="wpi-popular-panel">
                        <div class="wpi-popular-init swiper"
                             data-slider='<?php echo esc_attr(json_encode($data_slider)); ?>'>
                            <div class="swiper-wrapper">
                                <?php
                                while ($popular_posts->have_posts()) :
                                    $popular_posts->the_post();
                                    ?>
                                    <div class="swiper-slide">
                                        <article
                                                id="popular-post-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-default'); ?>>
                                            <?php if (has_post_thumbnail()): ?>
                                                <div class="entry-image entry-image-thumbnail image-hover-effect hover-effect-shine">
                                                    <a class="post-thumbnail" href="<?php the_permalink(); ?>">
                                                        <?php
                                                        the_post_thumbnail(
                                                            'medium',
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
                                                <header class="entry-header">
                                                    <?php
                                                    if ($enable_popular_category_meta) {
                                                        newspanda_post_category($select_popular_category_color, $popular_category_label, $select_popular_number_of_category);
                                                    }
                                                    ?>
                                                    <h3 class="entry-title entry-title-small limit-line-3">
                                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                    </h3>
                                                </header>
                                                <div class="footer">
                                                    <div class="entry-meta-wrapper">
                                                        <?php
                                                        if ($enable_popular_post_date_meta) {
                                                            newspanda_posted_on($select_popular_post_date_format, $select_popular_post_date_meta_title, $select_popular_post_date);
                                                        }
                                                        ?>
                                                        <?php
                                                        if ($enable_popular_post_date_meta && $enable_popular_post_author_meta) { ?>
                                                            <div class="entry-meta-separator"></div>
                                                        <?php } ?>
                                                        <?php
                                                        if ($enable_popular_post_author_meta) {
                                                            newspanda_posted_by($select_popular_post_author_meta, $popular_post_author_meta_title);
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>

                            <?php
                            if ($dots) :
                                echo '<div class="swiper-pagination"></div>';
                            endif;
                            if ($arrows) :
                                echo '<div class="swiper-button-next"></div><div class="swiper-button-prev"></div>';
                            endif;
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
endif;
