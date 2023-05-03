<?php
/**
 * Template Name: Full width template
 * Template Post Type: home page, page
 *
 * @package WordPress
 * @subpackage Laurence_Simons_2022
 * @since Laurence Simons 2022 1.0
 */

get_header();
?>
<div class="padding-y-180 padding-md-top-120 padding-sm-top-180 padding-x-120 padding-md-x-30 padding-xs-x-10 widget-intro bg-charcoal block-animation">
    <div class="columns block-content">
        <div class="column is-two-thirds">
            <?php the_title( '<h1>', '<span class="text-lemon">.</span></h1>' ); ?>
        </div>
        <div class="column image-with-pattern">

            <div class="img-rounded border-<?php echo $color; ?>">
                <?php if(get_the_post_thumbnail()): ?>
                    <?php the_post_thumbnail(); ?>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/default-image-light.png" alt="Laurence Simons">
                <?php endif; ?>
            </div>
            <div class="pattern pattern-<?php echo $color; ?> <?php echo $pattern_position; ?>">
                <?php get_template_part( 'template-parts/svg/pattern' ); ?>
            </div>
        </div>

        <div class="circle circle-1 circle-<?php echo $color; ?>"></div>
        <div class="circle circle-2 circle-<?php echo $color; ?>"></div>
        <div class="circle circle-3 circle-<?php echo $color; ?>"></div>

    </div><!-- .columns -->
</div><!-- .widget-intro -->

<div class="padding-y-180 padding-x-90 padding-sm-x-30 padding-xs-x-10 bg-purple animation-2-circles">
    <div class="columns is-centered padding-x-180 padding-md-30 padding-sm-x-0">
        <div class="content">
            <div class="column add-radius-to-border-images">
                <?php
                if ( have_posts() ) {

                    while ( have_posts() ) {
                        the_post();
                        the_content();
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div class="circle circle-1 circle-white"></div>
    <div class="circle circle-2 circle-white"></div>
</div>

<?php include(locate_template('template-parts/blocks/page-builder.php')); ?>

<?php get_footer(); ?>
