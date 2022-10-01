<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('portfolio_category_id')->unsigned();
            $table->string('title');
            $table->text('meta_title')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_robots')->nullable();
            $table->string('slug',100)->nullable();
            $table->string('image')->nullable();
            $table->string('about_image')->nullable();
            $table->text('about_description')->nullable();
            $table->text('challenges_description')->nullable();
            $table->string('platform')->nullable();
            $table->string('language')->nullable();
            $table->string('db')->nullable();
            $table->string('tools')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('alt_tag')->nullable();
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
        Schema::dropIfExists('portfolios');
    }
}
