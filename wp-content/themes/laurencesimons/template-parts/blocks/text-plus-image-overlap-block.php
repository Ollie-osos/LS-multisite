<?php

$bg_class;
$position_img;
$position_text;

if($display_circles == true){
    $bg_class = 'animation-2-circles bg-' . $background_color;
}else{
    $bg_class = 'bg-' . $background_color;
}

if($block_order == 'img_left'){
    $position_img = 'left';
    $position_text = 'right';
}else{
    $position_img = 'right';
    $position_text = 'left';
}

?>

<div class="padding-<?php echo $y_paddings ?> padding-x-90 padding-sm-x-30 padding-xs-x-10 <?php echo $bg_class ?>">
    <div class="widget-double-card columns maxwidth-holder">
        <div class="image <?php echo $position_img ?>"> <!-- Image -->
            <div class="img-landscape">
                <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['title']; ?>">
            </div>
        </div><!-- Image end -->

        <div class="content bg-lemon <?php echo $position_text ?>">

            <!-- HEADING -->
            <?php if($heading_type == 'h1'): ?>
                <h1><?php echo $heading; ?></h1>
            <?php elseif ($heading_type == 'h2'): ?>
                <h2><?php echo $heading; ?></h2>
            <?php elseif ($heading_type == 'h3'): ?>
                <h3><?php echo $heading; ?></h3>
            <?php elseif ($heading_type == 'h4'): ?>
                <h4><?php echo $heading; ?></h4>
            <?php elseif ($heading_type == 'h5'): ?>
                <h5><?php echo $heading; ?></h5>
            <?php else: ?>
                <p><?php echo $heading; ?></p>
            <?php endif ?>

            <!-- TEXT -->
            <?php if($text): ?>
                <p><?php echo $text; ?></p>
            <?php endif; ?>

            <!-- TEXT -->
            <?php if($display_cta): ?>
                <a href="<?php echo $cta; ?>" class="button is-secondary has-icon">
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>
            <?php endif; ?>
        </div>
    </div>


    <?php if($display_circles == true) : ?>
        <div class="circle circle-1 circle-<?php echo $circles_color; ?>"></div>
        <div class="circle circle-2 circle-<?php echo $circles_color; ?>"></div>
    <?php endif;?>
</div>