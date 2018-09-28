<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name-horses');
            $table->date('birthday-horses');
            $table->string('breed-horses');
            $table->string('color-horses');
            $table->date('date-start-horses');
            $table->date('date-end-horses');
            $table->boolean('archive-horses');
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
        Schema::dropIfExists('horses');
    }
}
