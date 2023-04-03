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

$title = get_field('page_title_employees', 'option');
$header = get_field('header_employees', 'option');
get_template_part('template-parts/header/entry-header-archives', null,
    array(
        'title' => $title,
        'header' => $header
    )
);


$executive_team = get_posts(
    array(
        'post_type' => 'employees',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'meta_query'	=> array(
            'relation'		=> 'AND',
            array(
                'key'	  	=> 'job_category',
                'value'	  	=> 'executive',
                'compare' 	=> '=',
            ),
        ),
        'order' => 'DESC',
    )
);


$sales_team = get_posts(
    array(
        'post_type' => 'employees',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'meta_query'	=> array(
            'relation'		=> 'AND',
            array(
                'key'	  	=> 'job_category',
                'value'	  	=> 'sales',
                'compare' 	=> '=',
            ),
        ),
        'order' => 'DESC',
    )
);

$talent_team = get_posts(
    array(
        'post_type' => 'employees',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'meta_query'	=> array(
            'relation'		=> 'AND',
            array(
                'key'	  	=> 'job_category',
                'value'	  	=> 'talent',
                'compare' 	=> '=',
            ),
        ),
        'order' => 'DESC',
    )
);


$backoffice_team = get_posts(
    array(
        'post_type' => 'employees',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'meta_query'	=> array(
            'relation'		=> 'AND',
            array(
                'key'	  	=> 'job_category',
                'value'	  	=> 'backoffice',
                'compare' 	=> '=',
            ),
        ),
        'order' => 'DESC',
    )
);


$business_team = get_posts(
    array(
        'post_type' => 'employees',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'meta_query'	=> array(
            'relation'		=> 'AND',
            array(
                'key'	  	=> 'job_category',
                'value'	  	=> 'business',
                'compare' 	=> '=',
            ),
        ),
        'order' => 'DESC',
    )
);


?>


<?php
if( have_rows('page_builder_employees_before', 'option') ):

    while ( have_rows('page_builder_employees_before', 'option') ) : the_row();

        include(locate_template('template-parts/blocks/builder.php'));

    endwhile;

else : ?>
    <!-- NO PAGE COMPONENTS -->

<?php endif; ?>

    <div class="padding-y-180 padding-x-90 padding-sm-x-30 padding-xs-x-10 bg-purple animation-2-circles">
        <?php if ($executive_team) : ?>
            <div class="columns">
                <div class="column">
                    <h2 class='text-center'>Executive Team</h2>
                </div>
            </div>
            <div class="is-flex is-flex-wrap-wrap is-justify-content-space-around">
                <?php foreach( $executive_team as $post ):
                    $header = get_field('header_default');
                    $image = $header['featured_image'];
                    ?>

                    <?php setup_postdata( $post ); ?>
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
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        <?php endif ?>


        <?php if ($sales_team) : ?>
            <div class="columns padding-top-60">
                <div class="column">
                    <h2 class='text-center'>Client Consulting Team</h2>
                </div>
            </div>
            <div class="is-flex is-flex-wrap-wrap is-justify-content-space-around">
                <?php foreach( $sales_team as $post ):
                    $header = get_field('header_default');
                    $image = $header['featured_image'];
                    ?>

                    <?php setup_postdata( $post ); ?>
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
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>

        <?php endif ?>
        <?php if ($talent_team) : ?>
            <div class="columns padding-top-60">
                <div class="column">
                    <h2 class='text-center'>Talent Acquisition & Delivery</h2>
                </div>
            </div>
            <div class="is-flex is-flex-wrap-wrap is-justify-content-space-around">
                <?php foreach( $talent_team as $post ):
                    $header = get_field('header_default');
                    $image = $header['featured_image'];
                    ?>

                    <?php setup_postdata( $post ); ?>
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
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>

        <?php endif ?>
        <?php if ($backoffice_team) : ?>
            <div class="columns padding-top-60">
                <div class="column">
                    <h2 class='text-center'>Support Functions</h2>
                </div>
            </div>
            <div class="is-flex is-flex-wrap-wrap is-justify-content-space-around">
                <?php foreach( $backoffice_team as $post ):
                    $header = get_field('header_default');
                    $image = $header['featured_image'];
                    ?>

                    <?php setup_postdata( $post ); ?>
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
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>

        <?php endif ?>
        <?php if ($business_team) : ?>
            <div class="columns padding-top-60">
                <div class="column">
                    <h2 class='text-center'>Business Support</h2>
                </div>
            </div>
            <div class="is-flex is-flex-wrap-wrap is-justify-content-space-around">
                <?php foreach( $business_team as $post ):
                    $header = get_field('header_default');
                    $image = $header['featured_image'];
                    ?>

                    <?php setup_postdata( $post ); ?>
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
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>

        <?php endif ?>

        <div class="circle circle-1 circle-white"></div>
        <div class="circle circle-2 circle-white"></div>
    </div>


<?php
if( have_rows('page_builder_employees', 'option') ):

    while ( have_rows('page_builder_employees', 'option') ) : the_row();

        include(locate_template('template-parts/blocks/builder.php'));

    endwhile;

else : ?>
    <!-- NO PAGE COMPONENTS -->

<?php endif; ?>

<?php get_footer();