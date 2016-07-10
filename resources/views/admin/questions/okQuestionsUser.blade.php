
@extends('layouts.AdminPanel')

@section('content')

<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">تایید پاسخ کاربر برای نمایش به کاربران دیگر</p>
            <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>


	<div>
	{!! Form::model($model,['method'=>'PATCH','route'=>['admin.ansewer.update',$model->id]]) !!}

	
	<div class="form-input">
		{!! Form::label('ansewer','متن پاسخ ',['style'=>'width:100px;']) !!}
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


	<div class="form-input">
		
		{!! Form::submit('تایید پاسخ',['class'=>'btn','style'=>'width:150px;margin-right:20px;padding-bottom:10px;padding-left:10px;'])!!}
		
	</div>

	{!! Form::close() !!}
	</div>

@endsection