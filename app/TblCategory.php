<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblCategory extends Model
{

	protected $table='tbl_category';
    public $timestamps =false;
    protected $fillable=['id','category_name','category_enname','category_replayid'];
    //
}
