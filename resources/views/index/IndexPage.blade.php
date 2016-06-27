<?php
    use App\TblPostCategory;
    use App\TblCategory;
?>
@extends('layouts.FirstPage')




@section('content')

@foreach($Products as $Product) 

    <div class="box row">
        <span class="vip"><i class="icon icon-vip"></i></span>
        <div class="title row">
            <div class="post-icon col"><i class="icon icon-post"></i></div>
            <h2><a target="_blank" rel="bookmark" href="<?= url('/content/'.$Product->post_url) ?>" title="{{ $Product->post_title }}">{{ $Product->post_title }}</a></h2>

            <?php

            	$cat=get_category2($Product->id);
            	// $cat=TblPostCategory::where('post_id',$Product->id)->get();
            	// var_dump($cat2);


            ?>
            <div class="category block"><i class="icon icon-cate col"></i>دسته بندی : 
            <?php
            	foreach ($cat as $cat) {
            		# code... 
            ?>
            	<a href="" rel="category tag"><?php echo $cat2 = get_category($cat['category_id']); ?></a> , 

            <?php
            } 
            ?>

            </div>
        </div>
        <div class="text-post tow">
            <p style="text-align: center;margin-bottom: 16px;">
            <img src="<?= asset('resources/upload/post_img/'. $Product->post_img) ?>" style="
            text-align: center;
            border:0px;
            text-align: center;"></p>
        
        	{!! get_content($Product->post_content) !!}

        <span class="line col row"></span>
        </div>
    
        <span class="detail col clock">
            <i class="icon icon-clock col"></i>
            <span>تاریخ ارسال</span><br>
            {{ $Product->post_date }}    </span>
        <span class="detail col admin">
            <i class="icon icon-admin col"></i>
            <span>ارسال شده توسط</span><br>
             {!! get_user($Product->user) !!} </span>
        <span class="detail col">
            <i class="icon icon-view col"></i>
            <span>میزان بازدید</span><br>
            {{ $Product->post_countview }} نفر بازدیدکننده
        </span>
    
        <a target="_blank" class="post-more go-left" rel="bookmark" href="https://learnfiles.com/downloads/%d9%81%db%8c%d9%84%d9%85-%d8%a2%d9%85%d9%88%d8%b2%d8%b4-star-rating-%d8%af%d8%b1-php-%d8%a8%d9%87-%d8%b2%d8%a8%d8%a7%d9%86-%d9%81%d8%a7%d8%b1%d8%b3%db%8c/" title="فیلم آموزش Star Rating در PHP به زبان فارسی"><i class="icon icon-more col"></i> ادامه مطلب</a>
    
    <div class="cm-count"><span class="row">{!! get_countcomment($Product->id) !!}</span> دیدگاه</div>
</div>

@endforeach




<?php

use App\TblComment;
use App\User;


function get_content($content)
{
    $more=strpos($content,'<!--more-->');

    return $more ? substr($content,0,$more) : $content;
}

function get_category($id)
{
	
	$cat=TblCategory::find($id);
	return $cat['category_name'];
}

function get_category2($id)
{
	$cat=TblPostCategory::where('post_id',$id)->get();
	return $cat;
}

function get_countcomment($id)
{
    $countco=TblComment::where('post_id',$id)->count();
    return $countco;
}

function get_user($id)
{
    $usern=User::find($id);
    $reuser=$usern->name . '-' . $usern->lname;
    return $reuser;
}

\App\lib\Pageing::view($page,$total);

?>

@endsection
