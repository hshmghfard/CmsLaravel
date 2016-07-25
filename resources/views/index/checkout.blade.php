@extends('layouts.FirstPage')
@section('head') 
@endsection


@section('content')

	<div class="box row">
        <span class="vip"><i class="icon icon-vip"></i></span>
        <div class="title row">
            <div class="post-icon col"><i class="icon icon-post"></i></div>
            <h2>سبد خرید شما</h2>
        </div>
        <div class="text-post tow">
            






        <div id="shop_cart">
            <div id="order_product" style="background:white;padding-right:10px;padding-left:10px;padding-top:20px;">
            @if(!empty(Session::get('cart')))

   
           <table id="shoppingcart">
            <tr>
                <th style="width:50%;">محصول</th>
                <th>تعداد</th>
                <th>قيمت</th>
                <th>عملیات</th>
            </tr>
           @foreach(Session::get('cart') as $key=>$value)
            <tr>
                <td>{!! \App\TblPost::find($key)['post_title'] !!}</td>
                <td> {{ $value }} </td>
                <td>{!! \App\TblPost::find($key)['post_price'] !!}</td>
                <td>  </td>
           </tr>
           @endforeach
           </table>

                <div style="width:320px;margin:auto;padding-bottom:30px;">
                    <a style="color:red;" href="<?= url('buy_post') ?>">خرید به صورت پستی</a>
                    <a  style="color:#48ADFF;padding-right:30px;" href="<?= url('buy_download') ?>">خرید به صورت دانلودی</a>
                </div>

           </div>

           @endif
        </div>



        	<span class="line col row"></span>
        </div>
	</div>

@endsection