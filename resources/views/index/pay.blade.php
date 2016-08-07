

{!! Form::open(['url'=>'buyonline']) !!}


<div id="product_content" style="padding-bottom:20px;">

<div class="form-input">
{!! Form::label('price','قیمت') !!}
{!! Form::text('price',null,['class'=>'inputfiled']) !!}
</div>

<div class="form-input">
{!! Form::label('resnumber','شماره سفارش') !!}
{!! Form::text('resnumber',null,['class'=>'inputfiled']) !!}
</div>


<div class="form-input">
{!! Form::label('description','توضیحات') !!}
{!! Form::text('description',null,['class'=>'inputfiled']) !!}
</div>


<div class="form-input">
{!! Form::label('paymenter','دلیل') !!}
{!! Form::text('paymenter',null,['class'=>'inputfiled']) !!}
</div>

<div class="form-input">
{!! Form::label('email','ایمیل') !!}
{!! Form::text('email',null,['class'=>'inputfiled']) !!}
</div>

<div class="form-input">
{!! Form::label('mobile','موبایل') !!}
{!! Form::text('mobile',null,['class'=>'inputfiled']) !!}
</div>

<div class="form-input">
	
	{!! Form::submit('خرید',['class'=>'btn','style'=>'margin-right:740px;'])!!}
</div>

{!! Form::close() !!}

</div>
