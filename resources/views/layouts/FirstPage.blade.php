<!DOCTYPE html>
<html class="no-js" lang="fa-IR" dir="rtl"> 
    <head>
<style>
.boz:hover{
color:white;
}
</style>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= asset('resources/css/firstpage/style.css'); ?>" type="text/css">
<link rel="stylesheet" href="<?= asset('resources/css/firstpage/custom.css'); ?>" type="text/css">
<link rel="stylesheet" href="<?= asset('resources/css/firstpage/responsive.css'); ?>" type="text/css">       
<script src="<?= asset('resources/js/jquery-1.8.3.min.js'); ?>"></script>
<script src="<?= asset('resources/js/js_first/modernizr.js'); ?>"></script>
<script src="<?= asset('resources/js/js_first/typed.js'); ?>" type="text/javascript"></script>
<script src="<?= asset('resources/js/js_first/mediaelement-and-player.min.js'); ?>"></script>
<link rel="stylesheet" href="<?= asset('resources/css/firstpage/mediaelementplayer.css'); ?>" />
<link rel="stylesheet" href="<?= asset('resources/css/firstpage/mejs-skins.css'); ?>" />

@yield('head')

<title>آموزش برنامه نویسی</title>
<meta property="og:locale" content="fa_IR" />

<style type="text/css">
    img.wp-smiley,
    img.emoji {
    display: inline !important;
    border: none !important;
    box-shadow: none !important;
    height: 1em !important;
    width: 1em !important;
    margin: 0 .07em !important;
    vertical-align: -0.1em !important;
    background: none !important;
    padding: 0 !important;
}
</style>
<style>.kk-star-ratings { width:120px; }.kk-star-ratings .kksr-stars a { width:24px; }.kk-star-ratings .kksr-stars, .kk-star-ratings .kksr-stars .kksr-fuel, .kk-star-ratings .kksr-stars a { height:24px; }.kk-star-ratings .kksr-star.gray { background-image: url(http://tshirtme.ir/wp-content/plugins/kk-star-ratings/gray.png); }.kk-star-ratings .kksr-star.yellow { background-image: url(http://tshirtme.ir/wp-content/plugins/kk-star-ratings/yellow.png); }.kk-star-ratings .kksr-star.orange { background-image: url(http://tshirtme.ir/wp-content/plugins/kk-star-ratings/orange.png); }</style>


</head>

<body>

<header class="wrapper header">
    <div class="container inner-el" style="padding-right: 44px;">
        <div class="row head-top">
        
        
            <ul class="menu-top col">
                <li style="margin-right:7px;"><a href="<?= url('/') ?>" title="دانشجویان کامپیوتر">صفحه اصلی</a></li>

                <li style="margin-right:7px;"><a href="<?= url('/about') ?>" title="درباره ی ما">درباره ی ما</a></li>

                <li style="margin-right:7px;"><a href="<?= url('/callme') ?>" title="تماس با ما">تماس با ما</a></li>

                <li style="margin-right:7px;"><a href="<?= url('/login') ?>" title="ورود کاربر">ورود کاربر</a></li>

                <li style="margin-right:7px;"><a href="<?= url('/register') ?>" title="ثبت نام کاربر">ثبت نام کاربر</a></li>


            </ul>
            
            
            <ul class="basket go-left" id="cart" style="float:left;margin-left:80px;">
                @include('index.cart')
            </ul>           
        
            
            
        </div>
        

       

<form action="" method="POST">
    <input  id="cursor" type="text" name="s"  class="srchbox" value="" placeholder="  جستجو آموزش ... "/>
    <button style="
    line-height: 26px;
    width: 32px;
    height: 32px;
    outline:none;
    background-color: rgba(0, 0, 0, 0.05);
    border: 0px solid white;" type="submit"><i class="icon icon-search"></i></button>
</form>

    </div>
</header>

















<div class="container inner-el middle" >
<center>
<a target="_blank" style="color:white;" href="https://telegram.me/pcstudent" title="جهت ارتباط با مدیر کلیک کنید"> <div style="   
    width: 100%;
    color: white;
    font: 16px yekan;
    padding: 10px;
    padding-right: 54px;
    text-align: right;
    background-repeat: no-repeat;
    background-image: url('https://cdn3.iconfinder.com/data/icons/social-media-chat-1/512/Telegram-256.png');
    background-color: #54b3e6;
    margin-bottom: 15px;
    border-radius: 6px;
    background-position-x: 99%;
    background-position-y: 5px;
    background-size: 34px;">
وب سایت رسمی دانشجویان کامپیوتر  <a target="_blank"style="    background: hsla(0, 0%, 100%, 0.25);
    padding: 3px;
    color: white;
    border-radius: 4px;
    padding-right: 10px;
    padding-left: 10px;
    float: left;
    margin-top: -3px;" href="https://telegram.me/pcstudent" title="تلگرام مدیر سایت" > جهت ارتباط با مدیراز طریق تلکرام کلیک نمایید</a>
</div></a>
</center>


    <div class="main go-left">

    
    
    
    
    
    
    @yield('content')





        
        
</div>



    
<div class="sidebar col">




    <div class="box row">
        <div class="title row">
            <div class="post-icon col"><i class="icon icon-modarres"></i></div>
            <h3>اخرین مطالب </h3>
        </div>
        <?php 
            use App\TblPost;
            $model=TblPost::orderby('id','desc')->paginate('10');
        ?>
        @foreach($model as $model)
        <div class="another-list row">
                <div class="row">
                    <a target="_blank" href="<?= url('/content/'.$model->post_url) ?>" title="{{ $model->post_title }}">{{ $model->post_title }}</a><br>              
                </div>
        </div>
        @endforeach
    </div>




    <div class="box row">
        <div class="title row">
            <div class="post-icon col"><i class="icon icon-etemad"></i></div>
            <h3>دسته بندی های سایت</h3>
        </div>

        <?php 
            use App\TblCategory;
            $catgory=TblCategory::orderby('id','desc')->get();
        ?>
        @foreach($catgory as $catgory)
        <div class="another-list row">
                <div class="row">
                    <a target="_blank" href="<?= url('/category/'.$catgory->category_name) ?>" title="{{ $catgory->category_name }}">{{ $catgory->category_name }}</a><br>              
                </div>
        </div>
        @endforeach
    </div>
    
    
            
<div class="box row">
    <div class="title row">
            <div class="post-icon col"><i class="icon icon-newspaper"></i></div>
            <h3>خبرنامه پیامکی</h3>
    </div>
        
        <p>با عضویت در خبرنامه پیامکی جدیدترین محصولات و مسابقات ما با خبر شوید.</p>
        
    <input type="text" placeholder="نام" id="wpsms-name" class="textfield row" />
    <input type="text" placeholder="شماره" id="wpsms-mobile" class="textfield row" />
    <label><input id="wpsms-type-subscribe" name="subscribe_type" value="subscribe" class="styled" type="radio"> اشتراک</label>
    <label><input id="wpsms-type-unsubscribe" name="subscribe_type" value="unsubscribe" class="styled" type="radio"> لغو اشتراک</label> 
    <button id="wpsms-submit" type="button" class="subfield row">اشتراک</button>
    
    <div class="row" id="wpsms-result"></div>

</div>
    
    
    
    
    
    
<div class="box row">
        <div class="title row">
            <div class="post-icon col"><i class="icon icon-etemad"></i></div>
            <h3>پیشنهاد آموزش</h3><br/><br/>
        <div style="font:13px yekan;line-height:30px;    text-align: center;" class="textwidget" >اگر آموزشی مد نظر شماست ،پیشنهاد خود را ثبت کنید تا آموزشی را تهیه کنیم که نیاز شماست . 
            </div><br/><center>
            <a href="<?= url('/learning') ?>" target="_blank">
            <span id="suggestion" class="subfield">پیشنهاد میدهم</span></a></center>
        </div>

</div>
</div>
</div>










<footer class="wrapper footer">
    <div class="container inner-el">
        <div class="line" style="width: 100%;" align="center" ></div>
        
        <div class="foot-box col foot1"  style="height:40px;width: 100%;float: none;">
            <div class="title row" style="    margin-bottom:14px;" ><i class="icon icon-about col"></i> <span>پی سی استیودنت دات ای ار ....</span></div>
            

    <!-- <video class="mejs-ted" id="LFPlayer" src="http://as9.asset.aparat.com/aparat-video/37d3047af85a37f86c78682131615f824228578-260p__68872.mp4" width="640" height="360" controls="controls" preload="none">
    </video> -->
</div>
        
         
<div style="width: 100%;padding-top: 28px;margin-top: 9px;height: 40px;padding-bottom: 40px;">
    <div align="center">
        Copyright © 2016 Pcstudent . All rights reserved.
    </div>
</div>
</div>
</footer>

<?php 
    $url=Url('/add');
?>
<script type="text/javascript">
        add_product = function(id)
        {
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }});
            $.ajax({
                url:'<?= $url ?>',
                type:"POST",
                data:'product_id='+id,
                success:function(data)
                {
                    // alert(data);
                    $("#cart").html(data);
                }
            });
        }
</script>
<?php $url2=Url('/empty'); ?>
<script type="text/javascript">
    empty_cart = function()
    {
        $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }});
            $.ajax({
                url:'<?= $url2 ?>',
                type:"POST",
                data:'empty=cart',
                success:function(data)
                {
                    // alert(data);
                    $("#cart").html(data);
                }
            });
    }
</script>


<?php $url3=Url('/remove_cart'); ?>
<script type="text/javascript">
    delete_product = function(id)
    {
        $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }});
            $.ajax({
                url:'<?= $url3 ?>',
                type:"POST",
                data:'product_id='+id,
                success:function(data)
                {
                    // alert(data);
                    $("#cart").html(data);
                }
            });
    }
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#hashem').click(function(){
            $('.basket-box').css({"display":"block"});
        });

        $('.basket-box').mouseleave(function(){
            $('.basket-box').css({"display":"none"});
        });

    });
</script>
@yield('Footer')

</body>
</html>