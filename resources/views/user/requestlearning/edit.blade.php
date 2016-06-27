@extends('layouts.AdminUser')

@section('head')
<link href="<?= asset('resources/css/bootstrap.min.css'); ?>" rel="stylesheet">
@endsection



@section('content')

<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">
		ویرایش درخواست : <?= $model->request_title ?>
	</p>
	<div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px"></div>

	<div style="padding-right:300px;">
	{!! Form::model($model,['method'=>'PATCH','route'=>['user.panel.request.update',$model->id]]) !!}

		



	<?php
		if($errors->has('request_title'))
		{
			?>
			<div class="form-group has-error">
			{!! Form::label('request_title','عنوان درخواست',['class'=>'control-label','for'=>'inputError']) !!}
			{!! Form::text('request_title',null,['class'=>'form-control','id'=>'inputError','placeholder'=>'عنوان درخواست','style'=>'width:600px;']) !!}

			<span class="help-block"><?php echo $errors->first('request_title'); ?></span>
			</div>
		<?php 
	}
	else
	{?>
		<div class="form-group">
			{!! Form::label('request_title','عنوان درخواست') !!}
			{!! Form::text('request_title',null,['class'=>'form-control','placeholder'=>'عنوان درخواست','style'=>'width:600px;']) !!}
		</div>
	<?php } ?>





	<?php
		if($errors->has('request_content'))
		{
			?>
			<div class="form-group has-error">
			{!! Form::label('request_content','متن درخواست به طور کامل',['class'=>'control-label','for'=>'inputError']) !!}
			{!! Form::textarea('request_content',null,['class'=>'form-control','id'=>'inputError','placeholder="متن کامل درخواست"','style'=>'width:600px;']) !!}

			<span class="help-block"><?php echo $errors->first('request_content'); ?></span>
			</div>
		<?php 
	}
	else
	{?>
		<div class="form-group">
			{!! Form::label('request_content','متن درخواست به طور کامل') !!}
			{!! Form::textarea('request_content',null,['class'=>'form-control','placeholder="متن کامل درخواست"','style'=>'width:600px;']) !!}
		</div>
	<?php } ?>




	<div class="form-input">
		
		{!! Form::submit('ثبت تغییرات',['class'=>'btn','style'=>'margin-right:20px;'])!!}
		
	</div>

	{!! Form::close() !!}
	</div>

@endsection