<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class visitordata extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "visitordata";
   

    protected $fillable = [
        'Visitor',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   
}
