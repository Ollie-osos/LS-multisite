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

<?php get_footer();
