
@extends('layouts.AdminPanel')

@section('content')

<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">تایید سوال کاربر</p>
            <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>


	<div>
	{!! Form::model($model,['method'=>'PATCH','route'=>['admin.question.update',$model->id]]) !!}

	
	<div class="form-input">
		{!! Form::label('qu_content','متن سوال',['style'=>'width:100px;']) !!}
		{!! Form::textarea('qu_content',null,['class'=>'inputfiled','style'=>'width:600px;height:200px;']) !!}
		<div style="color:red;">
			<?php
			if($errors->has('qu_content'))
			{
				echo $errors->first('qu_content');
			}
			?>
		</div>
		
	</div>


	<div class="form-input">
		
		{!! Form::submit('ثبت || تایید سوال',['class'=>'btn','style'=>'margin-right:20px;padding-bottom:10px;padding-left:10px;'])!!}
		
	</div>

	{!! Form::close() !!}
	</div>

@endsection