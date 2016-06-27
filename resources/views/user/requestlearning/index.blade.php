@extends('layouts.AdminUser')

@section('head')
<link href="<?= asset('resources/css/bootstrap.min.css'); ?>" rel="stylesheet">
@endsection



@section('content')

<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">نمایش درخواست ها</p>
<div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>


<div class="panel panel-default">
<?php
	use App\lib\GridView;
	$array1=array('ردیف','عنوان درخواست','متن درخواست','تاریخ ثبت','وضعیت','پاسخ','عملیات');
	$array2=array('-','request_title','request_content','request_date','request_state','request_ansewer');
	$GridView=GridView::view($array1,$array2,$model,$page,$total,$ntable='request');
?>
</div>
@endsection

@section('FooterJs')

<script type="text/javascript">
    $("#menu_1").show();
    document.getElementById('menu_box_1').style.background='red';
</script>

@endsection