<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalaksijasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galaksijas', function (Blueprint $table) {
            $table->id();
            $table->string('ime');
            $table->string('oznaka');
            $table->integer('br_planeta');
            $table->bigInteger('udaljenost_zemlja');
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
        Schema::dropIfExists('galaksijas');
    }
}
