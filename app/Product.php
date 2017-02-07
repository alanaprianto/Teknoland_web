<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'desc',
        'stock',
        'price'
    ];

    public function attachments(){
        return $this->hasMany('App\Attachment');
    }
}
