<?php 

	/**
	 * Template part for displaying header layout two
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package collax
	*/

	// info
    $collax_topbar_switch = get_theme_mod( 'collax_topbar_switch', false );
    $collax_mail_id = get_theme_mod( 'collax_mail_id', __( 'info@educal.com', 'collax' ) );
    $collax_address = get_theme_mod( 'collax_address', __( 'Moon ave, New York, 2020 NY US', 'collax' ) );
    $collax_address_url = get_theme_mod( 'collax_address_url', __( 'https://goo.gl/maps/qzqY2PAcQwUz1BYN9', 'collax' ) );

    // contact button
	$collax_button_text = get_theme_mod( 'collax_button_text', __( 'Contact Us', 'collax' ) );
    $collax_button_link = get_theme_mod( 'collax_button_link', __( '#', 'collax' ) );

    // acc button
	$collax_acc_button_text = get_theme_mod( 'collax_acc_button_text', __( 'Login', 'collax' ) );
    $collax_acc_button_link = get_theme_mod( 'collax_acc_button_link', __( '#', 'collax' ) );

    // header right
    $collax_search = get_theme_mod( 'collax_search', false );
    $collax_header_right = get_theme_mod( 'collax_header_right', false );
    $collax_menu_col = $collax_header_right ? 'col-xl-7 col-lg-7' : 'col-xxl-9 col-xl-9 col-lg-9 d-none d-lg-block text-end';

?>


<!-- tp-header-area-start -->
<header class="d-none d-lg-block">
    <div id="header-sticky" class="tp-header-area wp-header-2 header-transparent pl-165 pr-165 pt-35">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3">
                    <div class="tp-logo">
                        <?php collax_header_logo();?>
                    </div>
                </div>
                <div class="<?php echo esc_attr($collax_menu_col);?>">
                    <div class="tp-main-menu">
                        <nav id="mobile-menu">
                           <?php collax_header_menu();?>
                        </nav>
                    </div>
                </div>
                <?php if(!empty($collax_header_right)) : ?>
                <div class="col-xl-2 col-lg-2">
                    <div class="tp-menu-bar text-end">
                        <button><i class="fal fa-bars"></i></button>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>
<!-- tp-header-area-end -->

<!-- mobile-menu-area -->
<div id="header-sticky-mobile" class="tp-md-menu header-transparent d-lg-none pt-40 pb-40">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-6">
                <div class="tp-logo">
                  <?php collax_header_logo();?>
                </div>
            </div>
            <div class="col-6">
                <div class="bar text-end">
                    <button class="tp-menu-bar" type="submit"><i class="fal fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-menu-area-end -->



<?php get_template_part( 'template-parts/header/header-side-info' ); ?>