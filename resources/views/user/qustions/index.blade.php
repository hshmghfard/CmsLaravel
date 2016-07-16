@extends('layouts.AdminUser')

@section('head')
<link href="<?= asset('resources/css/bootstrap.min.css'); ?>" rel="stylesheet">
@endsection



@section('content')

<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">نمایش سوالات کاربران</p>
<div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>


<div class="panel panel-default">
<?php
	use App\lib\qustions;
	$array1=array('ردیف','متن سوال','دسته بندی سوال','نام کاربر ثبت کننده','عملیات');
	$array2=array('-','qu_content','qu_category','qu_user');
	$GridView=qustions::view($array1,$array2,$model,$page,$total,$ntable='qustion');
?>
</div>
@endsection

