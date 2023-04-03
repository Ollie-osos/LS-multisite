<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress

 */

get_header(); ?>

<?php

$title = get_field('page_title_news', 'option');
$header = get_field('header_news', 'option');
get_template_part('template-parts/header/entry-header-archives', null,
    array(
        'title' => $title,
        'header' => $header
    )
); ?>

<?php if (have_posts()) : ?>
    <div class="padding-y-10 padding-x-90 padding-sm-x-30 padding-xs-x-10 bg-purple-80">
        <div class="columns is-centered padding-y-30 padding-x-0">
            <div class="is-flex is-justify-content-center is-align-items-center">
                <form action="/news-filter" method="get" class="is-flex filter">
                    <select class="input is-secondary margin-right-10" name="news-cat" id="filter-category">
                        <?php
                        $categories = get_categories();
                        foreach ($categories as $category) {
                            echo '<option value="' . $category->slug . '">' . $category->name . '</option>';
                        }
                        ?>
                    </select>
                    <button type="submit" class="button is-primary">View</button>
                </form>
            </div>
        </div>
    </div>

    <div class="padding-top-60 padding-bottom-180s padding-x-90 padding-sm-x-30 padding-xs-x-10 bg-purple animation-2-circles">
        <div class="is-flex is-flex-wrap-wrap is-justify-content-space-around">
            <?php while (have_posts()) : ?>
                <?php the_post();
                $header = get_field('header_default');
                $image = $header['featured_image']; ?>
                <div class="widget-card card-xs margin-bottom-30" id="post-<?php the_ID(); ?>">
                    <div class="img-landscape">
                        <?php if($image['url']): ?>
                            <img src="<?php echo $image['url'] ?>" alt="news">
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/default-image-light.png" alt="Laurence Simons">
                        <?php endif; ?>
                    </div>
                    <?php $category = get_the_category($post->ID)[0]; ?>
                    <?php if($category) : ?>
                        <small class="uppercase">
                            <?php echo '<a class="tags" href="https://staging-laurencesimons.com/categories/'. $category->slug . '">' . $category->name . '</a>'; ?>
                        </small>
                    <?php endif; ?>
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
if( have_rows('page_builder_news', 'option') ):

    while ( have_rows('page_builder_news', 'option') ) : the_row();

        include(locate_template('template-parts/blocks/builder.php'));

    endwhile;

else : ?>
    <!-- NO PAGE COMPONENTS -->

<?php endif; ?>
<?php


get_footer();
