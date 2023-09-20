<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package collax
 */

get_header();

$blog_column = is_active_sidebar( 'blog-sidebar' ) ? 8 : 12;

$collax_singleblog_social = get_theme_mod('collax_singleblog_social', false);
$tag_col = $collax_singleblog_social ? '' : '';

?>

<section class="tp-blog-area postbox__area pt-120 pb-120">
    <div class="container">
        <div class="row">
			<div class="col-lg-<?php print esc_attr( $blog_column );?>">
				<div class="postbox__wrapper postbox__details">
					<?php
					while ( have_posts() ):
					the_post();

					get_template_part( 'template-parts/content', get_post_format() );

					?>

							<div class="postbox__social-wrapper pt-40">
                              <div class="row">

							  	<?php print collax_get_tag();?>

								<?php collax_blog_social_share(); ?>

                              </div>
                           </div>
			
					<?php

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ):
							comments_template();
						endif;

						endwhile; // End of the loop.
					?>
				</div>
			</div>
			<?php if ( is_active_sidebar( 'blog-sidebar' ) ): ?>
		        <div class="col-xxl-4 col-xl-4 col-lg-4">
		        	<div class="blog__sidebar sidebar__wrapper">
						<?php get_sidebar();?>
	            	</div>
	            </div>
			<?php endif;?>
		</div>
	</div>
</section>

<?php
get_footer();