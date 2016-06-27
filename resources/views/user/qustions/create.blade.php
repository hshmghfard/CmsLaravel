@extends('layouts.AdminUser')

@section('head')
<link href="<?= asset('resources/css/bootstrap.min.css'); ?>" rel="stylesheet">
@endsection



@section('content')

	<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">
		بخش ثبت سوالات شما در رابطه با دسته انتخابی
	</p>
	<div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px"></div>

	<div style="margin-right:80px;margin-left:80px;padding:25px;padding-right:40px;" class="panel panel-default">


	{!! Form::open(['url'=>'user/panel/qustion']) !!}

	<?php
		if($errors->has('qu_content'))
		{
			?>
			<div class="form-group has-error">
			{!! Form::label('qu_content','متن پرسش',['class'=>'control-label','for'=>'inputError']) !!}
			{!! Form::textarea('qu_content',null,['class'=>'form-control','id'=>'inputError','placeholder="متن پرسش خود را وارد نمایید"','style'=>'width:600px;']) !!}

			<span class="help-block"><?php echo $errors->first('qu_content'); ?></span>
			</div>
		<?php 
	}
	else
	{?>
		<div class="form-group">
			{!! Form::label('qu_content','متن پرسش') !!}
			{!! Form::textarea('qu_content',null,['class'=>'form-control','placeholder="متن پرسش خود را وارد نمایید"','style'=>'width:600px;']) !!}
		</div>
	<?php } ?>


	<div class="form-input">
		{!! Form::label('qu_category','انتخاب موضوع پرسش',['style'=>'width:100px;']) !!}
		{!! Form::select('qu_category',$favo,null,['style'=>'width:300px;height:25px;margin-right:45px;margin-top:30px;']) !!}
	</div>


	<div class="form-input" style="margin-top:40px;">
		
		{!! Form::submit('ثبت پرسش شما',['class'=>'btn','style'=>'margin-right:20px;'])!!}
		
	</div>

	{!! Form::close() !!}
	</div>

@endsection