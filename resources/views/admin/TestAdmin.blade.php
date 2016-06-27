@extends('layouts.AdminPanel')

@section('content')



    <h1> به پنل مدیریتی سایت خوش امدید! </h1>
    <!-- <h1> text testing </h1>
    {!! Form::open(['url' => '/admin/save', 'files' => true]) !!}

        <div class="form-input">
            {!! Form::label('title','عنوان :') !!}
            {!! Form::text('title') !!}
        </div>

        <div class="form-input">
            {!! Form::textarea('content','',['class' => 'ckeditor']) !!}
        </div>

        <div class="form-input">
            {!! Form::label('img','تصویر') !!}
            {!! Form::file('img') !!}
        </div>

        <div class="form-input">
            {!! Form::submit('ذخیره') !!}
        </div>

    {!! Form::close() !!} -->
@endsection

@section('FooterJs')
    <!-- <script type="text/javascript" src=""></script> -->
@endsection