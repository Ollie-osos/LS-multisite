<?php if($quick_links): ?>
    <div class="site-footer-links column is-one-fifth" aria-label="<?php esc_attr_e( 'Footer', 'lss' ); ?>">
        <h5>Quick links</h5>
        <?php
        wp_nav_menu(
            array(
                'menu' => 'Quick links',
                'container' => '',
                'theme_location' => 'footer',
                'items_wrap' => '<ul class="list-unstyled">%3$s</ul>'
            )
        ); ?>
    </div>
<?php endif; ?>