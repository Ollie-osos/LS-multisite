<?php

$socials = get_field('social_media', 'option');
$display = get_field('display_social_list', 'option');

?>

<?php if($socials && $display == true): ?>
    <div class="site-footer-social column is-2" aria-label="Social links">
        <h5>Socials</h5>

        <div class="is-flex is-align-items-center">
            <?php foreach( $socials as $social ): ?>
                <?php if($social['display_social'] == true): ?>
                    <a target="_blank" href="<?php echo $social['link_social'] ?>" class="has-icon">
                        <?php echo $social['icon_social'] ?>
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>