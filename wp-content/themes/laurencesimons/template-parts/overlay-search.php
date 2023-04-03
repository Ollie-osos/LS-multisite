<?php
/**
 * Displays the search in overlay
 *
 * @package WordPress
 * @subpackage Laurence_Simons_2022
 * @since Laurence Simons 2022 1.0
 */

?>


<div id="search-overlay" class="overlay search-overlay">
    <ul class="list-unstyled is-flex is-flex-direction-column padding-top-30">
        <li class="menu-item menu-item-type-custom menu-item-object-custom">
            <?php
            get_search_form(
                array(
                    'aria_label' => __( 'Search for:', 'lss' ),
                )
            );
            ?>
        </li>
    </ul>
</div>

<script type="text/javascript">

    (function($) {
        $(document).ready(function () {
            $( "#btn-toggleSearch" ).click(function() { // when pressing the search button

                if($("#search-overlay").hasClass('open')){ // if search overlay open, close it

                    $("body").css('overflow-y', ''); // disable scroll on body element

                    $("#search-overlay").css('display', 'none').removeClass('open');
                    $("#btn-contact").css('display', 'block');
                    $("#btn-toggleSearch ion-icon").attr("name", "search-outline");
                    $("#navbar-logo").attr("src", "<?php echo $args['header_logo'] ?>");

                }else{ // If search overlay close, open it and change button icon

                    // If nav overlay is active - reset all the settings to avoid both being open
                    if($("#nav-overlay").hasClass('open')){
                        $("#nav-overlay").css('display', 'none').removeClass('open');
                        $("#btn-toggleNav ion-icon").attr("name", "menu-outline");
                    }

                    $("body").css('overflow-y', 'hidden');  // enable scroll on body element

                    $("#search-overlay").css('display', 'block').addClass('open');
                    $("#btn-contact").css('display', 'none');
                    $("#btn-toggleSearch ion-icon").attr("name", "close");
                    $("#navbar-logo").attr("src", "<?php echo $args['menu_logo'] ?>");


                }
            })
        });
    })(jQuery);
</script>
