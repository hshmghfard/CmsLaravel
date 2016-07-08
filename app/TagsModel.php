<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagsModel extends Model
{
    protected $table='tbl_tags';
    public $timestamps =false;
    protected $fillable=['tags_name'];
}
