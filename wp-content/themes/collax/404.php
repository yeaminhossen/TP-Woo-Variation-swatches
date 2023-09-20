<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package collax
 */

get_header();
?>


<section class="error__area tp-404-area tp-404-circle sky-bg pt-200 pb-150 fix">
   <div class="container">
      <div class="row">
         <div class="offset-lg-1 col-lg-10">

            <?php 
               $collax_404_bg = get_theme_mod('collax_404_bg',get_template_directory_uri() . '/assets/img/contact/404.png');
               $collax_error_title = get_theme_mod('collax_error_title', __('Page not found', 'collax'));
               $collax_error_link_text = get_theme_mod('collax_error_link_text', __('Back To Home', 'collax'));
               $collax_error_desc = get_theme_mod('collax_error_desc', __('Oops! The page you are looking for does not exist. It might have been moved or deleted.', 'collax'));
            ?>
            <div class="error__item text-center">
               <?php if(!empty($collax_404_bg)) : ?>
                  <div class="tp-404-thumb d-flex justify-content-center align-items-center z-index-1">
                     <img src="<?php echo esc_url($collax_404_bg); ?>" alt="<?php print esc_attr__('Error 404','collax'); ?>">
                  </div>
               <?php else : ?>
                  <h2 class="error_main_title"><?php echo esc_html__('404', 'collax');?></h2>
               <?php endif; ?>
               <div class="error__content">
                  <h3 class="error__title"><?php print esc_html($collax_error_title);?></h3>
                  <p><?php print esc_html($collax_error_desc);?></p>
                  <a href="<?php print esc_url(home_url('/'));?>" class="tp-btn"><?php print esc_html($collax_error_link_text);?></a>
               </div>
            </div>

         </div>
      </div>
   </div>
</section>


<?php
get_footer();