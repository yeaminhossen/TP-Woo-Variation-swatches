<?php 

/**
 * Template part for displaying footer layout three
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


$footer_style_5_switch = get_theme_mod('footer_style_5_switch', false);
$collax_footer_title5 = get_theme_mod('collax_footer_title5', __('More than 10 years in the game', 'collax'));
$collax_footer_des5 = get_theme_mod('collax_footer_des5', __('At Collax we specialize in designing, building, shipping and scaling beautiful', 'collax'));
$collax_fbutton_title5 = get_theme_mod('collax_fbutton_title5', __('Contact Us', 'collax'));
$collax_fbutton_link5 = get_theme_mod('collax_fbutton_link5', __('#', 'collax'));
$collax_flogo5 = get_theme_mod('collax_flogo5');
$collax_bottom_link5 = get_theme_mod('collax_bottom_link5');

?>


<footer>
    <div class="tp-footer-area pt-120 p-relative black-bg p-relative" style="<?php echo esc_attr($footer_bg);?>">
        <div class="bs-footer-shape-1 d-none d-lg-block">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/footer/testimonial-shape-5.4.png" alt="<?php echo esc_html__('Collax Shape', 'collax');?>">
        </div>
        <div class="bs-footer-shape-2  d-none d-lg-block">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/footer/team-shape-5.3.png" alt="<?php echo esc_html__('Collax Shape', 'collax');?>">
        </div>
        <div class="container">
        <div class="row">
            <div class="col-xl-12 wow tpfadeUp" data-wow-duration=".3s" data-wow-delay=".5s">
                <div class="footer-widget-info bp-footer-widget-color text-center">

                    <?php if(!empty($footer_style_5_switch)) : ?>

                    <?php if(!empty($collax_footer_title5)) : ?>
                        <h2 class="tp-footer-title text-white pb-15"><?php echo collax_kses($collax_footer_title5); ?></h2>
                    <?php endif; ?>
                    
                    <?php if(!empty($collax_footer_des5)) : ?>
                        <p><?php echo collax_kses($collax_footer_des5); ?></p>
                    <?php endif; ?>

                    <?php if(!empty($collax_fbutton_title5)) : ?>
                        <a class="tp-btn-sky mb-50" href="<?php echo esc_url($collax_fbutton_link5);?>"><?php echo esc_html($collax_fbutton_title5);?></a>
                    <?php endif; ?>

                    <p class="right-receved"><?php print collax_copyright_text(); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="tp-copyright-bottom pb-90 wow tpfadeUp" data-wow-duration=".5s" data-wow-delay=".7s">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-4 col-md-12 col-12">
                    <div class="tp-copyright-logo-box mb-30">
                        <?php if(!empty($collax_flogo5)) : ?>
                        <div class="tp-copyright-logo text-center text-lg-start">
                            <a href="<?php print esc_url( home_url( '/' ) );?>"><img src="<?php echo esc_url($collax_flogo5);?>" alt="<?php echo esc_attr__('footer_logo', 'collax');?>"></a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <?php if(!empty($collax_bottom_link5)) : ?>
                        <?php echo collax_kses($collax_bottom_link5);?>
                    <?php endif; ?>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="tp-copyright-social bp-copyright-social tp-copyright-social-two text-center text-lg-end mb-30">
                        <?php collax_footer_social_profiles();?>
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