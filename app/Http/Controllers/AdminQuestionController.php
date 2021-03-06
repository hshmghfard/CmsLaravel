<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QustionModel;
use App\AnsewerModel;
use App\Http\Requests;
use Auth;

class AdminQuestionController extends Controller
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
          return redirect('admin/question');
        }
        $skip=($page-1)*10;
        $model=QustionModel::orderby('id','desc')->paginate('10');
        $total=QustionModel::count();
        return View('admin.questions.index',['model'=>$model,'page'=>$page,'total'=>$total]);
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
        $model2=AnsewerModel::where('id_question',$id)->orderby('id','desc')->paginate('10');
        $total=AnsewerModel::count();

        $model=QustionModel::find($id);
        return View('admin.questions.okQuestions',['model'=>$model,'model2'=>$model2,'total'=>$total]);
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
        $question=QustionModel::find($id);
        $question->qu_state='1';

        $question->update($request->all());
        $url='admin/question';
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
        $question=QustionModel::where('id',$id)->delete();
        return redirect('admin/question');
    }
}
