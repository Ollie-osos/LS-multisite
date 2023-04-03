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

            <?php if($heading_type == 'h1'): ?>
                <h1><?php echo $only_one_heading; ?></h1>
            <?php elseif ($heading_type == 'h2'): ?>
                <h2><?php echo $only_one_heading; ?></h2>
            <?php elseif ($heading_type == 'h3'): ?>
                <h3><?php echo $only_one_heading; ?></h3>
            <?php elseif ($heading_type == 'h4'): ?>
                <h4><?php echo $only_one_heading; ?></h4>
            <?php elseif ($heading_type == 'p'): ?>
                <p><?php echo $only_one_heading; ?></p>
            <?php else: ?>
                <h5><?php echo $only_one_heading; ?></h5>
            <?php endif ?>

                <?php endif; ?><!-- Main heading end -->

                <!-- .columns -->
                <div class="columns is-flex is-flex-wrap-wrap is-justify-content-space-around two-text-block">

                    <div class="column max-380">
                        <div class="content">

                            <!-- IMAGE -->
                            <?php if($image_column_1): ?>
                                <div class="img-square">
                                    <img src="<?php echo $image_column_1['sizes']['large']; ?>" alt="<?php echo $image_column_1['title']; ?>">
                                </div>
                            <?php endif; ?>


                            <!-- HEADING -->
                            <div class="padding-top-10">
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
                            </div>


                            <!-- TEXT -->
                            <?php if($text_column_1): ?>
                            <div class="padding-y-10">
                                <p><?php echo $text_column_1; ?></p>
                            </div>
                            <?php endif; ?>


                            <!-- CTA -->
                            <?php if($display_cta && $cta_number == '2_ctas'): ?>
                                <div class="padding-top-10">
                                    <a href="<?php echo $cta_link_column_1; ?>" class="button is-primary"><?php echo $cta_action_column_1; ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="column max-380 margin-top-90">
                        <div class="content">

                            <!-- IMAGE -->
                            <?php if($image_column_2): ?>
                                <div class="img-square">
                                    <img src="<?php echo $image_column_2['sizes']['large'];; ?>" alt="<?php echo $image_column_2['title']; ?>">
                                </div>
                            <?php endif; ?>


                            <!-- HEADING -->
                            <div class="padding-top-10">
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
                            </div>


                            <!-- TEXT -->
                            <?php if($text_column_2): ?>
                                <div class="padding-y-10">
                                    <p><?php echo $text_column_2; ?></p>
                                </div>
                            <?php endif; ?>


                            <!-- CTA -->
                            <?php if($display_cta && $cta_number == '2_ctas'): ?>
                                <div class="padding-top-10">
                                    <a href="<?php echo $cta_link_column_2; ?>" class="button is-primary"><?php echo $cta_action_column_2; ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div> <!-- .columns end -->


                <!-- CTA -->
                <?php if($display_cta && $cta_number == 'only_one_cta'): ?>
                    <div class="widget-text columns">
                        <div class="column">
                            <a href="<?php echo $main_cta_link; ?>" class="button is-primary margin-x-auto"><?php echo $main_cta_action; ?></a>
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