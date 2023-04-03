<?php
/**
 * Displays video header
 *
 * @package WordPress
 * @subpackage Laurence_Simons
 * @since Laurence Simons 1.0
 */

$video = get_field('header_video');

$link = $video['video_link'];
$link = preg_replace('/src="(.+?)"/', 'src="$1?api=1&background=1&autoplay=1&loop=1&muted=1"', $link);

$display_cta = $video['display_cta'];
$cta_style = $video['cta_style'];
$cta_link = $video['cta_link'];
$cta_action = $video['cta_action'];
$cta_animation = $video['cta_animation'];

$is_animated;
if($cta_animation){
    $is_animated = 'is-animated';
} else {
    $is_animated = '';
}

?>


<div class="padding-y-180 padding-md-top-120 padding-md-x-30 padding-xs-x-10 widget-intro bg-charcoal block-animation height-620">
    <?php if($link): ?>
    <div class="img-container">
        <?php echo $link; ?>
    </div>
    <?php endif ?>

    <?php if($display_cta): ?>
        <?php if($cta_style == 'cta_with_icon'): ?>
            <a href="#getInTouch" class="button is-secondary has-icon <?php echo $is_animated ?> ">
                <ion-icon name="arrow-down-outline"></ion-icon>
            </a>
        <?php else: ?>
            <a href="<?php echo $cta_link; ?>" class="button is-secondary"><?php echo $cta_action; ?></a>
        <?php endif ?>
    <?php endif ?>
</div>
