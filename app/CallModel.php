<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CallModel extends Model
{
    protected $table='tbl_call';
    public $timestamps =false;
    protected $fillable=['call_name','call_family','call_email','call_text','call_state','call_date'];
}
