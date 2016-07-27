<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TblBuyPost extends Model
{
    protected $table='tbl_buy_post';
    public $timestamps =false;
    protected $fillable=['name','lname','email','mobile','postal_code','address','state'];
}
