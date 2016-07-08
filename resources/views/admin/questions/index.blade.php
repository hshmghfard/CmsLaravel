<?php
	use App\lib\CommentShow;
?>
@extends('layouts.AdminPanel')

@section('content')


<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">تمامی سوالات دریافتی</p>
            <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>



<?php
	$array1=array('ردیف','متن سوال','دسته ','کاربر','وضعیت','عملیات');
	$array2=array('-','qu_content','qu_category','qu_user','qu_state');
	$GridView=CommentShow::view($array1,$array2,$model,$page,$total,$ntable='question');
?>

{!! $model->render() !!}


@endsection

