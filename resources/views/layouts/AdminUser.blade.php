<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>پنل مدیریتی کاربر</title>
<link type="text/css" rel="stylesheet" href="<?= asset('resources/css/cssuser/style.css'); ?>">

@yield('head')

<script type="text/javascript" src="<?= asset('resources/js/jsuser/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?= asset('resources/js/jsuser/jquery.flot.js'); ?>"></script>
<script type="text/javascript" src="<?= asset('resources/js/jsuser/doc.js'); ?>"></script>
</head>
<body>

<div class="body_style">
	<div class="menu">
    <a href="/" class="logo"></a>
    </div>
	<div class="nav">
    	<ul>
        	<li class="active">
            	<div class="fix">
                    <span class="ico"><img src="<?= asset('resources/image/imguser/ico1.png'); ?>"></span>
                    <span class="value">مدیریت</span>
                </div>
             </li>
            <li>
            	<div class="fix">
                    <span class="ico"><img src="<?= asset('resources/image/imguser/ico2.png'); ?>"></span>
                    <span class="value">بخش کاربری</span>
                </div>
                <ul>
                	<li><a href="<?= url('user/panel/profile'); ?>">نمایش مشخصات</a></li>
                    <li><a href="/"> ویرایش مشخصات </a></li>
                    <li><a href="/">تغییر رمز ورود</a></li>
                    <li><a href="<?= url('user/panel/favorits'); ?>">انتخاب علاقه مندی ها</a></li>
                    <li><a href="<?= url('/logout'); ?>">خروج</a></li>
                </ul>
            </li>
            <li>
                <div class="fix">
                    <span class="ico"><img src="<?= asset('resources/image/imguser/ico2.png'); ?>"></span>
                    <span class="value">بخش پرسش و پاسخ</span>
                </div>
                <ul>
                    <li><a href="<?= url('user/panel/qustion') ?>">نمایش سوالات کاربران</a></li>
                    <li><a href="<?= url('user/panel/qustion/create'); ?>">ارسال سوال؟</a></li>
                </ul>
            </li>

            <li>
                <div class="fix">
                    <span class="ico"><img src="<?= asset('resources/image/imguser/ico2.png'); ?>"></span>
                    <span class="value">درخواست آموزش</span>
                </div>
                <ul>
                    <li><a href="<?= url('user/panel/request/create'); ?>">ثبت درخواست</a></li>
                    <li><a href="<?= url('user/panel/request'); ?>">نمایش درخواست ها</a></li>
                </ul>
            </li>

            
        </ul>
    </div>
    
    <div class="content">
    
    
    <!-- <ul data-collapse="collapse" class="quick">
        <li>
            <a href="#">
                <img alt="" src="<?= asset('resources/image/imguser/statistics.png'); ?>">
                <span>وضعیت کلی</span>
            </a>
        </li>
        <li>
            <a href="#">
                <img alt="" src="<?= asset('resources/image/imguser/order-149.png'); ?>">
                <span>لیست فعالیت ها</span>
            </a>
        </li>
        <li>
            <a href="#">
                <img alt="" src="<?= asset('resources/image/imguser/shipping.png'); ?>">
                <span>مرسوله ها</span>
            </a>
        </li>
        <li>
            <a href="#">
                <img alt="" src="<?= asset('resources/image/imguser/my-account.png'); ?>">
                <span>مدیریت حساب</span>
            </a>
        </li>
        <li>
            <a href="#">
                <img alt="" src="<?= asset('resources/image/imguser/full-time.png'); ?>">
                <span>تنظیمات زمان</span>
            </a>
        </li>
        <li>
            <a href="#">
                <img alt="" src="<?= asset('resources/image/imguser/date.png'); ?>">
                <span>رخداد ها</span>
            </a>
        </li>
        <li>
            <a href="#">
                <img alt="" src="<?= asset('resources/image/imguser/lock.png'); ?>">
                <span>تنظیمات امنیتی</span>
            </a>
        </li>
        <li>
            <a href="#">
                <img alt="" src="<?= asset('resources/image/imguser/refresh.png'); ?>">
                <span>خالی کردن کش</span>
            </a>
        </li>
    </ul> -->
    
	
    @yield('content')


	</div>

    
</div>

    @yield('FooterJs')
</body>
</html>
