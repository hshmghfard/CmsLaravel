@extends('layouts.LoginPanel')
@section('LoginForm')

    {!! Form::open(['url' => '/login']) !!}

            <div class="inputs">
                {!! Form::text('username') !!}

                {!! Form::password('password') !!}
            </div>

            <div class="second">
                <div class="right">
                    {!! Form::label('remember','مرا به خاطر بسپار') !!}
                    {!! Form::checkbox('remember') !!}
                </div>
            </div>

            <div class="logins">
                {!! Form::submit('ورود') !!}
            </div>

    {!! Form::close() !!}

@endsection