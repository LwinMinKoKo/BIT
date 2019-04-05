<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
           $table->increments('patient_id');
           $table->string('patient_name')->nullable();
           $table->string('patient_email')->nullable();
           $table->string('patient_address');
           $table->string('patient_phNo')->nullable();
           $table->string('patient_father_name');
           $table->string('patient_blood_type');
           $table->string('patient_user_name')->nullable();
           $table->string('patient_password')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
