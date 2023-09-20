<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package collax
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function collax_body_classes( $classes ) {
    // Adds a class of hfeed to non-singular pages.
    if ( !is_singular() ) {
        $classes[] = 'hfeed';
    }
    // Adds a class of no-sidebar when there is no sidebar present.
    if ( !is_active_sidebar( 'sidebar-1' ) ) {
        $classes[] = 'no-sidebar';
    }
    if (  function_exists('tutor') ) {
        $user_name = sanitize_text_field(get_query_var('tutor_student_username'));
        $get_user = tutor_utils()->get_user_by_login($user_name);
    }

    if ( !empty($get_user) ) {
        $classes[] = 'profile-breadcrumb';
    }

    return $classes;
}
add_filter( 'body_class', 'collax_body_classes' );




/**
 * Get tags.
 */
function collax_get_tag() {
    $collax_singleblog_social = get_theme_mod('collax_singleblog_social', false);
    $tag_col = $collax_singleblog_social ? 'col-xl-6 col-lg-12' : 'col-xl-12 col-lg-12';
    $html = '';
    if ( has_tag() ) {
        $html .= '<div class='.esc_attr($tag_col).'><div class="postbox__tag tagcloud"><span>' . esc_html__( 'Post Tags : ', 'collax' ) . '</span>';
        $html .= get_the_tag_list( '', ' ', '' );
        $html .= '</div></div>';
    }
    return $html;
}

/**
 * Get categories.
 */
function collax_get_category() {

    $categories = get_the_category( get_the_ID() );
    $x = 0;
    foreach ( $categories as $category ) {

        if ( $x == 2 ) {
            break;
        }
        $x++;
        print '<a class="news-tag" href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>';

    }
}

/** img alt-text **/
function collax_img_alt_text( $img_er_id = null ) {
    $image_id = $img_er_id;
    $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', false );
    $image_title = get_the_title( $image_id );

    if ( !empty( $image_id ) ) {
        if ( $image_alt ) {
            $alt_text = get_post_meta( $image_id, '_wp_attachment_image_alt', false );
        } else {
            $alt_text = get_the_title( $image_id );
        }
    } else {
        $alt_text = esc_html__( 'Image Alt Text', 'collax' );
    }

    return $alt_text;
}

// collax_ofer_sidebar_func
function collax_offer_sidebar_func() {
    if ( is_active_sidebar( 'offer-sidebar' ) ) {

        dynamic_sidebar( 'offer-sidebar' );
    }
}
add_action( 'collax_offer_sidebar', 'collax_offer_sidebar_func', 20 );

// collax_service_sidebar
function collax_service_sidebar_func() {
    if ( is_active_sidebar( 'services-sidebar' ) ) {

        dynamic_sidebar( 'services-sidebar' );
    }
}
add_action( 'collax_service_sidebar', 'collax_service_sidebar_func', 20 );

// collax_portfolio_sidebar
function collax_portfolio_sidebar_func() {
    if ( is_active_sidebar( 'portfolio-sidebar' ) ) {

        dynamic_sidebar( 'portfolio-sidebar' );
    }
}
add_action( 'collax_portfolio_sidebar', 'collax_portfolio_sidebar_func', 20 );

// collax_faq_sidebar
function collax_faq_sidebar_func() {
    if ( is_active_sidebar( 'faq-sidebar' ) ) {

        dynamic_sidebar( 'faq-sidebar' );
    }
}
add_action( 'collax_faq_sidebar', 'collax_faq_sidebar_func', 20 );