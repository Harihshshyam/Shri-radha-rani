<?php
/* Theme Widget. */
require get_template_directory() . '/inc/admin/widgets/widget-base.php';
require get_template_directory() . '/inc/admin/widgets/class-recent-post.php';
require get_template_directory() . '/inc/admin/widgets/class-slider-post.php';
require get_template_directory() . '/inc/admin/widgets/class-category-grid.php';
require get_template_directory() . '/inc/admin/widgets/class-grid-post.php';
require get_template_directory() . '/inc/admin/widgets/class-cta.php';
require get_template_directory() . '/inc/admin/widgets/class-mailchimp.php';
require get_template_directory() . '/inc/admin/widgets/class-tab-post.php';
require get_template_directory() . '/inc/admin/widgets/class-youtube-video.php';
require get_template_directory() . '/inc/admin/widgets/class-carousel-slider.php';
require get_template_directory() . '/inc/admin/widgets/class-image-widget.php';
require get_template_directory() . '/inc/admin/widgets/class-metro-post.php';
require get_template_directory() . '/inc/admin/widgets/class-author.php';
require get_template_directory() . '/inc/admin/widgets/class-social-menu.php';
require get_template_directory() . '/inc/admin/widgets/class-multi-grid-post.php';
require get_template_directory() . '/inc/admin/widgets/class-jumbo-post.php';


/* Register site widgets */
if (!function_exists('newspanda_widgets')) :
    /**
     * Load widgets.
     *
     * @since 1.0.0
     */
    function newspanda_widgets()
    {
        register_widget('NewsPanda_Recent_Posts');
        register_widget('NewsPanda_Slider_Posts');
        register_widget('NewsPanda_Category_Grid');
        register_widget('NewsPanda_Grid_Post');
        register_widget('NewsPanda_CTA');
        register_widget('NewsPanda_Mailchimp');
        register_widget('NewsPanda_Tab_Post');
        register_widget('NewsPanda_Youtube_Video');
        register_widget('NewsPanda_Carousel_Slider_Post');
        register_widget('NewsPanda_Image_Widget');
        register_widget('NewsPanda_Metro_Post_Widget');
        register_widget('NewsPanda_Author_Widget');
        register_widget('NewsPanda_Author_Widget');
        register_widget('NewsPanda_Social_Menu');
        register_widget('NewsPanda_Multi_Grid_Post');
        register_widget('NewsPanda_Jumbo_Widget');
    }
