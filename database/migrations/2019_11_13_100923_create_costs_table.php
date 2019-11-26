<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description')->nullable();
            $table->double('value')->nullable();
            $table->boolean('is_fixed')->nullable();
            $table->boolean('is_variable')->nullable();
            $table->integer('business_plan_id')->unsigned()->nullable();
            $table->foreign('business_plan_id')->references('id')->on('business_plan')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('costs');
    }
}
