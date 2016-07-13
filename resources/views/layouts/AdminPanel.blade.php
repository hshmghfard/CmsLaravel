<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="<?= asset('resources/img/favicon.html'); ?>">
    <title>پنل مدیریتی وب سایت دانشجویان کامپیوتر</title>
    <link href="<?= asset('resources/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= asset('resources/css/bootstrap-reset.css'); ?>" rel="stylesheet">
    <link href="<?= asset('resources/assets/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" />
    <link href="<?= asset('resources/css/style.css'); ?>" rel="stylesheet">
    <link href="<?= asset('resources/css/style-responsive.css'); ?>" rel="stylesheet" />
    <link href="<?= asset('resources/css/admin.css'); ?>" rel="stylesheet" />
</head>
<body>
<section id="container" class="">
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
        </div>
        <!--logo start-->
        <a href="#" class="logo">فلت<span>لب</span></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <!-- <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-tasks"></i>
                        <span class="badge bg-success">6</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">شما 6 برنامه در دست کار دارید</p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">پنل مدیریت</div>
                                    <div class="percent">40%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="external">
                            <a href="#">برنامه های بیشتر</a>
                        </li>
                    </ul>
                </li> -->

                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <i class="icon-bell-alt"></i>
                        <span class="badge bg-warning">{!! get_countcomment() !!}</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <div class="notify-arrow notify-arrow-yellow"></div>
                        <li>
                            <p class="yellow">شما {!! get_countcomment() !!} دیدگاه جدید تایید نشده دارید</p>
                        </li>
                        
                        
                        <?php

                            $comment=get_comment();

                        ?>
                        @foreach ($comment as $comment) 
                        <li>
                            <a href="<?= url('admin/comment/'.$comment['id'].'/edit') ?>">
                                <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                {!! $comment['comment_content'] !!}
                                <!-- <span class="small italic">10 دقیقه قبل</span> -->
                            </a>
                        </li>
                        @endforeach
                        <li class="external">
                            <a href="<?= url('admin/comment') ?>">نمایش دیدگاه ها</a>
                        </li>
                    </ul>
                </li>






                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <i class="icon-bell-alt"></i>
                        <span class="badge bg-warning">{!! get_countquestions() !!}</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <div class="notify-arrow notify-arrow-yellow"></div>
                        <li>
                            <p class="yellow">شما {!! get_countquestions() !!} سوال جدید تایید نشده دارید</p>
                        </li>
                        
                        
                        <?php

                            $questions=get_questions();

                        ?>
                        @foreach ($questions as $questions) 
                        <li>
                            <a href="<?= url('admin/question/'.$questions['id'].'/edit') ?>">
                                <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                {!! get_catname($questions['qu_category']) !!}
                                <!-- <span class="small italic">10 دقیقه قبل</span> -->
                            </a>
                        </li>
                        @endforeach
                        <li class="external">
                            <a href="<?= url('admin/question') ?>">نمایش همه سوالات</a>
                        </li>
                    </ul>
                </li>





                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <i class="icon-bell-alt"></i>
                        <span class="badge bg-warning">{!! get_countrequest() !!}</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <div class="notify-arrow notify-arrow-yellow"></div>
                        <li>
                            <p class="yellow">شما {!! get_countrequest() !!} درخواست جدید تایید نشده دارید</p>
                        </li>
                        
                        
                        <?php

                            $requests=get_request();

                        ?>
                        @foreach ($requests as $requests) 
                        <li>
                            <a href="<?= url('admin/request/'.$requests['id'].'/edit') ?>">
                                <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                {{ $requests['request_title'] }}
                                <!-- <span class="small italic">10 دقیقه قبل</span> -->
                            </a>
                        </li>
                        @endforeach
                        <li class="external">
                            <a href="<?= url('admin/request') ?>">نمایش همه درخواست ها</a>
                        </li>
                    </ul>
                </li>








                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-nav ">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder="Search">
                </li>
                <!-- user login dropdown start-->

                        <?php
                            use App\Http\Controllers\Auth\AuthController;

                            if( Auth::check() )
                            {
                                $username=Auth::user()->name;
                                $userlname=Auth::user()->lname;
                                $userimg=Auth::user()->img;

                                $user=$username.' '.$userlname;

                                if( $userimg!= "" )
                                {
                                    $userimg2=asset('resources/img/'.$userimg);
                                }
                                else
                                {
                                    $userimg2=asset('resources/img/avatar-mini.jpg');
                                }
                            }
                            else
                            {
                                
                            }
                        ?>


                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img style="width:30px;height:30px;" alt="" src="{{ $userimg2 }}">
                        <span class="username">
                        {{ $user }}
                        </span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a href="#"><i class=" icon-suitcase"></i>پروفایل</a></li>
                        <li><a href="#"><i class="icon-cog"></i> تنظیمات</a></li>
                        <li><a href="#"><i class="icon-bell-alt"></i> اعلام ها</a></li>
                        <li><a href="<?= url('/logout'); ?>"><i class="icon-key"></i> خروج</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="<?= url('/admin') ?>">
                        <i class="icon-dashboard"></i>
                        <span>صفحه اصلی</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span> مدیریت نوشته ها </span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="<?= url('admin/post/create') ?>">ایجاد نوشته</a></li>
                        <li><a class="" href="<?= url('admin/post') ?>">نمایش نوشته ها </a></li>
                    </ul>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-tasks"></i>
                        <span> مدیریت دسته بندی ها</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="<?= url('admin/category/create') ?>">ایجاد دسته جدید </a></li>
                        <li><a class="" href="<?= url('admin/category') ?>">نمایش دسته ها</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-th"></i>
                        <span> مدیریت کاربران</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="<?= url('admin/user/create') ?>"> ایجاد کاربر</a></li>
                        <li><a class="" href="<?= url('admin/user') ?>"> نمایش کاربران</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span>مدیریت دیدگاه ها</span>
                        <?php
                            $countcall = get_countcomment();
                            if ( $countcall != 0 ){
                        ?>
                            <span style="color:red;">({!! get_countcomment() !!})</span>
                        <?php } ?>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="<?= url('admin/comment') ?>">نمایش دیدگاه ها</a></li>
                    </ul>
                </li>



                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-tasks"></i>
                        <span> مدیریت پرسش و پاسخ</span>
                        <?php
                            $countcall = get_countquestions();
                            if ( $countcall != 0 ){
                        ?>
                            <span style="color:red;">({!! get_countquestions() !!})</span>
                        <?php } ?>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="<?= url('admin/question') ?>">نمایش</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-th"></i>
                        <span>مدیریت درخواست ها</span>
                        <?php
                            $countcall = get_countrequest();
                            if ( $countcall != 0 ){
                        ?>
                            <span style="color:red;">({!! get_countrequest() !!})</span>
                        <?php } ?>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="<?= url('admin/request') ?>"> نمایش درخواست ها </a></li>
                    </ul>
                </li>

                <li>
                    <a class="" href="#">
                        <i class="icon-envelope"></i>
                        <span>پیام های دریافتی</span>

                        <?php
                            $countcall = get_countcall();
                            if ( $countcall != 0 )
                            {?>
                                <span class="label label-danger pull-right mail-info">{!! get_countcall() !!}</span>
                            <?php } 
                            else {
                            ?>
                                <span class="label label-danger pull-right mail-info"></span>
                            <?php }
                        ?>
                        
                    </a>
                </li>
                
                <li>
                    <a class="" href="<?= url('/') ?>" target="_black">
                        <i class="icon-user"></i>
                        <span>صفحه ورود به سایت</span>
                    </a>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--state overview start-->
            

            <div class="row">
                <div class="panel panel-default panhashem">

                    <!--  this load content   -->
                    @yield('content')
                </div>

            </div>


        </section>
    </section>
    <!--main content end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="<?= asset('resources/js/jquery.js'); ?>"></script>
