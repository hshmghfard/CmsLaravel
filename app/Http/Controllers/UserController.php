<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Http\Requests;

class UserController extends Controller
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
          return redirect('admin/user');
        }
        
        $skip=($page-1)*10;
        // $model=TblComment::orderby('comment_id','desc')->skip($skip)->take(10)->get();
        $model=User::orderby('id','desc')->paginate('10');
        $total=User::count();
        return View('admin.users.index',['model'=>$model,'page'=>$page,'total'=>$total]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roul=['0'=>'مشترک','1'=>'مدیر'];
        return View('admin.users.create',['roul'=>$roul]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=new User($request->all());
        $user->state='0';
        $user->password=bcrypt($request->password2);

        if($request->hasfile('img'))
        {
            $FileName=time().'.'.$request->file('img')->getClientOriginalExtension();

            if($request->file('img')->move('resources/img/',$FileName))
            {
                $user->img=$FileName;
            }

        }

        if( $user->save() )
        {
            return redirect('/admin/user');
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
        $model=User::find($id);
        $roul=['0'=>'مشترک','1'=>'مدیر'];
        return View('admin.users.edit',['model'=>$model,'roul'=>$roul]);
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

        if( $user->update($request->all()) )
        {
            return redirect('/admin/user/'.$id.'/edit');
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
        $delete=User::find($id)->delete();
        return redirect('admin/user');
    }
}
