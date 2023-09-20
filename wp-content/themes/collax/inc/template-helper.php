<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package collax
 */

/** 
 *
 * collax header
 */

function collax_check_header() {
    $collax_header_style = function_exists( 'get_field' ) ? get_field( 'header_style' ) : NULL;
    $collax_default_header_style = get_theme_mod( 'choose_default_header', 'header-style-1' );

    if ( $collax_header_style == 'header-style-1' && empty($_GET['s']) ) {
        get_template_part( 'template-parts/header/header-1' );
    } 
    elseif ( $collax_header_style == 'header-style-2' && empty($_GET['s']) ) {
        get_template_part( 'template-parts/header/header-2' );
    } 
    elseif ( $collax_header_style == 'header-style-3' && empty($_GET['s']) ) {
        get_template_part( 'template-parts/header/header-3' );
    } 
    elseif ( $collax_header_style == 'header-style-4' && empty($_GET['s']) ) {
        get_template_part( 'template-parts/header/header-4' );
    } 
    elseif ( $collax_header_style == 'header-style-5' && empty($_GET['s']) ) {
        get_template_part( 'template-parts/header/header-5' );
    } 
    elseif ( $collax_header_style == 'header-style-6' && empty($_GET['s']) ) {
        get_template_part( 'template-parts/header/header-6' );
    } 
    elseif ( $collax_header_style == 'header-style-7' && empty($_GET['s']) ) {
        get_template_part( 'template-parts/header/header-7' );
    } 
    elseif ( $collax_header_style == 'header-style-8' && empty($_GET['s']) ) {
        get_template_part( 'template-parts/header/header-8' );
    } 
    else {

        /** default header style **/
        if ( $collax_default_header_style == 'header-style-2' ) {
            get_template_part( 'template-parts/header/header-2' );
        } 
        elseif ( $collax_default_header_style == 'header-style-3' ) {
            get_template_part( 'template-parts/header/header-3' );
        }
        elseif ( $collax_default_header_style == 'header-style-4' ) {
            get_template_part( 'template-parts/header/header-4' );
        }
        elseif ( $collax_default_header_style == 'header-style-5' ) {
            get_template_part( 'template-parts/header/header-5' );
        }
        elseif ( $collax_default_header_style == 'header-style-6' ) {
            get_template_part( 'template-parts/header/header-6' );
        }
        elseif ( $collax_default_header_style == 'header-style-7' ) {
            get_template_part( 'template-parts/header/header-7' );
        }
        elseif ( $collax_default_header_style == 'header-style-8' ) {
            get_template_part( 'template-parts/header/header-8' );
        }
        else {
            get_template_part( 'template-parts/header/header-1' );
        }
    }

}
add_action( 'collax_header_style', 'collax_check_header', 10 );


/**
 * [collax_header_lang description]
 * @return [type] [description]
 */
function collax_header_lang_defualt() {
    $collax_header_lang = get_theme_mod( 'collax_header_lang', false );
    if ( $collax_header_lang ): ?>

        <li><a href="javascript:void(0)" class="lang__btn"><?php print esc_html__( 'EN', 'collax' );?> <i class="fal fa-arrow-down arrow-down"></i></a>
        <?php do_action( 'collax_language' );?>
        </li>

    <?php endif;?>
<?php
}

/**
 * [collax_language_list description]
 * @return [type] [description]
 */
function _collax_language( $mar ) {
    return $mar;
}
function collax_language_list() {

    $mar = '';
    $languages = apply_filters( 'wpml_active_languages', NULL, 'orderby=id&order=desc' );
    if ( !empty( $languages ) ) {
        $mar = '<ul>';
        foreach ( $languages as $lan ) {
            $active = $lan['active'] == 1 ? 'active' : '';
            $mar .= '<li class="' . $active . '"><a href="' . $lan['url'] . '">' . $lan['translated_name'] . '</a></li>';
        }
        $mar .= '</ul>';
    } else {
        //remove this code when send themeforest reviewer team
        $mar .= '<ul>';
        $mar .= '<li><a href="#">' . esc_html__( 'English', 'collax' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'Arabic', 'collax' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'Spanish', 'collax' ) . '</a></li>';
        $mar .= ' </ul>';
    }
    print _collax_language( $mar );
}
add_action( 'collax_language', 'collax_language_list' );


