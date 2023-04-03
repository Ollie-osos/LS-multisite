<?php


$bg_class;

if($display_circles == true){
    $bg_class = 'animation-2-circles bg-' . $background_color;
}else{
    $bg_class = 'bg-' . $background_color;
}


?>

<div class="padding-<?php echo $y_paddings ?> padding-bottom-30 padding-x-90 padding-sm-x-30 padding-xs-x-10 widget-text <?php echo $bg_class ?>">
    <div class="columns is-vcentered">

        <div class="column">
            <!-- Carousel starts here -->
            <div id="carousel-image-<?php echo $id; ?>" class="carousel carousel-image">

                <!-- Slides here -->
                <div class="glide__track carousel-body" data-glide-el="track">

                    <ul class="glide__slides">
                        <?php foreach( $carousel as $c ):
                        $image = $c['image'];
                        ?>
                        <li class="glide__slide carousel-body-element">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        </li>
                        <?php endforeach; ?>

                    </ul>

                </div>

                <!-- Arrows controllers -->
                <div class="glide__arrows controllers" data-glide-el="controls">
                    <button id="prev-image-<?php echo $id; ?>" class="glide__arrow glide__arrow--left is-left button is-secondary has-icon" data-glide-dir="<">
                        <ion-icon name="arrow-back-outline"></ion-icon>
                    </button>
                    <button id="next-image-<?php echo $id; ?>" class="glide__arrow glide__arrow--right is-right button is-secondary has-icon" data-glide-dir=">">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </button>
                </div>

                <!-- Bullets -->
                <div id="bullets-images-<?php echo $id; ?>" class="glide__bullets" data-glide-el="controls[nav]">
                    <?php $loop_id = 0 ?>
                    <?php foreach( $carousel as $c ): ?>
                        <button class="glide__bullet" data-glide-dir="=<?php echo $loop_id ?>">
                            <span class="dot"></span>
                        </button>
                        <?php $loop_id++ ?>
                    <?php endforeach; ?>
                </div>
            </div>

            <script>
                new Glide(document.getElementById("carousel-image-<?php echo $id; ?>"), {
                    type: 'carousel',
                    focusAt: 'center',
                    perView: 1,
                    autoplay: 4000,
                    dots: "#bullets-image-<?php echo $id; ?>",
                    arrows: {
                        prev: "#prev-image-<?php echo $id; ?>",
                        next: "#next-image-<?php echo $id; ?>"
                    },
                    keyboard: true,
                    draggable: true,
                    swipeThreshold: true,
                    dragThreshold: 120
                }).mount()
            </script>
        </div>

        <div class="column">
            <div class="widget-card">

                <!-- HEADING -->
                <?php if($display_heading): ?>
                    <?php if($heading_type == 'h2'): ?>
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
                <?php endif; ?>

                <!-- TEXT -->
                <?php if($text): ?>
                    <div class="padding-y-30">
                        <p><?php echo $text; ?></p>
                    </div>
                <?php endif; ?>

                <!-- CTA -->
                <?php if($display_cta): ?>
                    <a href="<?php echo $cta_link; ?>"
                       class="button is-primary"><?php echo $cta_action; ?></a>
                <?php endif; ?>

            </div>
        </div>
    </div>


    <?php if($display_circles == true) : ?>
        <div class="circle circle-1 circle-<?php echo $circles_color; ?>"></div>
        <div class="circle circle-2 circle-<?php echo $circles_color; ?>"></div>
    <?php endif;?>

</div>