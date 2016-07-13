<?php
	use App\lib\CommentShow;
?>
@extends('layouts.AdminPanel')

@section('content')


<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">نمایش کاربران سایت</p>
            <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>


<?php
	$array1=array('ردیف','نام','نام خانوادگی','ایمیل','نقش','توصیف','عملیات');
	$array2=array('-','name','lname','email','roule','info');
	$GridView=CommentShow::view($array1,$array2,$model,$page,$total,$ntable='user');
?>

{!! $model->render() !!}


@endsection

