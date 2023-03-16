@extends('templates.template_admin')

@section('main-content')
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i>Thêm sản phẩm mới</h3>
                 
                </div>
            </div>
            @include('page_admin.modules.mod_edit_don_hang')
        </section>
    </section>
@endsection
