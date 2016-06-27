<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblPostCategory extends Model
{
	protected $table='tbl_post_category';
    public $timestamps =false;
    protected $fillable=['post_id','category_id'];
    //
}
