<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceAppsTable extends Migration
{
    /**
 * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_apps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');
            $table->string('title')->nullable();
            $table->string('short_title')->nullable();
            $table->string('image')->nullable();
            $table->string('alt_image')->nullable();
            $table->text('description')->nullable();
            $table->string('type')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('service_apps');
    }
}
