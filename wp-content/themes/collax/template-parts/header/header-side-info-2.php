<?php 

   /**
    * Template part for displaying header side information
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    *
    * @package collax
   */

    $collax_side_hide = get_theme_mod( 'collax_side_hide', false );
    $side_hide_margin = $collax_side_hide ? NULL : 'mt-60'; 
    $collax_search = get_theme_mod( 'collax_search', false );
    $collax_side_logo = get_theme_mod( 'collax_side_logo', get_template_directory_uri() . '/assets/img/logo/logo-white.png' );
    $collax_extra_about_text = get_theme_mod( 'collax_extra_about_text', __( 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and will give you a complete account of the system and expound the actual teachings of the great explore', 'collax' ) );

    $collax_subs_title = get_theme_mod( 'collax_subs_title', __( 'Update With Us', 'collax' ) );
    $collax_subs_shortcode = get_theme_mod( 'collax_subs_shortcode', __( '[shortcode here]', 'collax' ) );
    $collax_insta_title = get_theme_mod( 'collax_insta_title', __( 'Chcek Instagram Posts', 'collax' ) );
    $collax_insta_shortcode = get_theme_mod( 'collax_insta_shortcode', __( '[instagram shortcode here]', 'collax' ) );

    $collax_contact_title = get_theme_mod( 'collax_contact_title', __( 'Contact Info', 'collax' ) );
    $collax_extra_address = get_theme_mod( 'collax_extra_address', __( '12/A, Mirnada City Tower, NYC', 'collax' ) );
    $collax_extra_phone = get_theme_mod( 'collax_extra_phone', __( '088889797697', 'collax' ) );
    $collax_extra_email = get_theme_mod( 'collax_extra_email', __( 'info@themepure.net', 'collax' ) );
    $collax_image_gallery = get_theme_mod( 'collax_side_gallery_items' );
?>


<div class="corporate-layout-right">
    <div class="corporate-header__main pt-45 pb-45 p-relative corporate-plr">
        <?php if(!empty($collax_side_hide)) : ?>
        <div class="corporate-header__shape-img-1 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".7s">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero/cp-hero-shape-1.png" alt="">
        </div>
        <?php endif; ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="corporate-header__bar text-end">
                        <button class="tp-menu-bar"><i class="fal fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tp-offcanvas-area">
        <div class="tpoffcanvas corporate__offcanvas">
            <?php if(!empty($collax_side_hide)) : ?>
            <div class="tpoffcanvas__logo">
                <?php collax_side_logo();?>
            </div>
            <?php endif; ?>
            <div class="tpoffcanvas__close-btn">
                <a class="close-btn" href="javascript:void(0)"><i class="fal fa-times-hexagon"></i></a>
            </div>
            <?php if(!empty($collax_side_hide) && !empty($collax_extra_about_text)) : ?>
            <div class="tpoffcanvas__content d-none d-sm-block">
                <p><?php echo collax_kses($collax_extra_about_text);?></p>
            </div>
            <?php endif; ?>
            <div class="mobile-menu-2 <?php echo esc_attr($side_hide_margin); ?>"></div>
            <?php if(!empty($collax_side_hide)) : ?>
            <div class="tpoffcanvas__contact">
                <?php if(!empty($collax_contact_title)) : ?>
                <span><?php echo esc_html($collax_contact_title);?></span>
                <?php endif; ?>
                <ul>
                    <?php if(!empty($collax_extra_address)) : ?>
                    <li><i class="fas fa-star"></i> <?php echo collax_kses($collax_extra_address);?></li>
                    <?php endif; ?>

                    <?php if(!empty($collax_extra_phone)) : ?>
                    <li><i class="fas fa-star"></i> <?php echo collax_kses($collax_extra_phone);?></li>
                    <?php endif; ?>

                    <?php if(!empty($collax_extra_email)) : ?>
                    <li><i class="fas fa-star"></i> <?php echo collax_kses($collax_extra_email);?></li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="tpoffcanvas__input d-none d-sm-block">
                <?php if(!empty($collax_subs_title)) : ?>
                <p><?php echo esc_html($collax_subs_title);?></p>
                <?php endif; ?>

                
                <?php if(!empty($collax_subs_shortcode)) : ?>
                    <?php echo do_shortcode($collax_subs_shortcode);?>
                <?php endif; ?>
            </div>
            <div class="tpoffcanvas__instagram d-none d-sm-block">
                <?php if(!empty($collax_insta_title)) : ?>
                    <p><?php echo esc_html($collax_insta_title);?></p>
                <?php endif; ?>
                <?php if(!empty($collax_image_gallery)) : ?>
                <div class="tp-insta">
                    <div class="row">
                        <?php foreach( $collax_image_gallery as $image ) : ?>
                        <div class="col-3 col-sm-3"><a href="<?php echo esc_url($image['collax_g_image']); ?>"><img src="<?php echo esc_url($image['collax_g_image']); ?>" alt="<?php echo esc_attr__('Gallery Image', 'collax'); ?>"></a></div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="body-overlay"></div>
</div>