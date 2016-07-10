<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\QustionRequest;
use App\Http\Requests;
use App\FavoritsModel;
use App\QustionModel;
use Auth;

class QustionController extends Controller
{



    public function __construct()
    {

        if ( Auth::check() )
        {
            $roule = Auth::user()->roule;
            $state = Auth::user()->state;

            if( $roule == '1'){
                return redirect('/admin')->send();   
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
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $favo=['-'=>'یک موضوع را انتخاب نمایید.']+FavoritsModel::orderBy('id','desc')->lists('favo_name','id')->toArray();
        
        return View('user.qustions.create',['favo'=>$favo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QustionRequest $request)
    {
        $qu = new QustionModel($request->all());

        $qu->qu_user=Auth::User()->id;
        $qu->qu_state='0';

        if( $qu->save() )
        {
            return redirect('user/panel');
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
}
