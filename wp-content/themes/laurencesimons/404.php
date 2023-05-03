<?php
/**
 * The template for displaying the 404 template in the Laurence Simons 2022 theme.
 *
 * @package WordPress
 * @subpackage Laurence_Simons_2022
 * @since Laurence Simons 2022 1.0
 */

get_header();

$color = 'lemon';

?>
    <div class="padding-y-180 padding-md-top-120 padding-sm-top-180 padding-x-120 padding-md-x-30 padding-xs-x-10 widget-intro bg-charcoal block-animation">
        <div class="columns block-content">

            <div class="column is-two-thirds">
                <h1><?php _e( 'Page Not Found', 'lss' ); ?></h1>
                <p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'lss' ); ?></p>
            </div>


            <div class="column image-with-pattern">
                <div class="img-rounded border-<?php echo $color; ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/LSS-cube-min.png" alt="Page not found">
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
            <div class="margin-bottom-10">
                <p class="text-center">Please click on the link below to return back home<span class="lemon-text">.</span></p>
            </div>

            <!-- CTA -->
            <div class="padding-top-30 is-flex is-justify-content-center is-align-items-center">
                <a href="/" class="button is-primary">Return Home</a>
            </div>
        </div>
    </div>
</div>



<?php get_footer();
