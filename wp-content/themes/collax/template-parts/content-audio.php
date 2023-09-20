<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package collax
 */

    $collax_audio_url = function_exists( 'get_field' ) ? get_field( 'fromate_style' ) : NULL;
    if ( is_single() ): 
?>

<article id="post-<?php the_ID();?>" <?php post_class( 'postbox__item format-audio transition-3' );?>>
    <div class="postbox__content">

        <?php if ( !empty( $collax_audio_url ) ): ?>
        <div class="postbox__thumb postbox__audio w-img p-relative">
            <?php echo wp_oembed_get( $collax_audio_url ); ?>
        </div>
        <?php endif;?>

        
        <!-- blog meta -->
        <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>

        <h3 class="postbox__title">
            <?php the_title();?>
        </h3>

        <div class="postbox__text">
            <?php the_content();?>
            <?php
                wp_link_pages( [
                    'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'collax' ),
                    'after'       => '</div>',
                    'link_before' => '<span class="page-number">',
                    'link_after'  => '</span>',
                ] );
            ?>
        </div>

    </div>
</article>

    <?php else: ?>

        <article id="post-<?php the_ID();?>" <?php post_class( 'postbox__item format-audion mb-50 transition-3' );?>>

            <?php if ( !empty( $collax_audio_url ) ): ?>
            <div class="postbox__thumb postbox__audio w-img p-relative">
                <?php echo wp_oembed_get( $collax_audio_url ); ?>
            </div>
            <?php endif;?>

            <div class="postbox__content">
                <!-- blog meta -->
                <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>
                
                
                <h3 class="postbox__title">
                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                </h3>

                <div class="postbox__text">
                    <?php the_excerpt();?>
                </div>
                <!-- blog btn -->
                <?php get_template_part( 'template-parts/blog/blog-btn' ); ?>
            </div>
        </article>

<?php
endif;?>


