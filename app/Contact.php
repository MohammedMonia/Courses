<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'id' , 'country', 'phone', 'created_at',
    ];
}
