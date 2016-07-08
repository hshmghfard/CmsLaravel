<?php
use App\lib\Jdf;
?>
@extends('layouts.FirstPage')

@section('content')

	<div class="box row">

				<span class="vip"><i class="icon icon-vip"></i></span>
				<div class="title row">
					<div class="post-icon col"><i class="icon icon-post"></i></div>

					<h2><a rel="bookmark" href="<?= url('/'.$Product->post_url) ?>" title="{{ $Product->post_title }}"><span itemprop="name">
						{{ $Product->post_title }}
					</span></a></h2>



					<?php
		            	$cat=get_category2($Product->id);
        		    ?>
            		<div class="category block"><i class="icon icon-cate col"></i>دسته بندی : 
            		<?php
            		foreach ($cat as $cat) {
            		?>
            		<a href="" rel="category tag"><?php echo $cat2 = get_category($cat['category_id']); ?></a> , 
            		<?php
            		} 
            		?>

					
					</div>
				</div>
				

				<div class="text-post tow">
					<p style="text-align: center;margin-bottom: 16px;">
						<img src="<?= asset('resources/upload/post_img/'. $Product->post_img) ?>" alt="{{ $Product->post_title }}" title="{{ $Product->post_title }}" style="text-align: center;border:0px;text-align: center;">
					</p>





					<div itemprop="description">
							{!! $Product->post_content !!}
					</div>	
					<div class="clearfix"></div>
					
				</div>



				<span class="detail col clock">
            		<i class="icon icon-clock col"></i>
	            	<span>تاریخ ارسال</span><br>
	            		<?php $Jdf=new Jdf(); echo $Jdf->jdate('Y/n/j-H:i:s',$Product->post_date); ?>    
	            </span>
			    <span class="detail col admin">
			        <i class="icon icon-admin col"></i>
			        <span>ارسال شده توسط</span><br>
			        {!! get_user($Product->user) !!} 
			    </span>
			    <span class="detail col">
			        <i class="icon icon-view col"></i>
			        <span>میزان بازدید</span><br>
			        {{ $Product->post_countview }} نفر بازدیدکننده
			    </span>
							

			
				
				<div class="cm-count"><span class="row">{!! get_countcomment($Product->id) !!}</span> دیدگاه</div>
	</div>
			
				




			
			
			
	<div class="box row dlbox">

		<div class="post-icon col" style="padding-bottom: 0px;"><i class="icon icon-admin col" style="background-position: -307px -39px;"></i>
		</div>
		<span style="float: right;margin-top: -1px;font: 17px yekan;">دانلود آموزش ها
		</span>

									
		<div class="tit row" style="font-size: 13px;">
			<br><span style="font-size: 19px;padding: 3px;color: #636363;padding-right: 21px;
					padding-left: 21px;"> دریافت آموزش 
				</span><br><br>
		</div>



		<div class="row"> <span style="margin-top: 12px;font: 13px yekan;color: rgb(249, 78, 78);"></span>
		</div>

		<center>
			<span class="dl-list col">
				<a style="border-right: 2px solid #24b9d4;
					padding: 4px 15px 4px 17px;
					background-color: #FDFDFD;
					float: right;
					text-align: right;
					width: 96%;
					border-radius: 2px;
					margin-right: 19px;" href="{{ $Product->post_link }}" title="دانلود کنید">» {{ $Product->post_title }}
				</a><br>			
			</span>
		</center>
		<span class="clearfix row"></span>
								
	</div>











	<div class="box row">
		<div class="title row">
			<div class="post-icon col"><i class="icon icon-cm2"></i></div>
			<h2>{!! get_countcomment($Product->id) !!} دیدگاه ثبت شده</h2>
			<div class="category block">شما هم نظری بدهید</div>
		</div>




		

		
		@foreach($comment as $comment) 
		<div class="comment even thread-even depth-1 cm row" id="li-comment-28758">
			<div class="avatar col"><img alt="" src="" srcset="" class="avatar avatar-60 photo" height="60" width="60"></div>
			<div class="cm-text go-left">
				<span class="row name-cm">{{ $comment->comment_flname }}</span>

				
				<p id="comment-28758" class="comment-texttt">
					
					</p><section class="comment-content">
						<p>
							{{ $comment->comment_content }}
						</p>
										</section><!-- .comment-content -->
					
				<p></p><!-- #comment-## -->
			</div>
		</div>

		<?php 
			$recomm=App\TblComment::where(['comment_replay'=>$comment->id,'comment_state'=>1])->get();
		?>

			@foreach($recomm as $recomm) 
				<ul class="children">

				<div class="comment byuser comment-author-adminsoltani odd alt depth-2 cm row admin-comment reply-box" id="li-comment-28761">
					<div class="avatar col"><img alt="" src="" srcset="" class="avatar avatar-60 photo" height="60" width="60"></div>
					<div class="cm-text go-left">
						<span class="row name-cm">{{ $recomm->comment_flname }}</span>				
						<p id="comment-28761" class="comment-texttt">
								
						</p><section class="comment-content">
						<p>{{ $recomm->comment_content }}</p>
							</section><!-- .comment-content -->
								
						<p></p><!-- #comment-## -->
					</div>
				</div>
				<!-- #comment-## -->
				</ul><!-- .children -->
			@endforeach


		@endforeach








						
			
		<form class="cm-form row" id="respond" action="<?= url('/comment') ?>" method="post">
			{!! csrf_field() !!}
			<span class="cmr col">
			<?php
                use App\Http\Controllers\Auth\AuthController;

                if( Auth::check() )
                {
                    $username=Auth::user()->name;
                    $userlname=Auth::user()->lname;

                    $user=$username.' '.$userlname;

                    echo $user;

                    ?>
                    <br>
                    نظری بدهید!

                <?php
                }
                else
                {
                	?>

                	<input placeholder="نام" class="" name="comment_flname" aria-required="true" type="text">
					<input placeholder="ایمیل" class="" name="comment_email" aria-required="true" type="text">	
                	
                	<?php
                }

            ?>

            </span>
			
							
			<span class="cml go-left">
				<textarea placeholder="تایپ دیدگاهتان ..." type="textarea" name="comment_content" aria-required="true"></textarea>
				<input value="ارسال کن" type="submit">
			</span>
			
			<span class="col cm-war">
				 توجه فرمایید:<br>
				نظرات شما پس از بررسی و تایید نمایش داده می شود.<br>
				لطفا نظرات خود را فقط در مورد مطلب بالا ارسال کنید.
			</span>
			
			<input name="post_id" value="{{ $Product->id }}" id="post_id" type="hidden">
			<p style="display: none;"><input id="akismet_comment_nonce" name="akismet_comment_nonce" value="f83220ce32" type="hidden"></p><p style="display: none;"></p>	
		</form>
	</div>		
			


	<div class="box row tags">
		<div class="title row">
			<div class="post-icon col"><i class="icon icon-tags"></i>
			</div>
			<h2>برچسب ها</h2>
		</div>

		<?php
			$tags=get_tags($Product->id);
		?>

		@foreach($tags as $tags)
			<a href="<?= url('/tag/'.get_tagname($tags->id_tag)) ?>" rel="tag">{!! get_tagname($tags->id_tag) !!}</a>,		
		@endforeach
	</div>






<?php

use App\TblComment;
use App\User;
use App\TblPostCategory;
use App\TblCategory;
use App\TagsModel;
use App\TagsAndPostModel;



function get_tags($id)
{
	$tags=TagsAndPostModel::where('id_post',$id)->get();
	return $tags;
}

function get_tagname($id)
{
	$name=TagsModel::find($id);
	return $name['tags_name'];
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
    $countco=TblComment::where(['post_id'=>$id,'comment_state'=>1])->count();
    return $countco;
}

function get_recomment($id)
{
	$countco=TblComment::where('comment_replay',$id)->get();
    return $countco;
}

function get_user($id)
{
    $usern=User::find($id);
    $reuser=$usern->name . '-' . $usern->lname;
    return $reuser;
}

?>


@endsection

	