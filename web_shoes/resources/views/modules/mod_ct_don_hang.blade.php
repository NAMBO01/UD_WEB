<div class="container">
    <div class="women-product">
        <div class="navbar-container is-flex is-align-items-center">
            <div>
                <div class="icon-pn">
                    <a href="/back"><i class="fa-solid fa-left-long"></i></a>
                </div>

            </div>
            <div class="nav-bar__title">
                Chi Tiết Đơn Hàng
            </div>
        </div>
        <div class="pn-container">
            <div class="block-order-detail">
                @foreach($ct_don_hang as $ct)
                <div class="order-detail__code">
                    <p class="code-name"> Mã đơn hàng: {{$ct->ma_don_hang}}
                    </p>
                    <p class="code_time"></p>
                </div>
                @foreach




                <div class="order-detail__product">
                    <div class="product-list">

                        <div class="block-order-item">
                            <div class="order-item is-flex">
                                <div class="order-item__img">
                                    <img src="/images/hinh_sp/" alt="">
                                </div>

                                <div class="order-item__info is-flex-direction-column">
                                    <div class="info__title"></div>
                                    <div class="info__sub-title"></div>
                                    <div class="info__sub-title"></div>
                                    <div class="info__group is-flex is-justify-content-space-between">
                                        <div class="price"></div>
                                        <div class="btn-info">Đánh giá</div>
                                    </div>
                                </div>


                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('modules.mod_info_acc')
    <div class="clearfix"> </div>
</div>