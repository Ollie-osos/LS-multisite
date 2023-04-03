<?php
/**
 * Displays the header
 *
 * @package WordPress
 * @subpackage Laurence_Simons_2022
 * @since Laurence Simons 2022 1.0
 */


$header = get_field('header_default');
$img = $header['featured_image'];
$text = $header['introduction'];
$color = $header['background_circles_color'];
$effects = $header['background_effects'];
$display_pattern = $header['display_pattern'];
$pattern_position = $header['pattern_position'];

$display_cta = $header['display_cta'];
$cta_effect = $header['cta_type'];
$cta_link = $header['cta_link'];
$cta_target = $header['cta_target'];
$cta_action = $header['cta_action'];

?>

<div class="padding-y-180 padding-md-top-120 padding-x-120 padding-md-x-30 padding-xs-x-10 widget-intro bg-charcoal block-animation">
	<div class="columns block-content">
        <div class="column is-two-thirds">
            <?php the_title( '<h1>', '<span class="text-lemon">.</span></h1>' ); ?>
            <p><?php echo $text; ?></p>
            <?php if($display_cta): ?>
                <?php if($cta_effect == 'scroll'): ?>
                    <a href="#<?php echo $cta_target; ?>" class="no-animation button is-secondary"><?php echo $cta_action; ?></a>
                <?php else: ?>
                    <a href="<?php echo $cta_link; ?>" class="no-animation button is-secondary"><?php echo $cta_action; ?></a>
                <?php endif ?>
            <?php endif ?>
        </div>


        <div class="column image-with-pattern">
            <div class="img-rounded img--single bg-<?php echo $color; ?> border-<?php echo $color; ?>">
                <?php if($img['url']): ?>
                    <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['title']; ?>">
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/default-image-light.png" alt="Laurence Simons">
                <?php endif; ?>
            </div>
            <?php if($display_pattern): ?>
            <div class="pattern pattern-<?php echo $color; ?> <?php echo $pattern_position; ?>">
                <?php get_template_part( 'template-parts/svg/pattern' ); ?>
            </div>
            <?php endif; ?>
        </div>

        <?php if($effects === 'circles-in-movment'): ?>
        <div class="circle circle-1 circle-<?php echo $color; ?>"></div>
        <div class="circle circle-2 circle-<?php echo $color; ?>"></div>
        <div class="circle circle-3 circle-<?php echo $color; ?>"></div>
        <?php elseif($effects === 'halftone-dots') : ?>
            <div class="halftoneDot halftoneDot-1">
                <img src="<?php echo get_template_directory_uri() ?>/assets/svg/halftone-dots.svg" alt="Laurence Simons">
            </div>
            <div class="halftoneDot halftoneDot-2">
                <img src="<?php echo get_template_directory_uri() ?>/assets/svg/halftone-dots.svg" alt="Laurence Simons">
            </div>
        <?php endif; ?>

	</div><!-- .columns -->
</div><!-- .widget-intro -->

