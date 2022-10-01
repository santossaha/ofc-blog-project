<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioSolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_solutions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('portfolio_id')->unsigned();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('type')->nullable();
            $table->string('image')->nullable();
            $table->string('alt_tag')->nullable();
            //$table->foreign('portfolio_id')->references('id')->on('portfolios');
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
        Schema::dropIfExists('portfolio_solutions');
    }
}
