function cart_ajax(id) {
    var token = $('meta[name="csrf-token"]').attr('content');
    var url = 'http://localhost/Laravel/BanHang/New%20folder/aiconcho/BanHang/public/user/shop/add/' + id;
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

function delete_cart_ajax(id) {

    $(this).parents().css("display: ", "none");
    var url = 'http://localhost/Laravel/BanHang/New%20folder/aiconcho/BanHang/public/user/cart/' + id;
    var type = 'get';
    $.ajax({
        url: url,
        type: type,
        success: function(response) {
            alert("đã xóa 1 hàng trong giỏ.");
        },
    });
}