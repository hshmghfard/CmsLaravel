@extends('layouts.AdminUser')

@section('head')
<link href="<?= asset('resources/css/bootstrap.min.css'); ?>" rel="stylesheet">
@endsection


@section('content') 

    <p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">ویرایش اطلاعات </p>
    <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>



    <div style="padding-right:300px;">

	    {!! Form::model($model,['method'=>'PATCH','files'=>true,'route'=>['user.panel.profile.update',$model->id]]) !!}

	    <div class="form-group">
	        {!! Form::label('name','نام',['style'=>'width:150px;']) !!}
	        {!! Form::text('name',null,['class'=>'form-control','style'=>'width:300px;']) !!}
	        <div style="color:red;">
	            <?php
	            if($errors->has('name'))
	            {
	                echo $errors->first('name');
	            }
	            ?>
	        </div>
	        
	    </div>


	    <div class="form-group">
	        {!! Form::label('lname','نام خانوادگی',['style'=>'width:150px;']) !!}
	        {!! Form::text('lname',null,['class'=>'form-control','style'=>'width:300px;']) !!}
	        <div style="color:red;">
	            <?php
	            if($errors->has('lname'))
	            {
	                echo $errors->first('lname');
	            }
	            ?>
	        </div> 
	        
	    </div>

	    <div class="form-group">
	        {!! Form::label('password2','گذرواژه جدید',['style'=>'width:150px;']) !!}
	        {!! Form::password('password2',null,['class'=>'form-control','style'=>'width:300px;margin-top:20px;']) !!}
	    </div>

	    <div class="form-group">
	        {!! Form::label('info','توصیفی از خودتون',['style'=>'width:150px;margin-top:20px;']) !!}
	        {!! Form::textarea('info',null,['class'=>'form-control','style'=>'height:200px;width:550px;']) !!}
	    </div>


	    <div class="form-group" style="margin-top:10px;">
	        {!! Form::label('img2','انتخاب تصویر پروفایل',['style'=>'width:150px;']) !!}
	        {!! Form::file('img2',['style'=>'direction:ltr;width:250px;']) !!}
	    <div>


	    <div class="form-group">
	        {!! Form::submit('ثبت ویرایش',['class'=>'btn btn-success','style'=>'margin-right:20px;width:150px;margin-top:35px;margin-bottom:50px;'])!!}
	    </div>
	</div>

    {!! Form::close() !!}


@endsection