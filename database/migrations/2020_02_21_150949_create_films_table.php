<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',50);
            $table->string('release_year',4);
            $table->integer('length');
            $table->text('description');
            $table->string('rating',5);
            $table->integer('language_id');
            $table->foreign('language_id')
                  ->references('id')
                  ->on('languages');
            $table->string('special_features',50)->nullable($value = true);
            $table->string('image',40);
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
