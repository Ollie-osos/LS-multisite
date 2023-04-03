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

    <div class="padding-y-10 padding-x-90 padding-sm-x-30 padding-xs-x-10 bg-purple-80">
        <div class="columns is-centered padding-x-0">
            <div class="content">
                <div class="column add-radius-to-border-images is-flex flex-wrap-wrap employee-contact">
                    <?php if(get_field('telephone')) { ?>
                        <div>
                            <a href="tel:+<?php echo get_field('telephone'); ?>">
                                <ion-icon name="call-outline"></ion-icon> <?php echo get_field('telephone'); ?></a>
                        </div>
                    <?php } ?>
                    <?php if(get_field('email')) { ?>
                        <div>
                            <a href="mailto:<?php echo get_field('email'); ?>">
                                <ion-icon name="mail-outline"></ion-icon> <?php echo get_field('email'); ?></a>
                        </div>
                    <?php } ?>
                    <?php if(get_field('linked_in')) { ?>
                        <div>
                            <a href="<?php echo get_field('linked_in'); ?>">
                                <ion-icon name="logo-linkedin"></ion-icon></a>
                        </div>
                    <?php } ?>
                    <?php if(get_field('twitter')) { ?>
                        <div>
                            <a href="<?php echo get_field('twitter'); ?>">
                                <ion-icon name="logo-twitter"></ion-icon> </a>
                        </div>
                        <br><?php } ?>
                    <br><p><ion-icon name="location-outline"></ion-icon> <?php echo get_field('location'); ?></p>
                </div>
            </div>
        </div>
    </div>

<?php include(locate_template('template-parts/blocks/page-builder.php')); ?>

<?php get_footer();
