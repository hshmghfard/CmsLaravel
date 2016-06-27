<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\TblRequestLearning;
use App\Http\Requests\LearningRequest;

class RequestLearning extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page=1)
    {

        $user=Auth::user()->id;

        if($page==0)
        {
          return redirect('user/panel/request');
        }
        $model=TblRequestLearning::where('id_user',$user)->orderby('id','desc')->get();
        $total=TblRequestLearning::count();
        return View('user.requestlearning.index',['model'=>$model,'page'=>$page,'total'=>$total]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('user.requestlearning.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LearningRequest $request)
    {
        $resave = new TblRequestLearning($request->all());
        $resave->request_date=time();
        $resave->request_state='0';
        $resave->request_ansewer='';

        $resave->id_user=Auth::User()->id;

        if( $resave->save() )
        {
            $url='/user/panel/request';
            return redirect($url);
        }
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
       return View('user.requestlearning.edit',['model'=>$model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LearningRequest $request, $id)
    {
        $learning=TblRequestLearning::find($id);
        $learning->request_date=time();
        $learning->request_state='0';

        $learning->update($request->all());
        $url='user/panel/request';
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
        $delete=TblRequestLearning::where('id',$id)->delete();
        $url='user/panel/request';
        return redirect($url);
    }
}
