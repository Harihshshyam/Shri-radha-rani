<?php
/* ------------------------------------------------------------------------- *
 *  Dynamic styles
/* ------------------------------------------------------------------------- */
/*  Convert hexadecimal to rgb
/* ------------------------------------ */
if (!function_exists('newspanda_hex2rgb')) {
    function newspanda_hex2rgb($colour, $opacity = 1)
    {
        if ($colour[0] == '#') {
            $colour = substr($colour, 1);
        }
        if (strlen($colour) == 6) {
            list($r, $g, $b) = array($colour[0] . $colour[1], $colour[2] . $colour[3], $colour[4] . $colour[5]);
        } elseif (strlen($colour) == 3) {
            list($r, $g, $b) = array($colour[0] . $colour[0], $colour[1] . $colour[1], $colour[2] . $colour[2]);
        } else {
            return false;
        }
        $r = hexdec($r);
        $g = hexdec($g);
        $b = hexdec($b);
        return 'rgba(' . $r . ',' . $g . ',' . $b . ',' . $opacity . ')';
    }
}
if (!function_exists('newspanda_get_inline_css')) :
    /**
     * Outputs theme custom CSS.
     *
     * @since 1.0.0
     */
    function newspanda_get_inline_css()
    {
        $defaults = newspanda_get_all_customizer_default_values();
        $background_color = get_theme_mod('background_color');

        $newspanda_site_logo_height = newspanda_get_option('newspanda_site_logo_height');

        ob_start();
        ?>
        <?php if (!empty($background_color) && $background_color != 'f5f5f5') :
        ?>
        :root {
        --wpi--base-bg-color: #<?php echo esc_attr($background_color); ?>;
        }
    <?php endif; ?>

        <?php if ($newspanda_site_logo_height !== $defaults['newspanda_site_logo_height']) : ?>
        .site-logo img {
        height:<?php echo absint($newspanda_site_logo_height); ?>px;
        }
    <?php endif; ?>
        <?php
        return ob_get_clean();
    }
endif;
