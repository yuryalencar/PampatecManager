<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name'
    ];

    public static $superUser = "#system.root#";

    public function scopeNotSuperProfile($query)
    {
        return $query->where('name', '<>', self::$superUser);
    }

}
