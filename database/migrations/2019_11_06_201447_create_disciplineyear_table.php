<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisciplineyearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplineyear', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('year_id');
            $table->unsignedBigInteger('discipline_id');
            $table->timestamps();

            $table->foreign('year_id')->references('id')->on('year');
            $table->foreign('discipline_id')->references('id')->on('disciplines');

        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disciplineyear');
    }
}
