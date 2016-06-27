@extends('layouts.AdminUser')

@section('head')
<link href="<?= asset('resources/css/bootstrap.min.css'); ?>" rel="stylesheet">
@endsection



@section('content')

<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">انتخاب لیست علاقه مندی ها</p>
<div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>
<div style="padding-bottom:20px;"></div>


{!! Form::open(['url'=>'user/panel/favorits']) !!}

<ul class="panel panel-default" style="padding-bottom:40px;padding-right:80px;margin-right:180px;margin-left:180px;">
<?php

use App\FavoritsModel;
use App\FavoritsUserModel;
use App\Http\Controllers\Auth\AuthController;

function check_menu($id_user,$id_favo)
{
	$favocheck=FavoritsUserModel::where(['id_user'=>$id_user,'id_favo'=>$id_favo])->first();
	if($favocheck)
	{
		return true;
	}
	else
	{
		return false;
	}
}


$favo=FavoritsModel::where('favo_id','-')->orderBy('id','desc')->get();

foreach ($favo as $cat) 
{
	?>
	<li class="li-menu" style="margin-top:20px;"><input type="checkbox" <?php if(check_menu(Auth::User()->id,$cat['id'])) echo 'checked="checked"'; ?> name="cat[]" value="<?= $cat['id'] ?>"> <span><?= $cat['favo_name'] ?></span><ul>
		<?php
		$zir_favo=FavoritsModel::where('favo_id',$cat['id'])->orderBy('id','desc')->get();
		foreach ($zir_favo as $zir_favo) 
		{
			?>	<li class="li-children" style="margin-right:20px;"><input type="checkbox" <?php if(check_menu(Auth::User()->id,$zir_favo['id'])) echo 'checked="checked"'; ?> name="cat[]" value="<?= $zir_favo['id'] ?>"> <span><?= $zir_favo['favo_name'] ?></span>
</li><?php
		}
		?>
	</ul></li>
	<?php
}

?>


</ul></div>











<div class="form-input">
	
	{!! Form::submit('ثبت لیست علاقه مندی',['class'=>'btn','style'=>'margin-right:740px;'])!!}
</div>

{!! Form::close() !!}

@endsection