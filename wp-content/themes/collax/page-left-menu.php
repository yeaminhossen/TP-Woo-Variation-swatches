<?php

/**
* Template Name: Page Left Menu
 * @package sectox
*/

get_header();

?>

<div class="corporate-layout-right">
	<?php
		if ( have_posts() ):
			while ( have_posts() ): the_post();
				get_template_part( 'template-parts/content', 'page' );
			endwhile;
		else:
			get_template_part( 'template-parts/content', 'none' );
		endif;
	?>
</div>

<?php
get_footer();
