<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    protected $fillable = [
        'description', 'value', 'is_fixed', 'is_variable', 'business_plan_id'
    ];

    public function plan()
    {
        return $this->belongsTo(BusinessPlan::class);
    }
}
