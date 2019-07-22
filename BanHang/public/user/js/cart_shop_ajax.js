
function cart_ajax(id) {
    console.log(id);
    var token = $('meta[name="csrf-token"]').attr('content');
    var url = '/user/shop/add/' + id;
    var type = 'get';
    $.ajax({
        url: url,
        type: type,
        success: function(response) {
            alert("đã thêm vào giỏ hàng.");
            var count_cart = response;
            $('.count_cart').html([count_cart]);
        },
    });
}

function delete_cart_ajax(id,thisButton) {
    var url = '/user/cart/' + id;
    var type = 'get';
    $.ajax({
        url: url,
        type: type,
        success: function(response) {
            $(thisButton).parents('.product-cart').remove();
        },
    });
}

