<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavoritsModel extends Model
{
    protected $table='tbl_favorits';
    public $timestamps =false;
    protected $fillable=['id','favo_name','favo_id'];
}
