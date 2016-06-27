@extends('layouts.AdminPanel')

@section('content')

<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">محصول جدید</p>
<div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>
<span class="product_btn" onclick="content_box();">محتوای محصول</span>
<span class="product_btn" onclick="setting_box();">تنظیمات</span>
<div style="padding-bottom:20px;"></div>

{!! Form::open(['url'=>'admin/post','files'=>true]) !!}


<div id="product_content" style="padding-bottom:20px;">

<div class="form-input">
{!! Form::label('post_title','عنوان نوشته') !!}
{!! Form::text('post_title',null,['class'=>'inputfiled']) !!}
<div>
<?php 
if($errors->has('post_title'))
{
	?><p style="color:red;padding-top:10px;padding-right:25px;"><?=  $errors->first('post_title'); ?></p><?php
}
?></div></div>



<div class="form-input">
{!! Form::label('post_mintext','توصیفی کوتاه ') !!}
{!! Form::text('post_mintext',null,['class'=>'inputfiled']) !!}
<div>
<?php 
if($errors->has('post_mintext'))
{
	?><p style="color:red;padding-top:10px;padding-right:25px;"><?=  $errors->first('post_mintext'); ?></p><?php
}
?></div></div>




<div class="form-input">

<div style="width:93%;margin-right:25px;margin-top:20px;">{!! Form::textarea('post_content','',['class'=>'ckeditor']) !!}</div>

</div>

</div>

<div style="display:none;" id="setting_box">




<div class="form-input">
{!! Form::label('post_link','لینک دانلود') !!}
{!! Form::text('post_link',null,['class'=>'inputfiled']) !!}
</div>

<div class="form-input">
{!! Form::label('post_price','هزینه') !!}
{!! Form::text('post_price',null,['class'=>'inputfiled','style'=>'width:250px;']) !!}
</div>

<div class="form-input" style="margin-top:10px;">
{!! Form::label('post_img','تصویر') !!}
{!! Form::file('post_img',['style'=>'direction:ltr;width:250px;']) !!}
<div>
<?php
if($errors->has('post_img'))
{
	?><p style="color:red;padding-top:10px;padding-right:25px;"><?php echo $errors->first('post_img'); ?></p> <?php
}


?>
</div>

</div>

<p style="padding-right:20px;padding-bottom:15px;">انتخاب دسته بندی</p>
<div style="background:#F1F1F1;width:96%;margin:auto">

<ul style="padding-top:15px;padding-bottom:15px;margin-right:20px;">
<?php

use App\TblCategory;

$Category=TblCategory::where('category_replayid','-')->orderBy('id','desc')->get();

foreach ($Category as $cat) 
{
	?>
	<li class="li-menu"><input type="checkbox"  name="cat[]" value="<?= $cat['id'] ?>"> <span><?= $cat['category_name'] ?></span><ul>
		<?php
		$zir_menu=TblCategory::where('category_replayid',$cat['id'])->orderBy('id','desc')->get();
		foreach ($zir_menu as $zir_menu) 
		{
			?>	<li class="li-children"><input type="checkbox" name="cat[]" value="<?= $zir_menu['id'] ?>"> <span><?= $zir_menu['category_name'] ?></span>
</li><?php
		}
		?>
	</ul></li>
	<?php
}

?>


</ul></div>

<div class="form-input">
	
	{!! Form::submit('انتشار',['class'=>'btn','style'=>'margin-right:740px;'])!!}
</div>

{!! Form::close() !!}

</div>

@endsection

@section('FooterJs')
<script type="text/javascript" src="{!! asset('resources/ckeditor/ckeditor.js') !!}"></script>
<script type="text/javascript">
	function setting_box()
    {
	    $("#product_content").hide();
	    $("#setting_box").show();
    }
    function content_box()
    {
	  $("#product_content").show();
	  $("#setting_box").hide();
    }
     $("#menu_1").show();
	document.getElementById('menu_box_1').style.background='red';
</script>
@endsection