<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name',
        'job_position',
        'photo',
        'social_media_account',
        'phone_number'
    ];
}
