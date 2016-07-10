<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnsewerModel extends Model
{
    protected $table='tbl_ansewer';
    public $timestamps =false;
    protected $fillable=['id_user','id_question','ansewer_date','ansewer','ansewer_state'];
}
