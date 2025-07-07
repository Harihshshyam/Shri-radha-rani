<?php
/**
 * Displays the menu icon and modal
 *
 * @package NewsPanda
 */

?>

<div class="menu-modal cover-modal" data-modal-target-string=".menu-modal">

    <div class="menu-modal-inner modal-inner">

        <div class="menu-wrapper">

            <div class="menu-top">

                <button class="toggle close-nav-toggle" data-toggle-target=".menu-modal"
                        data-toggle-body-class="showing-menu-modal" data-set-focus=".menu-modal">
                    <?php newspanda_the_theme_svg('cross'); ?>
                </button><!-- .nav-toggle -->


                <nav class="mobile-menu" aria-label="<?php echo esc_attr_x('Mobile', 'menu', 'newspanda'); ?>">

                    <ul class="modal-menu reset-list-style">

                        <?php
                        if (has_nav_menu('primary')) {

                            wp_nav_menu(
                                array(
                                    'container' => '',
                                    'items_wrap' => '%3$s',
                                    'show_toggles' => true,
                                    'theme_location' => 'primary',
                                )
                            );

                        } else {

                            wp_list_pages(
                                array(
                                    'match_menu_classes' => true,
                                    'show_toggles' => true,
                                    'title_li' => false,
                                    'walker' => new newspanda_Walker_Page(),
                                )
                            );

                        }
                        ?>

                    </ul>

                </nav>
            </div><!-- .menu-top -->

            <div class="menu-bottom">
                <?php
                $enable_social_mobile_menu = newspanda_get_option('enable_social_mobile_menu');
                $enable_mobile_social_nav_border_radius = newspanda_get_option('enable_mobile_social_nav_border_radius');
                $select_mobile_social_menu_style = newspanda_get_option('select_mobile_social_menu_style');
                if (has_nav_menu('social') && $enable_social_mobile_menu) { ?>

                    <nav aria-label="<?php esc_attr_e('Expanded Social links', 'newspanda'); ?>">
                        <ul class="social-menu reset-list-style social-icons <?php echo esc_attr($select_mobile_social_menu_style); ?> <?php if ($enable_mobile_social_nav_border_radius) {
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

                <?php } ?>

            </div><!-- .menu-bottom -->

            <?php
            $enable_copyright_in_menu = newspanda_get_option('enable_copyright_in_menu');
            if ($enable_copyright_in_menu) { ?>
            <div class="menu-copyright">
                <?php
                newspanda_get_copyright_text();
                } ?>
            </div>
            <?php
            ?>
        </div><!-- .menu-wrapper -->

    </div><!-- .menu-modal-inner -->

</div><!-- .menu-modal -->
