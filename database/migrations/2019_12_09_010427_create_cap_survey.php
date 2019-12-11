<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapSurvey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cap_surveys', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('name');
			$table->date('due_date');
			$table->date('samples_expire');
			$table->boolean('director_signed');
			$table->boolean('pathologist_signed');
			$table->boolean('employee_signed');
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
        Schema::dropIfExists('cap_surveys');
    }
}
