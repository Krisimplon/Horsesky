<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name-riders');
            $table->string('surname-riders');
            $table->date('birthday-riders');
            $table->boolean('sexe-riders');
            $table->string('address-riders');
            $table->string('tel-riders');
            $table->string('mail-riders');
            $table->string('infos-riders');
            $table->string('contact-name-riders');
            $table->string('contact-surname-riders');
            $table->string('contact-tel-riders');
            $table->string('contact-mail-riders');
            $table->string('licence-riders');
            $table->date('date-start-riders');
            $table->date('date-end-riders');
            $table->boolean('image-riders');
            $table->boolean('board-riders');
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
        Schema::dropIfExists('riders');
    }
}
