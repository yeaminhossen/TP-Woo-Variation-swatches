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
    $collax_header_account = get_theme_mod( 'collax_header_account', false );
    $collax_header_cart = get_theme_mod( 'collax_header_cart', false );
    $collax_search = get_theme_mod( 'collax_search', false );
    $collax_menu_col = $collax_header_right ? 'col-xxl-5 col-xl-6 col-lg-6  text-center' : 'col-xxl-9 col-xl-9 col-lg-9 text-end';

?>


<!-- tp-header-area-start -->
<header>
    <div class="bl-header-top__area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 d-none d-sm-block">
                    <?php collax_header_social_profiles(); ?>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-5 col-sm-5">
                    <div class="bl-header-top__logo text-center">
                        <?php collax_header_logo();?>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-3 col-sm-3 d-none d-sm-block">
                    <div class="bl-header-top__right text-end">

                        <?php if ( class_exists( 'WooCommerce' ) && !empty($collax_header_account) ) : ?>
                        <a class="hamburger" href="<?php echo get_permalink( wc_get_page_id( 'myaccount' ) ); ?>"><i class="fal fa-user"></i></a>
                        <?php endif;  ?>

                        <?php if ( class_exists( 'WooCommerce' ) && !empty($collax_header_cart) ) : ?>
                        <span class="tp-mini-card ml-30">
                            <a class="hamburger tp-header-icon d-none d-xxl-inline-block" href="<?php echo wc_get_cart_url(); ?>"><i class="fal fa-shopping-basket"></i> <span id="tp-cart-item" class="cart__count"><?php echo esc_html(WC()->cart->cart_contents_count); ?></span></a>
                            <div class="mini_shopping_cart_box"><?php woocommerce_mini_cart(); ?></div>
                        </span>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bl-header-bottom__area black-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                    <div class="bl-header-bottom__bar  bl-header-bottom__mobile-space">
                        <button class="tp-menu-bar"><i class="fal fa-bars"></i></button>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 d-none d-lg-block">
                    <div class="bl-header-bottom__main-menu text-center">
                        <nav id="mobile-menu">
                            <?php collax_header_menu();?>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                    <?php if(!empty($collax_search)) : ?>
                    <div class="bl-header-bottom__search p-relative text-end">
                        <button class="bl-header-bottom__search-box p-relative">
                            <i class="fal fa-search search-icon"></i>
                            <i class="fal fa-times close-icon"></i>
                        </button>
                        <?php collax_search_form_2(); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- tp-header-area-end -->

<?php get_template_part( 'template-parts/header/header-side-info' ); ?>