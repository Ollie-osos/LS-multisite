<?php
/**
 * Displays the header
 *
 * @package WordPress
 * @subpackage Laurence_Simons_2022
 * @since Laurence Simons 2022 1.0
 */

$title = $args['title'];
$header = $args['header'];


$img_1 = $header['image_1'];
$img_2 = $header['image_2'];
$img_3 = $header['image_3'];
$text = $header['introduction'];
$color = $header['background_circles_color'];

?>


<div class="padding-y-180 padding-md-top-120 padding-x-120 padding-md-x-30 padding-xs-x-10 widget-intro bg-charcoal block-animation tablet-heigh-xl"><!-- Need .bg-circles-purple-60 to be editable -->
    <div class="columns block-content">

        <div class="column is-two-thirds">
            <h1><?php echo $title; ?><span class="lemon-text">.</span></h1>
            <p><?php echo $text; ?></p>
        </div>

        <div class="column image-with-pattern">
            <div class="img-rounded i1 bg-<?php echo $color; ?> border-<?php echo $color; ?>">
                <?php if($image_1['url']): ?>
                    <img src="<?php echo $image_1['url']; ?>" alt="<?php echo $image_1['title']; ?>">
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/default-image-light.png" alt="Laurence Simons">
                <?php endif; ?>
            </div>
            <div class="pattern pattern-<?php echo $color; ?> p1">
                <?php get_template_part( 'template-parts/svg/pattern' ); ?>
            </div>
            <div class="img-rounded i2 bg-<?php echo $color; ?> border-<?php echo $color; ?>">
                <?php if($image_2['url']): ?>
                    <img src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['title']; ?>">
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/default-image-light.png" alt="Laurence Simons">
                <?php endif; ?>
            </div>
            <div class="pattern pattern-<?php echo $color; ?> p2">
                <?php get_template_part( 'template-parts/svg/pattern' ); ?>
            </div>
            <div class="img-rounded i3 bg-<?php echo $color; ?> border-<?php echo $color; ?>">
                <?php if($image_3['url']): ?>
                    <img src="<?php echo $image_3['url']; ?>" alt="<?php echo $image_3['title']; ?>">
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/default-image-light.png" alt="Laurence Simons">
                <?php endif; ?>
            </div>
            <div class="pattern pattern-<?php echo $color; ?> p3">
                <?php get_template_part( 'template-parts/svg/pattern' ); ?>
            </div>
        </div>

        <div class="circle circle-1 circle-<?php echo $color; ?>"></div>
        <div class="circle circle-2 circle-<?php echo $color; ?>"></div>
        <div class="circle circle-3 circle-<?php echo $color; ?>"></div>

    </div><!-- .columns -->
</div><!-- .widget-intro -->
<!-- .widget-intro -->

