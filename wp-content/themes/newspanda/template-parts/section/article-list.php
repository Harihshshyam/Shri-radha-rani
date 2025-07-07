<?php
$article_list_title = esc_html(newspanda_get_option('article_list_title', 'Article Grid'));
$enable_article_list_post = newspanda_get_option('enable_article_list_post');
$enable_article_list_post_author_meta = newspanda_get_option('enable_article_list_post_author_meta');
$select_article_list_post_author_meta = newspanda_get_option('select_article_list_post_author_meta');
$article_list_post_author_meta_title = newspanda_get_option('article_list_post_author_meta_title');
$article_list_post_1_offset = newspanda_get_option('article_list_post_1_offset');
$article_list_post_2_offset = newspanda_get_option('article_list_post_2_offset');
$article_list_post_3_offset = newspanda_get_option('article_list_post_3_offset');

$enable_article_list_post_date_meta = newspanda_get_option('enable_article_list_post_date_meta');
$select_article_list_post_date = newspanda_get_option('select_article_list_post_date');
$select_article_list_post_date_meta_title = newspanda_get_option('select_article_list_post_date_meta_title');
$select_article_list_post_date_format = newspanda_get_option('select_article_list_post_date_format');

$enable_article_list_post_category_meta = newspanda_get_option('enable_article_list_post_category_meta');
$article_list_post_category_label = newspanda_get_option('article_list_post_category_label');
$select_article_list_post_category_color = newspanda_get_option('select_article_list_post_category_color');
$select_article_list_post_number_of_category = newspanda_get_option('select_article_list_post_number_of_category');
if ($enable_article_list_post) { ?>

    <section class="wpi-section wpi-article-grid">


            <?php if (!empty($article_list_title)) { ?>
                <header class="section-header section-header-center default-section-header">
                    <div class="wrapper">
                        <h2 class="section-title">
                            <?php
                            $words = explode(' ', $article_list_title, 2);
                            ?>
                            <span class="title-first-word" data-first-word="<?php echo esc_attr($words[0]); ?>">
                                <?php echo esc_html($words[0]); ?>
                            </span>
                            <?php echo isset($words[1]) ? ' ' . esc_html($words[1]) : ''; ?>
                        </h2>
                    </div>
                </header>
            <?php } ?>

            <div class="section-body">
                <div class="wrapper">
                    <div class="row-group">

                        <?php
                        if ($article_list_post_1_offset) {
                            $article_list_post_1 = $article_list_post_1_offset;
                        } else {
                            $article_list_post_1 = '';
                        }
                        $article_list_post_args_1 = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'no_found_rows' => 1,
                            'offset' => $article_list_post_1,
                            'ignore_sticky_posts' => 1,
                        );
                        $article_list_post_category_left = newspanda_get_option('article_list_post_category_left');
                        $article_list_post_args_1['posts_per_page'] = 4;
                        if (!empty($article_list_post_category_left)) :
                            $article_list_post_args_1['tax_query'][] = array(
                                'taxonomy' => 'category',
                                'field' => 'term_id',
                                'terms' => absint($article_list_post_category_left),
                            );
                        endif;
                        $article_list_post_1 = new WP_Query($article_list_post_args_1);
                        ?>
                        <div class="column-lg-6 column-md-12">
                            <div class="article-grid-slider swiper adjust-pagination">
                                <div class="swiper-wrapper">
                                    <?php while ($article_list_post_1->have_posts()) :
                                        $article_list_post_1->the_post(); ?>
                                        <div class="swiper-slide">
                                            <article id="article-list-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-default'); ?>>

                                                <div class="entry-image entry-image-large image-hover-effect hover-effect-shine">
                                                    <a class="post-thumbnail" href="<?php the_permalink(); ?>"
                                                       aria-hidden="true" tabindex="-1">
                                                        <?php
                                                        the_post_thumbnail(
                                                            'large',
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

                                                <div class="entry-details">
                                                    <?php
                                                    if ($enable_article_list_post_category_meta) {
                                                        newspanda_post_category($select_article_list_post_category_color, $article_list_post_category_label, $select_article_list_post_number_of_category);
                                                    }
                                                    ?>

                                                    <h3 class="entry-title entry-title-big">
                                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                    </h3>

                                                    <div class="entry-meta-wrapper">

                                                        <?php
                                                        if ($enable_article_list_post_date_meta) {
                                                            newspanda_posted_on($select_article_list_post_date_format, $select_article_list_post_date_meta_title, $select_article_list_post_date);
                                                        }
                                                        ?>

                                                        <?php
                                                        if ($enable_article_list_post_date_meta && $enable_article_list_post_author_meta) { ?>
                                                            <div class="entry-meta-separator"></div>
                                                        <?php } ?>

                                                        <?php
                                                        if ($enable_article_list_post_author_meta) {
                                                            newspanda_posted_by($select_article_list_post_author_meta, $article_list_post_author_meta_title);
                                                        }
                                                        ?>

                                                    </div>

                                                    <div class="entry-summary">
                                                        <?php echo esc_html(wp_trim_words(get_the_content(), 25, '...')); ?>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    <?php endwhile;
                                    wp_reset_postdata();
                                    ?>
                                </div>

                                <div class="swiper-pagination"></div>
                            </div>
                        </div>

                        <?php
                        if ($article_list_post_3_offset) {
                            $article_list_post_3 = $article_list_post_3_offset;
                        } else {
                            $article_list_post_3 = '';
                        }
                        $article_list_post_args_3 = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'no_found_rows' => 1,
                            'offset' => $article_list_post_3,
                            'ignore_sticky_posts' => 1,
                        );
                        $article_list_post_category_right = newspanda_get_option('article_list_post_category_right');
                        $article_list_post_args_3['posts_per_page'] = 4;
                        if (!empty($article_list_post_category_right)) :
                            $article_list_post_args_3['tax_query'][] = array(
                                'taxonomy' => 'category',
                                'field' => 'term_id',
                                'terms' => absint($article_list_post_category_right),
                            );
                        endif;
                        $article_list_post_3 = new WP_Query($article_list_post_args_3);
                        ?>
                        <div class="column-lg-6 column-md-12">
                            <div class="article-grid-right">
                                <?php
                                $counter = 0; // Initialize counter outside the loop
                                while ($article_list_post_3->have_posts()) :
                                    $article_list_post_3->the_post();
                                    $counter++; // Increment the counter for each post
                                    ?>
                                    <article
                                            id="article-list-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-default'); ?>>
                                        <div class="entry-image image-hover-effect hover-effect-shine <?php echo $counter <= 2 ? 'entry-image-small' : 'entry-image-medium'; ?>">
                                            <a class="post-thumbnail" href="<?php the_permalink(); ?>"
                                               aria-hidden="true"
                                               tabindex="-1">
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

                                        <div class="entry-details">
                                            <?php
                                            if ($enable_article_list_post_category_meta) {
                                                newspanda_post_category($select_article_list_post_category_color, $article_list_post_category_label, $select_article_list_post_number_of_category);
                                            }
                                            ?>

                                            <h3 class="entry-title <?php echo $counter <= 2 ? 'entry-title-medium' : 'entry-title-small'; ?>">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h3>

                                            <div class="entry-meta-wrapper">
                                                <?php
                                                if ($enable_article_list_post_date_meta) {
                                                    newspanda_posted_on($select_article_list_post_date_format, $select_article_list_post_date_meta_title, $select_article_list_post_date);
                                                }

                                                if ($enable_article_list_post_date_meta && $enable_article_list_post_author_meta) { ?>
                                                    <div class="entry-meta-separator"></div>
                                                <?php }

                                                if ($enable_article_list_post_author_meta) {
                                                    newspanda_posted_by($select_article_list_post_author_meta, $article_list_post_author_meta_title);
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </article>
                                <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>
<?php }
