
{!! Form::open(['url'=>'test']) !!}

	<div class="form-input">
		{!! Form::label('tag','نام دسته',['style'=>'width:100px;']) !!}
		{!! Form::text('tag',null,['class'=>'inputfiled','style'=>'width:300px;']) !!}
	</div>


	<div class="form-input">
		
		{!! Form::submit('ذخیره',['class'=>'btn','style'=>'margin-right:20px;'])!!}
		
	</div>

	{!! Form::close() !!}
