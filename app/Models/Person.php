<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'name', 'email'
    ];

    public function rooms(){
        return $this->belongsToMany(Room::class, 'people_rooms');
    }
}
