<?php

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
    			<td> آدرس </td>
    			<td> تاریخ </td>
    			<td> وضعیت فعلی سفارش </td>
    		</tr>
    		<tr>
    			<td> {{ $model->name }} </td>
    			<td> {{ $model->lname }} </td>
    			<td> {{ $model->email }} </td>
    			<td> {{ $model->mobile }} </td>
    			<td> {{ $model->postal_code }}  </td>
    			<td> {{ $model->date }} </td>
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

    	<div style="margin-top:50px;"></div>

    	<table style="width:90%;height:auto;border:2px #000000;padding:10px;">
    		
    		

    	</table>
    </div>



@endsection
