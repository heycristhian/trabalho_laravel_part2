<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('address');
            $table->string('cpf');
            $table->string('phone');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('year_id');
            $table->timestamps();

            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('year_id')->references('id')->on('year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
