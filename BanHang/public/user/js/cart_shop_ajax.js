function cart_ajax(id) {
    console.log(id);
    var token = $('meta[name="csrf-token"]').attr('content');
    var url = 'http://localhost/Laravel/BanHang/New%20folder/aiconcho/BanHang/public/user/shop/add/' + id;
    var type = 'get';
    $.ajax({
        url: url,
        type: type,
        success: function(response) {
            console.log(response);
        },
    });
}