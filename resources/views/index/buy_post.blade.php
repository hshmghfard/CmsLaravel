@extends('layouts.FirstPage')



@section('head')    

@endsection


@section('content')
<div class="box row">
        <span class="vip"><i class="icon icon-vip"></i></span>
        <div class="title row">
            <div class="post-icon col"><i class="icon icon-post"></i></div>
            <h2></h2>
        </div>
        <div class="text-post tow">




            <div id="order_product" style="background:white;padding-right:10px;padding-left:10px;padding-top:20px;">
            <p style="font-family:Yekan;padding-right:30px;padding-bottom:10px;">نهایی کردن خرید</p>
            <div style="width:100%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>

            {!! Form::open(['url'=>'buy_post']) !!}

                <div class="form-input">
                    {!! Form::label('name','نام') !!}
                    {!! Form::text('name',null,['class'=>'inputfiled','style'=>'width:300px;height:30px;']) !!}

                    <?php 
                        if($errors->has('name'))
                        {
                            ?><p style="color:red;padding-top:10px;padding-right:25px;"><?=  $errors->first('name'); ?></p><?php
                        }
                    ?>
                </div>

                <div class="form-input">
                    {!! Form::label('lname','نام خانوادگی') !!}
                    {!! Form::text('lname',null,['class'=>'inputfiled','style'=>'width:300px;height:30px;']) !!}

                    <?php 
                        if($errors->has('lname'))
                        {
                            ?><p style="color:red;padding-top:10px;padding-right:25px;"><?=  $errors->first('lname'); ?></p><?php
                        }
                    ?>
                </div>

                <div class="form-input">
                    {!! Form::label('email','ایمیل') !!}
                    {!! Form::text('email',null,['class'=>'inputfiled','style'=>'width:300px;height:30px;']) !!}

                    <?php 
                        if($errors->has('email'))
                        {
                            ?><p style="color:red;padding-top:10px;padding-right:25px;"><?=  $errors->first('email'); ?></p><?php
                        }
                    ?>
                </div>

                <div class="form-input">
                    {!! Form::label('mobile','شماره موبایل') !!}
                    {!! Form::text('mobile',null,['class'=>'inputfiled','style'=>'width:300px;height:30px;']) !!}

                    <?php 
                        if($errors->has('mobile'))
                        {
                            ?><p style="color:red;padding-top:10px;padding-right:25px;"><?=  $errors->first('mobile'); ?></p><?php
                        }
                    ?>
                </div>
 
                <div class="form-input">

                    {!! Form::label('postal_code','کد پستی') !!}
                    {!! Form::text('postal_code',null,['class'=>'inputfiled','style'=>'width:300px;height:30px;']) !!}

                    <?php 
                        if($errors->has('postal_code'))
                        {
                            ?><p style="color:red;padding-top:10px;padding-right:25px;"><?=  $errors->first('postal_code'); ?></p><?php
                        }
                    ?>
                </div>

                <div class="form-input">
                    {!! Form::label('address','آدرس') !!}
                    {!! Form::text('address',null,['class'=>'inputfiled','style'=>'width:300px;height:30px;']) !!}


                    <?php 
                        if($errors->has('address'))
                        {
                            ?><p style="color:red;padding-top:10px;padding-right:25px;"><?=  $errors->first('address'); ?></p><?php
                        }
                    ?>

                </div>


                <div class="form-input">
                    {!! Form::submit('ثبت خرید پستی ',['class'=>'more','style'=>'margin-right:25px;margin-bottom:20px;'])!!}
                </div>

                {!! Form::close() !!}   
            </div>




            <span class="line col row"></span>
        </div>
</div>


@endsection