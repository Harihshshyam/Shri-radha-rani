<?php do_action('newspanda_before_topbar'); ?>
<?php
$enable_top_bar = newspanda_get_option('enable_top_bar');
$hide_topbar_on_mobile = newspanda_get_option('hide_topbar_on_mobile');
$class = '';

if ($hide_topbar_on_mobile) {
    $class = ' hide-on-mobile';
}

$enable_header_time = newspanda_get_option('enable_header_time');
$enable_header_date = newspanda_get_option('enable_header_date');
$date_label_text = newspanda_get_option('date_label_text');
$todays_date_format = newspanda_get_option('todays_date_format');
$enable_social_nav_on_topbar = newspanda_get_option('enable_social_nav_on_topbar');
$enable_social_nav_border_radius = newspanda_get_option('enable_social_nav_border_radius');
$select_top_bar_social_menu_style = newspanda_get_option('select_top_bar_social_menu_style');
?>

    <div id="wpi-topbar" class="site-topbar<?php echo esc_attr($class); ?>">
        <div class="wrapper topbar-wrapper">
            <div class="topbar-components topbar-components-left">
                <?php if ($enable_header_date) :
                    $date_format = newspanda_get_option('todays_date_format');
                    ?>
                    <div class="site-topbar-component topbar-component-date">

                        <?php
                        if ($date_label_text) :
                            echo esc_html($date_label_text);
                        endif;
                        ?>

                        <?php echo date_i18n($date_format, current_time('timestamp')); ?>
                    </div>
                <?php endif; ?>
                <?php if ($enable_header_time) : ?>
                    <div class="site-topbar-component topbar-component-clock">
                        <div class="wpi-display-clock"></div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="topbar-components topbar-components-right">
                <?php if (has_nav_menu('social') && $enable_social_nav_on_topbar) { ?>
                    <div class="site-topbar-component topbar-component-social">
                        <nav aria-label="<?php esc_attr_e('Topbar Social links', 'newspanda'); ?>">
                            <ul class="social-menu reset-list-style social-icons <?php echo esc_attr($select_top_bar_social_menu_style); ?> <?php if ($enable_social_nav_border_radius) {
                                echo "has-border-radius";
                            } ?>">
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'social',
                                        'container' => '',
                                        'container_class' => '',
                                        'items_wrap' => '%3$s',
                                        'menu_id' => '',
                                        'menu_class' => '',
                                        'depth' => 1,
                                        'link_before' => '<span class="screen-reader-text">',
                                        'link_after' => '</span>',
                                        'fallback_cb' => '',
                                    )
                                );
                                ?>
                            </ul>
                        </nav><!-- .social-menu -->
                    </div>
                <?php } ?>

            <?php
            if (class_exists('WooCommerce')) {
                newspanda_woocommerce_cart_count();
            } ?>
            </div>
        </div>
    </div>


<?php do_action('newspanda_after_topbar'); ?>