<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $fillable = [
        'name',
        'location',
        'product_id',
        'event_id'
    ];

    public function post(){
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }
    public function event(){
        return $this->belongsTo('App\Event', 'event_id', 'id');
    }
}
