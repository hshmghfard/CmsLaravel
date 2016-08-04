<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TblBuyPost;
use App\Http\Requests;
use Auth;
use DB;
use App\TblPost;
use App\CountBuyModel;

class AdminBuyPosti extends Controller
{


    public function __construct()
    {

        if ( Auth::check() )
        {
            $roule = Auth::user()->roule;

            if( $roule != '1'){
                return redirect('/user/panel')->send();
            }
        }
        else{

            return redirect('login')->send();

        }
        // $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page=1)
    {
        if($page==0)
        {
            return redirect('admin/buy/posti');
        }
        $skip=($page-1)*10;
        $model=TblBuyPost::where('type_buy',1)->orderby('id','desc')->paginate('10');
        $total=TblBuyPost::count();
        return View('admin.posti.index',['model'=>$model,'page'=>$page,'total'=>$total]);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model=TblBuyPost::find($id);
        $postid=CountBuyModel::where('id_buy',$id)->get();
        $post=array();
        $i=0;
        foreach ($postid as $postid) {
            $post[$i]=$postid->id_product;
            $i++;
        }
        $model2=TblPost::find($post);
        return View('admin.posti.edit',['model'=>$model,'model2'=>$model2]);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=TblBuyPost::where('id',$id)->delete();
        $delete2=CountBuyModel::where('id_buy',$id)->delete();
        return redirect('admin/buy/posti');
    }

    public function state($id,$state)
    {
        DB::update('update tbl_buy_post set state=? where id=?',[$state,$id]);
        return redirect('admin/buy/posti/'.$id.'/edit');
    }
}
