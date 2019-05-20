<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlanoNegocio extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = ['business_plan'];
    protected $fillable = ['name'];
//    protected $fillable =[
//        'customerSegment', 'valueOffer', 'keyActivities', 'entrepreneursEmail', 'companyProject',
//        'customerRelations', 'keyPartnerships', 'channels', 'mainFeatures', 'competitors', 'formationPartners',
//        'experiencePartners','competencePartners','equityInterest','potentialEmplymentIncome','stageEvolution',
//        'technologyProcesses','innovationPotential','application','expectedDifficulties','businessUniversity',
//        'enterpriseCommunityGovernment', 'infrastructure'
//    ];
//$table->longText('customerSegment')->nullable();
//$table->longText('valueOffer')->nullable();
//$table->longText('keyActivities')->nullable();
//
//    //          Contacts
//$table->text('entrepreneursEmail')->nullable();
//$table->text('companyProject')->nullable();
//
//    //          Market Analysis
//$table->longText('customerRelations')->nullable();
//$table->longText('keyPartnerships')->nullable();
//$table->longText('channels')->nullable();
//$table->longText('mainFeatures')->nullable();
//$table->longText('competitors')->nullable();
//
//    // People Management
//$table->longText('formationPartners')->nullable();
//$table->longText('experiencePartners')->nullable();
//$table->longText('competencePartners')->nullable();
//$table->longText('equityInterest')->nullable();
//$table->longText('potentialEmplymentIncome')->nullable();
//
//    // Product Server
//$table->text('stageEvolution')->nullable();
//$table->longText('technologyProcesses')->nullable();
//$table->longText('innovationPotential')->nullable();
//$table->longText('application')->nullable();
//$table->longText('expectedDifficulties')->nullable();
//$table->longText('businessUniversity')->nullable();
//$table->longText('enterpriseCommunityGovernment')->nullable();
//$table->longText('infrastructure')->nullable();

}
