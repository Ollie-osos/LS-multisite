(function($){

  
    // Initialize each block on page load (front end).
    $(document).ready(function(){
        $('.menu-item').hasClass("menu-item-has-children")(function(){
            alert("has child");
        });
    });


})(jQuery);