<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusinessPlan extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'business_plan';
    protected $fillable = ['name'];

}
