<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $fillable = [
        'name',
        'location',
        'product_id'
    ];

    public function post(){
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }
}
