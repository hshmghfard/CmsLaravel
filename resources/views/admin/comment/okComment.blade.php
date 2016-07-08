
@extends('layouts.AdminPanel')

@section('content')

<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">تایید دیدگاه کاربر</p>
            <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>


	<div>
	{!! Form::model($model,['method'=>'PATCH','route'=>['admin.comment.update',$model->id]]) !!}

	
	<div class="form-input">
		{!! Form::label('comment_content','متن دیدگاه',['style'=>'width:100px;']) !!}
		{!! Form::textarea('comment_content',null,['class'=>'inputfiled','style'=>'width:600px;height:200px;']) !!}
		<div style="color:red;">
			<?php
			if($errors->has('comment_content'))
			{
				echo $errors->first('comment_content');
			}
			?>
		</div>
		
	</div>


	<div class="form-input">
		
		{!! Form::submit('ثبت || تایید دیدگاه',['class'=>'btn','style'=>'margin-right:20px;padding-bottom:10px;padding-left:10px;'])!!}
		
	</div>

	{!! Form::close() !!}
	</div>

@endsection