<?php
/**
 * Displays the site header.
 *
 * @package NewsPanda
 */
?>
<?php
$enable_offcanvas = newspanda_get_option('enable_offcanvas');
$enable_header_advertisement = newspanda_get_option('enable_header_advertisement');
$header_advert_image = newspanda_get_option('header_advert_image');
$header_advert_image_url = newspanda_get_option('header_advert_image_url');
$enable_social_nav_on_topbar = newspanda_get_option('enable_social_nav_on_topbar');
$enable_social_nav_border_radius = newspanda_get_option('enable_social_nav_border_radius');
$select_top_bar_social_menu_style = newspanda_get_option('select_top_bar_social_menu_style');
if ($enable_header_advertisement) { ?>
    <div class="wpi-header-promote header-promote-bg">
            <a href="<?php echo esc_url($header_advert_image_url); ?>" class="wpi-promote-center" target="_blank">
                <img src="<?php echo esc_url($header_advert_image); ?>">
            </a>
    </div>
<?php } ?>

<header id="masthead" class="site-header site-header-4 <?php echo has_header_image() ? 'has-header-image data-bg' : ''; ?>"
        <?php if (has_header_image()) { ?>data-background="<?php echo esc_url(get_header_image()); ?>"
    <?php } ?> >
    <?php get_template_part('template-parts/header/responsive-header'); ?>
    <div class="site-header-desktop hide-on-tablet hide-on-mobile">
        <div class="header-branding-area">
            <div class="wrapper header-wrapper">

                <div class="header-components header-components-left">
                    <?php if ($enable_offcanvas) { ?>
                        <div class="site-drawer-menu-icon" aria-label="Open menu" tabindex="0">
                            <?php newspanda_the_theme_svg('offcanvas'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="header-components header-components-center">
                    <?php
                    get_template_part('template-parts/header/site-branding');
                    ?>
                </div>

                <div class="header-components header-components-right">
                    <div class="search-modal-form">
                      <?php
                      get_search_form(
                          array(
                              'aria_label' => __('Search for:', 'newspanda'),
                          )
                      );
                      ?>
                      <?php newspanda_the_theme_svg('search'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-navigation-area">
            <div class="wrapper header-wrapper">
                <div class="header-components header-components-center">

                    <div class="header-navigation-wrapper">
                        <?php
                        if (has_nav_menu('primary')) {
                            ?>
                            <nav class="primary-menu-wrapper"
                                 aria-label="<?php echo esc_attr_x('Horizontal', 'menu', 'newspanda'); ?>">
                                <ul class="primary-menu reset-list-style">
                                    <?php
                                    if (has_nav_menu('primary')) {
                                        wp_nav_menu(
                                            array(
                                                'container' => '',
                                                'items_wrap' => '%3$s',
                                                'theme_location' => 'primary',
                                            )
                                        );
                                    }
                                    ?>
                                </ul>
                            </nav><!-- .primary-menu-wrapper -->
                            <?php
                        } else { ?>
                            <nav class="primary-menu-wrapper ">
                                <ul class="primary-menu reset-list-style fallback-menu">
                                    <?php
                                    wp_list_pages(
                                        array(
                                            'match_menu_classes' => true,
                                            'show_sub_menu_icons' => true,
                                            'title_li' => false,
                                        )
                                    );
                                    ?>
                                </ul>
                            </nav>
                        <?php } ?>
                    </div><!-- .header-navigation-wrapper -->
                </div>
            </div>
        </div>
    </div>
</header><!-- #masthead -->
