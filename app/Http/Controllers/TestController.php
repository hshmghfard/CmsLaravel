<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Auth;
use App\Http\Requests;
use App\lib\Jdf;
use Zarinpal\Laravel\Facade\Zarinpal;

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
      // public function store(UserCreateRequest $request)
      // {

      //   $my_checkbox_value = $request['admin'];

      //   if($my_checkbox_value === 'yes')
      //   //checked
      //   else
      //   //unchecked
      //   ...
      // }
      $olddate='1471343105';
      $dates=time();

      // $finish=date('Y-m-d H:i:s', strtotime('+1 day', $dates));
      $Jdf=new Jdf();
      $finish=$Jdf->jdate('Y/n/j-H:i:s',strtotime('+10 day', $dates));
      $showolddate=$Jdf->jdate('Y/n/j-H:i:s',strtotime('+10 day', $olddate));
      $count=10;
      $datef=strtotime('+'.$count.' day', $olddate);
      if ( $olddate <= $datef ) {
        var_dump('olddate='.$Jdf->jdate('Y/n/j-H:i:s',$olddate));
        var_dump('datef='.$Jdf->jdate('Y/n/j-H:i:s',$datef));
        var_dump('olddate - datef = '.$finish=$Jdf->jdate('Y/n/j-H:i:s',$datef - $olddate));
        var_dump('-10 day'.$Jdf->jdate('Y/n/j-H:i:s',strtotime('-10 day', $datef)));
        var_dump('end time');
      }
      else{
        var_dump('no end');
      }
      // return View('test',['finish'=>$finish,'dates'=>$dates,'datef'=>$datef,'olddate'=>$olddate]);
    }
 
    public function zarin()
    {

      return View('test');
      // $test = new Zarinpal('cf03cc2c-62b7-11e6-b2c3-005056a205be',new soap());
      // echo json_encode($answer = $test->request("localhost:84/callback/from/bank",1000,'testing'));
      // if(isset($answer['Authority'])) {
      //     file_put_contents('Authority',$answer['Authority']);
      //     $test->redirect();
      // }


      
      // $answer=Zarinpal::request("https://www.zarinpal.com/pg/services/WebGate/wsdl",1000,'testing');
      // var_dump(Zarinpal::verify('OK',1000,$answer['Authority']));


      // $test = new Zarinpal('XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX');
      // echo json_encode($answer = $test->request("https://www.zarinpal.com/pg/services/WebGate/wsdl",1000,'testing'));
      // if(isset($answer['Authority'])) {
      //     file_put_contents('Authority',$answer['Authority']);
      //     $test->redirect();
      // }


      // $url = 'http://sandbox.arianpal.com/WebService.asmx?wsdl';
      // $MerchantID = '100001';
      // $Password='abcdeFGHI';
      // $Price=100;
      // $ResNumber='';
      // $Description='sfnd siodfndsv';
      // $Paymenter='hashem';
      // $Email='ghanbarifard_hashem@yahoo.com';
      // $Mobile='09383027965';
      // $redirect = urlencode('http://localhost:84/CmsLaravel/buy');


      // $ch = curl_init();
      // curl_setopt($ch,CURLOPT_URL,$url);
      // curl_setopt($ch,CURLOPT_POSTFIELDS,"MerchantID=$MerchantID&Password=$Password&Price=$Price&ReturnPath=$redirect&ResNumber=$ResNumber&Description=$Description&Paymenter=$Paymenter&Email=$Email&Mobile=$Mobile");
      // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
      // curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
      // $res = curl_exec($ch);
      // curl_close($ch);
      // var_dump($res);




      // $MerchantID = 'cf03cc2c-62b7-11e6-b2c3-005056a205be';
      // $Price = 100;
      // $Description = 'hashem sdg';
      // $Email = 'ghanbarifard_hashem@yahoo.com';
      // $Mobile = '09383027965';
      // $CallbackURL = '';
      // $url = 'https://de.zarinpal.com/pg/services/WebGate/wsdl';

      // $ch = curl_init();
      // curl_setopt($ch,CURLOPT_URL,$url);
      // curl_setopt($ch,CURLOPT_POSTFIELDS,"MerchantID=$MerchantID&Amount=$Price&Description=$Description&Email=$Email&Mobile=$Mobile&CallbackURL=$CallbackURL");
      // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
      // curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
      // $res = curl_exec($ch);
      // curl_close($ch);



      // var_dump($res);



      // $MerchantID = '54620e4d-0000-40c2-94ea-59f15bef37d4'; // کد اختصاصی درگاه</code></p>
      // $Amount = 1000;  //مقدار سفارش
      // $Description = 'توضیحات خرید ';
      // $Email = 'ghanbarifard_hashem@yahoo.com';   // آدرس ایمیل خریدار
      // $Mobile = '09383027965'; //  شماره همراه خریدار
      // $CallbackURL = 'http://www.ebdali.com/payment/verify/';  //  آدرس صفحه بازگشت از خرید اینترنتی
      // // و حالا ایجاد یک نمونه برای پرداخت
      // \SoapWrapper::add(function ($service) {
      // $service
      // ->name('currency')
      // ->wsdl('https://de.zarinpal.com/pg/services/WebGate/wsdl')
      // ->trace(true);
      // });




      





    }
}
