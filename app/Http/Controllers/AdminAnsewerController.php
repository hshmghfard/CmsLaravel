<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AnsewerModel;
use App\Http\Requests;
use Auth;

class AdminAnsewerController extends Controller
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
        $ansewer=new AnsewerModel($request->all());
        $ansewer->id_user=Auth::User()->id;
        $ansewer->ansewer_date=time();
        $ansewer->ansewer_state='1';
    
        $ansewer->save();

        return redirect('admin/question/'.$ansewer->id_question.'/edit');
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
        $model=AnsewerModel::find($id);
        return View('admin.questions.okQuestionsUser',['model'=>$model]);
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
        $ansewer=AnsewerModel::find($id);
        $ansewer->ansewer_state='1';

        $ansewer->update($request->all());
        $url='admin/question/'.$ansewer->id_question.'/edit';
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
        //
    }
}
