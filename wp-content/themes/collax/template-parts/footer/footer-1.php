<?php 

/**
 * Template part for displaying footer layout one
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package collax
*/

$collax_footer_logo = get_theme_mod( 'collax_footer_logo' );
$collax_footer_top_space = function_exists('get_field') ? get_field('collax_footer_top_space') : '0';
$collax_copyright_center = $collax_footer_logo ? 'col-lg-4 offset-lg-4 col-md-6 text-right' : 'col-lg-12 text-center';

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

// footer_columns
$footer_columns = 0;
$footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

for ( $num = 1; $num <= $footer_widgets; $num++ ) {
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
    $footer_class[1] = 'col-xl-4 col-lg-6 col-md-5';
    $footer_class[2] = 'col-xl-4 col-lg-6 col-md-7';
    $footer_class[3] = 'col-xl-4 col-lg-6';
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
    <div class="tp-footer-area black-bg pb-30" style="<?php echo esc_attr($footer_bg);?>">

    <?php if ( is_active_sidebar('footer-1') OR is_active_sidebar('footer-2') OR is_active_sidebar('footer-3') OR is_active_sidebar('footer-4') ): ?>
        <div class="container pt-130  pb-70">
            <div class="row wow tpfadeUp" data-wow-duration=".3s" data-wow-delay=".5s">

                <?php
                    if ( $footer_columns < 4 ) {
                    print '<div class="col-xl-3 col-lg-3 col-md-6">';
                    dynamic_sidebar( 'footer-1' );
                    print '</div>';

                    print '<div class="col-xl-3 col-lg-3 col-md-6">';
                    dynamic_sidebar( 'footer-2' );
                    print '</div>';

                    print '<div class="col-xl-3 col-lg-3 col-md-6">';
                    dynamic_sidebar( 'footer-3' );
                    print '</div>';

                    print '<div class="col-xl-3 col-lg-3 col-md-6">';
                    dynamic_sidebar( 'footer-4' );
                    print '</div>';
                    } else {
                        for ( $num = 1; $num <= $footer_columns; $num++ ) {
                            if ( !is_active_sidebar( 'footer-' . $num ) ) {
                                continue;
                            }
                            print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                            dynamic_sidebar( 'footer-' . $num );
                            print '</div>';
                        }
                    }
                ?>

            </div>
        </div>
    <?php endif; ?>

        <div class="tp-copyright-area">
            <div class="container">
                <div class="copyright-border pt-40 wow tpfadeUp" data-wow-duration=".5s" data-wow-delay=".7s">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-12">
                            <div class="tp-copyright-left text-lg-start text-start text-md-center">
                                <p><?php print collax_copyright_text(); ?></p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12">
                            <?php if(!empty($collax_bottom_link)) : ?>
                            <?php echo collax_kses($collax_bottom_link);?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>

<?php 
$collax_backtotop = get_theme_mod( 'collax_backtotop', false );
if(!empty($collax_backtotop)) : ?>
  <button class="scroll-top scroll-to-target" data-target="html">
    <i class="far fa-angle-double-up"></i>
  </button>
<?php endif; ?>