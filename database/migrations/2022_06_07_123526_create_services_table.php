<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('app_process_image')->nullable();
            $table->string('image_alt_tag')->nullable();
            $table->string('icon')->nullable();
            $table->string('icon_alt_tag')->nullable();
            $table->string('short_description')->nullable();
            $table->text('home_description')->nullable();
            $table->string('about_title')->nullable();
            $table->string('about_image')->nullable();
            $table->string('image2_alt_tag')->nullable();
            $table->longText('about_description')->nullable();
            $table->boolean('status')->default(1);
            $table->string('feature_head_title')->nullable();
            $table->string('benefit_head_title')->nullable();
            $table->text('benefit_head_description')->nullable();
            $table->string('hire_head_title')->nullable();
            $table->text('hire_head_description')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_robots')->nullable();
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
        Schema::dropIfExists('services');
    }
}
