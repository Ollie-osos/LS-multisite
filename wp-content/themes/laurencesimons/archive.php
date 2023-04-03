<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress

 */

get_header();
?>

    <div class="padding-y-180 padding-md-top-120 padding-x-120 padding-md-x-30 padding-xs-x-10 widget-intro bg-charcoal block-animation">
        <div class="columns block-content">
            <div class="column is-two-thirds">
                <?php the_archive_title( '<h1>', '<span class="text-lemon">.</span></h1>' ); ?>
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


<?php if (have_posts()) : ?>
    <div class="padding-y-180 padding-x-90 padding-sm-x-30 padding-xs-x-10 bg-purple animation-2-circles">

        <div class="is-flex is-flex-wrap-wrap is-justify-content-space-around">
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <div class="widget-card card-xs margin-bottom-30" id="post-<?php the_ID(); ?>">
                    <div class="img-landscape">
                        <img src="<?php echo get_the_post_thumbnail()?>" alt="employees">
                    </div>

                    <h3 class="padding-bottom-10">
                        <?php echo truncated(get_the_title(), 45); ?>
                    </h3>
                    <a href="<?php  echo get_permalink();  ?>" class="button has-icon is-secondary">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>

        <div class="circle circle-1 circle-white"></div>
        <div class="circle circle-2 circle-white"></div>
    </div>
<?php endif ?>


<?php get_footer();
