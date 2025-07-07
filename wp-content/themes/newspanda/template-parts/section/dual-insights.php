<?php
$enable_dual_insights = newspanda_get_option('enable_dual_insights');
if (!$enable_dual_insights) {
    return;
}

$dual_insights_title = newspanda_get_option('dual_insights_title', 'Dual Insights');
$dual_inner_column_title = newspanda_get_option('dual_inner_column_title', 'Trending Now');
$main_insights_category = newspanda_get_option('main_insights_category');
$trending_insights_category = newspanda_get_option('trending_insights_category');

$enable_insights_author_meta = newspanda_get_option('enable_insights_author_meta');
$select_insights_author_meta = newspanda_get_option('select_insights_author_meta');
$insights_author_meta_title = newspanda_get_option('insights_author_meta_title');
$enable_insights_date_meta = newspanda_get_option('enable_insights_date_meta');
$select_insights_date = newspanda_get_option('select_insights_date');
$select_insights_date_meta_title = newspanda_get_option('select_insights_date_meta_title');
$select_insights_date_format = newspanda_get_option('select_insights_date_format');
$enable_insights_category_meta = newspanda_get_option('enable_insights_category_meta');
$insights_category_label = newspanda_get_option('insights_category_label');
$select_insights_category_color = newspanda_get_option('select_insights_category_color');
$select_insights_number_of_category = newspanda_get_option('select_insights_number_of_category');

// Query for main insights
$main_insights_args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'post_status' => 'publish',
    'no_found_rows' => 1,
    'ignore_sticky_posts' => 1,
);

if (!empty($main_insights_category)) {
    $main_insights_args['tax_query'] = array(
        array(
            'taxonomy' => 'category',
            'field' => 'term_id',
            'terms' => $main_insights_category,
        ),
    );
}

$main_insights = new WP_Query($main_insights_args);

// Query for trending insights
$trending_insights_args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'post_status' => 'publish',
    'no_found_rows' => 1,
    'ignore_sticky_posts' => 1,
);

if (!empty($trending_insights_category)) {
    $trending_insights_args['tax_query'] = array(
        array(
            'taxonomy' => 'category',
            'field' => 'term_id',
            'terms' => $trending_insights_category,
        ),
    );
}

$trending_insights = new WP_Query($trending_insights_args);

if ($main_insights->have_posts() || $trending_insights->have_posts()) :
?>
    <section class="wpi-section wpi-dual-insights">
        <div class="wrapper">
            <div class="row-group">
                <div class="column-lg-12">
                    <header class="section-header header-has-border">
                        <h2 class="section-title"><?php echo esc_html($dual_insights_title); ?></h2>
                    </header>

                    <div class="section-body">
                        <div class="row-group">
                            <div class="column-lg-8">
                              <div class="dual-insights-left">
                                <div class="row-group">
                                    <?php
                                    if ($main_insights->have_posts()) :
                                        while ($main_insights->have_posts()) : $main_insights->the_post();
                                    ?>
                                        <div class="column-lg-6 column-md-6">
                                            <article id="main-insight-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-default'); ?>>
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <div class="entry-image entry-image-medium image-hover-effect hover-effect-shine">
                                                        <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                                                            <?php the_post_thumbnail('medium_large', array('alt' => the_title_attribute(array('echo' => false)))); ?>
                                                        </a>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="entry-details">
                                                    <?php
                                                    if ($enable_insights_category_meta) {
                                                        newspanda_post_category($select_insights_category_color, $insights_category_label, $select_insights_number_of_category);
                                                    }
                                                    ?>
                                                    <h3 class="entry-title entry-title-small">
                                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                    </h3>
                                                    <div class="entry-meta-wrapper">
                                                        <?php
                                                        if ($enable_insights_date_meta) {
                                                            newspanda_posted_on($select_insights_date_format, $select_insights_date_meta_title, $select_insights_date);
                                                        }
                                                        if ($enable_insights_date_meta && $enable_insights_author_meta) {
                                                            echo '<div class="entry-meta-separator"></div>';
                                                        }
                                                        if ($enable_insights_author_meta) {
                                                            newspanda_posted_by($select_insights_author_meta, $insights_author_meta_title);
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    endif;
                                    ?>
                                    </div>
                                </div>
                            </div>

                            <div class="column-lg-4">
                              <div class="dual-insights-right">
                                <?php if (!empty($dual_inner_column_title)) : ?>
                                    <header class="section-header header-has-style">
                                        <h2 class="section-title"><?php echo esc_html($dual_inner_column_title); ?></h2>
                                    </header>
                                <?php endif; ?>

                                <div class="insights-column-body">
                                    <?php
                                    if ($trending_insights->have_posts()) :
                                        while ($trending_insights->have_posts()) : $trending_insights->the_post();
                                    ?>
                                        <article id="trending-insight-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-list article-has-border'); ?>>
                                            <?php if (has_post_thumbnail()) : ?>
                                                <div class="entry-image entry-image-thumbnail image-hover-effect hover-effect-shine">
                                                    <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                                                            <?php the_post_thumbnail('thumbnail', array('alt' => the_title_attribute(array('echo' => false)))); ?>
                                                        </a>
                                                    </div>
                                                <?php endif; ?>

                                            <div class="entry-details">
                                                <?php
                                                if ($enable_insights_category_meta) {
                                                    newspanda_post_category($select_insights_category_color, $insights_category_label, $select_insights_number_of_category);
                                                }
                                                ?>
                                                <h3 class="entry-title entry-title-xsmall">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </h3>
                                                <div class="entry-meta-wrapper">
                                                    <?php
                                                    if ($enable_insights_date_meta) {
                                                        newspanda_posted_on($select_insights_date_format, $select_insights_date_meta_title, $select_insights_date);
                                                    }
                                                    if ($enable_insights_date_meta && $enable_insights_author_meta) {
                                                        echo '<div class="entry-meta-separator"></div>';
                                                    }
                                                    if ($enable_insights_author_meta) {
                                                        newspanda_posted_by($select_insights_author_meta, $insights_author_meta_title);
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </article>
                                    <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    endif;
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
endif;
?>