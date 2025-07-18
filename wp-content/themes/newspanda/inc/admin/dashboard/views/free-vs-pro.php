<?php
if (!is_child_theme()) {
    $theme = wp_get_theme();
} else {
    $theme = wp_get_theme()->parent();
}
$tick_mark = '<span class="compare-checkmark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M5.37994 11.5537L5.7335 11.9073L6.08705 11.5537L13.887 3.75375C13.9296 3.71119 13.9703 3.7002 14.0002 3.7002C14.03 3.7002 14.0707 3.71119 14.1133 3.75375C14.1558 3.79631 14.1668 3.83698 14.1668 3.86686C14.1668 3.89675 14.1558 3.93742 14.1133 3.97998L5.84661 12.2466C5.80946 12.2838 5.79218 12.2918 5.78876 12.2933L5.7886 12.2934C5.78668 12.2943 5.7738 12.3002 5.7335 12.3002C5.6932 12.3002 5.68032 12.2943 5.67839 12.2934L5.67823 12.2933C5.67482 12.2918 5.65753 12.2838 5.62038 12.2466L1.88705 8.51331C1.84449 8.47075 1.8335 8.43008 1.8335 8.4002C1.8335 8.37031 1.84449 8.32964 1.88705 8.28708L1.54017 7.9402L1.88705 8.28708C1.92961 8.24452 1.97028 8.23353 2.00016 8.23353C2.03005 8.23353 2.07072 8.24452 2.11328 8.28708L5.37994 11.5537Z" stroke="#3fb28f"/></svg></span>';
$cross_mark = '<span class="compare-crossmark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.7071 4.70711C13.0976 4.31658 13.0976 3.68342 12.7071 3.29289C12.3166 2.90237 11.6834 2.90237 11.2929 3.29289L8 6.58579L4.70711 3.29289C4.31658 2.90237 3.68342 2.90237 3.29289 3.29289C2.90237 3.68342 2.90237 4.31658 3.29289 4.70711L6.58579 8L3.29289 11.2929C2.90237 11.6834 2.90237 12.3166 3.29289 12.7071C3.68342 13.0976 4.31658 13.0976 4.70711 12.7071L8 9.41421L11.2929 12.7071C11.6834 13.0976 12.3166 13.0976 12.7071 12.7071C13.0976 12.3166 13.0976 11.6834 12.7071 11.2929L9.41421 8L12.7071 4.70711Z" fill="#e62424"/></svg></span>';
?>
<div class="newspanda-dashboard-content free-vs-pro-page">
    <table class="newspanda-compare-table">
        <tbody>
        <?php
        $show_free_pro = true; // Set to false to hide the Free/Pro column
        $features = array(
            'General Features' => array(
                'showFreePro' => true,
                'items' => array(
                    array('Hook For Developers', $tick_mark, $tick_mark),
                    array('WooCommerce Compatible', $tick_mark, $tick_mark),
                    array('Gutenberg Compatible', $tick_mark, $tick_mark),
                    array('Elementor Compatible', $tick_mark, $tick_mark),
                    array('Dark Mode', $cross_mark, $tick_mark),
                    array('Typography(Font Size, Font Family, Font Weight,...)', $cross_mark, $tick_mark),
                    array('Styling Options', 'Limited', $tick_mark),
                    array('Background Options', 'Limited', $tick_mark),
                    array('Pre Built Demos', 1, 2),
                ),
            ),
            'Colors' => array(
                'showFreePro' => true,
                'items' => array(
                    array('Background Color', $tick_mark, $tick_mark),
                    array('Primary Color', $cross_mark, $tick_mark),
                    array('Heading Colors', $cross_mark, $tick_mark),
                    array('Element Colors', $cross_mark, $tick_mark),
                    array('Link Color', $cross_mark, $tick_mark),
                    array('Category Colors', $tick_mark, $tick_mark),
                ),
            ),
            'Header Features' => array(
                'showFreePro' => true,
                'items' => array(
                    array('Site Identity Customization', 'Limited', $tick_mark),
                    array('Header Layouts', 2, 6),
                    array('Sticky Header', $tick_mark, $tick_mark),
                    array('Date and Time', $tick_mark, $tick_mark),
                    array('News Ticker', 'Limited', $tick_mark),
                    array('Offcanvas Widget Area', $cross_mark, $tick_mark),
                    array('Top Bar Navigation', $cross_mark, $tick_mark),
                ),
            ),
            'WooCommerce' => array(
                'showFreePro' => true,
                'items' => array(
                    array('Advanced WooCommerce Support',  $cross_mark, $tick_mark),
                    array('WooCommerce Product Page Sidebar', $tick_mark, $tick_mark),
                    array('WooCommerce Product Page Sidebar', $tick_mark, $tick_mark),
                ),
            ),
            'Container Layout' => array(
                'showFreePro' => true,
                'items' => array(
                    array('Boxed', $cross_mark, $tick_mark),
                    array('Left Sidebar', $tick_mark, $tick_mark),
                    array('Right Sidebar', $tick_mark, $tick_mark),
                    array('No Sidebar', $tick_mark, $tick_mark),
                ),
            ),
            'Blog' => array(
                'showFreePro' => true,
                'items' => array(
                    array('Archive Layout', 3, 5),
                    array('Post Format Support', $cross_mark, $tick_mark),
                    array('Sticky Sidebar', $tick_mark, $tick_mark),
                    array('Excerpt', $tick_mark, $tick_mark),
                    array('Excerpt Length', $tick_mark, $tick_mark),
                    array('Excerpt Line Limit', $tick_mark, $tick_mark),
                    array('Read More Text', $cross_mark, $tick_mark),
                    array('Infinite Scroll', $tick_mark, $tick_mark),
                    array('Social Share Button', $cross_mark, $tick_mark),
                ),
            ),
            'Content' => array(
                'showFreePro' => true,
                'items' => array(
                    array('Author Info Area', $tick_mark, $tick_mark),
                    array('Social Media Icons on Author Info Area', $cross_mark, $tick_mark),
                    array('Post Navigation Style', 1, 3),
                    array('Related Posts', $tick_mark, $tick_mark),
                    array('Related Author Posts', $cross_mark, $tick_mark),
                    array('Read Time', $cross_mark, $tick_mark),
                    array('Post Date Format', 1, 2),
                    array('Sticky Sidebar', $tick_mark, $tick_mark),
                    array('Social Share Button', $cross_mark, $tick_mark),
                    array('Fixed Next/Prev Posts', $tick_mark, $tick_mark),
                ),
            ),
            'Footer' => array(
                'showFreePro' => true,
                'items' => array(
                    array('Footer Column Layout', 7, 9),
                    array('Background Color', $cross_mark, $tick_mark),
                    array('Background Image', $cross_mark, $tick_mark),
                    array('Scroll To Top Button', $tick_mark, $tick_mark),
                    array('Reading Progress Indicator', $tick_mark, $tick_mark),
                    array('Footer Widgets Area', $tick_mark, $tick_mark),
                    array('Remove Copyright Theme Credit', $cross_mark, $tick_mark),
                ),
            ),
            'Additional' => array(
                'showFreePro' => true,
                'items' => array(
                    array('Schema Markup', $cross_mark, $tick_mark),
                    array('Social Share Icons', $cross_mark, 3),
                    array('Newsletter Popup Model Box', $cross_mark, $tick_mark),
                ),
            ),
            'API Integrations' => array(
                'showFreePro' => true,
                'items' => array(
                    array('OpenWeatherMap API Integration', $cross_mark, $tick_mark),
                    array('GoogleMaps API Integration', $cross_mark, $tick_mark),
                    array('Exchange Rate API Integration', $cross_mark, $tick_mark),
                ),
            ),
            'Widgets' => array(
                'showFreePro' => true,
                'items' => array(
                    array('Widget Areas', 20, '25+'),
                ),
            ),
            'TG Widgets' => array(
                'showFreePro' => true,
                'items' => array(
                    array('NewsPanda: Advertisement Widget', $cross_mark, $tick_mark),
                    array('NewsPanda: Instagram Widget', $cross_mark, $tick_mark),
                    array('NewsPanda: Author Widget', $tick_mark, $tick_mark),
                    array('NewsPanda: CTA', $tick_mark, $tick_mark),
                    array('NewsPanda: Carousel Posts', $tick_mark, $tick_mark),
                    array('NewsPanda: Categories', $tick_mark, $tick_mark),
                    array('NewsPanda: Grid Posts', $tick_mark, $tick_mark),
                    array('NewsPanda: Image Widget', $tick_mark, $tick_mark),
                    array('NewsPanda: Mailchimp', $tick_mark, $tick_mark),
                    array('NewsPanda: Metro Post', $tick_mark, $tick_mark),
                    array('NewsPanda: Recent Posts', $tick_mark, $tick_mark),
                    array('NewsPanda: Currency Exchange', $cross_mark, $tick_mark),
                    array('NewsPanda: Google Maps', $cross_mark, $tick_mark),
                    array('NewsPanda: Weather', $cross_mark, $tick_mark),
                    array('NewsPanda: Slider Posts', $tick_mark, $tick_mark),
                    array('NewsPanda: Social Menu', $tick_mark, $tick_mark),
                    array('NewsPanda: Tab Posts', $tick_mark, $tick_mark),
                    array('NewsPanda: Youtube Video', $tick_mark, $tick_mark),
                ),
            ),
            'Premium Elementor Widgets' => array(
                'showFreePro' => true,
                'items' => array(
                    array('Slider', $cross_mark, $tick_mark),
                ),
            ),
            'NewsPanda Widget Blocks' => array(
                'showFreePro' => true,
                'items' => array(
                    array('Block Style 1', $tick_mark, $tick_mark),
                    array('Block Style 2', $tick_mark, $tick_mark),
                    array('Block Style 3', $tick_mark, $tick_mark),
                    array('Block Style 4', $tick_mark, $tick_mark),
                    array('Block Style 5', $tick_mark, $tick_mark),
                    array('Block Style 6', $cross_mark, $tick_mark),
                    array('Block Style 7', $cross_mark, $tick_mark),
                    array('Block Style 8', $cross_mark, $tick_mark),
                    array('Block Style 9', $cross_mark, $tick_mark),
                    array('Block Style 10', $cross_mark, $tick_mark),
                ),
            ),
            'NewsPanda Widget Grid' => array(
                'showFreePro' => true,
                'items' => array(
                    array('Grid Style 1', $tick_mark, $tick_mark),
                    array('Grid Style 2', $tick_mark, $tick_mark),
                    array('Grid Style 3', $tick_mark, $tick_mark),
                    array('Grid Style 4', $tick_mark, $tick_mark),
                    array('Grid Style 5', $tick_mark, $tick_mark),
                    array('Grid Style 6', $cross_mark, $tick_mark),
                    array('Grid Style 7', $cross_mark, $tick_mark),
                    array('Grid Style 8', $cross_mark, $tick_mark),
                    array('Grid Style 9', $cross_mark, $tick_mark),
                    array('Grid Style 10', $cross_mark, $tick_mark),
                ),
            ),
            'NewsPanda Premium Only' => array(
                'showFreePro' => true,
                'items' => array(
                    array('Whitelist Theme Credit', $cross_mark, $tick_mark),
                    array('Webmasters Tools', $cross_mark, $tick_mark),
                    array('Meta Open Graph', $cross_mark, $tick_mark),
                    array('Twitter Summary Card', $cross_mark, $tick_mark),
                ),
            ),
            'NewsPanda Support Widgets' => array(
                'showFreePro' => true,
                'items' => array(
                    array('Support', 'WordPress.org Forum', 'Personalized Support through Email/Ticket System'),
                ),
            ),
        );
        foreach ($features as $category => $feature) :
            $show_free_pro = $feature['showFreePro'];
            ?>
            <tr class="compare-table-head">
                <td><?php $category; ?></td>
                <?php if ($show_free_pro) : ?>
                    <td><?php esc_html_e('Free', 'newspanda'); ?></td>
                    <td><?php esc_html_e('Pro', 'newspanda'); ?></td>
                <?php endif; ?>
            </tr>
            <?php foreach ($feature['items'] as $item) : ?>
            <tr>
                <td><?php echo esc_html($item[0]); ?></td>
                <td><?php echo $item[1]; ?></td>
                <td><?php echo $item[2]; ?></td>
            </tr>
        <?php endforeach; ?>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div class="postbox newspanda-postbox-upsell">
        <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="150px" height="150px">
                <path fill="#c7ede6"
                      d="M87.215,56.71C88.35,54.555,89,52.105,89,49.5c0-6.621-4.159-12.257-10.001-14.478C78.999,35.015,79,35.008,79,35c0-11.598-9.402-21-21-21c-9.784,0-17.981,6.701-20.313,15.757C36.211,29.272,34.638,29,33,29c-7.692,0-14.023,5.793-14.89,13.252C12.906,43.353,9,47.969,9,53.5C9,59.851,14.149,65,20.5,65c0.177,0,0.352-0.012,0.526-0.022C21.022,65.153,21,65.324,21,65.5C21,76.822,30.178,86,41.5,86c6.437,0,12.175-2.972,15.934-7.614C59.612,80.611,62.64,82,66,82c4.65,0,8.674-2.65,10.666-6.518C77.718,75.817,78.837,76,80,76c6.075,0,11-4.925,11-11C91,61.689,89.53,58.727,87.215,56.71z"/>
                <path fill="#fff"
                      d="M15.5 51h-10C5.224 51 5 50.776 5 50.5S5.224 50 5.5 50h10c.276 0 .5.224.5.5S15.777 51 15.5 51zM18.5 51h-1c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h1c.276 0 .5.224.5.5S18.777 51 18.5 51zM23.491 53H14.5c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h8.991c.276 0 .5.224.5.5S23.767 53 23.491 53zM12.5 53h-1c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h1c.276 0 .5.224.5.5S12.777 53 12.5 53zM9.5 53h-2C7.224 53 7 52.776 7 52.5S7.224 52 7.5 52h2c.276 0 .5.224.5.5S9.777 53 9.5 53zM15.5 55h-2c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h2c.276 0 .5.224.5.5S15.776 55 15.5 55zM18.5 46c-.177 0-.823 0-1 0-.276 0-.5.224-.5.5s.224.5.5.5c.177 0 .823 0 1 0 .276 0 .5-.224.5-.5S18.776 46 18.5 46zM18.5 48c-.177 0-4.823 0-5 0-.276 0-.5.224-.5.5s.224.5.5.5c.177 0 4.823 0 5 0 .276 0 .5-.224.5-.5S18.776 48 18.5 48zM23.5 50c-.177 0-2.823 0-3 0-.276 0-.5.224-.5.5s.224.5.5.5c.177 0 2.823 0 3 0 .276 0 .5-.224.5-.5S23.776 50 23.5 50zM72.5 24h-10c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h10c.276 0 .5.224.5.5S72.776 24 72.5 24zM76.5 24h-2c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h2c.276 0 .5.224.5.5S76.776 24 76.5 24zM81.5 26h-10c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h10c.276 0 .5.224.5.5S81.777 26 81.5 26zM69.5 26h-1c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h1c.276 0 .5.224.5.5S69.776 26 69.5 26zM66.47 26H64.5c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h1.97c.276 0 .5.224.5.5S66.746 26 66.47 26zM75.5 22h-5c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h5c.276 0 .5.224.5.5S75.777 22 75.5 22zM72.5 28h-2c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h2c.276 0 .5.224.5.5S72.776 28 72.5 28z"/>
                <path fill="#508ecc"
                      d="M51.275,24.017C43.207,24.397,37,31.347,37,39.424V47h6v-7.692c0-4.794,3.617-8.979,8.401-9.289C56.643,29.68,61,33.831,61,39c0,1.657,1.343,3,3,3s3-1.343,3-3C67,30.475,59.889,23.611,51.275,24.017z"/>
                <path fill="#472b29"
                      d="M52,24c-0.241,0-0.482,0.006-0.725,0.017C43.207,24.397,37,31.347,37,39.424V47h6v-7.692c0-4.794,3.617-8.979,8.401-9.289C51.602,30.006,51.802,30,52,30c4.971,0,9,4.029,9,9c0,1.657,1.343,3,3,3s3-1.343,3-3C67,30.716,60.284,24,52,24z M64,40.6c-0.882,0-1.6-0.718-1.6-1.6c0-5.735-4.665-10.4-10.4-10.4c-0.228,0-0.458,0.007-0.69,0.022c-5.445,0.353-9.711,5.046-9.711,10.686V45.6h-3.2v-6.176c0-7.513,5.684-13.666,12.941-14.008C51.562,25.405,51.781,25.4,52,25.4c7.499,0,13.6,6.101,13.6,13.6C65.6,39.882,64.882,40.6,64,40.6z"/>
                <path fill="#7dafe2"
                      d="M67.6,45.5H36.4c-2.154,0-3.9,1.727-3.9,3.857v13.5c0,5.326,4.365,9.643,9.75,9.643h19.5c5.385,0,9.75-4.317,9.75-9.643v-13.5C71.5,47.227,69.754,45.5,67.6,45.5z"/>
                <path fill="#f1bc19" d="M33 50H71V56.5H33z"/>
                <path fill="#508ecc"
                      d="M54,62c0-1.105-0.895-2-2-2s-2,0.895-2,2c0,0.653,0.318,1.227,0.801,1.592L50,68h4l-0.801-4.408C53.682,63.227,54,62.653,54,62z"/>
                <path fill="#472b29"
                      d="M68,45H36c-2.209,0-4,1.791-4,4v14c0,5.523,4.477,10,10,10h20c5.523,0,10-4.477,10-10V49C72,46.791,70.209,45,68,45z M70.6,63c0,4.742-3.858,8.6-8.6,8.6H42c-4.742,0-8.6-3.858-8.6-8.6V49c0-1.434,1.166-2.6,2.6-2.6h32c1.434,0,2.6,1.166,2.6,2.6V63z"/>
                <path fill="#472b29"
                      d="M71 50h-3.5c-.276 0-.5.224-.5.5s.224.5.5.5H71c.276 0 .5-.224.5-.5S71.276 50 71 50zM64.5 51h-2c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h2c.276 0 .5.224.5.5S64.776 51 64.5 51zM59.5 51H33c-.276 0-.5-.224-.5-.5S32.724 50 33 50h26.5c.276 0 .5.224.5.5S59.776 51 59.5 51zM71 57H33c-.276 0-.5-.224-.5-.5S32.724 56 33 56h38c.276 0 .5.224.5.5S71.276 57 71 57zM52 60.35c.91 0 1.65.74 1.65 1.65 0 .517-.241.995-.662 1.313-.106.08-.157.212-.134.342l.726 3.995h-3.161l.726-3.995c.024-.13-.028-.262-.134-.342-.42-.318-.661-.796-.661-1.313C50.35 61.09 51.09 60.35 52 60.35M52 60c-1.105 0-2 .895-2 2 0 .653.318 1.227.801 1.592L50 68h4l-.801-4.408C53.682 63.227 54 62.653 54 62 54 60.895 53.105 60 52 60L52 60z"/>
                <path fill="#472b29" d="M31.441 53.322H38.771V53.673H31.441z"
                      transform="rotate(-54.984 35.106 53.497)"/>
                <path fill="#472b29" d="M35.231 53.322H42.561V53.673H35.231z"
                      transform="rotate(-54.984 38.896 53.497)"/>
                <path fill="#472b29" d="M38.94 53.322H46.269999999999996V53.673H38.94z"
                      transform="rotate(-54.984 42.606 53.497)"/>
                <path fill="#472b29" d="M42.73 53.321H50.059999999999995V53.672H42.73z"
                      transform="rotate(-54.984 46.395 53.497)"/>
                <path fill="#472b29" d="M46.44 53.321H53.769999999999996V53.672H46.44z"
                      transform="rotate(-54.984 50.105 53.497)"/>
                <path fill="#472b29" d="M50.23 53.321H57.559999999999995V53.672H50.23z"
                      transform="rotate(-54.984 53.895 53.496)"/>
                <path fill="#472b29" d="M53.94 53.321H61.269999999999996V53.672H53.94z"
                      transform="rotate(-54.984 57.605 53.496)"/>
                <path fill="#472b29" d="M57.73 53.321H65.06V53.672H57.73z" transform="rotate(-54.984 61.395 53.496)"/>
                <path fill="#472b29" d="M61.44 53.321H68.77V53.672H61.44z" transform="rotate(-54.984 65.105 53.496)"/>
                <path fill="#472b29" d="M65.23 53.321H72.56V53.672H65.23z" transform="rotate(-54.984 68.895 53.496)"/>
                <path fill="#fdfcef"
                      d="M87,67.5c-0.187,0-0.364,0.033-0.545,0.055C86.234,65.835,84.781,64.5,83,64.5c-1.087,0-2.045,0.505-2.687,1.282c0.11-0.412,0.187-0.836,0.187-1.282c0-2.761-2.239-5-5-5c-2.671,0-4.833,2.1-4.973,4.736C69.703,63.186,68.438,62.5,67,62.5c-2.485,0-4.5,2.015-4.5,4.5c0,0.187,0.033,0.364,0.055,0.545C60.282,67.771,58.5,69.667,58.5,72c0,2.485,2.015,4.5,4.5,4.5s7.125,0,7.125,0H77.5c0,0,7.015,0,9.5,0s4.5-2.015,4.5-4.5S89.485,67.5,87,67.5z"/>
                <path fill="#472b29"
                      d="M87,67c-0.048,0-0.095,0.002-0.142,0.005C86.411,65.261,84.831,64,83,64c-0.71,0-1.398,0.192-2,0.547c0-0.016,0-0.031,0-0.047c0-3.033-2.467-5.5-5.5-5.5c-2.555,0-4.719,1.76-5.317,4.164C69.293,62.416,68.176,62,67,62c-2.757,0-5,2.243-5,5c0,0.041,0.001,0.082,0.003,0.123C59.689,67.587,58,69.603,58,72c0,2.757,2.243,5,5,5h6.5c0.276,0,0.5-0.224,0.5-0.5S69.776,76,69.5,76H63c-2.206,0-4-1.794-4-4c0-2.051,1.549-3.753,3.605-3.958c0.133-0.013,0.256-0.08,0.34-0.185s0.122-0.239,0.106-0.373l-0.019-0.141C63.017,67.23,63,67.117,63,67c0-2.206,1.794-4,4-4c1.221,0,2.362,0.563,3.133,1.545c0.096,0.123,0.242,0.192,0.392,0.192c0.051,0,0.102-0.008,0.152-0.024c0.199-0.063,0.338-0.242,0.349-0.45C71.153,61.872,73.119,60,75.5,60c2.481,0,4.5,2.019,4.5,4.5c0,0.352-0.054,0.718-0.169,1.153c-0.06,0.227,0.045,0.466,0.254,0.573c0.072,0.038,0.15,0.056,0.228,0.056c0.145,0,0.288-0.064,0.386-0.182C81.277,65.401,82.115,65,83,65c1.496,0,2.768,1.125,2.959,2.618c0.033,0.252,0.249,0.437,0.495,0.437c0.021,0,0.041-0.001,0.062-0.004l0.141-0.019C86.77,68.017,86.883,68,87,68c2.206,0,4,1.794,4,4s-1.794,4-4,4H72.5c-0.276,0-0.5,0.224-0.5,0.5s0.224,0.5,0.5,0.5H87c2.757,0,5-2.243,5-5S89.757,67,87,67z"/>
                <path fill="#472b29"
                      d="M84.062 70c-.188 0-.381.022-.584.068C83.323 68.897 82.327 68 81.125 68c-.426 0-.845.119-1.212.341C79.609 66.999 78.403 66 77 66c-.256 0-.517.04-.819.126-.133.038-.21.176-.172.309.032.109.13.182.239.182.023 0 .047-.003.07-.01C76.575 66.534 76.792 66.5 77 66.5c1.288 0 2.377 1.012 2.481 2.305.007.095.067.177.155.212.03.013.061.019.093.019.059 0 .118-.022.165-.063.346-.305.784-.473 1.231-.473 1.034 0 1.875.841 1.875 1.875 0 .08.038.162.102.208.046.034.101.054.156.054.022 0 .045-.003.067-.01.268-.085.509-.127.738-.127 1.268 0 2.33.997 2.419 2.268C86.491 72.899 86.601 73 86.731 73c.006 0 .012 0 .018 0 .137-.01.241-.13.231-.268C86.873 71.2 85.591 70 84.062 70zM63.117 67.5c1.326 0 2.508.897 2.874 2.182.038.133-.039.271-.172.309C65.795 69.997 65.772 70 65.75 70c-.109 0-.209-.072-.24-.182C65.205 68.748 64.221 68 63.117 68c-.117 0-.23.014-.342.029-.012.002-.023.003-.035.003-.121 0-.229-.092-.246-.217-.019-.137.077-.263.214-.281C62.842 67.516 62.978 67.5 63.117 67.5L63.117 67.5z"/>
                <path fill="#fdfcef"
                      d="M36.445,60.545C36.473,60.366,36.5,60.187,36.5,60c0-1.933-1.567-3.5-3.5-3.5c-1.032,0-1.95,0.455-2.59,1.165c-0.384-1.808-1.987-3.165-3.91-3.165c-2.209,0-4,1.791-4,4c0,0.191,0.03,0.374,0.056,0.558C22.128,58.714,21.592,58.5,21,58.5c-1.228,0-2.245,0.887-2.455,2.055C18.366,60.527,18.187,60.5,18,60.5c-1.933,0-3.5,1.567-3.5,3.5s1.567,3.5,3.5,3.5s7.5,0,7.5,0h7c0,0,1.567,0,3.5,0s3.5-1.567,3.5-3.5C39.5,62.219,38.165,60.766,36.445,60.545z"/>
                <path fill="#472b29"
                      d="M34.25 63C34.112 63 34 62.888 34 62.75c0-1.223.995-2.218 2.218-2.218.034.009.737-.001 1.244.136.133.036.212.173.176.306-.036.134-.173.213-.306.176-.444-.12-1.1-.12-1.113-.118-.948 0-1.719.771-1.719 1.718C34.5 62.888 34.388 63 34.25 63zM27.5 67A.5.5 0 1 0 27.5 68 .5.5 0 1 0 27.5 67z"/>
                <path fill="#472b29"
                      d="M36.996,60.142C36.999,60.095,37,60.048,37,60c0-2.206-1.794-4-4-4c-0.845,0-1.666,0.276-2.347,0.774C29.966,55.127,28.331,54,26.5,54c-2.374,0-4.324,1.847-4.489,4.18C21.689,58.061,21.349,58,21,58c-1.289,0-2.412,0.82-2.826,2.006C18.116,60.002,18.059,60,18,60c-2.206,0-4,1.794-4,4s1.794,4,4,4h7.5c0.276,0,0.5-0.224,0.5-0.5S25.776,67,25.5,67H18c-1.654,0-3-1.346-3-3s1.346-3,3-3c0.16,0,0.314,0.025,0.468,0.049c0.273,0.041,0.521-0.138,0.569-0.405C19.208,59.691,20.034,59,21,59c0.449,0,0.878,0.155,1.243,0.448c0.16,0.128,0.377,0.112,0.556,0.01s0.271-0.337,0.242-0.54C23.021,58.78,23,58.643,23,58.5c0-1.93,1.57-3.5,3.5-3.5c1.641,0,3.08,1.165,3.421,2.769c0.039,0.184,0.178,0.33,0.36,0.379c0.179,0.05,0.375-0.009,0.5-0.148c0.581-0.645,1.369-1,2.219-1c1.654,0,3,1.346,3,3c0,0.16-0.025,0.314-0.048,0.468c-0.021,0.133,0.013,0.269,0.094,0.377c0.081,0.108,0.202,0.178,0.336,0.196C37.875,61.232,39,62.504,39,64c0,1.654-1.346,3-3,3h-3.5c-0.276,0-0.5,0.224-0.5,0.5s0.224,0.5,0.5,0.5H36c2.206,0,4-1.794,4-4C40,62.169,38.739,60.59,36.996,60.142z"/>
                <path fill="#472b29"
                      d="M30.5,67c-0.159,0-0.841,0-1,0c-0.276,0-0.5,0.224-0.5,0.5s0.224,0.5,0.5,0.5c0.159,0,0.841,0,1,0c0.276,0,0.5-0.224,0.5-0.5S30.776,67,30.5,67z"/>
            </svg>
        </div>
        <h3><?php esc_html_e('Upgrade Now', 'newspanda'); ?></h3>
        <p><?php echo __('Access all premium extensions, features, and upcoming updates right away by <br> upgrading to the Pro version.', 'newspanda'); ?></p>
        <a href="<?php echo esc_url($this->theme_url); ?>#choose-pricing-plan" class="button button-secondary dashboard-button dashboard-button-primary" target="_blank">
            <?php esc_html_e('Get NewsPanda Pro Now', 'newspanda'); ?>
        </a>
    </div>
</div>
