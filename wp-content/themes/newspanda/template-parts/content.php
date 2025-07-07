<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NewsPanda
 */

/**
 * Update post meta and check if it was updated.
 *
 * @param int    $post_id    The post ID.
 * @param string $meta_key   The meta key.
 * @param mixed  $meta_value The meta value.
 * @return bool  True if updated, false otherwise.
 */
function newspanda_update_post_meta_and_check( $post_id, $meta_key, $meta_value ) {
    $result = update_post_meta( $post_id, $meta_key, $meta_value );

    if ( $result === true || is_numeric( $result ) ) {
        return true; // Meta was updated or added.
    } elseif ( $result === false ) {
        return false; // Meta was not updated.
    }

    return false;
}

$enable_single_author_meta = newspanda_get_option('enable_single_author_meta');
$select_single_author_meta = newspanda_get_option('select_single_author_meta');
$single_author_meta_title = newspanda_get_option('single_author_meta_title');

$enable_single_date_meta = newspanda_get_option('enable_single_date_meta');
$select_single_date = newspanda_get_option('select_single_date');
$single_date_meta_title = newspanda_get_option('single_date_meta_title');
$select_single_date_format = newspanda_get_option('select_single_date_format');

$enable_single_category_meta = newspanda_get_option('enable_single_category_meta');
$single_category_label = newspanda_get_option('single_category_label');
$select_single_category_color = newspanda_get_option('select_single_category_color');
$enable_single_read_time_meta = newspanda_get_option('enable_single_read_time_meta');
$enable_single_tag_meta = newspanda_get_option('enable_single_tag_meta');

$show_sticky_article_navigation = newspanda_get_option('show_sticky_article_navigation');
$show_related_posts = newspanda_get_option('show_related_posts');
$show_author_posts = newspanda_get_option('show_author_posts');
$show_author_info = newspanda_get_option('show_author_info');

$newspanda_post_navigation = get_post_meta($post->ID, 'newspanda_single_post_navigation', true);
$newspanda_single_category_meta = get_post_meta($post->ID, 'newspanda_single_category_meta', true);
$newspanda_single_date_meta = get_post_meta($post->ID, 'newspanda_single_date_meta', true);
$newspanda_single_author_meta = get_post_meta($post->ID, 'newspanda_single_author_meta', true);
$newspanda_single_related_post = get_post_meta($post->ID, 'newspanda_single_related_post', true);
$newspanda_single_author_post = get_post_meta($post->ID, 'newspanda_single_author_post', true);
$newspanda_single_post_author = get_post_meta($post->ID, 'newspanda_single_post_author', true);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-default has-border-divider'); ?>>
    <?php newspanda_get_breadcrumb(); ?>
    <?php newspanda_post_thumbnail(); ?>
    <div class="entry-details">
        <header class="entry-header">
            <?php 
            if ($newspanda_single_category_meta == 1) {
                newspanda_post_category($select_single_category_color, $single_category_label);
            } elseif ($newspanda_single_category_meta == '') {
                if ($enable_single_category_meta) {
                    newspanda_post_category($select_single_category_color, $single_category_label);
                }
            } elseif ($newspanda_single_category_meta == 0) {
            }

            ?>
            <?php
            if (! $enable_single_read_time_meta) {
                newspanda_get_readtime();
            } ?>
            <?php
            the_title('<h1 class="entry-title entry-title-large">', '</h1>');

            if ('post' === get_post_type()) :
                ?>
                <div class="entry-meta-wrapper">
                    <?php
                    if ($newspanda_single_date_meta == 1) {
                        newspanda_posted_on($select_single_date_format, $single_date_meta_title ,$select_single_date);
                    } elseif ($newspanda_single_date_meta == '') {
                        if ($enable_single_date_meta) {
                        newspanda_posted_on($select_single_date_format, $single_date_meta_title ,$select_single_date);
                        }
                    } elseif ($newspanda_single_date_meta == 0) {
                    }
                    ?>

                    <?php
                    if ($newspanda_single_author_meta == 1) {
                        echo '<div class="entry-meta-separator"></div>';
                        newspanda_posted_by($select_single_author_meta , $single_author_meta_title);
                    } elseif ($newspanda_single_author_meta == '') {
                        if ($enable_single_author_meta) {
                            echo '<div class="entry-meta-separator"></div>';
                            newspanda_posted_by($select_single_author_meta , $single_author_meta_title);
                        }
                    } elseif ($newspanda_single_author_meta == 0) {
                    }
                    ?>
                </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php
            the_content(
                sprintf(
                    wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                        __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'newspanda'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post(get_the_title())
                )
            );

            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'newspanda'),
                    'after' => '</div>',
                )
            );
            ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
            <?php newspanda_entry_footer($enable_single_tag_meta); ?>
        </footer><!-- .entry-footer -->
    </div>
</article><!-- #post-<?php the_ID(); ?> -->

<?php
    if ('post' === get_post_type()) :
        
    if ($newspanda_single_post_author == 1) {
        get_template_part('template-parts/single/single-author-info');
    } elseif ($newspanda_single_post_author == '') {
        if ($show_author_info) {
        get_template_part('template-parts/single/single-author-info');
        }
    } elseif ($newspanda_single_post_author == 0) {
    }


    if ( !$newspanda_single_related_post ){
        if ($show_related_posts) {
        get_template_part('template-parts/single/single-related-posts');
        }
    }elseif($newspanda_single_related_post == 1){
        get_template_part('template-parts/single/single-related-posts');
    }

    if ( !$newspanda_single_author_post ){
        if ($show_author_posts) {
        get_template_part('template-parts/single/single-author-posts');
        }
    }elseif($newspanda_single_author_post == 1){
        get_template_part('template-parts/single/single-author-posts');
    }

endif;
?>

<?php
if ($newspanda_post_navigation == 1) {
    get_template_part( 'template-parts/single/sticky-article-nav' );
} elseif ($newspanda_post_navigation == '') {
    if ($show_sticky_article_navigation) {
    get_template_part( 'template-parts/single/sticky-article-nav' );
    }
} elseif ($newspanda_post_navigation == 0) {
}
?>