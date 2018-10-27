<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactDetail extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'website','message',
    ];
}
