<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QustionModel extends Model
{
    protected $table='tbl_question';
    public $timestamps =false;
    protected $fillable=['id','qu_content','qu_category','qu_user','qu_state'];
}
