$(() => {
    $(".now-get").click((e) => {
        e.preventDefault();

        // location.reload();

        id_sp = $(e.target).attr("data-id-sp");
        // console.log('nút mua ngay được click ' + id_sp);
        $.get("http://localhost:8000/add-gio-hang/" + id_sp)
            .done((data) => {
                // console.log(data);
                var gio_hang = JSON.parse(data);
                // console.log(gio_hang);

                var tong_so_luong = 0;
                for (var i = 0; i < gio_hang.length; i++) {
                    tong_so_luong += gio_hang[i].so_luong;
                }

                $('.number_item_cart').removeClass('hidden');
                $('.number_item_cart').html(tong_so_luong);

            })
            .fail((err) => {
                console.log(err);
            });
    });
});
