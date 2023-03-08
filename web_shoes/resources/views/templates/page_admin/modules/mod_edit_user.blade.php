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
                <legend>Thông tin khách hàng</legend>
            </div>
            <?php
            foreach($ds_user as $user){
            ?>
            <div class="form-group">
                <div class="col-md-3">
                    Tên tài khoản
                </div>
                <div class="col-md-9">
                    <input type="text" name="ten_san_pham" id="ten_san_pham" class="form-control"
                        value="<?php echo $user->tai_khoan; ?>" required="required" title="">
                </div>
            </div>
            <?php
            }
            ?>
            <div class="form-group">
                <div class="col-md-3">
                    Loại thành viên
                </div>
                <div class="col-md-9">
                    <select name="id_loai_thanh_vien" id="id_loai_thanh_vien" class="form-control" value=""
                        required="required" name="" id="">
                        @if (isset($loai_tv))
                            @foreach ($loai_tv as $thanh_vien)
                                <option value="{{ $thanh_vien->ID }}">{{ $thanh_vien->ID }} -
                                    <span>{{ $thanh_vien->ten_loai_user }}</span></span>
                                </option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <?php
            foreach($ds_user as $user){
            ?>
            <div class="form-group">
                <div class="col-md-3">
                    Mật khẩu
                </div>
                <div class="col-md-9">
                    <input type="text" name="mat_khau" id="mat_khau" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    Email
                </div>
                <div class="col-md-9">
                    <input type="text" name="email" id="email" class="form-control" value="<?php echo $user->email; ?>"
                        required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">

                    Số điện thoại
                </div>
                <div class="col-md-9">
                    <input type="text" name="dien_thoai" id="dien_thoai" class="form-control"
                        value="<?php echo $user->dien_thoai; ?>" required="required" title="">
                </div>
            </div>

            <?php
}
?>
            <div class="form-group">
                <div class="col-md-9 col-sm-offset-3">
                    <button type="submit" class="btn btn-primary" style="padding: 5px 30px">Lưu thay đổi</button>
                </div>
            </div>
        </div>
    </form>
</div>