// header logo
function collax_header_logo() { ?>
      <?php
        $collax_logo_on = function_exists( 'get_field' ) ? get_field( 'is_enable_sec_logo' ) : NULL;
        $collax_logo = get_template_directory_uri() . '/assets/img/logo/logo-blue.png';
        $collax_logo_black = get_template_directory_uri() . '/assets/img/logo/logo-white.png';

        $collax_site_logo = get_theme_mod( 'logo', $collax_logo );
        $collax_secondary_logo = get_theme_mod( 'seconday_logo', $collax_logo_black );
      ?>

      <?php if ( !empty( $collax_logo_on ) ) : ?>
         <a class="secondary-logo" href="<?php print esc_url( home_url( '/' ) );?>">
             <img src="<?php print esc_url( $collax_secondary_logo );?>" alt="<?php print esc_attr__( 'logo', 'collax' );?>" />
         </a>
      <?php else : ?>
         <a href="<?php print esc_url( home_url( '/' ) );?>">
             <img src="<?php print esc_url( $collax_site_logo );?>" alt="<?php print esc_attr__( 'logo', 'collax' );?>" />
         </a>
      <?php endif; ?>
   <?php
}

// header logo
function collax_header_sticky_logo() {?>
    <?php
        $collax_logo_black = get_template_directory_uri() . '/assets/img/logo/logo-black.png';
        $collax_secondary_logo = get_theme_mod( 'seconday_logo', $collax_logo_black );
    ?>
      <a class="sticky-logo" href="<?php print esc_url( home_url( '/' ) );?>">
          <img src="<?php print esc_url( $collax_secondary_logo );?>" alt="<?php print esc_attr__( 'logo', 'collax' );?>" />
      </a>
    <?php
}

function collax_side_logo() {
    // side info

    $collax_site_logo = get_theme_mod( 'collax_side_logo', get_template_directory_uri() . '/assets/img/logo/logo-white.png' );

    ?>

    <div class="tpoffcanvas__logo">
        <a href="<?php print esc_url( home_url( '/' ) );?>">
            <img src="<?php print esc_url( $collax_site_logo );?>" alt="<?php print esc_attr__( 'logo', 'collax' );?>" />
        </a>
    </div>



<?php }

function collax_mobile_logo() {
    // mobile

    $collax_mobile_logo = get_theme_mod( 'mobile_logo', get_template_directory_uri() . '/assets/img/logo/logo.png' );

    if(!empty($collax_mobile_logo)) : ?>

        <a href="<?php print esc_url( home_url( '/' ) );?>">
            <img src="<?php print esc_url( $collax_mobile_logo );?>" alt="<?php print esc_attr__( 'logo', 'collax' );?>" />
        </a>
    <?php endif; ?>



<?php }

/**
 * [collax_header_social_profiles description]
 * @return [type] [description]
 */
function collax_header_social_profiles() {
    $collax_topbar_fb_url = get_theme_mod( 'collax_topbar_fb_url', __( '#', 'collax' ) );
    $collax_topbar_twitter_url = get_theme_mod( 'collax_topbar_twitter_url', __( '#', 'collax' ) );
    $collax_topbar_instagram_url = get_theme_mod( 'collax_topbar_instagram_url', __( '#', 'collax' ) );
    $collax_topbar_linkedin_url = get_theme_mod( 'collax_topbar_linkedin_url', __( '#', 'collax' ) );
    $collax_topbar_youtube_url = get_theme_mod( 'collax_topbar_youtube_url', __( '#', 'collax' ) );
    ?>

    <div class="bl-header-top__social">
        <?php if ( !empty( $collax_topbar_fb_url ) ): ?>
            <a href="<?php print esc_url( $collax_topbar_fb_url );?>"><i class="fab fa-facebook-f"></i></a>
        <?php endif;?>
        <?php if ( !empty( $collax_topbar_twitter_url ) ): ?>
            <a href="<?php print esc_url( $collax_topbar_twitter_url );?>"><i class="fab fa-twitter"></i></a>
        <?php endif;?>
        <?php if ( !empty( $collax_topbar_linkedin_url ) ): ?>
            <li><a href="<?php print esc_url( $collax_topbar_linkedin_url );?>"><span><i class="fab fa-linkedin"></i></span></a></li>
        <?php endif;?>
        <?php if ( !empty( $collax_topbar_instagram_url ) ): ?>
            <a href="<?php print esc_url( $collax_topbar_linkedin_url );?>"><i class="fab fa-linkedin-in"></i></a>
        <?php endif;?>
        <?php if ( !empty( $collax_topbar_youtube_url ) ): ?>
            <a href="<?php print esc_url( $collax_topbar_youtube_url );?>"><i class="fab fa-youtube"></i></a>
        <?php endif;?>
    </div>

<?php
}

