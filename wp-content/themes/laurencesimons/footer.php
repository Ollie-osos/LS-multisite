<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link
 *
 * @package WordPress
 * @subpackage Laurence_Simons_2022
 * @since Laurence Simons 2022 1.0
 */

$has_footer_menu = has_nav_menu( 'footer' );
$has_social_menu = has_nav_menu( 'social' );

$has_sidebar_1 = is_active_sidebar( 'sidebar-1' );
$has_sidebar_2 = is_active_sidebar( 'sidebar-2' );

$white_logo = get_field('white_logo', 'option');
$black_logo = get_field('black_logo', 'option');
$footer_logo_option = get_field('footer_logo_option', 'option');

$footer_links_title = get_field('footer_links_title', 'option');
$footer_mailing_title = get_field('footer_mailing_title', 'option');
$footer_mailing_copy = get_field('footer_mailing_copy', 'option');

$footer_logo;
if($footer_logo_option == 'white'){
    $footer_logo = $white_logo;
}else{
    $footer_logo = $black_logo;
}

?>


<?php if ( get_field('display_news_list') ) : ?>
    <?php get_template_part( 'template-parts/footer/news-list', 'footer'); ?>
<?php endif; ?>

</section>

<footer id="site-footer" class="container bg-charcoal">
    <div class="padding-y-90 padding-x-90 padding-xs-x-10 padding-md-x-10 ">
        <?php if ( $footer_logo ) : ?>
            <div class="columns">
                <div class="column">
                    <div class="img-sm" style="height: 75px;">
                        <a href="/">
                            <img src="<?php echo $footer_logo['sizes']['large']; ?>" alt="<?php echo $footer_logo['title']; ?>">
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>



        <div class="columns">

            <?php get_template_part( 'template-parts/select-offices', 'footer', array('id' => 'footer')); ?>

            <?php get_template_part( 'template-parts/list-socials', 'footer', array()); ?>

            <?php if($has_footer_menu): ?>
                <div class="site-footer-links column is-3" aria-label="<?php esc_attr_e( 'Footer', 'lss' ); ?>">
                    <h5><?php echo $footer_links_title; ?></h5>
                    <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'Quick links',
                            'container' => '',
                            'theme_location' => 'footer',
                            'items_wrap' => '<ul class="list-unstyled">%3$s</ul>'
                        )
                    ); ?>
                </div>
            <?php endif; ?>

            <?php if($has_sidebar_2): ?>
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
            <?php endif; ?>

            <div class="site-footer-mail column is-3" aria-label="">
                <h5><?php echo $footer_mailing_title; ?></h5>
                <p><?php echo $footer_mailing_copy; ?></p>
                <?php echo do_shortcode('[eshot-form id="1"]'); ?>
            </div>
            <script>
                document.getElementById('esEmail_0').placeholder='your email';
            </script>
        </div>




        <div class="columns copyrights">
            <div class="column">
                <small class="margin-right-30">All content copyrighted © <?php bloginfo( 'name' ); ?>
                    <?php
                    echo date_i18n(
                    /* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
                        _x( 'Y', 'copyright date format', 'lss' )
                    );
                    ?>
                </small>
            </div>
        </div>
        <div class="columns madeBy">
            <div class="column">
                <small>
                    Made with <span><ion-icon name="heart-outline"></ion-icon></span> by <a href="https://www.auroraagency.uk/">Aurora</a>
                </small>
            </div>
        </div>
    </div>

</footer><!-- #site-footer -->

</main><!-- main -->


<?php wp_footer(); ?>

<script type="text/javascript"> _linkedin_partner_id = "4494082"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script><script type="text/javascript"> (function(l) { if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])}; window.lintrk.q=[]} var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(window.lintrk); </script> <noscript> <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=4494082&fmt=gif" /> </noscript>
</body>
</html>
