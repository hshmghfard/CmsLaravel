@extends('layouts.FirstPage')



@section('head')    

@endsection


@section('content')
<div class="box row">
        <span class="vip"><i class="icon icon-vip"></i></span>
        <div class="title row">
            <div class="post-icon col"><i class="icon icon-post"></i></div>
            <h2>تماس با ما</h2>
        </div>
        <div class="text-post tow">
            

        {!! Form::open(['url'=>'/callme']) !!}


        	<div style="margin-top:50px;padding:50px">
        	<?php
				if($errors->has('call_name'))
				{
					?>
					<div class="form-group has-error">
					{!! Form::label('call_name','نام :',['class'=>'control-label','for'=>'inputError']) !!}
					{!! Form::text('call_name',null,['class'=>'form-control','id'=>'inputError','style'=>'width:300px;']) !!}

					<span class="help-block"><?php echo $errors->first('call_name'); ?></span>
					</div>
				<?php 
			}
			else
			{?>
				<div class="form-group">
					{!! Form::label('call_name','نام :') !!}
					{!! Form::text('call_name',null,['class'=>'form-control','style'=>'width:300px;']) !!}
				</div>
			<?php } ?>


			<?php
				if($errors->has('call_family'))
				{
					?>
					<div class="form-group has-error">
					{!! Form::label('call_family','نام خانوادگی :',['class'=>'control-label','for'=>'inputError']) !!}
					{!! Form::text('call_family',null,['class'=>'form-control','id'=>'inputError','style'=>'width:300px;']) !!}

					<span class="help-block"><?php echo $errors->first('call_family'); ?></span>
					</div>
				<?php 
			}
			else
			{?>
				<div class="form-group">
					{!! Form::label('call_family','نام خانوادگی :') !!}
					{!! Form::text('call_family',null,['class'=>'form-control','style'=>'width:300px;']) !!}
				</div>
			<?php } ?>




			<?php
				if($errors->has('call_email'))
				{
					?>
					<div class="form-group has-error">
					{!! Form::label('call_email','ایمیل :',['class'=>'control-label','for'=>'inputError']) !!}
					{!! Form::text('call_email',null,['class'=>'form-control','id'=>'inputError','style'=>'width:300px;']) !!}

					<span class="help-block"><?php echo $errors->first('call_email'); ?></span>
					</div>
				<?php 
			}
			else
			{?>
				<div class="form-group">
					{!! Form::label('call_email','ایمیل :') !!}
					{!! Form::text('call_email',null,['class'=>'form-control','style'=>'width:300px;']) !!}
				</div>
			<?php } ?>





			<?php
				if($errors->has('call_text'))
				{
					?>
					<div class="form-group has-error">
					{!! Form::label('call_text','متن :',['class'=>'control-label','for'=>'inputError']) !!}
					{!! Form::textarea('call_text',null,['class'=>'form-control','id'=>'inputError','style'=>'width:600px;']) !!}

					<span class="help-block"><?php echo $errors->first('call_text'); ?></span>
					</div>
				<?php 
			}
			else
			{?>
				<div class="form-group">
					{!! Form::label('call_text','متن :') !!}
					{!! Form::textarea('call_text',null,['class'=>'form-control','style'=>'width:400px;']) !!}
				</div>
			<?php } ?>




			<div class="form-input">
				
				{!! Form::submit('ثبت',['class'=>'btn','style'=>'margin-right:20px;'])!!}
				
			</div>

			</div>
		{!! Form::close() !!}



        	<span class="line col row"></span>
        </div>
</div>


@endsection