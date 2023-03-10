<div class="container">
    <div class=" single_top">
        <div class="single_grid">
            <div class="grid images_3_of_2">
                <ul id="etalage">
                    @if (isset($sp_single))
                        @foreach ($sp_single as $sp_s)
                            <li>
                                <img class="etalage_thumb_image" src="images/hinh_sp/{{ $sp_s->hinh }}"
                                    class="img-responsive" />
                                <img class="etalage_source_image" src="images/hinh_sp/{{ $sp_s->hinh }}"
                                    class="img-responsive" title="" />
                            </li>
                        @endforeach
                        @if (isset($img_more))
                            @foreach ($img_more as $img)
                                <li>
                                    <img class="etalage_thumb_image" src="images/hinh_sp/{{ $img->ten_hinh }}"
                                        class="img-responsive" />
                                    <img class="etalage_source_image" src="images/hinh_sp/{{ $img->ten_hinh }}"
                                        class="img-responsive" title="" />
                                </li>
                            @endforeach
                        @endif

                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="desc1 span_3_of_2">
                <h4>{{ $sp_s->ten_san_pham }}</h4>
                <div class="cart-b">
                    <div class="left-n">@VND_monney($sp_s->gia_giam) đ
                    <span class="left-n reducedfrom">@VND_monney($sp_s->don_gia) ₫</span>
                    </div>
                    <a class="now-get get-cart-in" href="gio-hang?id_sp={{ $sp_s->ID }}"
                        data-id-sp="{{ $sp_s->ID }}">ADD TO CART</a>
                    <div class="clearfix"></div>
                </div>
                {{-- <h6>100 items in stock</h6> --}}
                <p>{{ $sp_s->gioi_thieu }}</p>
                @endif
                {{-- <div class="share">
                    <h5>Share Product :</h5>
                    <ul class="share_nav">
                        <li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>
                        <li><a href="#"><img src="images/twitter.png" title="Twiiter"></a></li>
                        <li><a href="#"><img src="images/rss.png" title="Rss"></a></li>
                        <li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>
                    </ul>
                </div> --}}


            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="toogle">
            <h3 class="m_3">Các sản phẩm khác</h3>
        </div>
        <ul id="flexiselDemo1">
            @if (isset($list_mau_ao_moi))
                @foreach ($list_mau_ao_moi as $sp)
                    <li><img src="images/hinh_sp/{{ $sp->hinh }}" alt="" />
                        <div class="grid-flex">

                            <a href="/single?id_sp={{ $sp->ID }}">
                                <p class="in_one_line">
                                    {{ $sp->ten_san_pham }}
                                </p>
                            </a>
                            <p style="margin-top: -20px ">@VND_monney($sp->don_gia) đ</p>
                        </div>
                    </li>
                @endforeach
        </ul>
        @endif
    </div>
    @include('modules.mod_sub_cate')

    <!---->

</div>
<div class="clearfix"> </div>
</div>
<!---->
