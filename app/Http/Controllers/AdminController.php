<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Auth;

class AdminController extends Controller
{



    public function __construct()
    {

        if ( Auth::check() )
        {
            $roule = Auth::user()->roule;
            $state = Auth::user()->state;

            if( $state == 'block'){
                return redirect('/logout')->send();   
            }
            else
            {
                if ( $roule == '0')
                {
                    return redirect('/user/panel')->send();   
                }
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
        return View('admin.TestAdmin');
    }

    public function first(){

        return View('index.IndexPage');
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
        $post = new Post($request -> all());
        $post -> url = str_replace(' ','-', $post -> title);

        if( $request -> hasFile('img') ){
            $FileName = time().'.'.$request->file('img')->getClientOriginalExtension();

            if($request->file('img')->move('resources/upload',$FileName)){
                $post->img = URL().'resources/upload/'.$FileName;
            }
        }
        else{

        }
//        $post -> save();
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