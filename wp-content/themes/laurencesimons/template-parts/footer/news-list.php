<?php
/**
 * Display news and insights
 *
 * @package WordPress
 * @subpackage Laurence_Simons_2022
 * @since Laurence Simons 2022 1.0
 */


$posts = get_posts(
    array(
        'post_type' => 'news',
        'post_status' => 'publish',
        'posts_per_page' => 6,
    )
);

$color = 'charcoal';
$id = wp_unique_id( $prefix = '' );

$options;
$nmb;
$title = 'Latest news & insights';
$hide_title;
$cta_link = get_site_url() . '/news/';
$cta_action = 'See more';

$enable_more_options = get_field('news_see_more_options');
if($enable_more_options){
    $options = get_field('news_more_options');
    $title = $options['news_update_section_title'];
    $color = $options['news_update_background_color'];
    $hide_title = $options['news_hide_section_title'];
    $hide_cta = $options['news_hide_section_cta'];
    $cta_link = get_field('news_cta_link');
    $cta_action = get_field('news_cta_action');
}


?>

<?php if($posts): ?>
    <div class="padding-top-90 padding-x-90 padding-md-x-10 bg-<?php echo $color ?>">
        <div class="columns margin-bottom-30">
            <div class="column">
                <?php if( ! isset($hide_title) ) : ?>
                    <h2 class="padding-bottom-10"><?php echo $title ?><span class="text-lemon">.</span></h2>
                <?php endif ?>
            </div>
        </div>

            <!-- Carousel-card starts here -->
            <div id="slider-cards-footer-<?php echo $id ?>" class="carousel carousel-card">
                <!-- Slides here -->
                <div class="glide__track carousel-body" data-glide-el="track">

                    <ul class="glide__slides">

                        <?php foreach( $posts as $post ):?>
                            <li class="glide__slide">
                                <?php get_template_part( 'template-parts/content/content'); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                </div>

                <!-- Bullets -->
                <div id="bullets-cards-footer-<?php echo $id ?>" class="glide__bullets" data-glide-el="controls[nav]">
                    <?php $loop_id = 0 ?>
                    <?php foreach( $posts as $post ):?>
                        <button class="glide__bullet" data-glide-dir="=<?php echo $loop_id ?>">
                            <span class="dot"></span>
                        </button>

                        <?php $loop_id++ ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <script>
                <?php
               if ($loop_id && ($loop_id == 1 || $loop_id == 2)){
                    $nmb = $loop_id;
                } else {
                    $nmb = 3;
                }
                ?>
                new Glide(document.getElementById("slider-cards-footer-<?php echo $id; ?>"), {
                    type: 'carousel',
                    focusAt: 'center',
                    perView: <?php echo $nmb ?>,
                    dots: "#bullets-cards-footer-<?php echo $id; ?>",
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

        <?php if( ! isset($hide_cta) ) : ?>
            <div class="padding-top-30 is-flex is-justify-content-center is-align-items-center">
                <a href="<?php echo $cta_link; ?>" class="button is-primary"><?php echo $cta_action; ?></a>
            </div>
        <?php endif ?>

    </div>
<?php endif ?>
