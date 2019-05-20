<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlanoNegocio extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = ['plano_negocios'];

    protected $fillable =[
        'customerSegment', 'valueOffer', 'keyActivities', 'entrepreneursEmail', 'companyProject',
        'customerRelations', 'keyPartnerships', 'channels', 'mainFeatures', 'competitors', 'formationPartners',
        'experiencePartners','competencePartners','equityInterest','potentialEmplymentIncome','stageEvolution',
        'technologyProcesses','innovationPotential','application','expectedDifficulties','businessUniversity',
        'enterpriseCommunityGovernment', 'infrastructure'
    ];
}
