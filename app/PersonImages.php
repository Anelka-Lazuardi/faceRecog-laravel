<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonImages extends Model
{
    protected $fillable = [
        'personID', 'image'
    ];
}
