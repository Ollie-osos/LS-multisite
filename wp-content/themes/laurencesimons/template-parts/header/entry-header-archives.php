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


$img = $header['fearured_image'];
$text = $header['introduction'];
$color = $header['background_circles_color'];
$pattern_position = $header['pattern_position'];



?>

<div class="padding-y-180 padding-md-top-120 padding-x-120 padding-md-x-30 padding-xs-x-10 widget-intro bg-charcoal block-animation">
	<div class="columns block-content">
        <div class="column is-two-thirds">
            <h1><?php echo $title; ?><span class="lemon-text">.</span></h1>
            <p><?php echo $text; ?></p>
        </div>


        <div class="column image-with-pattern">
            <div class="img-rounded img--single bg-<?php echo $color; ?> border-<?php echo $color; ?>">
                <?php if($img['url']): ?>
                    <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['title']; ?>">
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/default-image-light.png" alt="Laurence Simons">
                <?php endif; ?>
            </div>
            <div class="pattern pattern-<?php echo $color; ?> <?php echo $pattern_position; ?>">
                <?php get_template_part( 'template-parts/svg/pattern' ); ?>
            </div>
        </div>

        <div class="circle circle-1 circle-<?php echo $color; ?>"></div>
        <div class="circle circle-2 circle-<?php echo $color; ?>"></div>
        <div class="circle circle-3 circle-<?php echo $color; ?>"></div>



	</div><!-- .columns -->
</div><!-- .widget-intro -->

