@extends('layouts.AdminUser')

@section('head')
<link href="<?= asset('resources/css/bootstrap.min.css'); ?>" rel="stylesheet">
@endsection



@section('content')

<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">نمایش کامل سوال - پاسخ به ان - نمایش تمامی پاسخ های داده شده به این سوال</p>
<div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>


<div>

	<p style="padding:50px;">
		{{ $model->qu_content }}
	</p>

</div>


<div>
	
	{!! Form::open(['url'=>'user/panel/ansewer']) !!}

	
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

<div style="margin-top:30px;">
	
	<?php
		use App\lib\qustions;
		$array1=array('ردیف','کاربر ','کد سوال','تاریخ ثبت پاسخ','پاسخ');
		$array2=array('-','id_user','id_question','ansewer_date','ansewer');
		$GridView=qustions::view($array1,$array2,$model2,$page,$total,$ntable='ansewer');
	?>

</div>

@endsection

