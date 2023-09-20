<?php
/**
 * Breadcrumbs for Eduker theme.
 *
 * @package     Eduker
 * @author      Theme_Pure
 * @copyright   Copyright (c) 2022, Theme_Pure
 * @link        https://www.themepure.net
 * @since       Eduker 1.0.0
 */


function collax_breadcrumb_func() {
    global $post;  
    $breadcrumb_class = '';
    $breadcrumb_show = 1;


    if ( is_front_page() && is_home() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','collax'));
        $breadcrumb_class = 'home_front_page';
    }
    elseif ( is_front_page() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','collax'));
        $breadcrumb_show = 0;
    }
    elseif ( is_home() ) {
        if ( get_option( 'page_for_posts' ) ) {
            $title = get_the_title( get_option( 'page_for_posts') );
        }
    }

    elseif ( is_single() && 'post' == get_post_type() ) {
      $title = get_the_title();
    } 
    elseif ( is_single() && 'product' == get_post_type() ) {
        $title = get_theme_mod( 'breadcrumb_product_details', __( 'Shop', 'collax' ) );
    } 
    elseif ( is_single() && 'courses' == get_post_type() ) {
      $title = esc_html__( 'Course Details', 'collax' );
    } 
    elseif ( 'courses' == get_post_type() ) {
      $title = esc_html__( 'Courses', 'collax' );
    } 
    elseif ( is_search() ) {
        $title = esc_html__( 'Search Results for : ', 'collax' ) . get_search_query();
    } 
    elseif ( is_404() ) {
        $title = esc_html__( 'Page not Found', 'collax' );
    } 
    elseif ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
        $title = get_theme_mod( 'breadcrumb_shop', __( 'Shop', 'collax' ) );
    } 
    elseif ( is_archive() ) {
        $title = get_the_archive_title();
    } 
    else {
        $title = get_the_title();
    }
 


    $_id = get_the_ID();

    if ( is_single() && 'product' == get_post_type() ) { 
        $_id = $post->ID;
    } 
    elseif ( function_exists("is_shop") AND is_shop()  ) { 
        $_id = wc_get_page_id('shop');
    } 
    elseif ( is_home() && get_option( 'page_for_posts' ) ) {
        $_id = get_option( 'page_for_posts' );
    }

    $is_breadcrumb = function_exists( 'get_field' ) ? get_field( 'is_it_invisible_breadcrumb', $_id ) : '';
    if( !empty($_GET['s']) ) {
      $is_breadcrumb = null;
    }

      if ( empty( $is_breadcrumb ) && $breadcrumb_show == 1 ) {

        $bg_img_from_page = function_exists('get_field') ? get_field('breadcrumb_background_image',$_id) : '';
        $hide_bg_img = function_exists('get_field') ? get_field('hide_breadcrumb_background_image',$_id) : '';

        // get_theme_mod
        $bg_img = get_theme_mod( 'breadcrumb_bg_img' );
        $breadcrumb_shape_switch = get_theme_mod( 'breadcrumb_shape_switch', false );
        $breadcrumb_info_switch = get_theme_mod( 'breadcrumb_info_switch', true );

        if ( $hide_bg_img ) {
            $bg_img = '';
        } else {
            $bg_img = !empty( $bg_img_from_page ) ? $bg_img_from_page['url'] : $bg_img;
        }
        
        ?>

        <!-- page title area start -->


         <section class="breadcrumb__area  breadcrumb__pt-310 include-bg p-relative grey-bg <?php print esc_attr( $breadcrumb_class );?>" data-background="<?php echo esc_url($bg_img);?>" >
            
            <?php if(!empty($breadcrumb_shape_switch)) : ?>
            <div class="ac-about-shape-img">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/breadcrum/ab-shape-1.1.jpg" alt="<?php echo esc_html__('img', 'collax');?>">
            </div>
            <?php endif; ?>

            <div class="container">
                <div class="row">
                    <div class="col-xl-11">
                        
                        <?php if (!empty($breadcrumb_info_switch)) : ?>
                        <div class="breadcrumb__content p-relative z-index-1">
                            <h3 class="breadcrumb__title"><?php echo wp_kses_post( $title ); ?></h3>
                            <?php if(function_exists('bcn_display')) {
                                echo '<div class="breadcrumb-links">';
	                            bcn_display();
                                echo '</div>';
	                        } ?>
                        </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </section>
         <!-- page title area end -->
        <?php
      }
}

add_action( 'collax_before_main_content', 'collax_breadcrumb_func' );

// collax_search_form
function collax_search_form() {
    ?>
     <div class="search-wrapper p-relative transition-3 d-none">
         <div class="search-form transition-3">
             <form method="get" action="<?php print esc_url( home_url( '/' ) );?>" >
                 <input type="search" name="s" value="<?php print esc_attr( get_search_query() )?>" placeholder="<?php print esc_attr__( 'Enter Your Keyword', 'collax' );?>" >
                 <button type="submit" class="search-btn"><i class="far fa-search"></i></button>
             </form>
             <a href="javascript:void(0);" class="search-close"><i class="far fa-times"></i></a>
         </div>
     </div>
   <?php
}
// collax_search_form_2
function collax_search_form_2() {
    ?>
     <div class="tp-search-form p-relative">
        <form method="get" action="<?php print esc_url( home_url( '/' ) );?>" >
            <input type="search" name="s" value="<?php print esc_attr( get_search_query() )?>" placeholder="<?php print esc_attr__( 'Search...', 'collax' );?>">
            <button type="submit"><i class="far fa-search"></i></button>
        </form>
    </div>
   <?php
}

add_action( 'collax_before_main_content', 'collax_search_form' );