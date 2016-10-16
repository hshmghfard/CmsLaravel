<?php
	use App\Http\Controllers\Auth\AuthController;
?>
@extends('layouts.AdminPanel')
@section('head')
@endsection
 


@section('content')
	<div align="center">

		<?php
			$userimg=Auth::user()->img;
			if( $userimg!= "" )
            {
                $userimg2=asset('resources/img/'.$userimg);
            }
            else
            {
                $userimg2=asset('resources/img/avatar-mini.jpg');
            }
		?>
		<img src="{{ $userimg2 }}" width="150px" height="150px;" class="img img-circle" title="" alt="" align="center"/>
		<table class="table table-striped" style="width:600px;">
			<tr>
				<td> نام </td>
				<td> <?php echo Auth::user()->name; ?> </td>
			</tr>
			<tr>
				<td> نام خانوادگی </td>
				<td> <?php echo Auth::user()->lname; ?> </td>
			</tr>
			<tr>
				<td> ایمیل  </td>
				<td> <?php echo Auth::user()->email; ?> </td>
			</tr>
			<tr>
				<td> رزومه  </td>
				<td> <?php echo Auth::user()->info; ?> </td>
			</tr>
			
		</table>
	</div>
@endsection




@section('FooterJs')
@endsection