<script src="<?= asset('resources/js/jquery-1.8.3.min.js'); ?>"></script>
<script src="<?= asset('resources/js/bootstrap.min.js'); ?>"></script>
<script src="<?= asset('resources/js/jquery.scrollTo.min.js'); ?>"></script>
<script src="<?= asset('resources/js/jquery.nicescroll.js'); ?>" type="text/javascript"></script>
<script src="<?= asset('resources/js/jquery.sparkline.js'); ?>" type="text/javascript"></script>
<script src="<?= asset('resources/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js'); ?>"></script>
<script src="<?= asset('resources/js/owl.carousel.js'); ?>" ></script>
<script src="<?= asset('resources/js/jquery.customSelect.min.js'); ?>" ></script>

<!--common script for all pages-->
<script src="<?= asset('resources/js/common-scripts.js'); ?>"></script>

@yield('FooterJs')

</body>
</html>

<?php

use App\TblComment;
use App\QustionModel;
use App\FavoritsModel;
use App\TblRequestLearning;
use App\CallModel;


function get_countcall()
{
    $call=CallModel::where('call_state','0')->count();
    return $call;
}

function get_countcomment()
{
    $countco=TblComment::where('comment_state','0')->count();
    return $countco;
}

function get_comment()
{
    $comment=TblComment::where('comment_state','0')->get();
    return $comment;
}

function get_countquestions()
{
    $countqu=QustionModel::where('qu_state','0')->count();
    return $countqu;
}

function get_questions()
{
    $Qustion=QustionModel::where('qu_state','0')->get();
    return $Qustion;
}

function get_catname($id)
{
    $favo_name=FavoritsModel::where('id',$id)->first()['favo_name'];
    return $favo_name;
}

function get_request()
{
    $requestall=TblRequestLearning::where('request_state','0')->orderBy('id','desc')->get();
    return $requestall;
}

function get_countrequest()
{
    $countrequest=TblRequestLearning::where('request_state','0')->count();
    return $countrequest;
}

?>