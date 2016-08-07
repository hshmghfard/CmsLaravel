<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TblPost;
use DB;
use Session;
use Auth;
use App\TblComment;
use App\TblCategory;
use App\TblPostCategory;
use App\Http\Requests;
use App\Http\Requests\RequestBuyPost;
use App\TagsModel;
use App\TagsAndPostModel;
use App\CallModel;
use App\TblBuyPost;
use App\CountBuyModel;
use App\lib\BuyOnline;
use Artisaninweb\SoapWrapper\Facades\SoapWrapper;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page=1)
    {
      if($page!=0)
      {
        $skip=($page-1)*2;
        $Product=DB::table('tbl_post')->orderBy('id','desc')->skip($skip)->take(2)->get();
        if(!empty($Product))
        {
          $total=TblPost::count();
          return View('index.IndexPage',['Products'=>$Product,'page'=>$page,'total'=>$total]);
        }
        else
        {  
          abort('404','برای درخواست شما باسخی یافت نشد');
        } 
      }
      else
      {
        abort('404');
      }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function show2($title)
    {
        $Product=TblPost::where('post_url',$title)->first();
        $Comment=TblComment::orderBy('id','desc')->where(['post_id'=>$Product['id'],'comment_replay'=>0,'comment_state'=>1])->get();

        $count=$Product->post_countview + 1;
        $up=DB::update('update tbl_post set post_countview=? where id=?',[$count,$Product->id]);

        return View('index.single',['Product'=>$Product,'comment'=>$Comment]);
    }



    public function buyonline()
    {
      return View('index.pay');
    }


    public function postbuyonline(Request $request)
    {
      // $price=$request->price;
      // $resnumber=$request->resnumber;
      // $description=$request->description;
      // $paymenter=$request->paymenter;
      // $email=$request->email;
      // $mobile=$request->mobile;
      // $resulte=BuyOnline::pardakht($price,$resnumber,$description,$paymenter,$email,$mobile);

      // $MerchantID='100001'; // شناسه درگاه
      // $Password='abcdeFGHI';// کلمه عبور درگاه
      // $Price=1000; //Price By Toman
      // $ReturnPath='http://localhost:84/CmsLaravel/buy';
      // $ResNumber=1234 ;// Order Id In Your System
      // $Description=urlencode('جزئیات سفارش ');
      // $Paymenter=urlencode('نام پرداخت کننده ');
      // $Email='Paymenter@yahoo.com';
      // $Mobile='09127038019';
      // $client=new SoapWrapper('http://sandbox.arianpal.com/WebService.asmx?wsdl');
      // $res=$client->RequestPayment(array("MerchantID" => $MerchantID , "Password" =>$Password , "Price" =>$Price, "ReturnPath" =>$ReturnPath, "ResNumber" =>$ResNumber, "Description" =>$Description, "Paymenter" =>$Paymenter, "Email" =>$Email, "Mobile" =>$Mobile));
      // $PayPath = $res->RequestPaymentResult->PaymentPath;
      // $Status = $res->RequestPaymentResult->ResultStatus;
      // if($Status == 'Succeed')
      // {
      // echo "<html><head><title>Connecting ....</title><head><body onload=\"javascript:window.location='$PayPath'\" > درحال اتصال به
      // درگاه </body></html>";
      // }
      // else
      // {
      // echo $Status;
      // }
      // var_dump($resulte->ResultStatus);


        //   SoapWrapper::add(function ($service) {
        //     $service
        //         ->name('currency')
        //         ->wsdl('http://sandbox.arianpal.com/WebService.asmx?wsdl')
        //         ->trace(true)                                                   // Optional: (parameter: true/false)
        //         ->header()                                                      // Optional: (parameters: $namespace,$name,$data,$mustunderstand,$actor)
        //         ->customHeader($customHeader)                                   // Optional: (parameters: $customerHeader) Use this to add a custom SoapHeader or extended class                
        //         ->cookie()                                                      // Optional: (parameters: $name,$value)
        //         ->location()                                                    // Optional: (parameter: $location)
        //         ->certificate()                                                 // Optional: (parameter: $certLocation)
        //         ->cache(WSDL_CACHE_NONE)                                        // Optional: Set the WSDL cache
        //         ->options(['login' => 'username', 'password' => 'password']);   // Optional: Set some extra options
        // });

        // $data = [
        //     'CurrencyFrom' => 'USD',
        //     'CurrencyTo'   => 'EUR',
        //     'RateDate'     => '2014-06-05',
        //     'Amount'       => '1000'
        // ];

        // // Using the added service
        // SoapWrapper::service('currency', function ($service) use ($data) {
        //     var_dump($service->getFunctions());
        //     var_dump($service->call('GetConversionAmount', [$data])->GetConversionAmountResult);
        // });

    }


    public function buy(Request $request)
    {
      
    }

    public function ShowByCategory($cat,$page=1)
    {


        $category=TblCategory::where('category_name',$cat)->first()['id'];

        if($category)
        {

            $skip=($page-1)*10;
            $postcat=DB::table('tbl_post_category')->where('category_id',$category)->orderBy('post_id','desc')->skip($skip)->take(10)->get();

            if(!empty($postcat))
            {
             
                $array=array();
                $i=0;
                foreach ($postcat as $postcat) 
                {
                    $array[$i]=$postcat->post_id;
                    $i++;
                }
                $Product=TblPost::orderBy('id','desc')->find($array);
                $total=TblPostCategory::where('category_id',$category)->count();
                return View('index.IndexPage',['Products'=>$Product,'page'=>$page,'total'=>$total]);

            }
        }
    }


    public function ShowByTag($tag,$page=1)
    {
        $tags=TagsModel::where('tags_name',$tag)->first()['id'];

        if($tags)
        {

            $skip=($page-1)*10;
            $postcat=DB::table('tbl_tags_post')->where('id_tag',$tags)->orderBy('id_post','desc')->skip($skip)->take(10)->get();

            if(!empty($postcat))
            {
             
                $array=array();
                $i=0;
                foreach ($postcat as $postcat) 
                {
                    $array[$i]=$postcat->id_post;
                    $i++;
                }
                $Product=TblPost::orderBy('id','desc')->find($array);
                $total=TagsAndPostModel::where('id_tag',$tags)->count();
                return View('index.IndexPage',['Products'=>$Product,'page'=>$page,'total'=>$total]);

            }
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function call()
    {
        return View('index.callme');
    }


    public function save(Request $request)
    {
        $call = new CallModel($request->all());

        $call->call_date = time();
        $call->call_state = '0';

        if($call->save())
        {
            return redirect('/');
        }
    }


    public function about()
    {
        return View('index.about');
    }

    public function learning()
    {
        if ( Auth::check() )
        {
            return redirect('user/panel/request')->send();
        }
        else{
            return redirect('user/panel/request')->send();
        }
    }

    public function add(Request $request)
    {
        if(session::has('cart'))
        {
          $cart=session::get('cart');
          if(array_key_exists($request->product_id,$cart))
          {
            $cart[$request->product_id]++;
          }
          else
          {
             $cart[$request->product_id]=1;
          }
          session::put('cart',$cart);

        }
        else
        {
          $cart=array();
          $cart[$request->product_id]=1;
          session::put('cart',$cart);

        }

        return View('index.cart');
    }

    public function checkout()
    {
        return View('index.checkout');
    }

    public function empty_cart()
    {
        if(session::has('cart'))
        {
            Session::forget('cart');
            Session::forget('total_price');
        }
        return View('index.cart'); 
    }

    public function remove_cart(Request $request)
    {

        $cart=session::get('cart');
        Session::forget('cart');
        $cart2=array();
        foreach ($cart as $key => $value) {
              
            
            if ($key!=$request->product_id) {
                $cart2[$key]=$value;  
            }
            else
            {
                $count=$cart[$request->product_id] - 1;
                if($count==0)
                {
                }
                else
                {
                    $cart2[$request->product_id]=$count;
                }
            }

        }
        session::put('cart',$cart2);

        // if($cart[$request->product_id]!=0)
        // {
        //     $cart[$request->product_id]--;
        // }
        // else
        // {

        // }
        // session::put('cart',$cart);
        Session::forget('total_price');
        return View('index.cart');

    }

    public function buy_post()
    {
        if( Session::has('cart') )
        {
            return View('index.buy_post');
        }
        else
        {
            return redirect('/');
        }
    }

    public function save_buypost(RequestBuyPost $request)
    {
        $buy = new TblBuyPost( $request->all() );
        $buy->state=0;
        $buy->date=time();
        $buy->type_buy=1;

        if( $buy->save() )
        {

            if( Session::has('cart') )
            {
                $cart=session::get('cart');
                Session::forget('cart');
                foreach ($cart as $key => $value) {
                    $count=CountBuyModel::create(['id_buy'=> $buy->id,'id_product'=>$key,'count'=>$value,'type_buy'=>1,'state'=>0]);
                }
            }

            return redirect('/');
        }
    }

    public function searchview()
    {
      return View('index.search');
    }

    public function search(Request $request)
    {
      $model=TblPost::orderBy('id','desc')->where('post_content','LIKE','%'.$request->get('content').'%')->get();

      return View('index.search',['model'=>$model]);
    }
}
