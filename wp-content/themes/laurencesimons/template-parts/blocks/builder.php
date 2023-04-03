<?php
        // Simple text editor
        if( get_row_layout() == 'text_editor' ):
            $id = wp_unique_id( $prefix = '' );
            $text = get_sub_field('text');
            $background_color = get_sub_field('background_color');
            $display_circles = get_sub_field('display_circles');
            $circles_color = get_sub_field('circles_color');
            $block_alignment = get_sub_field('block_alignment');
            $y_paddings = get_sub_field('y_paddings');
            include('text.php');


        // Text Block
        elseif( get_row_layout() == 'text_block' ):
            $id = wp_unique_id( $prefix = '' );
            $display_heading = get_sub_field('display_heading');
            $heading_type = get_sub_field('heading_type');
            $heading = get_sub_field('heading');
            $display_cta = get_sub_field('display_cta');
            $cta_link = get_sub_field('cta_link');
            $text = get_sub_field('text');
            $display_image = get_sub_field('display_image');
            $image = get_sub_field('image');
            $background_color = get_sub_field('background_color');
            $display_circles = get_sub_field('display_circles');
            $circles_color = get_sub_field('circles_color');
            $block_alignment = get_sub_field('block_alignment');
            $y_paddings = get_sub_field('y_paddings');
            include('text-block.php');



        // Text full width centered
        elseif( get_row_layout() == 'text_full_width_centered' ):
            $id = wp_unique_id( $prefix = '' );
            $display_heading = get_sub_field('display_heading');
            $heading_type = get_sub_field('heading_type');
            $heading = get_sub_field('heading');
            $text = get_sub_field('text');
            $display_cta = get_sub_field('display_cta');
            $cta_link = get_sub_field('cta_link');
            $cta_action = get_sub_field('cta_action');
            $display_background_image = get_sub_field('display_background_image');
            $padding_settings = get_sub_field('padding_settings');
            $image = get_sub_field('image');
            $background_color = get_sub_field('background_color');
            $display_circles = get_sub_field('display_circles');
            $circles_color = get_sub_field('circles_color');
            $y_paddings = get_sub_field('y_paddings');
            include('text-full-width-centered.php');

            // Text full width image
        elseif( get_row_layout() == 'full_width_image' ):
            $image = get_sub_field('image');
            include('full-width-image.php');


        // Text block + carousel
        elseif( get_row_layout() == 'text_plus_carousel' ):
            $id = wp_unique_id( $prefix = '' );
            $display_heading = get_sub_field('display_heading');
            $heading_type = get_sub_field('heading_type');
            $heading = get_sub_field('heading');
            $text = get_sub_field('text');
            $display_cta = get_sub_field('display_cta');
            $cta_link = get_sub_field('cta_link');
            $cta_action = get_sub_field('cta_action');
            $carousel = get_sub_field('carousel');
            $background_color = get_sub_field('background_color');
            $display_circles = get_sub_field('display_circles');
            $circles_color = get_sub_field('circles_color');
            $y_paddings = get_sub_field('y_paddings');
            include('text-plus-carousel.php');


        // Text + Image Overlap
        elseif( get_row_layout() == 'text_plus_image_overlap' ):
            $id = wp_unique_id( $prefix = '' );
            $display_heading = get_sub_field('display_heading');
            $heading_type = get_sub_field('heading_type');
            $heading = get_sub_field('heading');
            $display_cta = get_sub_field('display_cta');
            $cta_link = get_sub_field('cta_link');
            $text = get_sub_field('text');
            $image = get_sub_field('image');
            $background_color = get_sub_field('background_color');
            $display_circles = get_sub_field('display_circles');
            $circles_color = get_sub_field('circles_color');
            $block_order = get_sub_field('block_order');
            $y_paddings = get_sub_field('y_paddings');
            include('text-plus-image-overlap-block.php');



        // Two Column Text
        elseif( get_row_layout() == '2_column_text' ):
            $id = wp_unique_id( $prefix = '' );
            $heading_number = get_sub_field('heading_number');
            $heading_type = get_sub_field('heading_type');
            $only_one_heading = get_sub_field('only_one_heading');
            $heading_column_1 = get_sub_field('heading_column_1');
            $heading_column_2 = get_sub_field('heading_column_2');
            $image_column_1 = get_sub_field('image_column_1');
            $image_column_2 = get_sub_field('image_column_2');
            $text_column_1 = get_sub_field('text_column_1');
            $text_column_2 = get_sub_field('text_column_2');
            $display_cta = get_sub_field('display_cta');
            $cta_number = get_sub_field('cta_number');
            $main_cta_link = get_sub_field('only_one_cta_link');
            $main_cta_action = get_sub_field('only_one_cta_action');
            $cta_link_column_1 = get_sub_field('cta_link_column_1');
            $cta_action_column_1 = get_sub_field('cta_action_column_1');
            $cta_link_column_2 = get_sub_field('cta_link_column_2');
            $cta_action_column_2 = get_sub_field('cta_action_column_2');
            $background_color = get_sub_field('background_color');
            $display_circles = get_sub_field('display_circles');
            $circles_color = get_sub_field('circles_color');
            $y_paddings = get_sub_field('y_paddings');
            include('2-column-text.php');


        // Three Column Text
        elseif( get_row_layout() == '3_column_text' ):
            $id = wp_unique_id( $prefix = '' );
            $heading_number = get_sub_field('heading_number');
            $heading_type = get_sub_field('heading_type');
            $only_one_heading = get_sub_field('only_one_heading');
            $heading_column_1 = get_sub_field('heading_column_1');
            $heading_column_2 = get_sub_field('heading_column_2');
            $heading_column_3 = get_sub_field('heading_column_3');
            $text_column_1 = get_sub_field('text_column_1');
            $text_column_2 = get_sub_field('text_column_2');
            $text_column_3 = get_sub_field('text_column_3');
            $display_cta = get_sub_field('display_cta');
            $cta_link = get_sub_field('only_one_cta_link');
            $cta_action = get_sub_field('only_one_cta_action');
            $background_color = get_sub_field('background_color');
            $display_circles = get_sub_field('display_circles');
            $circles_color = get_sub_field('circles_color');
            $y_paddings = get_sub_field('y_paddings');
            include('3-column-text.php');


        // Quote Carousel
        elseif( get_row_layout() == 'quote_carousel' ):
            $id = wp_unique_id( $prefix = '' );
            $quotes = get_sub_field('quotes');
            $display_cta = get_sub_field('display_cta');
            $cta_link = get_sub_field('cta_link');
            $cta_action = get_sub_field('cta_action');
            $background_color = get_sub_field('background_color');
            $y_paddings = get_sub_field('y_paddings');
            include('quote-carousel.php');

        // Post carousel
        elseif( get_row_layout() == 'carousel' ):
            $id = wp_unique_id( $prefix = '' );
            $display_heading = get_sub_field('display_heading');
            $heading_type = get_sub_field('heading_type');
            $heading = get_sub_field('heading');
            $text = get_sub_field('text');
            $display_cta = get_sub_field('display_cta');
            $cta_link = get_sub_field('cta_link');
            $cta_action = get_sub_field('cta_action');
            $archives = get_sub_field('archives');
            $max_number = get_sub_field('max_number');
            $background_color = get_sub_field('background_color');
            $y_paddings = get_sub_field('y_paddings');
            include('carousel.php');


        // Client list
        elseif( get_row_layout() == 'client_list' ):
            $id = wp_unique_id( $prefix = '' );
            $display_heading = get_sub_field('display_heading');
            $heading_type = get_sub_field('heading_type');
            $heading = get_sub_field('heading');
            $clients_logo = get_sub_field('clients_logo');
            $background_color = get_sub_field('background_color');
            $display_circles = get_sub_field('display_circles');
            $circles_color = get_sub_field('circles_color');
            $y_paddings = get_sub_field('y_paddings');
            include('client-list.php');

        // Post list
//        elseif( get_row_layout() == 'post_list' ):
//            $id = wp_unique_id( $prefix = '' );
//            $display_heading = get_sub_field('display_heading');
//            $heading_type = get_sub_field('heading_type');
//            $heading = get_sub_field('heading');
//            $display_cta = get_sub_field('display_cta');
//            $cta_link = get_sub_field('cta_link');
//            $cta_action = get_sub_field('cta_action');
//            $our_clients = get_sub_field('posts');
//            $background_color = get_sub_field('background_color');
//            $display_circles = get_sub_field('display_circles');
//            $circles_color = get_sub_field('circles_color');
//            $y_paddings = get_sub_field('y_paddings');
//            include('post-list.php');


        // Spacer
        elseif( get_row_layout() == 'spacer_block' ):
            $height = get_sub_field('height');
            $background_color = get_sub_field('background_color');
            $display_circles = get_sub_field('display_circles');
            $circles_color = get_sub_field('circles_color');
            $y_paddings = get_sub_field('y_paddings');
            include('spacer-block.php');



            ?>

        <?php endif; ?>
