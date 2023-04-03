<?php


$bg_class;

if($display_circles == true){
    $bg_class = 'animation-2-circles bg-' . $background_color;
}else{
    $bg_class = 'bg-' . $background_color;
}
?>

<div class="padding-<?php echo $y_paddings ?> padding-x-90 padding-sm-x-30 padding-xs-x-10 widget-text <?php echo $bg_class ?>">
    <div class="columns is-centered padding-x-180 padding-md-30 padding-sm-x-0">
        <div class="content">
            <div class="column">
                <!-- TEXT -->
                <?php if($text): ?>
                    <p class="text-center"><?php echo $text; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php if($display_circles == true) : ?>
        <div class="circle circle-1 circle-<?php echo $circles_color; ?>"></div>
        <div class="circle circle-2 circle-<?php echo $circles_color; ?>"></div>
    <?php endif;?>
</div>