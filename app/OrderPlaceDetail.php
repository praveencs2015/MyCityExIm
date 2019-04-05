<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderPlaceDetail extends Model
{

    protected $table = 'OrderPlaceDetail';


    protected $fillable = ['name','mobile_no','address','status','fee','order_id','transaction_id'];


    /* 
		status : 0 => progress, 1 => Fail, 2 => Successful
    */

}
