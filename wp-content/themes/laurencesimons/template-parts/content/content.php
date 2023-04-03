<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Laurence_Simons_2022
 * @since Laurence Simons 2022 1.0
 */
$header = get_field('header_default');
$img = $header['featured_image'];
$content_text = $header['introduction'];
?>

        <div class="widget-card card-xs" id="post-<?php echo $post->ID ?>">
            <div class="img-landscape">
                <?php if($img['url']): ?>
                    <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['title']; ?>">
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
            <a href="<?php echo get_permalink(); ?>" class="button has-icon is-secondary margin-left-auto">
                <ion-icon name="arrow-forward-outline"></ion-icon>
            </a>
        </div>