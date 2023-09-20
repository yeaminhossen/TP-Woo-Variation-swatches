<?php

/**
 * Template part for displaying post btn
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package collax
 */

$collax_blog_btn = get_theme_mod( 'collax_blog_btn', 'Read More' );
$collax_blog_btn_switch = get_theme_mod( 'collax_blog_btn_switch', true );

?>

<?php if ( !empty( $collax_blog_btn_switch ) ): ?>
<div class="post__button">
    <a href="<?php the_permalink();?>" class="tp-btn-yellow"><?php print esc_html( $collax_blog_btn );?></a>
</div>
<?php endif;?>