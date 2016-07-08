<?php
	use App\lib\CommentShow;
?>
@extends('layouts.AdminPanel')

@section('content')


<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">نمایش درخواست ها</p>
            <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>



<?php
	$array1=array('ردیف','عنوان درخواست','متن درخواست ','کاربر','وضعیت','پاسخ مدیر','عملیات');
	$array2=array('-','request_title','request_content','id_user','request_state','request_ansewer');
	$GridView=CommentShow::view($array1,$array2,$model,$page,$total,$ntable='request');
?>

{!! $model->render() !!}


@endsection

