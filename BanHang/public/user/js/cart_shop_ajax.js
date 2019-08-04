function cart_ajax(id) {
    console.log(id);
    var token = $('meta[name="csrf-token"]').attr('content');
    var url = '/user/shop/add/' + id;
    var type = 'get';
    $.ajax({
        url: url,
        type: type,
        success: function(response) {
            console.log(response);
            console.log(response.content);
            console.log(response.count);

            alert("đã thêm vào giỏ hàng.");
            var count_cart = response.count;
            $('.count_cart').html([count_cart]);
            var list_cart = response.content;
            var content = "";
            $.each(list_cart, function(key, value) {
                content += '<div class="product-cart">';
                content += '<div class="one-forth">';
                content += '<div class="product-img">';
                content += '<img src="http://banhang.win/' + value.options.image + '" width="100" alt="">';
                content += '</div>';
                content += '<div class="display-tc">';
                content += '<h3 id="modal_name">' + value.name + '</h3>';
                content += '</div>';
                content += '</div>';
                content += '<div class="one-eight text-center">';
                content += '<div class="display-tc">';
                content += '<span class="price">' + value.price + '</span>';
                content += '</div>';
                content += '</div>';
                content += '<div class="one-eight text-center">';
                content += '<div class="display-tc">';
                content += '<h3>' + value.qty + '</h3>';
                content += '</div>';
                content += '</div>';
                content += '<div class="one-eight text-center">';
                content += '<div class="display-tc">';
                content += '<h3>' + value.subtotal + '</h3>';
                content += '</div>';
                content += '</div>';
                content += '<div class="one-eight text-center">';
                content += '<div class="display-tc">';
                content += '<div class="closed button-delete"  onclick="delete_cart_ajax('+ "\'"+ value.rowId +"\'" +',this)"></div>;'
                content += '</div>';
                content += '</div>';
                content += '</div>';

                // var html = "";
                //     var item = "<tr>";
                //     "<td>" + value.name + "</td>";

                // $.each(value, function(itemKey, itemValue) {
                //     console.log(itemKey + ' ' + itemValue);
                //      if (itemKey == 'name') {
                //          console.log(' this itemKey: ' + itemKey + ' this itemValue: ' + itemValue);
                //      }
                // });
            });
            $('.modal-body').html(content);

        },
    });
}

function delete_cart_ajax(id, thisButton) {
    var url = '/user/cart/delete/' + id;
    var type = 'get';
    $.ajax({
        url: url,
        type: type,
        success: function(response) {
            $(thisButton).parents('.product-cart').remove();
        },
    });
}

function content_cart_load_more_ajax() {
    console.log('content_cart_load_more_ajax');
    var url = '/user/cart/content_cart_load_more_ajax';
    var type = 'get';
    $.ajax({
        url: url,
        type: type,
        success: function(response) {
            $('.modal-body').html(response);
        },
    });
}


function pending_ajax() {
    console.log('pending_ajax');
}