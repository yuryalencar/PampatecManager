<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanoNegociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plano_negocios', function (Blueprint $table) {
            $table->increments('id');
            //          Business
            $table->longText('customerSegment')->nullable();
            $table->longText('valueOffer')->nullable();
            $table->longText('keyActivities')->nullable();

            //          Contacts
            $table->text('entrepreneursEmail')->nullable();
            $table->string('companyProject')->nullable();

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
            $table->string('stageEvolution')->nullable();
            $table->longText('technologyProcesses')->nullable();
            $table->longText('innovationPotential')->nullable();
            $table->longText('application')->nullable();
            $table->longText('expectedDifficulties')->nullable();
            $table->longText('businessUniversity')->nullable();
            $table->longText('enterpriseCommunityGovernment')->nullable();
            $table->longText('infrastructure')->nullable();


            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plano_negocios');
    }
}