function collax_footer_social_profiles() {
    $collax_footer_fb_url = get_theme_mod( 'collax_footer_fb_url', __( '#', 'collax' ) );
    $collax_footer_twitter_url = get_theme_mod( 'collax_footer_twitter_url', __( '#', 'collax' ) );
    $collax_footer_instagram_url = get_theme_mod( 'collax_footer_instagram_url', __( '#', 'collax' ) );
    $collax_footer_linkedin_url = get_theme_mod( 'collax_footer_linkedin_url', __( '#', 'collax' ) );
    $collax_footer_youtube_url = get_theme_mod( 'collax_footer_youtube_url', __( '#', 'collax' ) );
    ?>

        <?php if ( !empty( $collax_footer_fb_url ) ): ?>
            <a href="<?php print esc_url( $collax_footer_fb_url );?>"><i class="fab fa-facebook-f"></i></a>
        <?php endif;?>

        <?php if ( !empty( $collax_footer_twitter_url ) ): ?>
            <a href="<?php print esc_url( $collax_footer_twitter_url );?>"><i class="fab fa-twitter"></i></a>
        <?php endif;?>

        <?php if ( !empty( $collax_footer_instagram_url ) ): ?>
            <a href="<?php print esc_url( $collax_footer_instagram_url );?>"><i class="fab fa-instagram"></i></a>
        <?php endif;?>

        <?php if ( !empty( $collax_footer_linkedin_url ) ): ?>
            <a href="<?php print esc_url( $collax_footer_linkedin_url );?>"><i class="fab fa-linkedin"></i></a>
        <?php endif;?>

        <?php if ( !empty( $collax_footer_youtube_url ) ): ?>
            <a href="<?php print esc_url( $collax_footer_youtube_url );?>"><i class="fab fa-youtube"></i></a>
        <?php endif;?>
<?php
}

/**
 * [collax_header_menu description]
 * @return [type] [description]
 */
function collax_header_menu() {
    ?>
    <?php
        wp_nav_menu( [
            'theme_location' => 'main-menu',
            'menu_class'     => '',
            'container'      => '',
            'fallback_cb'    => 'COLLAX_Navwalker_Class::fallback',
            'walker'         => new COLLAX_Navwalker_Class,
        ] );
    ?>
    <?php
}

/**
 * [collax_header_menu description]
 * @return [type] [description]
 */
function collax_mobile_menu() {
    ?>
    <?php
        $collax_menu = wp_nav_menu( [
            'theme_location' => 'main-menu',
            'menu_class'     => '',
            'container'      => '',
            'menu_id'        => 'mobile-menu-active',
            'echo'           => false,
        ] );

    $collax_menu = str_replace( "menu-item-has-children", "menu-item-has-children has-children", $collax_menu );
        echo wp_kses_post( $collax_menu );
    ?>
    <?php
}

/**
 * [collax_search_menu description]
 * @return [type] [description]
 */
function collax_header_search_menu() {
    ?>
    <?php
        wp_nav_menu( [
            'theme_location' => 'header-search-menu',
            'menu_class'     => '',
            'container'      => '',
            'fallback_cb'    => 'COLLAX_Navwalker_Class::fallback',
            'walker'         => new COLLAX_Navwalker_Class,
        ] );
    ?>
    <?php
}

/**
 * [collax_footer_menu description]
 * @return [type] [description]
 */
function collax_footer_menu() {
    wp_nav_menu( [
        'theme_location' => 'footer-menu',
        'menu_class'     => 'm-0',
        'container'      => '',
        'fallback_cb'    => 'COLLAX_Navwalker_Class::fallback',
        'walker'         => new COLLAX_Navwalker_Class,
    ] );
}


/**
 * [collax_category_menu description]
 * @return [type] [description]
 */
function collax_category_menu() {
    wp_nav_menu( [
        'theme_location' => 'category-menu',
        'menu_class'     => 'cat-submenu m-0',
        'container'      => '',
        'fallback_cb'    => 'COLLAX_Navwalker_Class::fallback',
        'walker'         => new COLLAX_Navwalker_Class,
    ] );
}

/**
 *
 * collax footer
 */
add_action( 'collax_footer_style', 'collax_check_footer', 10 );

