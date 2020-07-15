<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'id' , 'title', 'content', 'created_at',
    ];

    public $table = "blogs";
    public function comments()
    {
        return $this->hasMany(
            Comment::class,
            'blog_id',
            'id'
        );
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
