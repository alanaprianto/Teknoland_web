<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'desc',
        'date',
        'type',
    ];

    public function attachments(){
        return $this->hasMany('App\Attachment');
    }
}
