@extends('templates.template_admin')

@section('main-content')
    <section id="main-content">
        <section class="wrapper">
            <div class="container">


                <form action="" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-4 col-lg-4 form_thanh_toan">
                        @foreach ($chi_tiet_don_hang_2 as $don_hang_2)
                            <div class="form-group">
                                <legend>Thông tin đơn hàng mã #{{ $don_hang_2->ma_don_hang }} </legend>
                            </div>

                            <div class="form-group">
                                <div class="col-md-3">
                                    Họ tên:
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="ho_ten" id="ho_ten" class="form-control"
                                        value="{{ $don_hang_2->ho_ten_nguoi_nhan }}" readonly title="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">
                                    Email:
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="email" id="email" class="form-control"
                                        value="{{ $don_hang_2->email_nguoi_nhan }}" readonly title="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">
                                    Điện thoại:
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="dien_thoai" id="dien_thoai" class="form-control"
                                        value="{{ $don_hang_2->sdt_nguoi_nhan }}" readonly title="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">
                                    Địa chỉ:
                                </div>
                                <div class="col-md-9">
                                    <textarea type="text" name="dia_chi" id="dia_chi" class="form-control" rows="10" cols="50" readonly>{{ $don_hang_2->dia_chi_nguoi_nhan }}</textarea>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-8 col-lg-8">
                        <div class="table-responsive">
                            <div class="table-responsive shopping-cart">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Tên sản phẩm</th>
                                            <th class="text-center">Số lượng</th>
                                            <th class="text-center">Đơn giá</th>
                                            <th class="text-center">Giá được giảm</th>
                                            <th class="text-center">Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tt_don_hang as $tt_dh)
                                            <tr id="san_pham_{{ $tt_dh->ID }}">
                                                <td><a class="product-thumb" href="#"><img
                                                            src="/images/hinh_sp/{{ $tt_dh->hinh }}" alt="Product"
                                                            height="120px" width="120px"></a></td>
                                                <td>
                                                    <div class="product-item">

                                                        <div class="product-info">
                                                            <h4 class="product-title"><a
                                                                    href="/single?id_sp={{ $tt_dh->ID }}">{{ $tt_dh->ten_san_pham }}</a>
                                                            </h4>
                                                            <span><em>Size:</em>
                                                            </span><span><em>Color:</em> Dark Blue</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="count-input">
                                                        <input class="so_luong" style=" width: 50px;"
                                                            id="so_luong_{{ $tt_dh->ID }}" type="number"
                                                            value="{{ $tt_dh->so_luong }}" readonly>

                                                    </div>
                                                </td>
                                                <td id="don_gia_{{ $tt_dh->ID }}"
                                                    class="text-center text-lg text-medium">
                                                    @VND_monney($tt_dh->don_gia) đ </td>
                                                <td
                                                    id="gia_duoc_giam_{{ $tt_dh->ID }}"class="text-center text-lg text-medium">
                                                    @VND_monney($tt_dh->gia_giam) đ</td>
                                                <td class="thanh_tien" id="thanh_tien"
                                                    class="text-center text-lg text-medium"> @VND_monney($tt_dh->thanh_tien) đ</td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="shopping-cart-footer">
                                <div class="column">
                                </div>
                                <div class="column text-lg text-right" id="tong_tien">Tổng tiền: <span
                                        class="text-medium">@VND_monney($tt_dh->tong_tien)
                                        đ</span>
                                </div>
                            </div>
                </form>
            </div>

            </div>
        </section>
    </section>
    <script>
        $so_luong = document.getElementById('so_luong');
        $gia_giam = document.getElementById('gia_giam');
        $thanh_tien = $so_luong * $gia_giam

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
    </script>
@endsection
