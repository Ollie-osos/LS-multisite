<?php
/**
 * Template Name: Template with video header
 * Template Post Type: home page, page
 *
 * @package WordPress
 * @subpackage Laurence_Simons_2022
 * @since Laurence Simons 2022 1.0
 */

get_header();
?>

<?php get_template_part( 'template-parts/header/entry-header-video'); ?>

<?php include(locate_template('template-parts/blocks/page-builder.php')); ?>

<?php get_footer(); ?>
