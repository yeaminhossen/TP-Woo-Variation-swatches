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


$footer_style_2_switch = get_theme_mod('footer_style_2_switch', false);
$collax_footer_title = get_theme_mod('collax_footer_title', __('More than 10 years in the game', 'collax'));
$collax_fbutton_title = get_theme_mod('collax_fbutton_title', __('Contact Us', 'collax'));
$collax_fbutton_link = get_theme_mod('collax_fbutton_link', __('#', 'collax'));
$collax_flogo = get_theme_mod('collax_flogo');
$collax_bottom_link2 = get_theme_mod('collax_bottom_link2');

?>

<footer class="p-relative">
    <button class="scrollTop d-none d-md-block" data-target="html">
        <div class="tp-backto-top">
            <svg width="16" height="58" viewBox="0 0 16 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8.70711 0.292892C8.31659 -0.0976295 7.68342 -0.0976296 7.2929 0.292892L0.928934 6.65685C0.53841 7.04738 0.53841 7.68054 0.928934 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41422L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292892ZM9 58L9 1L7 1L7 58L9 58Z"
                    fill="#292930" />
            </svg>
        </div>
    </button>
    <div class="footer-clip-shape">
        <svg width="1918" height="98" viewBox="0 0 1918 98" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M435.5 54L0 1V0L1917.5 1L1309 75.5C1263 82 1178.75 88.6471 1176.5 89C1116 98.5 958.667 98.3333 885.5 97C874.167 96.5 856.5 95.5 850.5 95.5C793.5 95.5 554.667 69.3333 435.5 54Z"
                fill="white" />
        </svg>
    </div>
    <div class="tp-clip-height-one"></div>
    <div class="tp-clip-height-two"></div>

    <?php if(!empty($footer_style_2_switch)) : ?>
    <div class="tp-footer-area tp-footer-space black-bg p-relative fix pt-0" style="<?php echo esc_attr($footer_bg);?>">
        <div class="tp-footer-border-shape d-none"></div>
        <div class="tp-footer-border-shape-two"></div>
        <div class="circle-animation footer-animation d-none d-md-block">
            <span class="tp-circle-3"></span>
        </div>
        <div class="container">
            <div class="tp-footer-widget wow tpfadeUp mb-100" data-wow-duration=".5s" data-wow-delay=".5s">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7 col-md-7 col-12">
                        
                        <?php if(!empty($collax_footer_title)) : ?>
                        <div class="tp-footer-top">
                            <h5 class="tp-footer-title"><?php echo collax_kses($collax_footer_title); ?></h5>
                        </div>
                        <?php endif; ?>

                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-12">

                    <?php if(!empty($collax_fbutton_title)) : ?>
                        <div class="tp-footer-button text-start text-md-end">
                            <a class="tp-btn" href="<?php echo esc_url($collax_fbutton_link);?>"><?php echo esc_html($collax_fbutton_title);?><i
                                    class="far fa-arrow-right"></i> </a>
                        </div>
                    <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="tp-copyright-area pb-90 wow tpfadeUp" data-wow-duration=".5s" data-wow-delay=".7s">
            <div class="container">
                <div class="tp-copyright-box align-items-center">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-12">
                            <div class="tp-copyright-text z-index-1">
                                <p class="m-0"><?php print collax_copyright_text(); ?></p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-12">
                            <?php if(!empty($collax_bottom_link2)) : ?>
                                <?php echo collax_kses($collax_bottom_link2);?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="tp-copyright-logo-box">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                            <?php if(!empty($collax_flogo)) : ?>
                            <div class="tp-copyright-logo mt-35">
                                <a href="<?php print esc_url( home_url( '/' ) );?>"><img src="<?php echo esc_url($collax_flogo);?>" alt="<?php echo esc_attr__('footer_logo', 'collax');?>"></a>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                            
                            <div class="tp-copyright-social text-md-end mt-25">
                            <?php collax_footer_social_profiles();?>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</footer>

<?php 
$collax_backtotop = get_theme_mod( 'collax_backtotop', false );
if(!empty($collax_backtotop)) : ?>
  <button class="scroll-top scroll-to-target d-md-none" data-target="html">
      <i class="far fa-angle-double-up"></i>
  </button>
<?php endif; ?>