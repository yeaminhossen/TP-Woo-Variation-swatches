<?php 

	/**
	 * Template part for displaying header layout one
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package collax
	*/

	// info
    $collax_mail_id = get_theme_mod( 'collax_mail_id', __( 'info@educal.com', 'collax' ) );
    $collax_address = get_theme_mod( 'collax_address', __( 'Moon ave, New York, 2020 NY US', 'collax' ) );

    // contact button
	 $collax_button_text = get_theme_mod( 'collax_button_text', __( 'Get A Quote', 'collax' ) );
    $collax_button_link = get_theme_mod( 'collax_button_link', __( '#', 'collax' ) );

    // acc button
	 $collax_acc_button_text = get_theme_mod( 'collax_acc_button_text', __( 'Login', 'collax' ) );
    $collax_acc_button_link = get_theme_mod( 'collax_acc_button_link', __( '#', 'collax' ) );

    // header right
    $collax_header_right = get_theme_mod( 'collax_header_right', false );
    $collax_header_lang = get_theme_mod( 'collax_header_lang', false );
    $collax_menu_col = $collax_header_right ? 'col-xxl-5 col-xl-6 col-lg-6 text-center' : 'col-xxl-9 col-xl-9 col-lg-9 text-end';

?>


<header class="d-none d-lg-block">
    <div id="header-sticky" class="tp-header-area-two wp-header-5 header-transparent header-space-three pl-115 pr-115 pt-35">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xxl-3 col-xl-3 col-lg-3">
                    <div class="tp-logo text-start">
                        <?php collax_header_logo();?>
                    </div>
                </div>
                <div class="<?php echo esc_attr($collax_menu_col);?>">
                    <div class="tp-main-menu tp-menu-black">
                        <nav id="mobile-menu">
                            <?php collax_header_menu();?>
                        </nav>
                    </div>
                </div>

                <?php if(!empty($collax_header_right)) : ?>
                <div class="col-xxl-4 col-xl-3 col-lg-3">
                    <div class="tp-header-left d-flex align-items-center justify-content-end">

                        <?php if(!empty($collax_header_right) && !empty($collax_acc_button_text)) : ?>
                            <div class="tp-header-login login-color-black d-none d-xxl-block ">
                                <a href="<?php echo esc_url($collax_acc_button_link);?>"> <i class="fal fa-user"></i> <?php echo esc_html($collax_acc_button_text);?></a>
                            </div>
                        <?php endif; ?>

                        <?php if(!empty($collax_header_right) && !empty($collax_button_text)) : ?>
                        <div class="tp-header-yellow-button tp-yellow-space">
                            <a class="tp-btn-black" href="<?php echo esc_url($collax_button_link);?>"><?php echo esc_html($collax_button_text);?></a>
                        </div>
                        <?php endif; ?>

                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</header>
<!-- tp-header-area-end -->

<!-- header-md-menu-start -->
<div id="header-sticky-mobile" class="tp-md-header-area header-transparent d-md-block d-lg-none pt-30 pb-30">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6 col-6">
                <div class="tp-logo">
                    <?php collax_header_logo();?>
                </div>
            </div>
            <div class="col-md-6 col-6">
                <div class="tp-header-right z-index-1 d-flex align-items-center justify-content-end">

                    <?php if(!empty($collax_header_right) && !empty($collax_button_text)) : ?>
                     <a class="tp-btn-black d-none d-md-block" href="<?php echo esc_url($collax_button_link);?>"><?php echo esc_html($collax_button_text);?></a>
                    <?php endif; ?>
                    
                    <button class="tp-menu-bar"><i class="fal fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>



<?php get_template_part( 'template-parts/header/header-side-info' ); ?>