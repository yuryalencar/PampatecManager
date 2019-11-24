<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('start')->nullable;
            $table->dateTime('end')->nullable;
            $table->dateTime('termination_date')->nullable;
            $table->double('total_value')->nullable;
            $table->double('discount')->nullable;
            $table->string('responsible')->nullable;
            $table->string('responsible_payment')->nullable;
            $table->string('phone_responsible_payment')->nullable;
            $table->string('email_responsible_payment')->nullable;
            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('business_partners')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade')->onUpdate('cascade');
            $table->softDeletesTz();
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
        Schema::dropIfExists('contracts');
    }
}
