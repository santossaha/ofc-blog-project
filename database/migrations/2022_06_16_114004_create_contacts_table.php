<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('website')->nullable();
            $table->string('country_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_year')->nullable();
            $table->string('project_type')->nullable();
            $table->string('project_description')->nullable();
            $table->string('skype_id')->nullable();
            $table->string('country')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('file')->nullable();
            $table->boolean('type')->default(1);
            $table->enum('marketing_tips',['true','false'])->default('false');
            $table->string('spam')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
