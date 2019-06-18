<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusinessPartners extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'business_partners';

    protected $fillable = [
        'name', 'responsible', 'responsible_email', 'room', 'cnpj', 'is_company', 'is_research_group'
    ];

    public function scopeResearchGroup($query)
    {
        return $query->where('is_research_group', 1);
    }

    public function scopeCompany($query)
    {
        return $query->where('is_company', 1);
    }
}
