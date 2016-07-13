<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TblComment;
use App\Http\Requests;
use Auth;

class AdminCommentController extends Controller
{


    public function __construct()
    {

        if ( Auth::check() )
        {
            $roule = Auth::user()->roule;
            $state = Auth::user()->state;

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
          return redirect('admin/comment');
        }
        $skip=($page-1)*10;
        // $model=TblComment::orderby('comment_id','desc')->skip($skip)->take(10)->get();
        $model=TblComment::orderby('id','desc')->paginate('10');
        $total=TblComment::count();
        return View('admin.comment.index',['model'=>$model,'page'=>$page,'total'=>$total]);
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
        $model=TblComment::find($id);
        return View('admin.comment.okComment',['model'=>$model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $comment=TblComment::find($id);
        $comment->comment_state='1';

        $comment->update($request->all());
        $url='admin/comment';
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
        $menu=TblComment::where('id',$id)->first()['id'];

        $delete=TblComment::where('comment_replay',$menu)->delete();

        $comment=TblComment::where('id',$id)->delete();

        return redirect('admin/comment');
    }
}
