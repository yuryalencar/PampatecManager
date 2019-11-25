<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name'
    ];

    public static $superUser = "manager";
    public static $entrepreneurId = 3;

    public static function getSuperUser()
    {
        return self::where("name", self::$superUser)->first();
    }

    public static function getEntrepreneur()
    {
        return self::$entrepreneurId;
    }

    public function scopeNotSuperProfile($query)
    {
        return $query->where('name', '<>', self::$superUser);
    }

}
