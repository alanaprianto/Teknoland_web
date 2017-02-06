<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $fillable = [
        'name',
        'location',
        'post_id'
    ];

    public function post(){
        return $this->belongsTo('App\Post', 'post_id', 'id');
    }
}
