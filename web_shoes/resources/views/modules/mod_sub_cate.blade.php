<div class="sub-cate">
    <div class=" top-nav rsidebar span_1_of_left">
        <h3 class="cate">DANH MỤC </h3>
        <ul class="menu">
            @for ($i = 0; $i < count($ds_loai_sp); $i++) <li @if (count($ds_loai_sp[$i]->ds_loai_con) > 0) class="item1" @endif>
                <a href="#">{{ $ds_loai_sp[$i]->ten_loai_sp }}<img class="arrow-img" src="images/arrow1.png" alt="" /></a>
                @if (count($ds_loai_sp[$i]->ds_loai_con) > 0)
                <ul class="cute">
                    @for ($j = 0; $j < count($ds_loai_sp[$i]->ds_loai_con); $j++)
                        <li class="subitem1">
                            <a href="/product-type?id_loai_sp={{ $ds_loai_sp[$i]->ds_loai_con[$j]->ID_loai_sp }}">{{ $ds_loai_sp[$i]->ds_loai_con[$j]->ten_loai_sp }}</a>
                        </li>
                        @endfor
                </ul>
                @endif
                </li>
                @endfor
                <ul class="kid-menu ">
                    <li class="menu-kid-left"><a href="/contact">CONTACT US</a></li>
                </ul>
        </ul>
    </div>
    @if (isset($products))
    @foreach ($products->splice(0, 1) as $sp)
    <div class=" chain-grid menu-chain">
        <a href="/single?id_sp={{ $sp->ID }}"><img class="img-responsive chain" src="images/hinh_sp/{{ $sp->hinh }}" alt=" " /></a>
        <div class="grid-chain-bottom chain-watch">
            <span class="actual dolor-left-grid">@VND_monney($sp->gia_giam) đ</span>
            <span class="reducedfrom">@VND_monney($sp->don_gia) đ</span>
            <h6><a href="/single?id_sp={{ $sp->ID }}">{{ $sp->ten_san_pham }}</a></h6>
        </div>
    </div>
    <a class="view-all all-product" href="/product-type?id_loai_sp=*">VIEW ALL PRODUCTS<span> </span></a>
    @endforeach
    @endif
</div>