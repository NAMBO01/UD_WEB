@extends('templates.template_pink')

@if($errors->noticeOrder->first())
<script>
    alert('{{$errors->noticeOrder->first()}}');
</script>
@endif

@section('main-content')
 @include('modules.mod_trang_chu')
@stop
