<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technologies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('short_title')->nullable();
            $table->text('short_description')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_robots')->nullable();
            $table->string('slug');
            $table->string('image')->nullable();
            $table->string('about_title')->nullable();
            $table->string('about_image')->nullable();
            $table->text('about_description')->nullable();
            $table->string('app_dev_title')->nullable();
            $table->text('hire_us_title')->nullable();
            $table->string('stories_title')->nullable();
            $table->string('customer_title')->nullable();
            $table->string('insight_title')->nullable();
            $table->tinyInteger('status')->default('1');
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
        Schema::dropIfExists('technologies');
    }
}
