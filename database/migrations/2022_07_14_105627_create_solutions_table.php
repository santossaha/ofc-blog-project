<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solutions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sub_title')->nullable();
            $table->longText('home_description')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->longText('meta_description')->nullable();
            $table->string('meta_robots')->nullable();
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->string('about_image')->nullable();
            $table->text('video')->nullable();
            $table->text('about_description')->nullable();
            $table->string('second_title')->nullable();
            $table->text('second_description')->nullable();
            $table->string('feature_title')->nullable();
            $table->string('customer_title')->nullable();
            $table->string('solution_list_title')->nullable();
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
        Schema::dropIfExists('solutions');
    }
}
