<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TblComment;
use App\Http\Requests;
use App\Http\Requests\CommentRequest;
use Auth;

class CommentController extends Controller
{
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

        $comment=new TblComment($request->all());
        
        if( Auth::check() )
        {
            $username=Auth::user()->name;
            $useremail=Auth::user()->email;

            $comment->comment_flname=$username;
            $comment->comment_email=$useremail;
            $comment->comment_replay='0';
            $comment->comment_state='0';
            $comment->comment_date=time();

            if($comment->save())
            {
           
            }
        }
        else
        {
            $comment->comment_replay='0';
            $comment->comment_state='0';
            $comment->comment_date=time();

            $comment->save();            
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
