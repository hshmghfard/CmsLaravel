@extends('layouts.AdminUser')

@section('head')

@endsection


<?php
    use App\Http\Controllers\Auth\AuthController;

    if( Auth::check() )
    {
        $username=Auth::user()->name;
        $userlname=Auth::user()->lname;
        $userimg=Auth::user()->img;
        $info=Auth::user()->info;

        $user=$username.' '.$userlname;

        if( $userimg!= "" )
        {
            $userimg2=asset('resources/img/'.$userimg);
        }
        else
        {
            $userimg2=asset('resources/img/avatar-mini.jpg');
        }
    }
    else
    {
                                
    }
?>


@section('content')

<div style="margin-top:70px; padding:80px">
    <div>
    <img style="align:center;" src="<?= $userimg2; ?>" />
    </div>
    <div>
    <div style="padding-right:6px;" ><h2> <?= $user; ?> </h2></div>
    <div>
    <p style="padding-right:20px;"> <?= $info; ?> </p>
    
    </div>
    </div>
</div>

@endsection