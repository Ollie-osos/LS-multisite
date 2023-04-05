<?php

/**
 * Header file for the Laurence Simons 2022 WordPress default theme.
 *
 * @link
 *
 * @package WordPress
 * @subpackage Laurence_Simons_2022
 * @since Laurence Simons 2022 1.0
 */

$white_logo = get_field('white_logo', 'option');
$black_logo = get_field('black_logo', 'option');

$header_logo_option = get_field('header_logo_option', 'option');
$menu_logo_option = get_field('menu_logo_option', 'option');

$header_logo;
$menu_logo;

if ($header_logo_option == 'white') {
    $header_logo = $white_logo;
} else {
    $header_logo = $black_logo;
}

if ($menu_logo_option == 'white') {
    $menu_logo = $white_logo;
} else {
    $menu_logo = $black_logo;
}

extract($args);
$header_var;

if ($header_var == 'black') {
    $header_logo = $black_logo;
} else {
    $header_logo = $white_logo;
}

?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--    Tracking Code from LSS | CODE 1 -->
    <!--     recommended version of our tracking code delivering optimum performance -->
    <!--     allows you to track all visits to your website whilst still allowing a website visitor to opt-in to using cookies as part of our tracking technology. If the visitor does not opt-in to using cookies, our tracking will still capture the visit without dropping a cookie -->
    <script type="text/javascript" src=https://secure.perk0mean.com/js/168911.js></script>
    <noscript><img src=https://secure.perk0mean.com/168911.png style="display:none;" /></noscript>
    <!--    end -->

    <?php wp_head(); ?>
    <!-- <link rel="stylesheet" id="lss-style-css" href="https://laurencesimons.com/wp-content/themes/laurencesimons/style.css?ver=1.0" media="all"> -->

</head>

<body>

    <?php wp_body_open(); ?>

    <header id="site-header" class="container">
        <nav class="navbar is-flex is-justify-content-space-between is-align-items-center" aria-label="main navigation">

            <div id="navbar-brand" class="navbar-brand">
                <?php if ($header_logo) : ?>
                    <a class="img-main-logo" href="/">
                        <img id="navbar-logo" src="<?php echo $header_logo['sizes']['large']; ?>" alt="<?php echo $header_logo['title']; ?>">
                    </a>
                <?php endif; ?>
            </div>

            <div class="navbar-end is-flex is-align-items-center">
                <!-- language selector -->
                <div class="navbar-item is-block" width="150px">
                    <div class="is-flex">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/map.svg" alt="map icon">
                        <select id="select-menu" 
                        style="
                            background-color: #2B2B2B;
                            color: #F0F050;
                            box-shadow: transparent;
                            border-radius: 20px;
                            -webkit-appearance: none;
                            padding: 9px 12px;">
                            <option selected value="#">English</option>
                            <option value="https://laurencesimons.de">Deutsch</option>
                        </select>
                    </div>

                </div>
                <?php // Check whether the header search is activated in the customizer.
                $enable_header_contactCTA = get_theme_mod('enable_header_contact_CTA', true);
                if (true === $enable_header_contactCTA) {
                ?>
                    <div class="navbar-item is-block-desktop-only">
                        <a id="btn-contact" href="/contact-us" class="button is-primary">Contact us</a>
                    </div>
                    <div class="navbar-item is-block-mobile-only">
                        <a id="btn-contact" href="/contact-us" class="button is-primary has-icon"><ion-icon name="chatbubbles-outline"></ion-icon></a>
                    </div>
                <?php } ?>

                <?php // Check whether the header search is activated in the customizer.
                $enable_header_search = get_theme_mod('enable_header_search', true);
                if (true === $enable_header_search) {
                ?>
                    <div class="navbar-item">
                        <a id="btn-toggleSearch" href="javascript:void(0)" class="button has-icon is-secondary" data-target="search-overlay" aria-label="menu" aria-expanded="false">
                            <ion-icon name="search-outline"></ion-icon>
                        </a>
                    </div>
                    <?php get_template_part(
                        'template-parts/overlay-search',
                        null,
                        array(
                            'menu_logo' => $menu_logo['sizes']['large'],
                            'header_logo' => $header_logo['sizes']['large']
                        )
                    ); ?>
                <?php } ?>



                <?php // Check whether the header search is activated in the customizer.
                $enable_header_nav = get_theme_mod('enable_header_navigation', true);
                if (true === $enable_header_nav) {
                ?>
                    <div class="navbar-item">
                        <a id="btn-toggleNav" href="javascript:void(0)" class="button has-icon is-secondary" data-target="nav-overlay" aria-label="menu" aria-expanded="false">
                            <ion-icon name="menu-outline"></ion-icon>
                        </a>
                    </div>

                    <?php get_template_part(
                        'template-parts/overlay-menu',
                        null,
                        array(
                            'menu_logo' => $menu_logo['sizes']['large'],
                            'header_logo' => $header_logo['sizes']['large']
                        )
                    ); ?>

                <?php } ?>

            </div>
        </nav>
    </header><!-- #site-header -->

    <script>
        (function($) {
            $(document).ready(function() {
                $('.sub-menu').hide();
                $('.menu-item-has-children').click(function() {
                    $(this).toggleClass('open');
                    $(".sub-menu", this).slideToggle();
                });
                const selectMenu = document.getElementById('select-menu');

                selectMenu.addEventListener('change', (event) => {
                    const url = event.target.value;
                    if (url) {
                        window.location.href = url;
                    }
                });

            });
        })(jQuery);
    </script>

    <main>

        <section class="container" id="page-<?php the_ID(); ?>">
            <!-- ONE PAGE BODY -->