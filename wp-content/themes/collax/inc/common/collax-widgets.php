<?php 

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function collax_widgets_init() {

    $footer_style_2_switch = get_theme_mod( 'footer_style_2_switch', true );
    $footer_style_3_switch = get_theme_mod( 'footer_style_3_switch', true );
    $footer_style_4_switch = get_theme_mod( 'footer_style_4_switch', true );
    $footer_style_7_switch = get_theme_mod( 'footer_style_7_switch', true );

    /**
     * blog sidebar
     */
    register_sidebar( [
        'name'          => esc_html__( 'Blog Sidebar', 'collax' ),
        'id'            => 'blog-sidebar',
        'description'          => esc_html__( 'Set Your Blog Widget', 'collax' ),
        'before_widget' => '<div id="%1$s" class="sidebar__widget mb-40 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="sidebar__widget-title">',
        'after_title'   => '</h3>',
    ] );


    $footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

    // footer default
    for ( $num = 1; $num <= $footer_widgets; $num++ ) {
        register_sidebar( [
            'name'          => sprintf( esc_html__( 'Footer %1$s', 'collax' ), $num ),
            'id'            => 'footer-' . $num,
            'description'   => sprintf( esc_html__( 'Footer column %1$s', 'collax' ), $num ),
            'before_widget' => '<div id="%1$s" class="tp-footer-widget footer__widget footer-col-'.$num.' mb-50 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="tp-footer-widget__title pb-15"><h3 class="footer-title">',
            'after_title'   => '</h3></div>',
        ] );
    }
  

    // footer 4
    if ( $footer_style_4_switch ) {
        for ( $num = 1; $num <= $footer_widgets; $num++ ) {
            register_sidebar( [
                'name'          => sprintf( esc_html__( 'Footer Style 4 : %1$s', 'collax' ), $num ),
                'id'            => 'footer-4-' . $num,
                'description'   => sprintf( esc_html__( 'Footer Style 4 : %1$s', 'collax' ), $num ),
                'before_widget' => '<div id="%1$s" class="tp-footer-widget footer__widget footer-col-'.$num.' mb-50 %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<div class="tp-footer-widget__title pb-15"><h3 class="footer-title text-black">',
                'after_title'   => '</h3></div>',
            ] );
        }
    }
  

    // footer 7
    if ( $footer_style_7_switch ) {
        for ( $num = 1; $num <= $footer_widgets -1; $num++ ) {
            register_sidebar( [
                'name'          => sprintf( esc_html__( 'Footer Style 7 : %1$s', 'collax' ), $num ),
                'id'            => 'footer-7-' . $num,
                'description'   => sprintf( esc_html__( 'Footer Style 7 : %1$s', 'collax' ), $num ),
                'before_widget' => '<div id="%1$s" class="bl-footer__widget tp-footer-widget footer__widget bl-footer-'.$num.' %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="bl-footer__widget-title-sm">',
                'after_title'   => '</h4>',
            ] );
        }
    }
}
add_action( 'widgets_init', 'collax_widgets_init' );