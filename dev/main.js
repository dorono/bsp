jQuery(document).ready(function($) {
    $('a.buy-btn').on('click', function(e) {
        e.preventDefault();
        window.location.href='http://www.infinitemusician.com/shop/saxophone-education/bulletproof-saxophone-playing/?add-to-cart=' + $('select#product_options').val(); 
    });
});
