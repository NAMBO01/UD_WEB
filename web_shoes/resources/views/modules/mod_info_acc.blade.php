<div class="sub-cate">
    <div class=" top-nav rsidebar span_1_of_left">

        <ul class="menu">

            <ul class="kid-menu ">
                <li><a href="/don-hang">Lịch sử mua hàng</a></li>
                <li><a href="/memberclass">Hạng thành viên</a></li>
                <li><a href="/account">Tài khoản của bạn</a></li>
                <li><a href="/contact">Liên hệ</a></li>
                @if (isset($user_info))
                <li><a href="/logout">Đăng xuất</a></li>
                @endif
            </ul>
        </ul>
    </div>
    <!--initiate accordion-->
    <script type="text/javascript">
        $(function() {
            var menu_ul = $('.menu > li > ul'),
                menu_a = $('.menu > li > a');
            menu_ul.hide();
            menu_a.click(function(e) {
                e.preventDefault();
                if (!$(this).hasClass('active')) {
                    menu_a.removeClass('active');
                    menu_ul.filter(':visible').slideUp('normal');
                    $(this).addClass('active').next().stop(true, true).slideDown('normal');
                } else {
                    $(this).removeClass('active');
                    $(this).next().stop(true, true).slideUp('normal');
                }
            });

        });
    </script>

</div>