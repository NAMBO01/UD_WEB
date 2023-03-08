<div class="padding-bottom-3x mb-1 include_table_cart">
    {{-- @if (session()->has('gio_hang'))
        @if (count(session('gio_hang')) > 0) --}}
    <!-- Shopping Cart-->
    <div class="table-responsive shopping-cart">
        <table class="table">
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th class="text-center">Số lượng</th>
                    {{-- @if ($allow_update_cart) --}}
                    <th class="text-center">Đơn giá</th>
                    <th class="text-center">Giá được giảm</th>
                    {{-- @endif --}}
                    <th class="text-center">Thành tiền</th>
                    {{-- @if ($allow_update_cart)
                        <th class="text-center"><a class="btn btn-sm btn-outline-danger" onclick="xoa_gio_hang(event)"
                                href="#">Xóa toàn bộ</a>
                        </th>
                    @endif --}}
                </tr>
            </thead>
            <tbody>
                {{-- @foreach (session('gio_hang') as $tt_dh) --}}
                @foreach ($tt_don_hang as $tt_dh)
                    <tr id="san_pham_{{ $tt_dh->ID }}">
                        <td>
                            <div class="product-item">
                                <a class="product-thumb" href="#"><img src="/images/hinh_sp/{{ $tt_dh->hinh }}"
                                        alt="Product"></a>
                                <div class="product-info">
                                    <h4 class="product-title"><a href="#">{{ $tt_dh->ten_san_pham }}</a>
                                    </h4>
                                    <span><em>Size:</em>
                                    </span><span><em>Color:</em> Dark Blue</span>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="count-input">
                                {{-- @if ($allow_update_cart) --}}
                                <input class="so_luong_input" id="so_luong_{{ $tt_dh->ID }}"
                                    onchange="thay_doi_so_luong_gio_hang({{ $tt_dh->ID }})" type="number"
                                    class="form-control" name="" id="" value="{{ $tt_dh->so_luong }}">
                                {{-- @else --}}
                                {{ $tt_dh->so_luong }}
                                {{-- @endif --}}
                            </div>
                        </td>
                        {{-- @if ($allow_update_cart) --}}
                        <td id="don_gia_{{ $tt_dh->ID }}" class="text-center text-lg text-medium">
                            @VND_monney($tt_dh->don_gia) đ </td>
                        <td id="gia_duoc_giam_{{ $tt_dh->ID }}"class="text-center text-lg text-medium">
                            @VND_monney($tt_dh->gia_giam) đ</td>
                        {{-- @endif --}}
                        <td class="thanh_tien" id="thanh_tien_{{ $tt_dh->ID }}"
                            class="text-center text-lg text-medium">
                            @VND_monney($tt_dh->gia_giam * $tt_dh->so_luong) đ</td>
                        {{-- @if ($allow_update_cart) --}}
                        <td class="text-center"><a class="remove-from-cart"
                                onclick="nut_thung_rac(event, {{ $tt_dh->ID }})" href="#"
                                data-toggle="tooltip" title="" data-original-title="Remove item"><i
                                    class="fa fa-trash"></i></a>
                        </td>
                        {{-- @endif --}}
                    </tr>
                @endforeach
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>

    {{-- @if ($allow_update_cart) --}}
    <div class="shopping-cart-footer">
        <div class="column">
            {{-- <form class="coupon-form" method="post">
                            <input class="form-control form-control-sm" type="text" placeholder="MÃ GIẢM GIÁ"
                                required="">
                            <button class="btn btn-outline-primary btn-sm" type="submit">Nhập mã giảm giá</button>
                        </form> --}}
        </div>
        {{-- @endif --}}
        <div class="column text-lg text-right" id="tong_tien">Tổng tiền: <span class="text-medium">@VND_monney(session('tong_tien'))
                đ</span>
        </div>
    </div>
    {{-- @if ($allow_update_cart)
    <div class="shopping-cart-footer">
        <div class="column"><a class="btn btn-outline-secondary" href="/"><i
                    class="icon-arrow-left"></i>&nbsp;Quay lại trang chủ</a></div>
        <div class="column"><a class="btn btn-primary" href="/thanh-toan" data-toast="" data-toast-type="success"
                data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Your cart"
                href="/thanh-toan">Thanh toán</a></div>
    </div>
@endif
@else
<div class="container">
    <div class="notice">
        <h3>không có sản phẩm trong giỏ hàng</h3>
    </div>
</div>
@endif
@endif --}}
</div>
{{-- <script>
    function xoa_gio_hang(e) {
        e.preventDefault();
        var kq = confirm('Bạn có chắc chắn muốn xóa toàn bộ giỏ hàng');
        if (kq) {
            $.get('/xoa-gio-hang/')
                .done((data) => {
                    if (data) {
                        $('.number_item_cart').remove();
                        $('.include_table_cart').html(`<div class="container">
            <div class = "notice" >
                <h3> không có sản phẩm trong giỏ hàng </h3>
            </div>
            </div>`);
                    }
                })
                .fail(err => {
                    console.log(err);
                })



        } else {
            //khong lam gi het
        }
    }


    function process_gio_hang_client(id_sp, so_luong) {
        $('#thanh_tien_' + id_sp).html((parseInt($('#gia_duoc_giam_' + id_sp).html().replace(/,/gi, "")) * so_luong)
            .toLocaleString('vi', {
                style: 'currency',
                currency: 'VND'
            }))
        var ds_thanh_tien = $('.thanh_tien');
        var ds_so_luong = $('.so_luong_input');

        var tong_tien = 0;
        var tong_so_luong = 0;

        for (var i = 0; i < ds_thanh_tien.length; i++) {
            tong_tien += parseInt($(ds_thanh_tien[i]).html().replace(/\./gi, ""));
            tong_so_luong += parseInt($(ds_so_luong[i]).val());
        }

        $('#tong_tien').html('Tổng tiền: ' + tong_tien.toLocaleString('vi', {
            style: 'currency',
            currency: 'VND'
        }) + '');
        $('.number_item_cart').html(tong_so_luong);
    }

    function nut_thung_rac(e, id_sp) {
        e.preventDefault();
        var kq = confirm('Bạn có muốn xóa sản phẩm khỏi giỏ hàng?');
        if (kq) {
            $.get('/xoa-item-gio-hang/' + id_sp)
                .done((data) => {
                    if (data) {
                        $('#san_pham_' + id_sp).remove();
                        process_gio_hang_client(id_sp, 0);
                    }
                })
                .fail(err => {
                    console.log(err);
                })
        } else {
            //khong lam gi het
        }
    }

    function thay_doi_so_luong_gio_hang(id_sp) {
        var so_luong = $('#so_luong_' + id_sp).val();

        if (so_luong > 0) {
            $.get('/update-gio-hang/' + id_sp + '?so_luong=' + so_luong)
                .done((data) => {
                    if (data) {
                        // process_gio_hang_client(id_sp, so_luong);
                        process_gio_hang_client(id_sp, so_luong);
                    }
                })
                .fail(err => {
                    console.log(err);
                })
        } else {
            var kq = confirm('Bạn có muốn xóa sản phẩm khỏi giỏ hàng?');
            if (kq) {
                $.get('/xoa-item-gio-hang/' + id_sp)
                    .done((data) => {
                        if (data) {
                            $('#san_pham_' + id_sp).remove();
                            process_gio_hang_client(id_sp, 0);
                        }
                    })
                    .fail(err => {
                        console.log(err);
                    })
            } else {
                $.get('/update-gio-hang/' + id_sp + '?so_luong=' + 1)
                    .done((data) => {
                        if (data) {
                            $('#so_luong_' + id_sp).val(1);
                            process_gio_hang_client(id_sp, 1);
                        }
                    })
                    .fail(err => {
                        console.log(err);
                    })
            }
        }
    }
</script> --}}
