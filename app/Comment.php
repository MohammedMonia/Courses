<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = [
        'id' , 'blog_id' , 'comment_body' , 'created_at', 
    ];

    public function blog()
    {
        return $this->belongsTo(
            Blog::class,
            'blog_id',
            'id'            
        );
    }
}
