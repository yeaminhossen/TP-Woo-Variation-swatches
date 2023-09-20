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


$footer_style_6_switch = get_theme_mod('footer_style_6_switch', true);
$collax_footer_title6 = get_theme_mod('collax_footer_title6', __('More than 10 years in the game', 'collax'));
$collax_fbutton_title6 = get_theme_mod('collax_fbutton_title6', __('Contact Us', 'collax'));
$collax_fbutton_link6 = get_theme_mod('collax_fbutton_link6', __('#', 'collax'));
$collax_bottom_link6 = get_theme_mod('collax_bottom_link6');

?>


<div class="corporate-layout-right">
    <?php if(!empty($footer_style_6_switch)) : ?>
    <footer>
        <!-- footer-area-start -->
        <div class="corporate-footer__area black-bg p-relative pt-100 pb-80 corporate-plr z-index" style="<?php echo esc_attr($footer_bg);?>">
            <div class="corporate-footer__shape-left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/footer-shape-7-1.png" alt="">
            </div>
            <div class="corporate-footer__shape-right wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".5s">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/footer-shape-7-2.png" alt="">
            </div>
            <div class="container">
                <div class="row align-items-center corporate-footer__space">
                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-7 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                        <?php if(!empty($collax_footer_title6)) : ?>
                        <div class="corporate-footer__left">
                            <h4 class="corporate-footer__title"><?php echo collax_kses($collax_footer_title6); ?></h4>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-5 wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".5s">
                        <?php if(!empty($collax_fbutton_title6)) : ?>
                        <div class="corporate-footer__btn text-start text-md-center">
                            <a class="corporate-btn text-white" href="<?php echo esc_url($collax_fbutton_link6); ?>"><span class="text-white"><?php echo collax_kses($collax_fbutton_title6); ?> <i class="far fa-arrow-right"></i></span></a>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-12 wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".7s">
                        <div class="corporate-footer__social">
                            <?php collax_footer_social_profiles();?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="tp-copyright-box corporate-footer__copyright">
                        <div class="row align-items-center">
                            <div class="col-xl-5 col-lg-5 col-md-12 wow tpfadeUp" data-wow-duration=".9s"
                                data-wow-delay=".3s">
                                <div class="tp-copyright-text z-index-1 text-lg-start text-center">
                                    <p class="m-0"><?php print collax_copyright_text(); ?></p>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-12 wow tpfadeUp" data-wow-duration=".9s"
                                data-wow-delay=".5s">
                                <?php if(!empty($collax_bottom_link6)) : ?>
                                <div class="tp-copyright-right text-lg-end text-center">
                                    <?php echo collax_kses($collax_bottom_link6); ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-area-end -->

    </footer>
    <?php endif; ?>

    <?php 
    $collax_backtotop = get_theme_mod( 'collax_backtotop', false );
    if(!empty($collax_backtotop)) : ?>
    <button class="scroll-top scroll-to-target d-md-none" data-target="html">
        <i class="far fa-angle-double-up"></i>
    </button>
    <?php endif; ?>
</div>