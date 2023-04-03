<?php

$bg_class;
$columns_top;
$widget_top;
$padding_settings;


if($display_circles == true){
    $bg_class = 'animation-2-circles bg-' . $background_color;
}else{
    $bg_class = 'bg-' . $background_color;
}


if($display_background_image == true && $padding_settings === 'auto'){
    $columns_top = 'padding-top-180';
    $widget_top = 'padding-top-180 padding-bottom-30';
}else{
    $columns_top = '';
    $widget_top = 'padding-' . $y_paddings;
}

?>

<div class="<?php echo $widget_top ?> padding-x-90 padding-sm-x-30 padding-xs-x-10 widget-text <?php echo $bg_class ?>">
    <div class="columns is-centered <?php echo $columns_top ?> padding-x-180 padding-md-30 padding-sm-x-0">
        <div class="content">

            <!-- HEADING -->
            <?php if($display_heading): ?>
                <div class="padding-bottom-10">
                    <?php if($heading_type == 'h2'): ?>
                        <h2 class="text-center"><?php echo $heading; ?></h2>
                    <?php elseif ($heading_type == 'h3'): ?>
                        <h3 class="text-center"><?php echo $heading; ?></h3>
                    <?php elseif ($heading_type == 'h4'): ?>
                        <h4 class="text-center"><?php echo $heading; ?></h4>
                    <?php elseif ($heading_type == 'h5'): ?>
                        <h5 class="text-center"><?php echo $heading; ?></h5>
                    <?php else: ?>
                        <p class="text-center"><?php echo $heading; ?></p>
                    <?php endif ?>
                </div>
            <?php endif; ?>

            <!-- TEXT -->
            <?php if($text): ?>
                <p class="text-center"><?php echo $text; ?></p>
            <?php endif; ?>

            <!-- CTA -->
            <?php if($display_cta): ?>
                <div class="padding-top-30 is-flex is-justify-content-center is-align-items-center">
                    <a href="<?php echo $cta_link; ?>" class="button is-primary"><?php echo $cta_action; ?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>


    <!-- BACKGROUND IMAGE -->
    <?php if($display_background_image): ?>
        <div class="img-container">
        <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['title']; ?>">
    </div>
    <?php endif; ?>


    <?php if($display_circles == true) : ?>
        <div class="circle circle-1 circle-<?php echo $circles_color; ?>"></div>
        <div class="circle circle-2 circle-<?php echo $circles_color; ?>"></div>
    <?php endif;?>
</div>