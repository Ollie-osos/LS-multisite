<?php
/**
 * Displays the featured image
 *
 * @package WordPress
 * @subpackage Laurence_Simons_2022
 * @since Laurence Simons 2022 1.0
 */


$class = 'square';
if (get_template_part('template-parts/featured-image', 'image', array('class' => 'landscape'))){
    $class = 'landscape';
} else if (get_template_part('template-parts/featured-image', 'image', array('class' => 'rounded'))){
    $class = 'rounded';
} else if (get_template_part('template-parts/featured-image', 'image', array('class' => 'sm'))){
    $class = 'sm';
}


if ( has_post_thumbnail() && ! post_password_required() ) {


    the_post_thumbnail();

	if ( the_post_thumbnail() ) { ?>

    <div class="img-<?php echo $class ?>">
        <?php the_post_thumbnail(); ?>
    </div>

    <?php } ?>

<?php } ?>
