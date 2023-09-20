<?php
/************************************************************
## Setup Wizard
*************************************************************/
require_once get_parent_theme_file_path( '/inc/merlin/vendor/autoload.php' );
require_once get_parent_theme_file_path( '/inc/merlin/class-merlin.php' );
require_once get_parent_theme_file_path( '/inc/merlin/merlin-config.php' );

/************************************************************
## Setup Wizard Local Import
*************************************************************/
function collax_merlin_import_files() {
	return array(
		array(
			'import_file_name'           => 'Demo Import',
			'local_import_file'            => trailingslashit( get_template_directory() ) .'sample-data/contents-demo.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'sample-data/widget-settings.json',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'sample-data/customizer-data.dat',
			'import_preview_image_url'   => 'https://weblearnbd.net/wp/collax/wp-content/uploads/2022/09/port-1-1.jpg',
			'import_notice'              => __( 'A special note for this import.', 'collax' ),
			'preview_url'                => 'https://weblearnbd.net/wp/collax/',
		),
	);
}
add_filter( 'merlin_import_files', 'collax_merlin_import_files' );

/************************************************************
## Setup Wizard After Import
*************************************************************/
function collax_merlin_after_import_setup() {
	// Assign menus to their locations.
	$main_menu 	  = get_term_by( 'name', 'Main Menu', 'nav_menu' );

	set_theme_mod(
		'nav_menu_locations', array(
			'main-menu' 	     => $main_menu->term_id,
		)
	);

	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Home' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );

	add_action( 'init', function () {
        $query_posts = new WP_Query( array(
            'post_type' => 'product',
        ));
        while ( $query_posts->have_posts() ) {
            $query_posts->the_post();
            wp_update_post( $post );
        }
        wp_reset_postdata();
    });

    if ( did_action( 'elementor/loaded' ) ) {
        // disable some default elementor global settings after setup theme
        update_option( 'elementor_disable_color_schemes', 'yes' );
        update_option( 'elementor_disable_typography_schemes', 'yes' );
        update_option( 'elementor_global_image_lightbox', 'yes' );
    }
    if ( class_exists( 'woocommerce' ) ) {
        update_option( 'woocommerce_shop_page_id', '13' );
        update_option( 'woocommerce_cart_page_id', '14' );
        update_option( 'woocommerce_checkout_page_id', '15' );
        update_option( 'woocommerce_myaccount_page_id', '16' );
    }


}
add_action( 'merlin_after_all_import', 'collax_merlin_after_import_setup' );

add_filter( 'woocommerce_prevent_automatic_wizard_redirect', '__return_true' );

add_action('init', 'do_output_buffer'); function do_output_buffer() { ob_start(); }
?>