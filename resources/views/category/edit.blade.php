@extends('layouts.AdminPanel')

@section('content')

<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">ویرایش دسته : <?= $model->category_name ?></p>
<div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>
{!! Form::model($model,['method'=>'PATCH','route'=>['admin.category.update',$model->id]]) !!}

<div class="form-input">
	{!! Form::label('category_name','نام دسته',['style'=>'width:100px;']) !!}
	{!! Form::text('category_name',null,['class'=>'inputfiled','style'=>'width:300px;']) !!}
	<div>
		<?php
		if($errors->has('category_name'))
		{
			echo $errors->first('category_name');
		}
		?>
	</div>
	
</div>


<div class="form-input">
	{!! Form::label('category_enname','نام لاتین دسته',['style'=>'width:100px;']) !!}
	{!! Form::text('category_enname',null,['class'=>'inputfiled','style'=>'width:300px;']) !!}
	<div>
		<?php
		if($errors->has('category_enname'))
		{
			echo $errors->first('category_enname');
		}
		?>
	</div>
</div>


<div class="form-input">
	{!! Form::label('category_replayid','انتخاب دسته',['style'=>'width:100px;']) !!}
	{!! Form::select('category_replayid',$cat,null,['style'=>'width:300px;height:25px;margin-right:45px;margin-top:30px;']) !!}
</div>



<div class="form-input">
	
	{!! Form::submit('ویرایش',['class'=>'btn','style'=>'margin-right:20px;'])!!}
</div>

{!! Form::close() !!}

@endsection

@section('FooterJs')

<script type="text/javascript">
    $("#menu_1").show();
    document.getElementById('menu_box_1').style.background='red';
</script>

@endsection