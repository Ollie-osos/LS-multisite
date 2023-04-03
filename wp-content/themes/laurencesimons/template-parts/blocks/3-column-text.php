<?php
$bg_class;

if($display_circles == true){
    $bg_class = 'no-animation-3-circles bg-' . $background_color;
}else{
    $bg_class = 'bg-' . $background_color;
}

?>

<div class="padding-<?php echo $y_paddings ?> padding-x-90 padding-sm-x-30 padding-xs-x-10 <?php echo $bg_class ?>">
    <div class="widget-text columns">

        <div class="column">
            <div class="content">
                <!-- Main heading -->
                <?php if($heading_number == '1_main_heading'): ?>
                <div class="padding-bottom-10">
                    <?php if($heading_type == 'h1'): ?>
                        <h1 class="text-center"><?php echo $only_one_heading; ?></h1>
                    <?php elseif ($heading_type == 'h2'): ?>
                        <h2 class="text-center"><?php echo $only_one_heading; ?></h2>
                    <?php elseif ($heading_type == 'h3'): ?>
                        <h3 class="text-center"><?php echo $only_one_heading; ?></h3>
                    <?php elseif ($heading_type == 'h4'): ?>
                        <h4 class="text-center"><?php echo $only_one_heading; ?></h4>
                    <?php elseif ($heading_type == 'p'): ?>
                        <p class="text-center"><?php echo $only_one_heading; ?></p>
                    <?php else: ?>
                        <h5 class="text-center"><?php echo $only_one_heading; ?></h5>
                    <?php endif ?>
                </div>
                <?php endif; ?><!-- Main heading end -->

                <!-- .columns -->
                <div class="columns">
                    <div class="column">
                        <div class="content">

                            <!-- HEADING -->
                            <?php if($heading_type == 'h1'): ?>
                                <h1><?php echo $heading_column_1; ?></h1>
                            <?php elseif ($heading_type == 'h2'): ?>
                                <h2><?php echo $heading_column_1; ?></h2>
                            <?php elseif ($heading_type == 'h3'): ?>
                                <h3><?php echo $heading_column_1; ?></h3>
                            <?php elseif ($heading_type == 'h4'): ?>
                                <h4><?php echo $heading_column_1; ?></h4>
                            <?php elseif ($heading_type == 'p'): ?>
                                <p><?php echo $heading_column_1; ?></p>
                            <?php else: ?>
                                <h5><?php echo $heading_column_1; ?></h5>
                            <?php endif ?>


                            <!-- TEXT -->
                            <?php if($text_column_1): ?>
                            <div class="padding-top-10">
                                <p><?php echo $text_column_1; ?></p>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="column">
                        <div class="content">
                            <?php if($heading_type == 'h1'): ?>
                                <h1><?php echo $heading_column_2; ?></h1>
                            <?php elseif ($heading_type == 'h2'): ?>
                                <h2><?php echo $heading_column_2; ?></h2>
                            <?php elseif ($heading_type == 'h3'): ?>
                                <h3><?php echo $heading_column_2; ?></h3>
                            <?php elseif ($heading_type == 'h4'): ?>
                                <h4><?php echo $heading_column_2; ?></h4>
                            <?php elseif ($heading_type == 'p'): ?>
                                <p><?php echo $heading_column_2; ?></p>
                            <?php else: ?>
                                <h5><?php echo $heading_column_2; ?></h5>
                            <?php endif ?>

                            <?php if($text_column_2): ?>
                                <div class="padding-top-10">
                                    <p><?php echo $text_column_2; ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="column">
                        <div class="content">
                            <?php if($heading_type == 'h1'): ?>
                                <h1><?php echo $heading_column_3; ?></h1>
                            <?php elseif ($heading_type == 'h2'): ?>
                                <h2><?php echo $heading_column_3; ?></h2>
                            <?php elseif ($heading_type == 'h3'): ?>
                                <h3><?php echo $heading_column_3; ?></h3>
                            <?php elseif ($heading_type == 'h4'): ?>
                                <h4><?php echo $heading_column_3; ?></h4>
                            <?php elseif ($heading_type == 'p'): ?>
                                <p><?php echo $heading_column_3; ?></p>
                            <?php else: ?>
                                <h5><?php echo $heading_column_3; ?></h5>
                            <?php endif ?>

                            <?php if($text_column_3): ?>
                                <div class="padding-top-10">
                                    <p><?php echo $text_column_3; ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div> <!-- .columns end -->


                <!-- CTA -->
                <?php if($display_cta): ?>
                    <div class="widget-text columns">
                        <div class="column padding-top-10">
                            <a href="<?php echo $only_one_cta_link; ?>" class="button is-primary margin-x-auto"><?php echo $only_one_cta_action; ?></a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php if($display_circles == true) : ?>
        <div class="circle circle-1 circle-<?php echo $circles_color; ?>"></div>
        <div class="circle circle-2 circle-<?php echo $circles_color; ?>"></div>
        <div class="circle circle-3 circle-<?php echo $circles_color; ?>"></div>
    <?php endif;?>
</div>
