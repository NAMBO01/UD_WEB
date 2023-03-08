@extends('templates.template_admin')

@section('main-content')
<!--main content start-->
<link rel="stylesheet" href="css/data_table.min.css">
<script src="js/data_table.min.js"></script>
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                    <li><i class="fa fa-table"></i>Table</li>
                    <li><i class="fa fa-th-list"></i>Basic Table</li>
                </ol>
            </div>
        </div>
        <!-- page start-->

        @if ($errors->NoticeDelete->first())
        {{-- <div class="error_message panel panel-danger">
                <div class="panel-heading">Vui lòng kiểm tra lỗi</div>
                @foreach ($errors->loginErrors->all() as $error)
                    <div class="panel-body item_message text-danger">{{$error}}</div>
        @endforeach
        </div> --}}
        <script>
            alert('{{ $errors->NoticeDelete->first() }}');
        </script>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Bảng Khách hàng
                    </header>

                    <table id="ds_san_pham" class="table table-striped table-advance table-hover">
                        <thead>
                            <tr>
                                <th><i class="icon_profile"></i> Tên Nhân Viên</th>
                                <th><i class="icon_calendar"></i> Email</th>
                                <th><i class="icon_pin_alt"></i> Điện thoại</th>
                                <th><i class="icon_mobile"></i> Loại tài khoản</th>
                                <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ds_nhan_vien as $nhan_vien)
                            <tr>
                                <td>{{ $nhan_vien->ten }}</td>
                                <td>{{ $nhan_vien->email }}</td>
                                <td>{{ $nhan_vien->dien_thoai }}</td>
                                <td>{{ $nhan_vien->ten_loai_user }}</td>
                                <td>
                                    <div class="btn-group" id="btn">
                                        <a class="btn btn-primary" id="edit_{{ $nhan_vien->id }}" href="/admin/ql-nhan-vien/edit/{{ $nhan_vien->id }}"><i class="icon_pencil"></i></a>
                                        <a class="btn btn-danger" onclick="return confirm_delete();" id="{{ $nhan_vien->id }}" href="/admin/ql-nhan_vien/delete/{{ $nhan_vien->id }} "><i class="icon_trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<script>
    // document.getElementById('2').style.visibility = "hidden";
    // xóa btn delete
    var child = document.getElementById('15');
    child.parentNode.removeChild(child);

    document.getElementById("edit_15").style.width = "80px"
</script>
<script>
    $(document).ready(function() {
        $('#ds_san_pham').DataTable();
    });
</script>
<?php

?>

<!--main content end-->
@endsection