
@extends('layouts.AdminPanel')

@section('content')

<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">مشاهده و پاسخ به در خواست</p>
            <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>


	<div>
	{!! Form::model($model,['method'=>'PATCH','route'=>['admin.request.update',$model->id]]) !!}


	<div class="form-input">
		{!! Form::label('request_title','عنوان درخواست',['style'=>'width:100px;']) !!}
		{!! Form::text('request_title',null,['class'=>'inputfiled','style'=>'width:600px;height:30px;']) !!}
		<div style="color:red;">
			<?php
			if($errors->has('request_title'))
			{
				echo $errors->first('request_title');
			}
			?>
		</div>
		
	</div>
	
	<div class="form-input">
		{!! Form::label('request_content','متن درخواست',['style'=>'width:100px;']) !!}
		{!! Form::textarea('request_content',null,['class'=>'inputfiled','style'=>'width:600px;height:200px;']) !!}
		<div style="color:red;">
			<?php
			if($errors->has('request_content'))
			{
				echo $errors->first('request_content');
			}
			?>
		</div>
		
	</div>


	<div class="form-input">
		{!! Form::label('request_ansewer','پاسخ',['style'=>'width:100px;']) !!}
		{!! Form::textarea('request_ansewer',null,['class'=>'inputfiled','style'=>'width:600px;height:200px;']) !!}
		<div style="color:red;">
			<?php
			if($errors->has('request_ansewer'))
			{
				echo $errors->first('request_ansewer');
			}
			?>
		</div>
		
	</div>


	<div class="form-input">
		
		{!! Form::submit('ثبت پاسخ و تایید درخواست',['class'=>'btn','style'=>'margin-right:20px;padding-bottom:10px;padding-left:10px;width:185px;'])!!}
		
	</div>

	{!! Form::close() !!}
	</div>

@endsection