<?php
/**
 * Template part for displaying posts in archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NewsPanda
 */
$archive_layout = newspanda_get_option('archive_layout');
$enable_excerpt_on_archive_1 = newspanda_get_option('enable_excerpt_on_archive_1');
$enable_excerpt_on_archive_2 = newspanda_get_option('enable_excerpt_on_archive_2');
$enable_excerpt_on_archive_3 = newspanda_get_option('enable_excerpt_on_archive_3');
$archive_image_class = '';
$archive_font_size = '';
$archive_image_size = '';
$enable_excerpt = '';
switch ($archive_layout) {
    case 'archive_style_1':
        $archive_image_class = 'entry-image-big';
        $archive_font_size = 'entry-title-big';
        $archive_image_size = 'medium_large';
        if ($enable_excerpt_on_archive_2) {
            $enable_excerpt = 'on';
        } else {
            $enable_excerpt = '';
        }
        break;
    case 'archive_style_2':
        $archive_image_class = 'entry-image-large';
        $archive_font_size = 'entry-title-large';
        $archive_image_size = 'large';
        if ($enable_excerpt_on_archive_1) {
            $enable_excerpt = 'on';
        } else {
            $enable_excerpt = '';
        }
        break;
    case 'archive_style_3':
        $archive_image_class = 'entry-image-medium';
        $archive_font_size = 'entry-title-medium';
        $archive_image_size = 'medium';
        if ($enable_excerpt_on_archive_3) {
            $enable_excerpt = 'on';
        } else {
            $enable_excerpt = '';
        }
        break;
    default:
        return;
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('wpi-post wpi-post-default has-border-divider'); ?>>
    <?php newspanda_post_thumbnail($archive_image_class, $archive_image_size); ?>
    <?php
    $enable_archive_author_meta = newspanda_get_option('enable_archive_author_meta');
    $select_author_meta = newspanda_get_option('select_author_meta');
    $archive_author_meta_title = newspanda_get_option('archive_author_meta_title');

    $enable_archive_date_meta = newspanda_get_option('enable_archive_date_meta');
    $select_archive_date = newspanda_get_option('select_archive_date');
    $archive_date_meta_title = newspanda_get_option('archive_date_meta_title');
    $select_date_format = newspanda_get_option('select_date_format');

    $enable_category_meta = newspanda_get_option('enable_category_meta');
    $number_of_category_to_display = newspanda_get_option('number_of_category_to_display');
    $archive_category_label = newspanda_get_option('archive_category_label');
    $select_category_color = newspanda_get_option('select_category_color');

    $enable_read_time_meta = newspanda_get_option('enable_read_time_meta');

    $archive_posts_title_limit = newspanda_get_option('archive_posts_title_limit');

    $enable_tag_meta = newspanda_get_option('enable_tag_meta');
    $enable_comment_meta = newspanda_get_option('enable_comment_meta');

    ?>
    <div class="entry-details">
        <header class="entry-header">
            <?php
            if ($enable_category_meta) {
                newspanda_post_category($select_category_color, $archive_category_label, $number_of_category_to_display);
            }
            ?>
            <?php
            the_title('<h2 class="entry-title ' . $archive_font_size . ' ' . $archive_posts_title_limit . '"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
            ?>
            <div class="entry-meta-wrapper">
                <?php
                if ($enable_read_time_meta) { ?>
                    <?php newspanda_get_readtime(); ?>
                    <div class="entry-meta-separator"></div>
                    <?php
                } ?>

                <?php
                if ($enable_archive_date_meta) { ?>
                    <?php newspanda_posted_on($select_date_format, $archive_date_meta_title, $select_archive_date); ?>
                    <div class="entry-meta-separator"></div>
                    <?php
                } ?>

                <?php
                if ($enable_archive_author_meta) {
                    newspanda_posted_by($select_author_meta, $archive_author_meta_title);
                }
                ?>
            </div><!-- .entry-meta -->
        </header><!-- .entry-header -->
        <?php if ($enable_excerpt == 'on') { ?>
            <div class="entry-content">
                <?php
                newspanda_the_archive_excerpt();
                ?>
            </div><!-- .entry-content -->
        <?php } ?>

        <footer class="entry-footer">
            <?php if ($enable_excerpt == 'on') {
                newspanda_the_archive_readmore();
            }
            ?>
            <?php newspanda_entry_footer($enable_tag_meta, $enable_comment_meta); ?>
        </footer><!-- .entry-footer -->
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
