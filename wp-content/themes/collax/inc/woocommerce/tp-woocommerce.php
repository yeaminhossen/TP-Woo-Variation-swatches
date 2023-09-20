<?php

// shop page hooks
// breadcrumb remove
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
// remove ordering
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
// remove shop sidebar
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

// content-product hooks--
// action remove
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);


// single product
add_action( 'woocommerce_single_product_summary', 'collax_woo_rating', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
add_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 15 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_action( 'woocommerce_single_product_summary', 'collax_details_wishlish', 40 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 41 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
if( function_exists( 'collax_blog_social_share' ) ){
add_action( 'woocommerce_single_product_summary', 'collax_blog_social_share', 50 );
}

function collax_details_wishlish(){
    if( class_exists( 'TInvWL_Admin_TInvWL' ) ){
     echo do_shortcode( '[ti_wishlists_addtowishlist]' );
    }            
}

// woocommerce mini cart content
add_filter('woocommerce_add_to_cart_fragments', function ($fragments) {
    ob_start();
    ?>
    <div class="mini_shopping_cart_box">
        <?php woocommerce_mini_cart(); ?>
    </div>
    <?php $fragments['.mini_shopping_cart_box'] = ob_get_clean();
    return $fragments;
});

// woocommerce mini cart count icon
if ( ! function_exists( 'collax_header_add_to_cart_fragment' ) ) {
    function collax_header_add_to_cart_fragment( $fragments ) {
        ob_start();
        ?>
        <span class="cart__count" id="tp-cart-item">
            <?php echo esc_html( WC()->cart->cart_contents_count ); ?>
        </span>
        <?php
        $fragments['#tp-cart-item'] = ob_get_clean();

        return $fragments;
    }
}
add_filter( 'woocommerce_add_to_cart_fragments', 'collax_header_add_to_cart_fragment' );


// product-content
if( !function_exists('collax_loop_product_thumbnail') ) {
    function collax_loop_product_thumbnail( ) {
        global $product;
        global $post;
        global $woocommerce;
        $rating = wc_get_rating_html($product->get_average_rating());
        $ratingcount = $product->get_review_count();
        ?>
        <div class="product__item text-center transition-3 mb-50">
           <div class="product__thumb p-relative mb-25 fix">
            <?php if( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail(); ?>
            <?php endif; ?>

            <div class="on-sale-wrap">
               <?php woocommerce_show_product_loop_sale_flash(); ?> 
            </div>
            
              
              <div class="product__icon">
                <?php 

                    echo do_shortcode('[pure_wc_quickview]');

                    echo do_shortcode('[pure_wc_compare]');

                    echo do_shortcode('[pure_wc_wishlist]');
                    
                ?>

                 <?php  woocommerce_template_loop_add_to_cart();?>

                 <?php 
                 if( class_exists( 'TInvWL_Admin_TInvWL' ) ){
                     echo do_shortcode( '[ti_wishlists_addtowishlist]' );
                    }
                 ?>
              </div>
           </div>

           <div class="product__content">
              <h4 class="product__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h4>
              <div class="product__price">
                 <?php echo woocommerce_template_loop_price();?>
              </div>
              <?php if(!empty($rating)) : ?>
              <div class="product__rating">
                  <?php echo collax_kses($rating); ?> 
              </div> 
              <?php endif; ?>
           </div>
        </div>
        <?php
    }
}
add_action( 'woocommerce_before_shop_loop_item', 'collax_loop_product_thumbnail', 10 );
add_filter( 'pure_wc_compare_btn_html', 'gharry_compare_button_html', 10, 2 );
function gharry_compare_button_html( $output , $prodid ) {
    return $output = '<a href="#" class="icon-btn pure-wc-compare-btn  -' . esc_attr( $prodid['id'] ) . ' ' . get_option( 'woosq_button_class' ) . '" data-id="' . esc_attr( $prodid['id'] ) . '" data-effect="mfp-3d-unfold"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z"/>
  </svg></a>';
}

add_filter( 'pure_wc_quickview_btn_html', 'collax_woosq_button_html', 10, 2 );
function collax_woosq_button_html( $output , $prodid ) {
    return $output = '<a href="javascript:void(0)" class="icon-btn pure-wc-quickview-btn  -' . esc_attr( $prodid['id'] ) . ' ' . get_option( 'woosq_button_class' ) . '" data-id="' . esc_attr( $prodid['id'] ) . '" data-effect="mfp-3d-unfold"><i class="fal fa-eye"></i></a>';
}

add_filter( 'pure_wc_wishlist_btn_html', 'pure_wc_wishlist_btn_html', 10, 3 );
function pure_wc_wishlist_btn_html( $output , $prodid, $is_wishlisted ) {
    if( $is_wishlisted ){
        return $output = '<a href="#" class="icon-btn pure-wc-wishlist-btn added woosq-btn-' . esc_attr( $prodid ) . ' ' . get_option( 'woosq_button_class' ) . '" data-id="' . esc_attr( $prodid ) . '" data-effect="mfp-3d-unfold"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
        <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"/>
      </svg></a>';
    }else{
        return $output = '<a href="#" class="icon-btn pure-wc-wishlist-btn woosq-btn-' . esc_attr( $prodid ) . ' ' . get_option( 'woosq_button_class' ) . '" data-id="' . esc_attr( $prodid ) . '" data-effect="mfp-3d-unfold"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart" viewBox="0 0 16 16">
        <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
      </svg></a>';
    }
   
}

add_filter( 'pure_wc_wishlist_added_html', 'pure_wc_wishlist_added_html', 10, 2 );
function pure_wc_wishlist_added_html( $output , $prodid ) {
    return $output = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
    <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"/>
  </svg>';
}



// add to cart button
function woocommerce_template_loop_add_to_cart( $args = array() ) {
    global $product;

        if ( $product ) {
            $defaults = array(
                'quantity'   => 1,
                'class'      => implode(
                    ' ',
                    array_filter(
                        array(
                            'cart-button icon-btn',
                            'product_type_' . $product->get_type(),
                            $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
                            $product->supports( 'ajax_add_to_cart' ) && $product->is_purchasable() && $product->is_in_stock() ? 'ajax_add_to_cart' : '',
                        )
                    )
                ),
                'attributes' => array(
                    'data-product_id'  => $product->get_id(),
                    'data-product_sku' => $product->get_sku(),
                    'aria-label'       => $product->add_to_cart_description(),
                    'rel'              => 'nofollow',
                ),
            );

            $args = wp_parse_args( $args, $defaults );

            if ( isset( $args['attributes']['aria-label'] ) ) {
                $args['attributes']['aria-label'] = wp_strip_all_tags( $args['attributes']['aria-label'] );
            }
        }

        echo sprintf( '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
            esc_url( $product->add_to_cart_url() ),
            esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
            esc_attr( isset( $args['class'] ) ? $args['class'] : 'cart-button icon-btn' ),
            isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
            '<i class="fal fa-shopping-cart"></i>'
        );
}


/**
 * [collax_woo_rating description]
 * @return [type] [description]
 */


function collax_woo_rating() {
    global $product;
    $rating = $product->get_average_rating();
    $review = 'Rating ' . $rating . ' out of 5';
    $html   = '';
    $html   .= '<div class="details-rating mb-10" title="' . $review . '">';
    for ( $i = 0; $i <= 4; $i ++ ) {
        if ( $i < floor( $rating ) ) {
            $html .= '<i class="fas fa-star"></i>';
        } else {
            $html .= '<i class="far fa-star"></i>';
        }
    }
    $html .= '<span>( ' . $rating . ' out of 5 )</span>';
    $html .= '</div>';
    print collax_woo_rating_html( $html );
}

function collax_woo_rating_html( $html ) {
    return $html;
}


function collax_woo_rating_icon() {
    global $product;
    $rating = $product->get_average_rating();
    $review = 'Rating ' . $rating . ' out of 5';
    $html   = '';
    $html   .= '<div class="tpshopitem__review" title="' . $review . '">';
    for ( $i = 0; $i <= 4; $i ++ ) {
        if ( $i < floor( $rating ) ) {
            $html .= '<i class="fas fa-star"></i>';
        } else {
            $html .= '<i class="far fa-star"></i>';
        }
    }
    $html .= '</div>';
    print collax_woo_rating_html( $html );
}

add_action( 'wp_footer' , 'custom_quantity_fields_script' );
function custom_quantity_fields_script(){
    ?>
    <script type='text/javascript'>
    jQuery( function( $ ) {
        if ( ! String.prototype.getDecimals ) {
            String.prototype.getDecimals = function() {
                var num = this,
                    match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
                if ( ! match ) {
                    return 0;
                }
                return Math.max( 0, ( match[1] ? match[1].length : 0 ) - ( match[2] ? +match[2] : 0 ) );
            }
        }
        // Quantity "plus" and "minus" buttons
        $( document.body ).on( 'click', '.plus, .minus', function() {
            var $qty        = $( this ).closest( '.quantity' ).find( '.qty'),
                currentVal  = parseFloat( $qty.val() ),
                max         = parseFloat( $qty.attr( 'max' ) ),
                min         = parseFloat( $qty.attr( 'min' ) ),
                step        = $qty.attr( 'step' );

            // Format values
            if ( ! currentVal || currentVal === '' || currentVal === 'NaN' ) currentVal = 0;
            if ( max === '' || max === 'NaN' ) max = '';
            if ( min === '' || min === 'NaN' ) min = 0;
            if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN' ) step = 1;

            // Change the value
            if ( $( this ).is( '.plus' ) ) {
                if ( max && ( currentVal >= max ) ) {
                    $qty.val( max );
                } else {
                    $qty.val( ( currentVal + parseFloat( step )).toFixed( step.getDecimals() ) );
                }
            } else {
                if ( min && ( currentVal <= min ) ) {
                    $qty.val( min );
                } else if ( currentVal > 0 ) {
                    $qty.val( ( currentVal - parseFloat( step )).toFixed( step.getDecimals() ) );
                }
            }

            // Trigger change event
            $qty.trigger( 'change' );
        });
    });
    </script>
    <?php
}