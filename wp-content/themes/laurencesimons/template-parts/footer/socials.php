
<?php if($socials):  ?>
    <div class="site-footer-social column is-one-fifth" aria-label="<?php esc_attr_e( 'Social links', 'lss' ); ?>">
        <h5>Socials</h5>
        <?php
        wp_nav_menu(
            array(
                'theme_location'  => 'social',
                'container'       => '',
                'container_class' => '',
                'items_wrap' => '<ul class="list-unstyled is-flex is-align-items-center">%3$s</ul>',
                'menu_id'         => '',
                'menu_class'      => '',
                'depth'           => 1,
                'link_before'     => '<span class="screen-reader-text">',
                'link_after'      => '</span>',
                'fallback_cb'     => '',
            )
        ); ?>
    </div>
<?php endif; ?>