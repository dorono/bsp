jQuery(document).ready(function() {
    jQuery('a.buy-btn').on('click', function(e) {
        e.preventDefault();
        console.log(jQuery('select#product_options').val());
    });
});
