<div class="container">
    <div class="register">
        <div class="register-top-grid">
            <div class="mation">
                <div class="panel panel-{{$type_notice}}">
                    <div class="panel-heading">Thông báo</div>
                    <div class="panel-body item_message text-danger">{{$message_notice}}</div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    @include('modules.mod_sub_cate')
</div>
<script>
    setTimeout(() => {
        window.location.href = '{{$url_redirect}}';
    }, 5000);
</script>
