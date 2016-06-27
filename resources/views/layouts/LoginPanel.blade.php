<!doctype html>
<html lang="fa">
<head>
    <meta charset="utf-8" />
    <title>ورود به سایت</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="fa">
    <link href="<?= asset('resources/css/css_login/style.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= asset('resources/css/css_login/style2.css'); ?>" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?= asset('resources/js/js_login/dialog_box.js'); ?>"></script>
</head>

<body id="content">

<div id="Show"></div>
<div class="Joomina">

    <div class="first">
        <a class="home" href="#"></a>

        <h1>ورود به بخش مدیریت</h1>
    </div>

    @yield('LoginForm')

    <div class="s-login">
        <a class="reg" href="#">ثبت نام آنلاین</a>
        <a class="dl" href="http://www.mozilla.org/en-US/firefox/fx/" target="_blank"> دانلود فایرفاکس</a>
    </div>
</div>




</body>
</html>