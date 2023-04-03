<?php
/**
 * Display news and insights
 *
 * @package WordPress
 * @subpackage Laurence_Simons_2022
 * @since Laurence Simons 2022 1.0
 */

$bg_class;
$nmb;

if($display_circles == true){
    $bg_class = 'animation-2-circles bg-' . $background_color;
}else{
    $bg_class = 'bg-' . $background_color;
}

$list = get_posts(
    array(
        'post_type' => $archives,
        'post_status' => 'publish',
        'posts_per_page' => $max_number,
    )
);


?>

    <div class="padding-<?php echo $y_paddings ?> padding-x-90 padding-sm-x-30 padding-xs-x-10 <?php echo $bg_class ?>">
        <div class="columns margin-bottom-30">
            <div class="column">
                <!-- HEADING -->
                <?php if($display_heading): ?>
                    <?php if($heading_type == 'h1'): ?>
                        <h1><?php echo $heading; ?><span class="text-lemon">.</span></h1>
                    <?php elseif($heading_type == 'h2'): ?>
                        <h2><?php echo $heading; ?><span class="text-lemon">.</span></h2>
                    <?php elseif ($heading_type == 'h3'): ?>
                        <h3><?php echo $heading; ?></h3>
                    <?php elseif ($heading_type == 'h4'): ?>
                        <h4><?php echo $heading; ?></h4>
                    <?php elseif ($heading_type == 'h5'): ?>
                        <h5><?php echo $heading; ?></h5>
                    <?php else: ?>
                        <p><?php echo $heading; ?></p>
                    <?php endif ?>
                <?php endif; ?>

                <!-- TEXT -->
                <?php if($text): ?>
                <div class="padding-y-30">
                    <p><?php echo $text; ?></p>
                </div>
                <?php else : ?>
                    <div class="padding-bottom-10"></div>
                <?php endif; ?>

                <!-- CTA -->
                <?php if($display_cta): ?>
                    <a href="<?php echo $cta_link; ?>" class="button is-primary"><?php echo $cta_action; ?></a>
                <?php endif; ?>
            </div>
        </div>

        <?php if ($list) : ?>


            <!-- Carousel-card starts here -->
            <div id="slider-cards-<?php echo $arch_type ?>-<?php echo $id ?>" class="carousel carousel-card">
                <!-- Slides here -->
                <div class="glide__track carousel-body" data-glide-el="track">

                    <ul class="glide__slides">

                        <?php foreach( $list as $post ):?>
                            <li class="glide__slide">
                                <?php get_template_part( 'template-parts/content/content'); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                </div>

                <!-- Bullets -->
                <div id="bullets-cards-<?php echo $arch_type ?>-<?php echo $id ?>" class="glide__bullets" data-glide-el="controls[nav]">
                    <?php $loop_id = 0 ?>
                    <?php foreach( $list as $post ):?>
                        <button class="glide__bullet" data-glide-dir="=<?php echo $loop_id ?>">
                            <span class="dot"></span>
                        </button>

                        <?php $loop_id++ ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <script>
                <?php
                if($max_number == 1 || $max_number == 2){
                    $nmb = $max_number;
                }elseif ($loop_id && ($loop_id == 1 || $loop_id == 2)){
                    $nmb = $loop_id;
                } else{
                    $nmb = 3;
                }
                ?>
                new Glide(document.getElementById("slider-cards-<?php echo $arch_type ?>-<?php echo $id; ?>"), {
                    type: 'carousel',
                    focusAt: 'center',
                    perView: <?php echo $nmb ?>,
                    dots: "#bullets-cards-<?php echo $arch_type ?>-<?php echo $id; ?>",
                    breakpoints: {
                        1024: {
                            perView: 2
                        },
                        940: {
                            perView: 1
                        }
                    },
                    keyboard: true,
                    draggable: true,
                    swipeThreshold: true,
                    dragThreshold: 120
                }).mount()
            </script>
            <?php wp_reset_postdata(); ?>
        <?php endif ?>

    </div>


