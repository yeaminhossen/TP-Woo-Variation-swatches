<?php

/**
 * collax_scripts description
 * @return [type] [description]
 */
function collax_scripts() {

    /**
     * all css files
    */

    wp_enqueue_style( 'collax-fonts', collax_fonts_url(), array(), time() );
    if( is_rtl() ){
        wp_enqueue_style( 'bootstrap-rtl', COLLAX_THEME_CSS_DIR.'bootstrap.rtl.min.css', array() );
    }else{
        wp_enqueue_style( 'bootstrap', COLLAX_THEME_CSS_DIR.'bootstrap.min.css', array() );
    }
    wp_enqueue_style( 'custom-animation', COLLAX_THEME_CSS_DIR . 'custom-animation.css', [] );
    wp_enqueue_style( 'animate', COLLAX_THEME_CSS_DIR . 'animate.css', [] );
    wp_enqueue_style( 'swiper-bundle', COLLAX_THEME_CSS_DIR . 'swiper-bundle.css', [] );
    wp_enqueue_style( 'slick', COLLAX_THEME_CSS_DIR . 'slick.css', [] );
    wp_enqueue_style( 'flaticon', COLLAX_THEME_CSS_DIR . 'flaticon.css', [] );
    wp_enqueue_style( 'meanmenu', COLLAX_THEME_CSS_DIR . 'meanmenu.css', [] );
    wp_enqueue_style( 'font-awesome-pro', COLLAX_THEME_CSS_DIR . 'font-awesome-pro.css', [] );
    wp_enqueue_style( 'magnific-popup', COLLAX_THEME_CSS_DIR . 'magnific-popup.css', [] );
    wp_enqueue_style( 'hover-reveal', COLLAX_THEME_CSS_DIR . 'hover-reveal.css', [] );
    wp_enqueue_style( 'spacing', COLLAX_THEME_CSS_DIR . 'spacing.css', [] );
    wp_enqueue_style( 'nice-select', COLLAX_THEME_CSS_DIR . 'nice-select.css', [] );
    wp_enqueue_style( 'collax-core', COLLAX_THEME_CSS_DIR . 'collax-core.css', [], time() );
    wp_enqueue_style( 'collax-unit', COLLAX_THEME_CSS_DIR . 'collax-unit.css', [], time() );
    wp_enqueue_style( 'collax-custom', COLLAX_THEME_CSS_DIR . 'collax-custom.css', [] );
    wp_enqueue_style( 'collax-woo', COLLAX_THEME_CSS_DIR . 'woo.css', [] );
    wp_enqueue_style( 'collax-style', get_stylesheet_uri() );

    // all js
    wp_enqueue_script( 'waypoints', COLLAX_THEME_JS_DIR . 'waypoints.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'bootstrap-bundle', COLLAX_THEME_JS_DIR . 'bootstrap.bundle.min.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'swiper-bundle', COLLAX_THEME_JS_DIR . 'swiper-bundle.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'slick', COLLAX_THEME_JS_DIR . 'slick.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'nice-select', COLLAX_THEME_JS_DIR . 'nice-select.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'magnific-popup', COLLAX_THEME_JS_DIR . 'magnific-popup.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'counterup', COLLAX_THEME_JS_DIR . 'counterup.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'wow', COLLAX_THEME_JS_DIR . 'wow.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'meanmenu', COLLAX_THEME_JS_DIR . 'meanmenu.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'charming', COLLAX_THEME_JS_DIR . 'charming.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'hover-reveal', COLLAX_THEME_JS_DIR . 'hover-reveal.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'tween-max', COLLAX_THEME_JS_DIR . 'tween-max.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'isotope-pkgd', COLLAX_THEME_JS_DIR . 'isotope-pkgd.js', [ 'imagesloaded' ], false, true );
    wp_enqueue_script( 'collax-main', COLLAX_THEME_JS_DIR . 'main.js', [ 'jquery' ], time(), true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'collax_scripts' );

/*
Register Fonts
 */
function collax_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'collax' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap';
    }
    return $font_url;
}