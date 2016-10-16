<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Http\Requests;

class ProFileController extends Controller
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
        return View('user.profile');
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
        $user=User::find($id);

        if($request->has('password2'))
        {
            $user->password=bcrypt($request->password2);
        }

        if($request->hasfile('img2'))
        {
            $FileName=time().'.'.$request->file('img2')->getClientOriginalExtension();

            $user->img=$FileName;
            $request->file('img2')->move('resources/img/',$FileName);

        }

        if( $user->update( $request->all() ) )
        {
            return redirect('/user/panel/editprofile');
        }
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
 

    public function editprofile()
    { 
        $id = Auth::user()->id;
        $model=User::find($id);
        return View('user.editprofile',['model'=>$model]);
    }
}
