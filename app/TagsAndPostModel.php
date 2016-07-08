<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagsAndPostModel extends Model
{
    protected $table='tbl_tags_post';
    public $timestamps =false;
    protected $fillable=['id_post','id_tag'];
}
