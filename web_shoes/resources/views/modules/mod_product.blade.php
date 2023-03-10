<div class="container">
    <div class="women-product">
        <div class=" w_content">
            <div class="women">
                <a href="#">
                    @if (isset($name_loai_sp))
                        @foreach ($name_loai_sp as $name)
                            <h4>{{$name->ten_loai_sp}}</h4>
                        @endforeach
                    @endif
                </a>
                {{-- <ul class="w_nav">
                    <li>Sort : </li>
                    <li><a class="active" href="#">popular</a></li>
                    |
                    <li><a href="#">new </a></li>
                    |
                    <li><a href="#">discount</a></li>
                    |
                    <li><a href="#">price: Low High </a></li>
                    <div class="clearfix"> </div>
                </ul> --}}
                <div class="clearfix"> </div>
            </div>
        </div>
        @if (isset($list_sp))
            @foreach ($list_sp as $sp)
                <div class="grid-product">
                    <div class="product-grid">
                        <div class="content_box">
                            <a href="single.html"> </a>
                            <div class="left-grid-view grid-view-left">
                                <img src="images/hinh_sp/{{ $sp->hinh }}" class="img-responsive watch-right"
                                    alt="" />
                                <div class="mask">
                                    <div class="info">Quick View</div>
                                </div>
                            </div>
                            <h4><a href="/single?id_sp={{ $sp->ID }}">{{ $sp->ten_san_pham }}</a></h4>
                            <p>It is a long established fact that a reader</p>
                            <span class="actual">@VND_monney($sp->gia_giam) ₫</span><br>
                            <span class="reducedfrom">@VND_monney($sp->don_gia) ₫</span>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    @include('modules.mod_sub_cate')
</div>
