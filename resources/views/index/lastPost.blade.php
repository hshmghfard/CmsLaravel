    @foreach($Products as $Product) 
    <div class="another-list row">
        <div class="row">
            <a target="_blank" href="<?= url('/content/'.$Product->post_url) ?>" title="{{ $Product->post_title }}">{{ $Product->post_title }}</a><br>              
        </div>
    </div>
    @endforeach