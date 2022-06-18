<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->integer('survey_id');
            $table->longText('content');
            $table->tinyInteger('radio')->nullable();
            $table->tinyInteger('checkbox')->nullable();
            $table->tinyInteger('text')->nullable();
            $table->tinyInteger('email')->nullable();
            $table->tinyInteger('linear_scale')->nullable();
            $table->tinyInteger('dropdown')->nullable();
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
        Schema::dropIfExists('questions');
    }
};
