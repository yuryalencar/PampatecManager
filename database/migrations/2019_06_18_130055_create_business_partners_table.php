<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_partners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('responsible')->nullable();
            $table->string('responsible_email')->nullable();
            $table->string('room')->nullable();
            $table->integer('cnpj')->nullable();
            $table->boolean('is_company')->nullable();
            $table->boolean('is_research_group')->nullable();
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
        Schema::dropIfExists('business_partners');
    }
}
