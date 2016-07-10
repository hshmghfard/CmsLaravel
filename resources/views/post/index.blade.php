@extends('layouts.AdminPanel')

@section('content')


<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">مدیریت نوشته ها</p>
            <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>
<?php

use App\lib\CommentShow;
$array1=array('ردیف','عنوان نوشته','تاریخ انتشار','کد کاربر','عملیات');
$array2=array('-','post_title','post_date','user');
$GridView=CommentShow::view($array1,$array2,$model,$page,$total,$ntable='post');

?>

{!! $model->render() !!}

@endsection


@section('footer')
<script type="text/javascript">
    $("#menu_1").show();
	document.getElementById('menu_box_1').style.background='red';
</script>
@endsection