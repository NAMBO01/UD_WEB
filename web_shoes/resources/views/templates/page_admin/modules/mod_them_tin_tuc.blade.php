<div class="container">
    <form action="" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
        @csrf
        <div class="form_them_san_pham">
            <div class="form-group">
                <legend>Tin tức</legend>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    Tên tin tức
                </div>
                <div class="col-md-9">
                    <input type="text" name="ten_san_pham" id="ten_san_pham" class="form-control" value=""
                        required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    Loại tin tức
                </div>
                <div class="col-md-9">
                    <select name="id_loai_tin_tuc" id="id_loai_tin_tuc" class="form-control" value=""
                        required="required" name="" id="">
                        @if (isset($list_loai_tin_tuc))
                            @foreach ($list_loai_tin_tuc as $loai_tin_tuc)
                                <option value="{{ $loai_tin_tuc->ID_loai_tin_tuc }}">
                                    {{ $loai_tin_tuc->ID_loai_tin_tuc }} -
                                    <span>{{ $loai_tin_tuc->ten_loai_tin_tuc }}</span></span></option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    Tóm tắt tin
                </div>
                <div class="col-md-9">
                    <textarea name="tom_tat" id="tom_tat" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    Chi tiết tin
                </div>
                <div class="col-md-9">
                    <input type="text" name="chi_tiet_tin" id="chi_tiet_tin" class="form-control" value=""
                        required="required" title="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-3">
                    Loại tin tức
                </div>
                <div class="col-md-9">
                    <input type="text" name="ten_loai_tin" id="ten_loai_tin" class="form-control" value=""
                        required="required" title="">
                </div>
            </div>



            <div class="form-group">
                <div class="col-md-9 col-sm-offset-3">
                    <button type="submit" class="btn btn-primary" style="padding: 5px 30px">Thêm tin tức</button>
                </div>
            </div>
        </div>
    </form>
</div>
