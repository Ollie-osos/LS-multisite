<?php
/**
 * Displays search results
 *
 * @package WordPress
 * @subpackage Laurence_Simons_2022
 * @since Laurence Simons 2022 1.0
 */

get_header();

$color = 'lemon';

?>
    <div class="padding-y-180 padding-md-top-120 padding-x-120 padding-md-x-30 padding-xs-x-10 widget-intro bg-charcoal block-animation">
        <div class="columns block-content">
            <div class="column is-two-thirds">

                <?php if ( have_posts() ) : ?>
                    <h1>
                        <?php _e( 'Search results for: ', 'lss' ); ?></h1>
                <?php else : ?>
                    <h1>
                        <?php _e( 'No result for: ', 'lss' ); ?></h1>
                <?php endif ?>
                <b><?php echo get_search_query(); ?></b>

            </div>


            <div class="column image-with-pattern">
                <div class="img-rounded border-<?php echo $color; ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/LSS-cube-min.png" alt="Laurence Simons">
                </div>
                <div class="pattern pattern-<?php echo $color; ?> top-right">
                    <?php get_template_part( 'template-parts/svg/pattern' ); ?>
                </div>
            </div>

            <div class="circle circle-1 circle-<?php echo $color; ?>"></div>
            <div class="circle circle-2 circle-<?php echo $color; ?>"></div>
            <div class="circle circle-3 circle-<?php echo $color; ?>"></div>

        </div><!-- .columns -->
    </div><!-- .widget-intro -->

    <div class="padding-y-90 padding-x-90 padding-sm-x-30 padding-xs-x-10 widget-text bg-purple-80">
        <div class="columns is-centered padding-x-180 padding-md-30 padding-sm-x-0">
            <div class="content">

                <!-- HEADING -->
                <div>
                    <p class="text-center"><?php
                        printf(
                            esc_html(
                            /* translators: %d: The number of search results. */
                                _n(
                                    'We found %d result associated to your search.',
                                    'We found %d results associated to your search.',
                                    (int) $wp_query->found_posts,
                                    'lss'
                                )
                            ),
                            (int) $wp_query->found_posts
                        );
                        ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="padding-y-90 padding-x-90 padding-sm-x-30 padding-xs-x-10 widget-text bg-purple">

        <?php if ( have_posts() ) : ?>
            <div class="is-flex is-flex-wrap-wrap is-justify-content-space-around">


                <?php while ( have_posts() ) : // Start the loop.

                    the_post();
                ?>

                    <?php get_template_part( 'template-parts/content/content'); ?>

                <?php endwhile; // End the loop. ?>


            </div>
        <?
        // Previous/next page navigation.
        // lss_the_posts_navigation();
        // If no content, include the "No posts found" template.
        else : ?>

            <div class="columns is-centered padding-x-180 padding-md-30 padding-sm-x-0">
                <div class="content">
                    <!-- HEADING -->
                    <div>
                        <p class="text-center">
                            No posts found, please try again.
                        </p>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    </div>
<?php get_footer();
