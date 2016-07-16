<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Auth;
use App\Http\Requests;

class TestController extends Controller
{
    public function index(Request $request)
    {


        $data = array(
          'name' => $request->user_name,
          'email' => $request->user_email,
          'context' => $request->ansewer,
        );
 
        Mail::send('welcome', $data, function ($message) {

            $message->from('ghanbarifard.hashem@gmail.com', 'سایت دانشجویان کامپیوتر');

            $message->to($request->user_email)->cc($request->user_email); 
        });


  //   	$data = array(
		//   'name' => 'hashem',
		//   'email' => 'ghanbarifard_hashem@yahoo.com',
		//   'context' => 'hashem ghanbarifard',
		// );
 
  //   	Mail::send('welcome', $data, function ($message) {

  //   		$message->from('ghanbarifard.hashem@gmail.com', 'Laravel');

  //   		$message->to('ghanbarifard_hashem@yahoo.com')->cc('ghanbarifard_hashem@yahoo.com');	
		// });
    }

    public function save(Request $request){

        if($request->has('tag')){

            $array=array();

            $array=explode(',',$request->tag);

            for( $i=0; $i<sizeof($array); $i++ )
            {
                var_dump($array[$i]);
            }

        }

    }

    public function show(){
        return View('test');
    }
}
