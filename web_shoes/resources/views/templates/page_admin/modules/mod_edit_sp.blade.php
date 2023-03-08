@if (isset($NoticeSuccess))
    <script>
        alert("{{ $NoticeSuccess }}");
    </script>
@endif
<div class="container">
    <form action="" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
        @csrf
        <div class="form_them_san_pham">
            <div class="form-group">
                <legend>Thông tin sản phẩm</legend>
            </div>
            <?php
            foreach($info_product as $ip){
            ?>
            <div class="form-group">
                <div class="col-md-3">
                    Tên sản phẩm
                </div>
                <div class="col-md-9">
                    <input type="text" name="ten_san_pham" id="ten_san_pham" class="form-control"
                        value="<?php echo $ip->ten_san_pham; ?>" required="required" title="">
                </div>
            </div>
            <?php
            }
            ?>
            <div class="form-group">
                <div class="col-md-3">
                    Loại sản phẩm
                </div>
                <div class="col-md-9">
                    <select name="id_loai_sp" id="id_loai_sp" class="form-control" value="" required="required"
                        name="" id="">
                        @if (isset($list_loai_sp))
                            @foreach ($list_loai_sp as $l_sp)
                                <option value="{{ $l_sp->ID_loai_sp }}">{{ $l_sp->ID_loai_sp }} -
                                    <span>{{ $l_sp->ten_loai_sp }}</span></span>
                                </option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <?php
            foreach($info_product as $ip){
            ?>
            <div class="form-group">
                <div class="col-md-3">
                    Giới thiệu
                </div>
                <div class="col-md-9">
                    <textarea cols="30" rows="10"name="gioi_thieu" id="gioi_thieu" class="form-control"><?php echo $ip->gioi_thieu; ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    Đơn giá
                </div>
                <div class="col-md-9">
                    <input type="text" name="don_gia" id="don_gia" class="form-control" value="<?php echo $ip->don_gia; ?>"
                        required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    Giá giảm
                </div>
                <div class="col-md-9">
                    <input type="text" name="gia_giam" id="gia_giam" class="form-control"
                        value="<?php echo $ip->gia_giam; ?>" required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    SKU
                </div>
                <div class="col-md-9">
                    <input type="text" name="sku" id="sku" class="form-control" value="<?php echo $ip->sku; ?>"
                        required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    Nhà sản xuất
                </div>
                <div class="col-md-9">
                    <select name="id_nha_san_xuat" id="id_nha_san_xuat" class="form-control" value=""
                        required="required" name="" id="">
                        @if (isset($ds_nsx))
                            @foreach ($ds_nsx as $nsx)
                                <option value="{{ $nsx->ID }}">{{ $nsx->ID }} -
                                    <span>{{ $nsx->ten_nha_san_xuat }}</span></span>
                                </option>
                            @endforeach
                        @endif
                    </select>

                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    Nổi bật
                </div>
                <div class="col-md-9">
                    <Select name="noi_bat" id="noi_bat" class="form-control" value="" required="required">
                        <option value="1">1</option>
                        <option value="0">0</option>
                    </Select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    Trạng thái
                </div>
                <div class="col-md-9">
                    <Select name="trang_thai" id="trang_thai" class="form-control" value="" required="required">
                        <option value="1">1</option>
                        <option value="0">0</option>
                    </Select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    Hình sản phẩm
                </div>
                <div class="col-md-9">
                    <input type="file" name="hinh" id="hinh" class="form-control">
                    <div id="image-holder">
                        <img src="" alt="thumb-image">
                    </div>
                </div>
                <script>
                    $("#hinh").on('change', function() {

                        if (typeof(FileReader) != "undefined") {

                            var image_holder = $("#image-holder");
                            image_holder.empty();

                            var reader = new FileReader();
                            reader.onload = function(e) {
                                $("<img />", {
                                    "src": e.target.result,
                                    "class": "thumb-image"
                                }).appendTo(image_holder);

                            }
                            image_holder.show();
                            reader.readAsDataURL($(this)[0].files[0]);
                        } else {
                            alert("This browser does not support FileReader.");
                        }
                    });
                </script>
            </div>
            <?php
}
?>
            <div class="form-group">
                <div class="col-md-9 col-sm-offset-3">
                    <button type="submit" class="btn btn-primary" style="padding: 5px 30px">Thêm sản phẩm</button>
                </div>
            </div>
        </div>
    </form>
</div>
