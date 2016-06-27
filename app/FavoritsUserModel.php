<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavoritsUserModel extends Model
{
    protected $table='tbl_favouser';
    public $timestamps =false;
    protected $fillable=['id','id_user','id_favo'];
}
