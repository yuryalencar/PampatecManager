<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BusinessPlan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_plan', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('owner_id')->unsigned();
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->string('status')->nullable();

            //  Business
            $table->longText('customerSegment')->nullable();
            $table->longText('valueOffer')->nullable();
            $table->longText('keyActivities')->nullable();

            //          Contacts
            $table->text('entrepreneursEmail')->nullable();
            $table->text('companyProject')->nullable();

            //          Market Analysis
            $table->longText('customerRelations')->nullable();
            $table->longText('keyPartnerships')->nullable();
            $table->longText('channels')->nullable();
            $table->longText('mainFeatures')->nullable();
            $table->longText('competitors')->nullable();

            // People Management
            $table->longText('formationPartners')->nullable();
            $table->longText('experiencePartners')->nullable();
            $table->longText('competencePartners')->nullable();
            $table->longText('equityInterest')->nullable();
            $table->longText('potentialEmplymentIncome')->nullable();

            // Product Server
            $table->text('stageEvolution')->nullable();
            $table->longText('technologyProcesses')->nullable();
            $table->longText('innovationPotential')->nullable();
            $table->longText('application')->nullable();
            $table->longText('expectedDifficulties')->nullable();
            $table->longText('businessUniversity')->nullable();
            $table->longText('enterpriseCommunityGovernment')->nullable();
            $table->longText('infrastructure')->nullable();

            $table->timestampsTz();
            $table->softDeletesTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
