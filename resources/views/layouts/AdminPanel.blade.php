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
                <li class="dropdown">
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
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">بروزرسانی دیتابیس</div>
                                    <div class="percent">60%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">برنامه نویسی  IPhone</div>
                                    <div class="percent">87%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                        <span class="sr-only">87% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">برنامه موبایل</div>
                                    <div class="percent">33%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                        <span class="sr-only">33% Complete (danger)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">پروفایل v1.3</div>
                                    <div class="percent">45%</div>
                                </div>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                        <span class="sr-only">45% Complete</span>
                                    </div>
                                </div>

                            </a>
                        </li>
                        <li class="external">
                            <a href="#">برنامه های بیشتر</a>
                        </li>
                    </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <!-- <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-envelope-alt"></i>
                        <span class="badge bg-important">5</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-red"></div>
                        <li>
                            <p class="red">شما 5 پیام جدید دارید</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="<?= asset('resources/img/avatar-mini.jpg'); ?>"></span>
                                    <span class="subject">
                                    <span class="from">سجاد باقرزاده</span>
                                    <span class="time">همین حالا</span>
                                    </span>
                                    <span class="message">
                                        سلام،متن پیام نمایشی جهت تست
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="<?= asset('resources/img/avatar-mini2.jpg'); ?>"></span>
                                    <span class="subject">
                                    <span class="from">ایمان مدائنی</span>
                                    <span class="time">10 دقیقه قبل</span>
                                    </span>
                                    <span class="message">
                                     سلام، چطوری شما؟
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="<?= asset('resources/img/avatar-mini3.jpg'); ?>"></span>
                                    <span class="subject">
                                    <span class="from">صبا ذاکر</span>
                                    <span class="time">3 ساعت قبل</span>
                                    </span>
                                    <span class="message">
                                        چه پنل مدیریتی فوق العاده ایی
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="<?= asset('resources/img/avatar-mini4.jpg'); ?>"></span>
                                    <span class="subject">
                                    <span class="from">مسعود شریفی</span>
                                    <span class="time">همین حالا</span>
                                    </span>
                                    <span class="message">
                                        سلام،متن پیام نمایشی جهت تست
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">نمایش تمامی پیام ها</a>
                        </li>
                    </ul>
                </li> -->
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->


                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <i class="icon-bell-alt"></i>
                        <span class="badge bg-warning">{!! get_countcomment() !!}</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <div class="notify-arrow notify-arrow-yellow"></div>
                        <li>
                            <p class="yellow">شما {!! get_countcomment() !!} دیدگاه جدید دارید</p>
                        </li>
                        
                        <li>
                            <a href="#">
                                <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                برنامه پیام خطا دارد
                                <!-- <span class="small italic">10 دقیقه قبل</span> -->
                            </a>
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
                        <img alt="" src="{{ $userimg2 }}">
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
                {{--<li class="sub-menu">--}}
                    {{--<a href="javascript:;" class="">--}}
                        {{--<i class="icon-cogs"></i>--}}
                        {{--<span>کامنت ها</span>--}}
                        {{--<span class="arrow"></span>--}}
                    {{--</a>--}}
                    {{--<ul class="sub">--}}
                        {{--<li><a class="" href="#">گرید</a></li>--}}
                        {{--<li><a class="" href="#">تقویم</a></li>--}}
                        {{--<li><a class="" href="#">چارت</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
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
                        <li><a class="" href="#"> ایجاد کاربر</a></li>
                        <li><a class="" href="#"> نمایش کاربران</a></li>
                    </ul>
                </li>
                <li>
                    <a class="" href="#">
                        <i class="icon-envelope"></i>
                        <span>ایمیل </span>
                        <span class="label label-danger pull-right mail-info">2</span>
                    </a>
                </li>
                {{--<li class="sub-menu">--}}
                    {{--<a href="javascript:;" class="">--}}
                        {{--<i class="icon-glass"></i>--}}
                        {{--<span>عناصر اضافی</span>--}}
                        {{--<span class="arrow"></span>--}}
                    {{--</a>--}}
                    {{--<ul class="sub">--}}
                        {{--<li><a class="" href="#">صفحه خالی</a></li>--}}
                        {{--<li><a class="" href="#">پروفایل</a></li>--}}
                        {{--<li><a class="" href="#">فاکتور</a></li>--}}
                        {{--<li><a class="" href="#">404 Error</a></li>--}}
                        {{--<li><a class="" href="#">500 Error</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                <li>
                    <a class="" href="#">
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
            <div class="row state-overview">
                <div class="col-lg-3 col-sm-6">
                    <section class="panel">
                        <div class="symbol terques">
                            <i class="icon-user"></i>
                        </div>
                        <div class="value">
                            <h1>22</h1>
                            <p>کاربر جدید</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <section class="panel">
                        <div class="symbol red">
                            <i class="icon-tags"></i>
                        </div>
                        <div class="value">
                            <h1>140</h1>
                            <p>فروش</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <section class="panel">
                        <div class="symbol yellow">
                            <i class="icon-shopping-cart"></i>
                        </div>
                        <div class="value">
                            <h1>345</h1>
                            <p>سفارش جدید</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <section class="panel">
                        <div class="symbol blue">
                            <i class="icon-bar-chart"></i>
                        </div>
                        <div class="value">
                            <h1>34,500</h1>
                            <p>سود خالص</p>
                        </div>
                    </section>
                </div>
            </div>


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

function get_countcomment()
{
    $countco=TblComment::where('comment_state','0')->count();
    return $countco;
}

?>