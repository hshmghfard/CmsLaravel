<?php
	use App\lib\CommentShow;
?>
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
		
		{!! Form::submit('ثبت || تایید سوال',['class'=>'btn','style'=>'width:150px; margin-right:20px;padding-bottom:10px;padding-left:10px;'])!!}
		
	</div>

	{!! Form::close() !!}
	</div>


	<div style="margin-top:50px;">
	{!! Form::open(['url'=>'admin/ansewer']) !!}

	
	<div class="form-input">
		{!! Form::label('ansewer','پاسخی برای این سوال ثبت نمایید',['style'=>'width:100px;']) !!}
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
	<input type="text" name="id_question" id="id_question" value="<?= $model->id ?>" hidden="true">

	<div class="form-input">
		
		{!! Form::submit('ثبت پاسخ',['class'=>'btn','style'=>'width:150px;margin-right:20px;padding-bottom:10px;padding-left:10px;'])!!}
		
	</div>

	{!! Form::close() !!}
	</div>


	<div style="margin-top:80px;">
		
	<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">تمامی پاسخ هایی که به این سوال توسط مدیر یا کاربران داده شده است</p>
            <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>


		<?php
			$array1=array('ردیف','نام کاربر','تاریخ ثبت ','پاسخ','وضعیت','عملیات');
			$array2=array('-','id_user','ansewer_date','ansewer','ansewer_state');
			$GridView=CommentShow::view($array1,$array2,$model2,$page='1',$total,$ntable='ansewer');
		?> 

		{!! $model2->render() !!}


	</div>

@endsection