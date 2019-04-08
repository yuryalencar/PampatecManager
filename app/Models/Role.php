<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name'
    ];

    public static $superUser = "#system.root#";

    public static function getSuperUser()
    {
        return self::where("name", self::$superUser)->first();
    }

    public function scopeNotSuperProfile($query)
    {
        return $query->where('name', '<>', self::$superUser);
    }

}
