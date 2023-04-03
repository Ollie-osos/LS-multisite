<?php
/**
 * Template Name: Template for global offices
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Laurence_Simons_2022
 * @since Laurence Simons 2022 1.0
 */

get_header();

?>

<?php get_template_part( 'template-parts/header/entry-header-multiple-images' ); ?>

<?php if( have_rows('page_builder_offices_before') ):
    while ( have_rows('page_builder_offices_before') ) : the_row();
        include(locate_template('template-parts/blocks/builder.php'));
    endwhile;
    ?>
<?php else : ?>
    <!-- NO PAGE COMPONENTS -->
<?php endif; ?>

<div class="padding-y-180 padding-x-90 padding-sm-x-30 padding-xs-x-10 bg-purple-80">

    <div class="columns">
        <?php get_template_part( 'template-parts/select-offices', 'archive', array('id' => 'archive')); ?>
    </div>

</div>

<?php include(locate_template('template-parts/blocks/page-builder.php')); ?>

<?php get_footer(); ?>
