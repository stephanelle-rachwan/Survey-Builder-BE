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
            $table->tinyInteger('radio')->default(0);
            $table->tinyInteger('checkbox')->default(0);
            $table->tinyInteger('text')->default(0);
            $table->tinyInteger('email')->default(0);
            $table->tinyInteger('linear_scale')->default(0);
            $table->tinyInteger('dropdown')->default(0);
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
