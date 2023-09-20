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
$footer_bg_color = get_theme_mod( 'collax_footer_bg_color2', '#fff' );

$footer_bg_img = get_theme_mod( 'collax_footer_bg' );
// bg image
$bg_img = !empty( $collax_footer_bg_url_from_page['url'] ) ? $collax_footer_bg_url_from_page['url'] : $footer_bg_img;

// bg color
$bg_color = !empty( $collax_footer_bg_color_from_page ) ? $collax_footer_bg_color_from_page : $footer_bg_color;

$footer_bg = !empty($bg_img) ? "background: url($bg_img)" : "background: $bg_color";

// footer bottom bg color
$collax_footer_bottombg_color = get_theme_mod('collax_footer_bottombg_color', '#3c8599');


$footer_style_3_switch = get_theme_mod('footer_style_3_switch', false);
$collax_footer_title3 = get_theme_mod('collax_footer_title3', __('More than 10 years in the game', 'collax'));
$collax_footer_des3 = get_theme_mod('collax_footer_des3', __('At Collax we specialize in designing, building, shipping and scaling beautiful', 'collax'));
$collax_fbutton_title3 = get_theme_mod('collax_fbutton_title3', __('Contact Us', 'collax'));
$collax_fbutton_link3 = get_theme_mod('collax_fbutton_link3', __('#', 'collax'));
$collax_flogo3 = get_theme_mod('collax_flogo3');
$collax_bottom_link3 = get_theme_mod('collax_bottom_link3');
$f3_animation = get_theme_mod('f3_animation', false);

?>


<footer class="p-relative">
    <div class="tp-footer-area pt-120 p-relative" style="<?php echo esc_attr($footer_bg);?>">

        <?php if(!empty($f3_animation)) : ?>
        <div class="tp-footer-shape-one">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/creative/creative-hand.png" alt="<?php echo esc_html__('img', 'collax');?>">
        </div>
        <div class="tp-footer-shape-two">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/service/service-1.png" alt="<?php echo esc_html__('img', 'collax');?>">
        </div>
        <?php endif; ?>
        
        <div class="container">
            <div class="row">
                <div class="col-xl-12 wow tpfadeUp" data-wow-duration=".3s" data-wow-delay=".5s">

                    <div class="footer-widget-info text-center">
                        <?php if(!empty($footer_style_3_switch)) : ?>

                        <?php if(!empty($collax_footer_title3)) : ?>
                            <h2 class="tp-footer-title pb-15"><?php echo collax_kses($collax_footer_title3); ?></h2>
                        <?php endif; ?>

                        <?php if(!empty($collax_footer_des3)) : ?>
                            <p><?php echo collax_kses($collax_footer_des3); ?></p>
                        <?php endif; ?>
                        
                        <?php if(!empty($collax_fbutton_title3)) : ?>
                            <a class="tp-btn mb-50" href="<?php echo esc_url($collax_fbutton_link3);?>"><?php echo esc_html($collax_fbutton_title3);?></a>
                        <?php endif; ?>
                        
                        

                        <p class="right-receved"><?php print collax_copyright_text(); ?></p>

                        <?php endif; ?>
                    </div>

                </div>
            </div>
            <div class="tp-copyright-bottom wow tpfadeUp" data-wow-duration=".5s" data-wow-delay=".7s">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-12">
                        <div class="tp-copyright-logo-box text-md-center text-center text-lg-start mb-30">
                            <?php if(!empty($collax_flogo3)) : ?>
                            <div class="tp-copyright-logo">
                                <a href="<?php print esc_url( home_url( '/' ) );?>"><img src="<?php echo esc_url($collax_flogo3);?>" alt="<?php echo esc_attr__('footer_logo', 'collax');?>"></a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <?php if(!empty($collax_bottom_link3)) : ?>
                            <?php echo collax_kses($collax_bottom_link3);?>
                        <?php endif; ?>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="tp-copyright-social tp-copyright-social-two text-center text-lg-end mb-30">
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