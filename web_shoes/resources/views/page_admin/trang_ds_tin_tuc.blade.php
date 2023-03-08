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
                            Bảng sản phẩm
                        </header>

                        <table id="ds_tin_tuc" class="table table-striped table-advance table-hover">
                            <thead>
                                <tr>
                                    <th><i class="icon_mail_alt"></i> STT</th>
                                    <th><i class="icon_profile"></i> Tiêu đề tin</th>
                                    <th><i class="icon_calendar"></i> Tóm tắt tin</th>
                                    <th><i class="icon_calendar"></i> Loại tin tức</th>
                                    <th><i class="icon_cogs"></i> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ds_tin_tuc as $tin_tuc)
                                    <tr>
                                        <td>{{ $tin_tuc->ID }}</td>
                                        <td>{{ $tin_tuc->tieu_de }}</td>
                                        <td>{{ $tin_tuc->tom_tat }}</td>
                                        <td>{{ $tin_tuc->ten_loai_tin}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-primary"
                                                    href="/admin/ql-tin_tuc/edit/{{ $tin_tuc->ID }}"><i
                                                        class="icon_pencil"></i></a>
                                                <a class="btn btn-danger" onclick="return confirm_delete();"
                                                    href="/admin/ql-tin_tuc/delete/{{ $tin_tuc->ID }}"><i
                                                        class="icon_trash"></i></a>
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
        $(document).ready(function() {
            $('#ds_tin_tuc').DataTable();
        });
    </script>
    <!--main content end-->
@endsection
