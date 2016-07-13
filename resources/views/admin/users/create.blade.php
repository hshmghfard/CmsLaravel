@extends('layouts.AdminPanel')
@section('content')



    <p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">ثبت کاربر</p>
    <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>

	{!! Form::open(['url'=>'admin/user','files'=>true]) !!}

    <div class="form-input">
        {!! Form::label('name','نام',['style'=>'width:150px;']) !!}
        {!! Form::text('name',null,['class'=>'inputfiled','style'=>'width:300px;']) !!}
        <div style="color:red;">
            <?php
            if($errors->has('name'))
            {
                echo $errors->first('name');
            }
            ?>
        </div>
        
    </div>


    <div class="form-input">
        {!! Form::label('lname','نام خانوادگی',['style'=>'width:150px;']) !!}
        {!! Form::text('lname',null,['class'=>'inputfiled','style'=>'width:300px;']) !!}
        <div style="color:red;">
            <?php
            if($errors->has('lname'))
            {
                echo $errors->first('lname');
            }
            ?>
        </div>
        
    </div>


    <div class="form-input">
        {!! Form::label('email','ایمیل',['style'=>'width:150px;']) !!}
        {!! Form::text('email',null,['class'=>'inputfiled','style'=>'width:300px;']) !!}
        <div style="color:red;">
            <?php
            if($errors->has('email'))
            {
                echo $errors->first('email');
            }
            ?>
        </div>
    </div>


    <div class="form-input">
        {!! Form::label('password2','گذرواژه',['style'=>'width:150px;']) !!}
        {!! Form::password('password2',null,['class'=>'inputfiled','style'=>'width:300px;margin-top:20px;']) !!}
    </div>

    <div class="form-input">
        {!! Form::label('roule','انتخاب نقش',['style'=>'width:150px;']) !!}
        {!! Form::select('roule',$roul,null,['style'=>'width:300px;height:25px;margin-right:45px;margin-top:30px;']) !!}
    </div>


    <div class="form-input">
        {!! Form::label('info','توصیفی از خودتون',['style'=>'width:150px;margin-top:20px;']) !!}
        {!! Form::textarea('info',null,['class'=>'inputfiled','style'=>'height:200px;']) !!}
    </div>


    <div class="form-input" style="margin-top:10px;">
        {!! Form::label('img','انتخاب تصویر پروفایل',['style'=>'width:150px;']) !!}
        {!! Form::file('img',['style'=>'direction:ltr;width:250px;']) !!}
    <div>


    <div class="form-input">
        {!! Form::submit('ذخیره',['class'=>'btn','style'=>'margin-right:20px;'])!!}
    </div>

    {!! Form::close() !!}

@endsection

