<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnologyAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technology_apps', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('technology_id')->unsigned();
            $table->foreign('technology_id')->references('id')->on('technologies');
            $table->string('title');
            $table->string('image')->nullable();
            $table->string('alt_image')->nullable();
            $table->text('description')->nullable();
            $table->string('type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technology_apps');
    }
}
