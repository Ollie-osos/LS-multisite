<?php

$bg_class;


if($display_circles == true){
    $bg_class = 'animation-2-circles bg-' . $background_color;
}else{
    $bg_class = 'bg-' . $background_color;
}
?>


<div class="padding-<?php echo $y_paddings ?> padding-x-90 padding-sm-x-30 padding-xs-x-10 bg-purple-80">

    <!-- Carousel-block-text starts here -->
    <div id="carousel-people" class="carousel carousel-block-content">

        <!-- Slides here -->
        <div class="glide__track carousel-body" data-glide-el="track">

            <ul class="glide__slides">
                <li class="glide__slide">
                    <div class="block-content">
                        <div class="img-square">
                            <img src="images/LSS_clients_HUSSEIN_Sajid.jpg" alt="Hussein Sajid | Laurence Simons">
                        </div>
                        <h2>Candidates</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et turpis in metus rutrum accumsan sit amet in enim. </p>
                        <a href="#" class="button is-primary">Learn more</a>

                    </div>
                </li>

                <li class="glide__slide">

                    <div class="block-content">
                        <div class="img-square">
                            <img src="images/LSS_clients_LANG_Markus.jpg" alt="Lang Markus | Laurence Simons">
                        </div>
                        <h2>Clients</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et turpis in metus rutrum accumsan sit amet in enim. </p>
                        <a href="#" class="button is-primary">Learn more</a>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Arrows controllers -->
        <div class="glide__arrows controllers" data-glide-el="controls">
            <button id="carousel__prev-3" class="glide__arrow glide__arrow--left is-left button is-secondary has-icon" data-glide-dir="<">
                <ion-icon name="arrow-back-outline"></ion-icon>
            </button>
            <button id="carousel__next-3" class="glide__arrow glide__arrow--right is-right button is-secondary has-icon" data-glide-dir=">">
                <ion-icon name="arrow-forward-outline"></ion-icon>
            </button>
        </div>
    </div>

    <script>
        new Glide(document.getElementById("carousel-people"), {
            type: 'carousel',
            arrows: {
                prev: "#carousel__prev-3",
                next: "#carousel__next-3"
            },
            perView: 2,
            breakpoints: {
                type: 'slider',
                600: {
                    perView: 1
                }
            },
            // // rewind: true,
            // // bound: true,
            gap: 30,
            // hoverpause: false,
            keyboard: true,
            draggable: true,
            swipeThreshold: true
        }).mount()
    </script>


    <?php if($display_circles == true) : ?>
        <div class="circle circle-1 circle-<?php echo $circles_color; ?>"></div>
        <div class="circle circle-2 circle-<?php echo $circles_color; ?>"></div>
    <?php endif;?>
</div>