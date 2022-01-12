<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SpoljniKljucVanzemaljac extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vanzemaljacs', function (Blueprint $table) {
            $table->after('tezina', function ($table) {
                $table->foreignId('planeta_id')->constrained('planetas');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vanzemaljacs', function (Blueprint $table) {
            $table->dropColumn('planeta_id');
        });
    }
}
