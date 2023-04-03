<?php
/**
 *
 * Template Name: Page Builder
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package WordPress
 * @subpackage Laurence_Simons_2022
 * @since Laurence Simons 2022 1.0
 */


get_header();

?>
<?php get_template_part( 'template-parts/header/entry-header' ); ?>

<?php include(locate_template('template-parts/blocks/page-builder.php')); ?>


    <div class="padding-y-90 padding-x-90 padding-sm-x-30 padding-xs-x-10 widget-text bg-purple-80">
        <div class="columns is-centered padding-x-180 padding-md-30 padding-sm-x-0">
            <div class="content">

                <!-- HEADING -->
                <div class="margin-bottom-10">
                    <h3 class="text-center">If you're interested in this position, click the link below to apply<span class="lemon-text">.</span></h3>
                </div>

                <!-- CTA -->
                    <div class="padding-top-30 is-flex is-justify-content-center is-align-items-center">
                        <a href="mailto:careers@laurencesimons.com?subject=<?php the_title(); ?>" class="button is-primary">Apply</a>
                    </div>
            </div>
        </div>
    </div>


<?php get_footer();
