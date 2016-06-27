<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='post';
    public $timestamps =false;
    protected $fillable=['title','url','content','date','info','img','menu_id','user_id'];
    //
}