function collax_check_footer() {
    $collax_footer_style = function_exists( 'get_field' ) ? get_field( 'footer_style' ) : NULL;
    $collax_default_footer_style = get_theme_mod( 'choose_default_footer', 'footer-style-1' );

    if ( $collax_footer_style == 'footer-style-1' ) {
        get_template_part( 'template-parts/footer/footer-1' );
    } 
    elseif ( $collax_footer_style == 'footer-style-2' ) {
        get_template_part( 'template-parts/footer/footer-2' );
    } 
    elseif ( $collax_footer_style == 'footer-style-3' ) {
        get_template_part( 'template-parts/footer/footer-3' );
    }
    elseif ( $collax_footer_style == 'footer-style-4' ) {
        get_template_part( 'template-parts/footer/footer-4' );
    }
    elseif ( $collax_footer_style == 'footer-style-5' ) {
        get_template_part( 'template-parts/footer/footer-5' );
    }
    elseif ( $collax_footer_style == 'footer-style-6' ) {
        get_template_part( 'template-parts/footer/footer-6' );
    }
    elseif ( $collax_footer_style == 'footer-style-7' ) {
        get_template_part( 'template-parts/footer/footer-7' );
    } else {

        /** default footer style **/
        if ( $collax_default_footer_style == 'footer-style-2' ) {
            get_template_part( 'template-parts/footer/footer-2' );
        } 
        elseif ( $collax_default_footer_style == 'footer-style-3' ) {
            get_template_part( 'template-parts/footer/footer-3' );
        } 
        elseif ( $collax_default_footer_style == 'footer-style-4' ) {
            get_template_part( 'template-parts/footer/footer-4' );
        } 
        elseif ( $collax_default_footer_style == 'footer-style-5' ) {
            get_template_part( 'template-parts/footer/footer-5' );
        } 
        elseif ( $collax_default_footer_style == 'footer-style-6' ) {
            get_template_part( 'template-parts/footer/footer-6' );
        } 
        elseif ( $collax_default_footer_style == 'footer-style-7' ) {
            get_template_part( 'template-parts/footer/footer-7' );
        } 
        else {
            get_template_part( 'template-parts/footer/footer-1' );
        }

    }
}

// collax_copyright_text
function collax_copyright_text() {
   print get_theme_mod( 'collax_copyright', esc_html__( '© 2023 Collex, All Rights Reserved. Design By Theme Pure', 'collax' ) );
}



/**
 *
 * pagination
 */
if ( !function_exists( 'collax_pagination' ) ) {

    function _collax_pagi_callback( $pagination ) {
        return $pagination;
    }

    //page navegation
    function collax_pagination( $prev, $next, $pages, $args ) {
        global $wp_query, $wp_rewrite;
        $menu = '';
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

        if ( $pages == '' ) {
            global $wp_query;
            $pages = $wp_query->max_num_pages;

            if ( !$pages ) {
                $pages = 1;
            }

        }

        $pagination = [
            'base'      => add_query_arg( 'paged', '%#%' ),
            'format'    => '',
            'total'     => $pages,
            'current'   => $current,
            'prev_text' => $prev,
            'next_text' => $next,
            'type'      => 'array',
        ];

        //rewrite permalinks
        if ( $wp_rewrite->using_permalinks() ) {
            $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
        }

        if ( !empty( $wp_query->query_vars['s'] ) ) {
            $pagination['add_args'] = ['s' => get_query_var( 's' )];
        }

        $pagi = '';
        if ( paginate_links( $pagination ) != '' ) {
            $paginations = paginate_links( $pagination );
            $pagi .= '<nav><ul>';
            foreach ( $paginations as $key => $pg ) {
                $pagi .= '<li>' . $pg . '</li>';
            }
            $pagi .= '</ul></nav>';
        }

        print _collax_pagi_callback( $pagi );
    }
}


