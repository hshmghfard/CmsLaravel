<?php
	use App\lib\CommentShow;
?>
@extends('layouts.AdminPanel')

@section('content')


<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">نمایش پیام ها</p>
            <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>



<?php
	$array1=array('ردیف','نام','نام خانوادگی','ایمیل','متن پیام','تاریخ ثبت پیام','وضعیت','عملیات');
	$array2=array('-','call_name','call_family','call_email','call_text','call_date','call_state');
	$GridView=CommentShow::view($array1,$array2,$model,$page,$total,$ntable='call');
?>

{!! $model->render() !!}


@endsection

