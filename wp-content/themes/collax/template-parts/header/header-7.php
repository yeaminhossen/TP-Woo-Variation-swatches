<?php 

	/**
	 * Template part for displaying header layout one
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package collax
	*/

	// info
    $collax_header_email = get_theme_mod( 'collax_header_email', __( 'infocollax.com', 'collax' ) );
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
    $collax_menu_col = $collax_header_right ? 'col-xxl-5 col-xl-6 col-lg-6  text-center' : 'col-xxl-9 col-xl-9 col-lg-9 text-end';

?>


<!-- tp-header-area-start -->
<header class="header-left-full">
    <div class="corporate-header__bg d-none d-xl-block black-bg">
        <div class="corporate-header__logo">
            <?php collax_header_logo();?>
        </div>
        <div class="corporate-header__left-menu tp-main-menu">
            <nav id="mobile-menu-2">
                <?php collax_header_menu();?>
            </nav>
        </div>
        <div class="corporate-header__email-box">
            <div class="corporate-header__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/envelop-icon.png" alt="header-email">
            </div>
            <?php if(!empty($collax_header_email)) : ?>
            <div class="corporate-header__email">
                <?php echo collax_kses($collax_header_email); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</header>
<!-- tp-header-area-end -->




<?php get_template_part( 'template-parts/header/header-side-info-2' ); ?>