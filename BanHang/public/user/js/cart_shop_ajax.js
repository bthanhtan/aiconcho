function cart_ajax(id) {
    console.log(id);
    var token = $('meta[name="csrf-token"]').attr('content');
    var url = '/user/shop/add/' + id;
    var type = 'get';
    $.ajax({
        url: url,
        type: type,
        success: function(response) {
            console.log(response.content);
            console.log(response.count);

            alert("đã thêm vào giỏ hàng.");
            var count_cart = response.count;
            // json_decode($jsondata, true);
            console.log(count_cart);
            $('.count_cart').html([count_cart]);
            var list_cart = response.content;
            console.log(list_cart);
            // console.log(list_cart[1]);
            for (var i = 0; i < list_cart.length; i++) {
                console.log(list_cart[i]);
            }
            // list_cart.forEach(function(element) {
            //     var name = element.name;
            //     // var price = element.price;
            //     // var qty = element.qty;
            //     console.log(name);
            //     // console.log(price);
            //     // console.log(qty);
            // });

        },
    });
}

function delete_cart_ajax(id, thisButton) {
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