endif;
add_action('widgets_init', 'newspanda_widgets');


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function newspanda_widgets_init()
{

    $sidebar_args['sidebar'] = array(
        'name' => __('Sidebar', 'newspanda'),
        'id' => 'sidebar',
        'description' => 'Add global sidebar widgets here.',
    );

    $sidebar_args['after_header'] = array(
        'name' => __('After Header', 'newspanda'),
        'id' => 'after-header',
        'description' => __('Widgets placed in this region will be displayed below the header and above the main content.', 'newspanda'),
    );

    $sidebar_args['offcanvas_drawer'] = array(
        'name' => __('Off-canvas Drawer', 'newspanda'),
        'id' => 'offcanvas-drawer',
        'description' => 'Add widgets for the off-canvas drawer here.',
    );

    $sidebar_args['homepage_fullwidth_before_two_column'] = array(
        'name' => __('Homepage Fullwidth Widget Area - Before Two Column Area', 'newspanda'),
        'id' => 'homepage-fullwidth-before-two-column',
        'description' => __('Widgets placed in this region will be displayed above the two-column widget area.', 'newspanda'),
    );

    $sidebar_args['homepage_column_one'] = array(
        'name' => __('Homepage Two Column Widget Area - Primary', 'newspanda'),
        'id' => 'homepage-column-one',
        'description' => __('Widgets placed in this region will be displayed as the primary area in the two-column, side-by-side homepage widget section.', 'newspanda'),
    );

    $sidebar_args['homepage_column_two'] = array(
        'name' => __('Homepage Two Column Widget Area - Secondary', 'newspanda'),
        'id' => 'homepage-column-two',
        'description' => __('Widgets placed in this region will be displayed as the secondary area in the two-column, side-by-side homepage widget section.', 'newspanda'),
    );

    $sidebar_args['homepage_fullwidth_after_two_column'] = array(
        'name' => __('Homepage Fullwidth Widget Area - After Two Column Area', 'newspanda'),
        'id' => 'homepage-fullwidth-after-two-column',
        'description' => __('Widgets placed in this region will be displayed below the two-column widget area.', 'newspanda'),
    );

    $sidebar_args['homepage_before_posts'] = array(
        'name' => __('Homepage Before Posts', 'newspanda'),
        'id' => 'homepage-before-posts',
        'description' => __('Widgets added to this region will appear on the homepage before posts listing.', 'newspanda'),
    );

    $sidebar_args['homepage_after_posts'] = array(
        'name' => __('Homepage After Posts', 'newspanda'),
        'id' => 'homepage-after-posts',
        'description' => __('Widgets added to this region will appear on the homepage after posts listing.', 'newspanda'),
    );

    $sidebar_args['homepage_fullwidth_bottom'] = array(
        'name' => __('Homepage Fullwidth Widget Area - Bottom Area', 'newspanda'),
        'id' => 'homepage-fullwidth-bottom',
        'description' => __('Widgets placed in this region will be displayed right after the two-column widget area.', 'newspanda'),
    );

    $sidebar_args['before_footer'] = array(
        'name' => __('Before Footer', 'newspanda'),
        'id' => 'before-footer-widgetarea',
        'description' => __('Widgets added to this region will appear above the footer.', 'newspanda'),
    );


    $footer_column = 4;

    $footer_column_layout = newspanda_get_option( 'footer_column_layout' );
    if ( $footer_column_layout ) {
        switch ( $footer_column_layout ) {
            case 'footer_layout_1':
                $footer_column = 4;
                break;
            case 'footer_layout_2':
            case 'footer_layout_5':
                $footer_column = 3;
                 break;
            case 'footer_layout_3':
            case 'footer_layout_4':
            case 'footer_layout_6':
                $footer_column = 2;
                break;
            default:
            $footer_column = 4;

        }
    } else {
        $footer_column = 4;
    }

    $cols = intval(apply_filters('newspanda_footer_widget_columns', $footer_column));

    for ($j = 1; $j <= $cols; $j++) {
        $footer = sprintf('footer_%d', $j);

        $footer_region_name = sprintf(__('Footer Column %1$d', 'newspanda'), $j);
        $footer_region_description = sprintf(__('Widgets added here will appear in column %1$d of the footer.', 'newspanda'), $j);

        $sidebar_args[$footer] = array(
            'name' => $footer_region_name,
            'id' => sprintf('footer-%d', $j),
            'description' => $footer_region_description,
        );
    }

    $sidebar_args['after_footer'] = array(
        'name' => __('After Footer', 'newspanda'),
        'id' => 'after-footer-widgetarea',
        'description' => __('Widgets added to this region will appear after the footer and before sub-footer.', 'newspanda'),
    );

    if ( newspanda_is_wc_active() ) {

        $sidebar_args['wc_sidebar'] = array(
            'name'        => __( 'WooCommerce Shop/Category Page Sidebar', 'newspanda' ),
            'id'          => 'wc-sidebar',
            'description' => __( 'Widgets added to this region will appear on the shop or category page of woocommerce.', 'newspanda' ),
        );

        $sidebar_args['wc_product_single_sidebar'] = array(
            'name'        => __( 'WooCommerce Product Page Sidebar', 'newspanda' ),
            'id'          => 'wc-product-single-sidebar',
            'description' => __( 'Widgets added to this region will appear on detail page of a woocommerce product.', 'newspanda' ),
        );

    }

    $sidebar_args = apply_filters('newspanda_sidebar_args', $sidebar_args);

    foreach ($sidebar_args as $sidebar => $args) {
        $widget_tags = array(
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        );

        // Dynamically generated filter hooks. Allow changing widget wrapper and title tags. .
        $filter_hook = sprintf('newspanda_%s_widget_tags', $sidebar);
        $widget_tags = apply_filters($filter_hook, $widget_tags);

        if (is_array($widget_tags)) {
            register_sidebar($args + $widget_tags);
        }
    }
}

add_action('widgets_init', 'newspanda_widgets_init');
