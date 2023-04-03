<?php
/**
 * Displays the menu in overlay
 *
 * @package WordPress
 * @subpackage Laurence_Simons_2022
 * @since Laurence Simons 2022 1.0
 */

?>

<div id="nav-overlay" class="overlay nav-overlay">
    <?php
    wp_nav_menu(
        array(
            'menu' => 'primary',
            'container' => '',
            'theme_location' => 'primary',
            'items_wrap' => '<ul class="list-unstyled is-flex is-flex-direction-column">%3$s</ul>'
        )
    ); ?>
</div>

<script>
    (function($) {
        $(document).ready(function () {
            $( "#btn-toggleNav" ).click(function() { // when pressing the navigation button

                if($("#nav-overlay").hasClass('open')){ // if nav overlay open, close it

                    $("body").css('overflow-y', ''); // disable scroll on body element

                    $("#nav-overlay").css('display', 'none').removeClass('open');
                    $("#btn-contact").css('display', 'block');
                    $("#btn-toggleNav ion-icon").attr("name", "menu-outline");
                    $("#navbar-logo").attr("src", "<?php echo $args['header_logo'] ?>");

                }else{ // If nav overlay close, open it and change button icon
                    // If search overlay is active - reset all the settings to avoid both being open
                    if($("#search-overlay").hasClass('open')){
                        $("#search-overlay").css('display', 'none').removeClass('open');
                        $("#btn-toggleSearch ion-icon").attr("name", "search-outline");
                    }

                    $("body").css('overflow-y', 'hidden');  // enable scroll on body element

                    $("#nav-overlay").css('display', 'block').addClass('open');
                    $("#btn-contact").css('display', 'none');
                    $("#btn-toggleNav ion-icon").attr("name", "close");
                    $("#navbar-logo").attr("src", "<?php echo $args['menu_logo'] ?>");

                }
            });

        });
    })(jQuery);
</script>
