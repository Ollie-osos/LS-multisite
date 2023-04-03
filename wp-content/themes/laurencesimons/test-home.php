<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Laurence_Simons_2022
 * @since Laurence Simons 2022 1.0
 */


get_header();

?>

    <!-- ONE PAGE BODY -->
    <section class="container">
        <div class="padding-y-180 padding-md-top-120 padding-x-120 padding-md-x-30 padding-xs-x-10 widget-intro bg-charcoal block-animation">
            <div class="img-container">
                <iframe src="https://player.vimeo.com/video/724796716?h=d96129c9cf&?api=1&background=1&autoplay=1&loop=1&muted=1" width="640" height="360" frameborder="0" allow="autoplay; loop; fullscreen; picture-in-picture" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <a href="#getInTouch" class="button is-secondary has-icon is-animated">
                <ion-icon name="arrow-down-outline"></ion-icon>
            </a>
        </div>

        <div class="padding-y-180 padding-x-90 padding-sm-x-30 padding-xs-x-10 bg-purple-80 widget-text" id="getInTouch">
            <div class="columns is-centered padding-x-180 padding-md-30 padding-sm-x-0">
                <div class="content">
                    <p class="subtext text-center margin-bottom-30">
                        Laurence Simons draws on over 30 years of industry-leading experience. Our global team are leading the way, fuelling a fresh approach that enriches both the lives of our clients and candidates.
                        <br>
                        <br>
                        We're making some improvements to our website; if you'd like to get in touch with a team member, please click the button below.
                    </p>
                    <a href="mailto:hello@laurencesimons.com" class="button is-primary mx-auto">Get in touch</a>
                </div>
            </div>
        </div>
    </section>



<?php get_footer();
