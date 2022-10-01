<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolutionTechnologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solution_technologies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('solution_id');
            $table->unsignedBigInteger('technology_id');
            $table->foreign('solution_id')->references('id')->on('solutions');
            $table->foreign('technology_id')->references('id')->on('technology_types');
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
        Schema::dropIfExists('solution_technologies');
    }
}
