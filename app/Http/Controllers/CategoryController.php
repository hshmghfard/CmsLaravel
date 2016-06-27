<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TblCategory;
use App\Http\Requests;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page=1)
    {

        if($page==0)
        {
          return redirect('admin/post');
        }
        $model=TblCategory::orderby('id','desc')->get();
        $total=TblCategory::count();
        return View('category.index',['model'=>$model,'page'=>$page,'total'=>$total]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat=['-'=>'یک دسته را انتخاب کنید']+TblCategory::where('category_replayid','-')->orderBy('id','desc')->lists('category_name','id')->toArray();
        
        return View('category.create',['cat'=>$cat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $Category=new TblCategory($request->all());
        if($Category->save())
        {
            // $url='/admin/category';
           $url='admin/category/'.$Category->id.'/edit';
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
       $cat=['-'=>'یک دسته را انتخاب کنید']+TblCategory::where('category_replayid','-')->orderBy('id','desc')->lists('category_name','id')->toArray();
       $model=TblCategory::find($id);
       return View('category.edit',['model'=>$model,'cat'=>$cat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $Category=TblCategory::find($id);
        if($Category->category_replayid=='-')
        {
            if($Category->category_replayid!=$request->get('cat'))
            {

                TblCategory::where('category_replayid',$Category->id)->update(['category_replayid'=>$request->get('cat')]);
            }
        }
         $Category->update($request->all());
         $url='admin/category/'.$id.'/edit';
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
        $menu=TblCategory::where('id',$id)->first()['id'];

        $delete=TblCategory::where('category_replayid',$menu)->delete();

        $Category=TblCategory::find($id)->delete();

        return redirect('admin/category');
    }
}
