<?php
	use App\lib\CommentShow;
?>
@extends('layouts.AdminPanel')

@section('content')


<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">مدیریت دیدگاه ها</p>
            <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>


<?php
	$array1=array('ردیف','نام','ایمیل','محتویات','روی نوشته','روی نظر','در تاریخ','وضعیت','عملیات');
	$array2=array('-','comment_flname','comment_email','comment_content','post_id','comment_replay','comment_date','comment_state');
	$GridView=CommentShow::view($array1,$array2,$model,$page,$total,$ntable='comment');
?>

{!! $model->render() !!}


@endsection

