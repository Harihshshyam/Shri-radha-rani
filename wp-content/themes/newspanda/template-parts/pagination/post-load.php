<?php
if ( ! function_exists( 'newspanda_ajax_pagination' ) ) :
    /**
     * Outputs the required structure for ajax loading posts on scroll and click
     *
     * @since 1.0.0
     * @param $type string Ajax Load Type
     */
    function newspanda_ajax_pagination($type) {
        global $wp_query;
        if ( $wp_query->max_num_pages > 1  ) {

            ?>
            <div class="newspanda-advanced-pagination" data-page="1" data-max-pages="<?php echo esc_attr( $wp_query->max_num_pages ); ?>" data-load-type="<?php echo esc_attr( $type ); ?>">
                <hr>
            	<a href="#" class="newspanda-ajax-load-button wpi-button wpi-button-secondary">
            		<span class="newspanda-pagination-label"><?php esc_html_e( 'Load More Posts', 'newspanda' ); ?></span>
            		<span class="newspanda-pagination-spinner"></span>
            	</a>
            </div>
            <?php
        }
    }
endif;

if ( ! function_exists( 'newspanda_load_posts' ) ) :
    /**
     * Ajax Load posts Callback.
     *
     * @since 1.0.0
     *
     */
    function newspanda_load_posts() {

        check_ajax_referer( 'newspanda-load-posts-nonce', 'nonce' );

        $query_vars = json_decode( stripslashes( $_POST['query_vars'] ), true );

        $query_vars['post_type'] = ( isset( $_POST['post_type']) && !empty($_POST['post_type'] ) ) ? esc_attr( $_POST['post_type'] ) : 'post';
        $query_vars['post_status'] = 'publish';
        $query_vars['paged'] = (int) $_POST['page'];


        $posts = new WP_Query( $query_vars );
        
        if($posts->have_posts()):

            ob_start();

            while($posts->have_posts()):$posts->the_post();

                get_template_part('template-parts/archive/archive-content');

            endwhile;wp_reset_postdata();

            $output['content'][] = ob_get_clean();
            wp_send_json_success($output);

        else:

            $error = new WP_Error( '500', __('No More Posts','newspanda') );
            wp_send_json_error( $error );

        endif;

        wp_die();
    }
endif;
add_action( 'wp_ajax_newspanda_load_posts', 'newspanda_load_posts' );
add_action( 'wp_ajax_nopriv_newspanda_load_posts', 'newspanda_load_posts' );