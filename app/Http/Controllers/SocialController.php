<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Socialite;
use App\Http\Requests;

class SocialController extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest');
    }

    public function getSocialAuth( $provider=null )
    {
    	if(!config("services.$provider")) abort('404');

    	return Socialite::driver($provider)->redirect();
    }

    public function getSocialAuthCallback( $provider=null )
    {
    	if($user = Socialite::driver($provider)->user())
    	{
    		dd($user);
    	}
    	else{
    		return "!!! algo fue mal!!";
    	}
    }
}
