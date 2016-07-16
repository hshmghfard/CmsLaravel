@extends('layouts.AdminPanel')

@section('content')

<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">نمایش کامل و ارسال ایمیل</p>
            <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>


	<div>
	{!! Form::model($model,['method'=>'PATCH','route'=>['admin.call.update',$model->id]]) !!}

	
	<div class="form-input">
		{!! Form::label('call_text','متن پیام',['style'=>'width:100px;']) !!}
		{!! Form::textarea('call_text',null,['class'=>'inputfiled','style'=>'width:600px;height:200px;']) !!}
		<div style="color:red;">
			<?php
			if($errors->has('call_text'))
			{
				echo $errors->first('call_text');
			}
			?>
		</div>
		
	</div>


	<div class="form-input">
		
		{!! Form::submit('ثبت || تایید پیام',['class'=>'btn','style'=>'width:150px; margin-right:20px;padding-bottom:10px;padding-left:10px;'])!!}
		
	</div>

	{!! Form::close() !!}
	</div>






	<div style="margin-top:50px;">
	{!! Form::open(['url'=>'send']) !!}

	
	<div class="form-input">
		{!! Form::label('ansewer','متن پاسخ برای ایمیل به کاربر',['style'=>'width:100px;']) !!}
		{!! Form::textarea('ansewer',null,['class'=>'inputfiled','style'=>'width:600px;height:200px;']) !!}
		<div style="color:red;">
			<?php
			if($errors->has('ansewer'))
			{
				echo $errors->first('ansewer');
			}
			?>
		</div>
		
	</div>
	<input type="text" name="user_email" id="user_email" value="<?= $model->call_email ?>" hidden="true">

	<input type="text" name="user_name" id="user_name" value="<?= $model->call_name ?>" hidden="true">

	<div class="form-input">
		
		{!! Form::submit('ارسال ایمیل',['class'=>'btn','style'=>'width:150px;margin-right:20px;padding-bottom:10px;padding-left:10px;'])!!}
		
	</div>

	{!! Form::close() !!}
	</div>

@endsection