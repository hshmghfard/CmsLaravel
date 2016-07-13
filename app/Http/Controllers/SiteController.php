<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TblPost;
use DB;
use Auth;
use App\TblComment;
use App\TblCategory;
use App\TblPostCategory;
use App\Http\Requests;
use App\TagsModel;
use App\TagsAndPostModel;
use App\CallModel;

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
         $skip=($page-1)*10;
         $Product=DB::table('tbl_post')->orderBy('id','desc')->skip($skip)->take(10)->get();
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
        return View('index.single',['Product'=>$Product,'comment'=>$Comment]);
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
}
