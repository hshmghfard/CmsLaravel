<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TblRequestLearning;
use App\Http\Requests;
use Auth;

class AdminRequestController extends Controller
{


    public function __construct()
    {

        if ( Auth::check() )
        {
            $roule = Auth::user()->roule;
            $state = Auth::user()->state;

            if( $roule != '1' ){
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
          return redirect('admin/request');
        }
        $skip=($page-1)*10;
        $model=TblRequestLearning::orderby('id','desc')->paginate('10');
        $total=TblRequestLearning::count();
        return View('admin.requests.index',['model'=>$model,'page'=>$page,'total'=>$total]);
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
        $model=TblRequestLearning::find($id);
        return View('admin.requests.okRequests',['model'=>$model]);
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
        $requests=TblRequestLearning::find($id);
        $requests->request_state='1';

        $requests->update($request->all());
        $url='admin/request';
        return redirect($url);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $request=TblRequestLearning::where('id',$id)->delete();
        return redirect('admin/request');
    }
}
