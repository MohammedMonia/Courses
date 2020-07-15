<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'id' , 'about_title', 'about_body', 'created_at',
    ];
}
