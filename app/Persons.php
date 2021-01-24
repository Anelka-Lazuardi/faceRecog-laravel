<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    protected $fillable = [
        'nama',
    ];
    protected $table = 'persons';

    public function images()
    {
        return $this->hasMany(PersonImages::class, 'personID');
    }
}
