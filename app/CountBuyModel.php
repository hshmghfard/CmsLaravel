<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountBuyModel extends Model
{
    protected $table='tbl_count_product_foroosh';
    public $timestamps =false;
    protected $fillable=['id_buy','id_product','count','type_buy','state'];
}
