<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EvaluateCriteria extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'evaluate_criteria';

    protected $fillable = [
        'title', 'description'
    ];

    public function user(){
        return $this->hasMany(User::class, 'id','user_id');
    }

}
