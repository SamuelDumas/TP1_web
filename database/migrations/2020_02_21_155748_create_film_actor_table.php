<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmActorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film_actor', function (Blueprint $table) {
            $table->integer('actor_id');
            $table->integer('film_id');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->foreign('actor_id')
                            ->references('id')
                             ->on('actors');
            $table->foreign('film_id')
                            ->references('id')
                            ->on('film');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film_actor');
    }
}
