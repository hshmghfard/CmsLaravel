@extends('layouts.AdminPanel')

@section('content')


<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">مدیریت دسته بندی ها</p>
            <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>



<?php
	use App\lib\GridView;
	$array1=array('ردیف','نام دسته','نام لاتین','دسته','عملیات');
	$array2=array('-','category_name','category_enname','category_replayid');
	$GridView=GridView::view($array1,$array2,$model,$page,$total,$ntable='category');
?>

{!! $model->render() !!}

@endsection

@section('FooterJs')

<script type="text/javascript">
    $("#menu_1").show();
    document.getElementById('menu_box_1').style.background='red';
</script>

@endsection