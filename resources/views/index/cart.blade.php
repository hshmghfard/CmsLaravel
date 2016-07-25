
@if(!empty(Session::get('cart')))
<li>
    <a href="#" title="">
    <i class="icon icon-basket col"><span><?php $array=Session::get('cart'); echo sizeof($array); ?></span></i>
    <span class="title" id="hashem">سبد خرید شما</span><br>
        <?php echo sizeof($array); ?> محصول     </a>
                            
    <ul class="basket-box">
        <?php $total_price=0; ?>
        @foreach(Session::get('cart') as $key=>$value)
        <li>
            <div class="pic-pro col">
                <?php 
                    $img=\App\TblPost::find($key)['post_img'];
                    $title=\App\TblPost::find($key)['post_title'];
                    $url=\App\TblPost::find($key)['post_url'];
                    $price=\App\TblPost::find($key)['post_price'];
                ?>
                <img width="75" height="37" src="<?= asset('resources/upload/post_img/'.$img); ?>" class="attachment-small_thumb size-small_thumb wp-post-image" alt="{{ $title }}" sizes="(max-width: 75px) 100vw, 75px" />
                <a href="<?= url('/content/'.$url) ?>" target="_blank"><span><i class="icon icon-search2"></i></span></a>
            </div>

            <a style="float:none;display:block;" href="<?= url('/content/'.$url) ?>">{{ $title }}</a>
            <span class="amoute">{!! number_format($price); !!} ریال</span>
            تعداد : <span>{!! $value !!}</span>
            <a class="delet" onclick="delete_product({!! $key !!})">حذف</a>
        </li>
        <?php $total_price+=$value*$price;?>
        @endforeach

        <li>
            <span class="row">جمع قیمت : <strong>{{ number_format($total_price) }} ریال</strong></span>
            <a class="end-basket col" href="<?= Url('/checkout') ?>">نهایی کردن سفارش</a>
            <a class="end-basket col" onclick="empty_cart()">تخلیه سبد خرید</a>
            
        </li>
    </ul>
</li>
@else
<li>
    <a href="#" title="">
    <i class="icon icon-basket col"><span>0</span></i>
    <span class="title" id="hashem">سبد خرید شما</span><br>
        سبد خرید شما خالی است    </a>
</li>
@endif