// header top bg color
function collax_breadcrumb_bg_color() {
    $color_code = get_theme_mod( 'collax_breadcrumb_bg_color', '#222' );
    wp_enqueue_style( 'collax-custom', COLLAX_THEME_CSS_DIR . 'collax-custom.css', [] );
    if ( $color_code != '' ) {
        $custom_css = '';
        $custom_css .= ".breadcrumb-bg.gray-bg{ background: " . $color_code . "}";

        wp_add_inline_style( 'collax-breadcrumb-bg', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'collax_breadcrumb_bg_color' );

// breadcrumb-spacing top
function collax_breadcrumb_spacing() {
    $padding_px = get_theme_mod( 'collax_breadcrumb_spacing', '160px' );
    wp_enqueue_style( 'collax-custom', COLLAX_THEME_CSS_DIR . 'collax-custom.css', [] );
    if ( $padding_px != '' ) {
        $custom_css = '';
        $custom_css .= ".breadcrumb-spacing{ padding-top: " . $padding_px . "}";

        wp_add_inline_style( 'collax-breadcrumb-top-spacing', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'collax_breadcrumb_spacing' );

// breadcrumb-spacing bottom
function collax_breadcrumb_bottom_spacing() {
    $padding_px = get_theme_mod( 'collax_breadcrumb_bottom_spacing', '160px' );
    wp_enqueue_style( 'collax-custom', COLLAX_THEME_CSS_DIR . 'collax-custom.css', [] );
    if ( $padding_px != '' ) {
        $custom_css = '';
        $custom_css .= ".breadcrumb-spacing{ padding-bottom: " . $padding_px . "}";

        wp_add_inline_style( 'collax-breadcrumb-bottom-spacing', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'collax_breadcrumb_bottom_spacing' );

// scrollup
function collax_scrollup_switch() {
    $scrollup_switch = get_theme_mod( 'collax_scrollup_switch', false );
    wp_enqueue_style( 'collax-custom', COLLAX_THEME_CSS_DIR . 'collax-custom.css', [] );
    if ( $scrollup_switch ) {
        $custom_css = '';
        $custom_css .= "#scrollUp{ display: none !important;}";

        wp_add_inline_style( 'collax-scrollup-switch', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'collax_scrollup_switch' );

// theme color
function collax_custom_color() {
    $color_code = get_theme_mod( 'collax_color_option', '#5956E9' );
    $color_code_secondary = get_theme_mod( 'collax_color_option_secondary', '#FFDC60' );
    $collax_color_option_2 = get_theme_mod( 'collax_color_option_2', '#82CEFD' );
    $collax_color_typo = get_theme_mod( 'collax_color_typo', '#8A90A2' );
    $collax_color_typo_2 = get_theme_mod( 'collax_color_typo_2', '#292930' );

    wp_enqueue_style( 'collax-custom', COLLAX_THEME_CSS_DIR . 'collax-custom.css', [] );
    if ( !empty($color_code) || !empty($color_code_secondary) || !empty($color_code_btn_primary) || !empty($color_code_btn_secondary)) {
        $custom_css = '';
        $custom_css .= "body .tp-bt-btn svg circle, body .header-top-mob svg circle { fill: " . $color_code . "}";
        $custom_css .= "html:root{
            --tp-theme-1: " . $color_code . ";
            --tp-theme-blue: " . $color_code . ";
            --tp-theme-primary: " . $color_code_secondary . ";
            --tp-theme-secondary: " . $collax_color_option_2 . ";
            --tp-common-blue: " . $collax_color_option_2 . ";
            --tp-common-black: " . $collax_color_typo_2 . ";
        }";
        
        $custom_css .= "body .tp-btn::before, body .tp-btn::after{ background-color: " . $color_code_secondary . "}";
        $custom_css .= "body .tp-btn-sky::before, body .tp-btn-sky::after{ background-color: " . $color_code_secondary . "}";
        $custom_css .= "body .tp-main-menu ul li a, body .tp-footer-widget ul li a, body .tp-footer-widget ol li a,  body .tp-footer-widget__text p, body p{ color: " . $collax_color_typo . "}";


        wp_add_inline_style( 'collax-custom', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'collax_custom_color' );



// collax_kses_intermediate
function collax_kses_intermediate( $string = '' ) {
    return wp_kses( $string, collax_get_allowed_html_tags( 'intermediate' ) );
}

function collax_get_allowed_html_tags( $level = 'basic' ) {
    $allowed_html = [
        'b'      => [],
        'i'      => [],
        'u'      => [],
        'em'     => [],
        'br'     => [],
        'abbr'   => [
            'title' => [],
        ],
        'span'   => [
            'class' => [],
        ],
        'strong' => [],
        'a'      => [
            'href'  => [],
            'title' => [],
            'class' => [],
            'id'    => [],
        ],
    ];

    if ($level === 'intermediate') {
        $allowed_html['a'] = [
            'href' => [],
            'title' => [],
            'class' => [],
            'id' => [],
        ];
        $allowed_html['div'] = [
            'class' => [],
            'id' => [],
        ];
        $allowed_html['img'] = [
            'src' => [],
            'class' => [],
            'alt' => [],
        ];
        $allowed_html['del'] = [
            'class' => [],
        ];
        $allowed_html['ins'] = [
            'class' => [],
        ];
        $allowed_html['bdi'] = [
            'class' => [],
        ];
        $allowed_html['i'] = [
            'class' => [],
            'data-rating-value' => [],
        ];
    }

    return $allowed_html;
}



// WP kses allowed tags
// ----------------------------------------------------------------------------------------
function collax_kses($raw){

   $allowed_tags = array(
      'a'                         => array(
         'class'   => array(),
         'href'    => array(),
         'rel'  => array(),
         'title'   => array(),
         'target' => array(),
      ),
      'abbr'                      => array(
         'title' => array(),
      ),
      'b'                         => array(),
      'blockquote'                => array(
         'cite' => array(),
      ),
      'cite'                      => array(
         'title' => array(),
      ),
      'code'                      => array(),
      'del'                    => array(
         'datetime'   => array(),
         'title'      => array(),
      ),
      'dd'                     => array(),
      'div'                    => array(
         'class'   => array(),
         'title'   => array(),
         'style'   => array(),
      ),
      'dl'                     => array(),
      'dt'                     => array(),
      'em'                     => array(),
      'h1'                     => array(),
      'h2'                     => array(),
      'h3'                     => array(),
      'h4'                     => array(),
      'h5'                     => array(),
      'h6'                     => array(),
      'i'                         => array(
         'class' => array(),
      ),
      'img'                    => array(
         'alt'  => array(),
         'class'   => array(),
         'height' => array(),
         'src'  => array(),
         'width'   => array(),
      ),
      'li'                     => array(
         'class' => array(),
      ),
      'ol'                     => array(
         'class' => array(),
      ),
      'p'                         => array(
         'class' => array(),
      ),
      'q'                         => array(
         'cite'    => array(),
         'title'   => array(),
      ),
      'span'                      => array(
         'class'   => array(),
         'title'   => array(),
         'style'   => array(),
      ),
      'iframe'                 => array(
         'width'         => array(),
         'height'     => array(),
         'scrolling'     => array(),
         'frameborder'   => array(),
         'allow'         => array(),
         'src'        => array(),
      ),
      'strike'                 => array(),
      'br'                     => array(),
      'strong'                 => array(),
      'data-wow-duration'            => array(),
      'data-wow-delay'            => array(),
      'data-wallpaper-options'       => array(),
      'data-stellar-background-ratio'   => array(),
      'ul'                     => array(
         'class' => array(),
      ),
      'svg' => array(
           'class' => true,
           'aria-hidden' => true,
           'aria-labelledby' => true,
           'role' => true,
           'xmlns' => true,
           'width' => true,
           'height' => true,
           'viewbox' => true, // <= Must be lower case!
       ),
       'g'     => array( 'fill' => true ),
       'title' => array( 'title' => true ),
       'path'  => array( 'd' => true, 'fill' => true,  ),
      );

   if (function_exists('wp_kses')) { // WP is here
      $allowed = wp_kses($raw, $allowed_tags);
   } else {
      $allowed = $raw;
   }

   return $allowed;
}

/* This code filters the Archive widget to include the post count inside the link */
add_filter( 'get_archives_link', 'collax_archive_count_span' );
function collax_archive_count_span( $links ) {
    $links = str_replace('</a>&nbsp;(', '<span > (', $links);
    $links = str_replace(')', ')</span></a> ', $links);
    return $links;
}


/* This code filters the Category widget to include the post count inside the link */
add_filter('wp_list_categories', 'collax_cat_count_span');
function collax_cat_count_span($links) {
  $links = str_replace('</a> (', '<span> (', $links);
  $links = str_replace(')', ')</span></a>', $links);
  return $links;
}

// blog single social share
function collax_blog_social_share(){

    $collax_singleblog_social = get_theme_mod( 'collax_singleblog_social', false );
    $post_url = get_the_permalink();

    if(!empty($collax_singleblog_social)) : ?>    
    <div class="col-xl-6 col-lg-12">
       <div class="postbox__social text-start">
          <span><?php echo esc_html__('Share', 'collax');?></span>
          <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url($post_url);?>" target="_blank"><i class="fab fa-linkedin tp-linkedin"></i></a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url($post_url);?>" target="_blank""><i class="fab fa-facebook tp-facebook" ></i></a>
          <a href="https://twitter.com/share?url=<?php echo esc_url($post_url);?>" target="_blank"><i class="fab fa-twitter tp-twitter"></i></a>
       </div>
    </div>
    <?php endif ; 

}