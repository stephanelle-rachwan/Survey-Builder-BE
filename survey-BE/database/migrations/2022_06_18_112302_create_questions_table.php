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
            $table->tinyInteger('radio');
            $table->tinyInteger('checkbox');
            $table->tinyInteger('text');
            $table->tinyInteger('email');
            $table->tinyInteger('linear_scale');
            $table->tinyInteger('dropdown');
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
