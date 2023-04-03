<?php

$bg_class;

if($display_circles == true){
    $bg_class = 'animation-2-circles bg-' . $background_color;
}else{
    $bg_class = 'bg-' . $background_color;
}
?>

<div class="padding-<?php echo $y_paddings ?> padding-x-90 padding-sm-x-30 padding-xs-x-10 <?php echo $bg_class ?>">
    <div class="widget-quote is-flex is-align-items-center">
        <div class="widget-quote-bg z-index-0">
            <div class="img-quote">
                <img src="<?php echo get_template_directory_uri() ?>/assets/svg/decoration.svg" alt="Quote from our clients | Laurence Simons">
            </div>
        </div>

        <!-- Carousel-block-text starts here -->
        <div id="carousel-quote-<?php echo $id; ?>" class="carousel carousel-quote">
            <small class="uppercase">What our clients say</small>
            <!-- Slides here -->
            <div class="glide__track carousel-body" data-glide-el="track">
                <ul class="glide__slides">
                    <?php foreach( $quotes as $quote ):
                        $client_quote = $quote['client_quote'];
                        $client_name = $quote['client_name'];
                        ?>
                        <li class="glide__slide">
                            <div class="block-content">
                                <p class="h2">“<?php echo $client_quote ?>”</p>
                                <small class="uppercase"><?php echo $client_name ?></small>
                                <?php if( $display_cta ): ?>
                                    <a href="<?php echo $cta_link ?>" class="button is-primary"><?php echo $cta_action ?></a>
                                <?php endif; ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>

        <script>
            new Glide(document.getElementById("carousel-quote-<?php echo $id; ?>"), {
                type: 'carousel',
                focusAt: 'center',
                perView: 1,
                autoplay: 3500,
                keyboard: true,
                draggable: true,
                swipeThreshold: true,
                dragThreshold: 120
            }).mount()
        </script>
    </div>

    <?php if($display_circles == true) : ?>
        <div class="circle circle-1 circle-<?php echo $circles_color; ?>"></div>
        <div class="circle circle-2 circle-<?php echo $circles_color; ?>"></div>
    <?php endif;?>
</div>