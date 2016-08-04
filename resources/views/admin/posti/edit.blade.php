<?php
use App\CountBuyModel;
use App\lib\Jdf;
// use DB;
?>
@extends('layouts.AdminPanel')
@section('content')

	<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;"> نمایش سفارش به طور کامل </p>
    <div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>


    <div align="center">
    	<table style="width:90%;height:auto;border:2px #000000;padding:10px;">
    		<tr>
    			<td> نام </td>
    			<td> نام خانوادگی </td>
    			<td> ایمیل </td>
    			<td> موبایل </td>
    			<td> کد پستی </td>
    			<td> تاریخ </td>
    			<td> آدرس </td>
    			<td> وضعیت فعلی سفارش </td>
    		</tr>
    		<tr>
    			<td> {{ $model->name }} </td>
    			<td> {{ $model->lname }} </td>
    			<td> {{ $model->email }} </td>
    			<td> {{ $model->mobile }} </td>
    			<td> {{ $model->postal_code }}  </td>
    			<?php $Jdf=new Jdf(); echo '<td>'.$Jdf->jdate('Y/n/j-H:i:s',$model->date).'</td>'; ?>
    			<td> {{ $model->address }} </td>
    			<td> 
    				<?php
    					$state=$model->state;
    					if( $state == 0 )
    					{
    						echo '<span style="color:white;background-color:red;"> بررسی نشده </span>';
    					}
    					elseif( $state == 1 )
    					{
    						echo '<span style="color:white;background-color:orangered"> در حال انتظار برای تایید سفارش </span>';
    					}
    					elseif( $state == 2 )
    					{
    						echo '<span style="color:white;background-color:yellow"> تایید و در حال بسته بندی </span>';
    					}
    					elseif( $state == 3 )
    					{
    						echo '<span style="color:white;background-color:green"> بسته بندی و ارسال گردید </span>';
    					}
    				?> 
    			</td>
    		</tr>
    	</table>


    	<div style="margin-top:100px;"></div>
    	<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;"> سفارش کامل به شرح زیر است </p>
    	<div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>
    	<table style="width:90%;height:auto;border:2px #000000;padding:10px;">
    		
    		<tr>

    			<td>
    				عنوان محصول
    			</td>

    			<td>
    				توضیح کوتاه
    			</td>

    			<td>
    				تعداد سفارش
    			</td>

    		</tr>

    		@foreach( $model2 as $model2 )
    		<tr>
    			<td>{{ $model2->post_title }}</td>
    			<td>{{ $model2->post_mintext }}</td>
    			<td>
    				<?php
    					$count=CountBuyModel::where('id_product',$model2->id)->first()['count'];
    					echo $count;
    				?> 
    			</td>
    		</tr>
    		@endforeach

    	</table>
    </div>


    
    <div style="margin-top:100px;">

    	<p style="font-family:Yekan;padding-right:30px;padding-top:20px;padding-bottom:10px;">عملیات سفارش</p>
    	<div style="width:95%;height:3px;background:#48adff;margin:auto;margin-bottom:30px;"></div>



    	<a href="<?= Url('/admin/buy/posti/'.$model->id.'/1') ?>"><span class="product_btn">درحال انتظار برای تایید</span></a>
    	<a href="<?= Url('/admin/buy/posti/'.$model->id.'/2') ?>"><span class="product_btn">در حال بسته بندی برای ارسال</span></a>
    	<a href="<?= Url('/admin/buy/posti/'.$model->id.'/3') ?>"><span class="product_btn">تایید| بسته بندی| ارسال گردید</span></a>
    </div>



@endsection