<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header(); ?>


<?php

$title = get_field('page_title_candidates', 'option');
$header = get_field('header_candidates', 'option');
get_template_part('template-parts/header/entry-header-archives', null,
    array(
            'title' => $title,
            'header' => $header
    )
); ?>

<?php if (have_posts()) : ?>
    <div class="padding-y-180 padding-x-90 padding-sm-x-30 padding-xs-x-10 bg-purple animation-2-circles">
        <div class="is-flex is-flex-wrap-wrap is-justify-content-space-around">
                    <?php while (have_posts()) : ?>
                        <?php the_post(); ?>

                        <?php
                        $header = get_field('header_default');
                        $image = $header['featured_image'];
                        ?>

                        <div class="widget-card card-xs margin-bottom-30" id="post-<?php the_ID(); ?>">
                            <div class="img-landscape">
                                <?php if($image['url']): ?>
                                    <img src="<?php echo $image['url'] ?>" alt="news">
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/default-image-light.png" alt="Laurence Simons">
                                <?php endif; ?>
                            </div>
                            <p class="padding-bottom-10"><?php echo get_field('job_title') ?></p>
                            <h3 class="padding-bottom-10">
                                <?php echo truncated(get_the_title(), 45); ?>
                            </h3>
                            <a href="<?php echo get_permalink();  ?>" class="button has-icon is-secondary">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </a>
                        </div>
                    <?php endwhile; ?>
        </div>

        <div class="circle circle-1 circle-white"></div>
        <div class="circle circle-2 circle-white"></div>
    </div>
<?php endif ?>

<?php
if( have_rows('page_builder_candidates', 'option') ):

    while ( have_rows('page_builder_candidates', 'option') ) : the_row();

        include(locate_template('template-parts/blocks/builder.php'));

    endwhile;

else : ?>
    <!-- NO PAGE COMPONENTS -->

<?php endif; ?>
<?php


get_footer();
