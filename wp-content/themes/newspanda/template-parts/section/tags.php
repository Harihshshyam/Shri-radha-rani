<?php
$enable_tags = newspanda_get_option('enable_tags');
if ($enable_tags) {
    $no_of_tags = newspanda_get_option('no_of_tags', 4);
    $tags_orderby = newspanda_get_option('tags_orderby', 'date');
    $tags_order = newspanda_get_option('tags_order', 'desc');
    $tags = get_tags(array(
        'orderby' => esc_attr($tags_orderby),
        'order' => esc_attr($tags_order),
        'hide_empty' => false
    ));
    $tags_label_text = newspanda_get_option('tags_label_text');
    $tags_label_style = newspanda_get_option('tags_label_style');

    $wrapper_class = ' tags-label-' . $tags_label_style;
    $label_class = newspanda_get_option('hide_tags_label_responsive') ? ' hide-on-mobile ' : '';
    ?>
    <section class="wpi-section wpi-tags-section<?php echo esc_attr($wrapper_class); ?>">
        <div class="wrapper">
            <div class="site-tags-panel">
                <?php if (newspanda_get_option('enable_tags_label', true)) : ?>
                    <div class="site-tags-title<?php echo esc_attr($label_class); ?>">
                        <?php
                        if ('style_2' == $tags_label_style) :
                            newspanda_the_theme_svg('trending-graph');
                        endif;
                        ?>
                        <?php
                        if ($tags_label_text) :
                            echo esc_html($tags_label_text);
                        endif;
                        ?>
                    </div>
                <?php endif; ?>
                <div class="site-tags-content">
                    <?php
                    $thelist = '';
                    $i = 1;
                    foreach ($tags as $tag) {
                        if ($i <= $no_of_tags) {
                            $link = get_term_link($tag, 'post_tag');
                            $thelist .= "<a href='" . esc_url($link) . "' rel='tag' class='site-tags-item'>#" . esc_html($tag->name) . "</a>";
                            ++$i;
                        }
                    }
                    echo $thelist;
                    ?>


                </div>
            </div>
        </div>
    </section>
<?php }
?>
