<?php

$bg_class;


if($display_circles == true){
    $bg_class = 'animation-2-circles bg-' . $background_color;
}else{
    $bg_class = 'bg-' . $background_color;
}


?>

<div class="padding-<?php echo $y_paddings ?> padding-x-90 padding-sm-x-30 padding-xs-x-10 <?php echo $bg_class ?>">
    <div class="columns is-centered">
        <div class="content">

            <!-- HEADING -->
            <?php if($display_heading): ?>
                <?php if($heading_type == 'h1'): ?>
                    <h1 class="text-center"><?php echo $heading; ?></h1>
                <?php elseif ($heading_type == 'h2'): ?>
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
            <?php endif ?>

            <div class="padding-top-30 is-flex is-flex-wrap-wrap is-justify-content-space-between is-align-items-center">

                <?php foreach( $clients_logo as $client ):
                    $client_logo = $client['client_logo'];
                    $client_name = $client['client_name'];
                    ?>
                    <div class="img-logo">
                        <img src="<?php echo $client_logo['sizes']['large']; ?>" alt="<?php echo $client_name; ?>">
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

    <?php if($display_circles == true) : ?>
        <div class="circle circle-1 circle-<?php echo $circles_color; ?>"></div>
        <div class="circle circle-2 circle-<?php echo $circles_color; ?>"></div>
    <?php endif;?>
</div>
