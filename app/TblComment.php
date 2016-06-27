<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblComment extends Model
{

	protected $table='tbl_comment';
	public $timestamps =false;
    protected $fillable=['comment_id','comment_flname','comment_email','comment_content','post_id','comment_replay','comment_date','comment_state'];
    //
}
