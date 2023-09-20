<?php 

/**
 * Template part for displaying footer layout two
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package collax
*/

$collax_footer_bg_url_from_page = function_exists( 'get_field' ) ? get_field( 'collax_footer_bg' ) : '';
$collax_footer_bg_color_from_page = function_exists( 'get_field' ) ? get_field( 'collax_footer_bg_color' ) : '';
$footer_bg_color = get_theme_mod( 'collax_footer_bg_color', '#111111' );

$footer_bg_img = get_theme_mod( 'collax_footer_bg' );
// bg image
$bg_img = !empty( $collax_footer_bg_url_from_page['url'] ) ? $collax_footer_bg_url_from_page['url'] : $footer_bg_img;

// bg color
$bg_color = !empty( $collax_footer_bg_color_from_page ) ? $collax_footer_bg_color_from_page : $footer_bg_color;

$footer_bg = !empty($bg_img) ? "background: url($bg_img)" : "background: $bg_color";

// footer bottom bg color
$collax_footer_bottombg_color = get_theme_mod('collax_footer_bottombg_color', '#3c8599');

// bg image
$bg_img = !empty( $collax_footer_bg_url_from_page['url'] ) ? $collax_footer_bg_url_from_page['url'] : $footer_bg_img;

// bg color
$bg_color = !empty( $collax_footer_bg_color_from_page ) ? $collax_footer_bg_color_from_page : $footer_bg_color;


$footer_style_7_switch = get_theme_mod('footer_style_7_switch', true);
$collax_footer_title = get_theme_mod('collax_footer_title', __('More than 10 years in the game', 'collax'));
$collax_fbutton_title = get_theme_mod('collax_fbutton_title', __('Contact Us', 'collax'));
$collax_fbutton_link = get_theme_mod('collax_fbutton_link', __('#', 'collax'));
$collax_flogo = get_theme_mod('collax_flogo');
$collax_bottom_link2 = get_theme_mod('collax_bottom_link2');

// footer_columns
$footer_columns = 0;
$footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

for ( $num = 1; $num <= $footer_widgets -1; $num++ ) {
    if ( is_active_sidebar( 'footer-' . $num ) ) {
        $footer_columns++;
    }
}

switch ( $footer_columns ) {
case '1':
    $footer_class[1] = 'col-lg-12';
    break;
case '2':
    $footer_class[1] = 'col-lg-6 col-md-6';
    $footer_class[2] = 'col-lg-6 col-md-6';
    break;
case '3':
    $footer_class[1] = 'col-xl-4 col-lg-6 col-md-6 mb-70 wow tpfadeUp';
    $footer_class[2] = 'col-xl-4 col-lg-6 col-md-6 mb-70 wow tpfadeUp';
    $footer_class[3] = 'col-xl-4 col-lg-6 col-md-6 mb-70 wow tpfadeUp';
    break;
case '4':
    $footer_class[1] = 'col-xl-3 col-lg-3 col-md-6';
    $footer_class[2] = 'col-xl-3 col-lg-3 col-md-6';
    $footer_class[3] = 'col-xl-3 col-lg-3 col-md-6';
    $footer_class[4] = 'col-xl-3 col-lg-3 col-md-6';
    break;
default:
    $footer_class = 'col-xl-3 col-lg-3 col-md-6';
    break;
}

$collax_bottom_link = get_theme_mod('collax_bottom_link');

?>
<footer>

    <!-- footer-area-start -->
    <div class="bl-footer__area black-bg pt-100 pb-30" style="<?php echo esc_attr($footer_bg);?>">
        <?php if ( is_active_sidebar('footer-7-1') OR is_active_sidebar('footer-7-2') OR is_active_sidebar('footer-7-3') ): ?>
        <div class="container">
            <div class="row">

                <?php
                    if ( $footer_columns < 4 ) {
                    print '<div class="col-xl-4 col-lg-6 col-md-6 mb-70 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">';
                    dynamic_sidebar( 'footer-7-1' );
                    print '</div>';

                    print '<div class="col-xl-4 col-lg-6 col-md-6 mb-70 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">';
                    dynamic_sidebar( 'footer-7-2' );
                    print '</div>';

                    print '<div class="col-xl-4 col-lg-6 col-md-6 mb-70 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">';
                    dynamic_sidebar( 'footer-7-3' );
                    print '</div>';
                    
                    } else {
                        for ( $num = 1; $num <= $footer_columns -1; $num++ ) {
                            if ( !is_active_sidebar( 'footer-' . $num ) ) {
                                continue;
                            }
                            $anim_delay = $num == 1 ? '.3s' : ($num == 2 ? '.5s' : '.7s');
                            print '<div class="' . esc_attr( $footer_class[$num] ) . '" data-wow-delay="' . $anim_delay . '">';
                            dynamic_sidebar( 'footer-' . $num );
                            print '</div>';
                        }
                    }
                ?>

            </div>
        </div>
        <?php endif; ?>
    </div>
    <!-- footer-area-end -->

</footer>


<?php 
$collax_backtotop = get_theme_mod( 'collax_backtotop', false );
if(!empty($collax_backtotop)) : ?>
<button class="scroll-top scroll-to-target" data-target="html">
    <i class="far fa-angle-double-up"></i>
</button>
<?php endif; ?>