
@extends('layouts.FirstPage')



@section('head')    

@endsection


@section('content')
<div class="box row">
        <span class="vip"><i class="icon icon-vip"></i></span>
        <div class="title row">
            <div class="post-icon col"><i class="icon icon-post"></i></div>
            <h2>جست و جوی پیشرفته</h2>
        </div>
        <div class="text-post tow">
            <div class="post_title" >
            <form method="post" action="<?= url('search') ?>">
            <input type="hidden" name="_token" value="<?= csrf_token() ?>">
                    <table id="tbl_search">
                        <tr>
                            <td>جست و جو بر اساس</td>
                            <td><select name="type">
                                    <option  value="1">عنوان و محتوای محصول</option>
                                    <option value="2">عنوان محصول</option>
                                    <option  value="3">محتوای محصول</option>
                                    <option value="4"> برچسبها و کلمات کلیدی </option>
                            </select></td>
                        </tr>

                        <tr>
                            <td>عبارت مورد نظر</td>
                            <td><input value="" type="text" name="content" class="inputfiled" style="width:250px;height:25px;margin:0px;"></td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <input type="submit" value="جست و جو" style="width:70px;background:#48adff;border:1px solid #48adff;height:30px;color:#ffffff;font-family:Yekan">
                            </td>
                        </tr>

                    </table>

                </form>

            </div>
                
            <?php
                if(isset($model))
                {
                    foreach ($model as $model) 
                    {
                        ?>

                        <div class="post">
                            <div class="post_title" style="margin-bottom:0px;"><a target="_black" href="<?= url('/content/'.$model->post_url) ?>"><?= $model['post_title'] ?></a></div>
                            <div style="padding-right:20px;width:100%;height:3px;background:#48adff;margin:auto;"></div>
                            <div class="text" >

                                <?php

                                if(strlen($model['post_content'])>600)
                                {
                                    echo substr($model['post_content'],0,600) .' ...';
                                }
                                else
                                {
                                    echo $model['post_content'];
                                }

                                ?>

                            </div>
                        </div>
                    <?php
                    }
                }
                    ?>

            <span class="line col row"></span>
        </div>
</div>


@endsection