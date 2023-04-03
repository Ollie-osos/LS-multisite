<?php

$class;

$bg_class;

if($display_circles == true){
    $bg_class = 'animation-2-circles bg-' . $background_color;
}else{
    $bg_class = 'bg-' . $background_color;
}

if($block_alignment == 'right'){
    $class = 'column is-7 is-offset-5';
} else if($block_alignment == 'center'){
    $class = 'column is-7 margin-x-auto';
} else {
    $class = 'column is-7';
}

?>


<div class="padding-<?php echo $y_paddings ?> padding-x-90 padding-sm-x-30 padding-xs-x-10 <?php echo $bg_class ?>">

    <div class="columns">
        <!-- HEADING -->
        <div class="<?php echo $class ?>">
            <div class="widget-card">

                <!-- IMAGE -->
                <?php if($display_image): ?>
                    <div class="img-landscape margin-bottom-30">
                        <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['title']; ?>">
                    </div>
                <?php endif ?>


                <div class="is-flex is-align-items-center is-flex-wrap-wrap">
                    <!-- HEADING -->
                    <?php if($display_heading): ?>
                        <?php if($heading_type == 'h1'): ?>
                            <h1 class="margin-right-30"><?php echo $heading; ?></h1>
                        <?php elseif ($heading_type == 'h2'): ?>
                            <h2 class="margin-right-30"><?php echo $heading; ?></h2>
                        <?php elseif ($heading_type == 'h3'): ?>
                            <h3 class="margin-right-30"><?php echo $heading; ?></h3>
                        <?php elseif ($heading_type == 'h4'): ?>
                            <h4 class="margin-right-30"><?php echo $heading; ?></h4>
                        <?php elseif ($heading_type == 'h5'): ?>
                            <h5 class="margin-right-30"><?php echo $heading; ?></h5>
                        <?php else: ?>
                            <p class="margin-right-30"><?php echo $heading; ?></p>
                        <?php endif ?>
                    <?php endif ?>


                    <?php if($display_cta): ?>
                    <a href="<?php echo $cta_link; ?>" class="button is-secondary has-icon">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </a>
                    <?php endif; ?>
                </div>
                <?php if($text): ?>
                    <div class="row margin-top-10">
                        <p><?php echo $text; ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>


    <?php if($display_circles == true) : ?>
        <div class="circle circle-1 circle-<?php echo $circles_color; ?>"></div>
        <div class="circle circle-2 circle-<?php echo $circles_color; ?>"></div>
    <?php endif;?>
</div>

