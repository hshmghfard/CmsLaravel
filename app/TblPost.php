<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblPost extends Model
{

	protected $table='tbl_post';
	public $timestamps =false;
    protected $fillable=['id','post_title','post_url','user','post_date','post_img','post_lastedit','post_state','post_commentstate','post_mintext','post_content','post_link','post_price','post_countview'];
    //
}
