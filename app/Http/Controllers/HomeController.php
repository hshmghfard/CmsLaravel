<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\TblPost;
use App\TblComment;
use DB;
use Auth;

class HomeController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page=1)
    {
    	if($page!=0)
       	{
	         $skip=($page-1)*5;
	         $Product=DB::table('tbl_post')->orderBy('id','desc')->skip($skip)->take(5)->get();
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

    // public function show($title)
    // {
    //     $Product=TblPost::where('post_url',$title)->first();
    //     $Comment=TblComment::orderBy('comment_id','desc')->where(['post_id'=>$Product['id'],'comment_replay'=>0])->get();
    //     return View('index.single',['Product'=>$Product,'comment'=>$Comment]);
    // }

}
