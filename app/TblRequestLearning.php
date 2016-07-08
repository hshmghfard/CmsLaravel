<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblRequestLearning extends Model
{
    protected $table='tbl_request';
    public $timestamps =false;
    protected $fillable=['id','request_title','request_content','id_user','request_date','request_state','request_ansewer'];
}
