<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PostRequest;
use App\TblPost;
use App\TagsModel;
use App\TagsAndPostModel;
use App\TblPostCategory;
use Auth;

class PostController extends Controller
{



    public function __construct()
    {

        if ( Auth::check() )
        {
            $roule = Auth::user()->roule;
            $state = Auth::user()->state;

            if( $roule == '0'){
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
          return redirect('admin/post');
        }
        $skip=($page-1)*4;
        $model=TblPost::orderBy('id','desc')->paginate('10');
        $total=TblPost::count();
        return View('post.index',['model'=>$model,'page'=>$page,'total'=>$total]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('post.create');   
    }

    /**
     * Store a newly created resource in storage.
     *Request $request
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {

      $Post=new TblPost($request->all());
      $title=str_replace('-','', $Post->post_title);
      $Post->post_url=preg_replace('/\s+/','-',$title);
      $Post->post_date=time();
      $Post->post_lastedit=time();
      $Post->post_state='0';
      $Post->post_commentstate='0';
      $Post->post_countview=0;
       
      $Post->user=Auth::User()->id;



      if($request->hasfile('post_img'))
      {
          $FileName=time().'.'.$request->file('post_img')->getClientOriginalExtension();

          if($request->file('post_img')->move('resources/upload/post_img',$FileName))
          {
            $Post->post_img=$FileName;
          }

      }

      if($Post->save())
      { 

        if($request->has('cat'))
        {
            foreach ($request->get('cat') as $key => $value) 
            {
                $Menu_Post=TblPostCategory::create(['post_id'=> $Post->id,'category_id'=>$value]);
            }
        }

        if($request->has('tag'))
        {
              $array=array();

              $array=explode(',',$request->tag);

              for( $i=0; $i<sizeof($array); $i++ )
              {

                $searchtag=TagsModel::where('tags_name',$array[$i])->first()['id'];
                if($searchtag)
                {
                  $tagpost=TagsAndPostModel::create(['id_post'=>$Post->id,'id_tag'=>$searchtag]);
                }
                else
                {
                  $tag=TagsModel::create(['tags_name'=> $array[$i]]); 
                  $tagpost=TagsAndPostModel::create(['id_post'=>$Post->id,'id_tag'=>$tag->id]);
                }
                
              }
        }
            
        $url='/admin/post';
        return redirect($url);

      }
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

      $model=TblPost::find($id);
      // $tags=TagsAndPostModel::where('id_post',$id)->get();
      // $stringa='';
      // foreach ($tags as $tags) {
      //   $tag=TagsModel::where('id',$tags['id_tag'])->first()['tags_name'];
      //   $stringa=$stringa.','.$tag;
      // }

      return View('post.edit',['model'=>$model]);
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

         $Post=TblPost::find($id);
         $title=str_replace('-','', $Post->post_title);
         $Post->post_url=preg_replace('/\s+/','-',$title);
         $Post->post_date=time();
         $Post->post_lastedit=time();
         $Post->post_state='0';
         $Post->post_commentstate='0';


         if($request->hasfile('post_img'))
         {
            $FileName=time().'.'.$request->file('post_img')->getClientOriginalExtension();

            if($request->file('post_img')->move('resources/upload/post_img',$FileName))
            {
              $Post->post_img=$FileName;
            }

         }


         if($Post->update($request->all()))
         {



           $delete=TblPostCategory::where('post_id',$id)->delete();
           foreach ($request->get('cat') as $key => $value) 
           {
              $Menu_Post=TblPostCategory::create(['post_id'=>$id,'category_id'=>$value]);
           }




           $tagspost=TagsAndPostModel::where('id_post',$id)->delete();

          if($request->has('tag'))
          {
            $array=array();

            $array=explode(',',$request->tag);

            for( $i=0; $i<sizeof($array); $i++ )
            {

              $searchtag=TagsModel::where('tags_name',$array[$i])->first()['id'];
              if($searchtag)
              {
                $tagpost=TagsAndPostModel::create(['id_post'=>$Post->id,'id_tag'=>$searchtag]);
              }
              else
              {
                $tag=TagsModel::create(['tags_name'=> $array[$i]]); 
                $tagpost=TagsAndPostModel::create(['id_post'=>$Post->id,'id_tag'=>$tag->id]);
              }
                
            }
          }  



         }

        
         $url='admin/post/';
         return redirect($url);
          
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

      $Post=TblPost::find($id)->delete();
      return redirect('admin/post');
        //
    }
}
