<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'desc',
    ];

    public function attachments(){
        return $this->hasMany('App\Attachment');
    }
}
