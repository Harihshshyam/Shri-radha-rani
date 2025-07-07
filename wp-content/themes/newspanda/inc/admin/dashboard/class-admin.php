<?php
/**
 * NewsPanda Admin Class.
 *
 * @package NewsPanda
 * @since   1.0.0
 */
if (!defined('ABSPATH')) {
    exit;
}
if (!class_exists('NewsPanda_Admin')) :
    /**
     * NewsPanda_Admin Class.
     */
    class NewsPanda_Admin
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
            add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts'));
        }

        /**
         * Localize array for import button AJAX request.
         */
        public function enqueue_scripts()
        {
            $suffix = (defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) ? '' : '.min';

            $file_name = is_rtl() ? 'admin-rtl' . $suffix . '.css' : 'admin' . $suffix . '.css';

            wp_enqueue_style(
                'newspanda-admin-style',
                get_template_directory_uri() . '/inc/admin/dashboard/css/' . $file_name,
                array(),
                NEWSPANDA_VERSION
            );

            wp_enqueue_script('newspanda-plugin-install-helper', get_template_directory_uri() . '/inc/admin/dashboard/js/admin.js', array('jquery'), NEWSPANDA_VERSION, true);
            $welcome_data = array(
                'uri' => esc_url(admin_url('/themes.php?page=newspanda&tab=starter-templates')),
                'btn_text' => esc_html__('Processing...', 'newspanda'),
                'nonce' => wp_create_nonce('newspanda_demo_import_nonce'),
                'admin_url' => esc_url(admin_url()),
                'ajaxurl' => admin_url('admin-ajax.php'), // Include this line for using admin-ajax.php
            );
            wp_localize_script('newspanda-plugin-install-helper', 'newspandaRedirectDemoPage', $welcome_data);
        }
    }
endif;
return new NewsPanda_Admin();
