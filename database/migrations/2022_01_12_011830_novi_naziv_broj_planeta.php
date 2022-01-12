<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NoviNazivBrojPlaneta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('galaksijas', function (Blueprint $table) {
            $table->renameColumn('br_planeta', 'broj_planeta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('galaksijas', function (Blueprint $table) {
            $table->renameColumn('broj_planeta', 'br_planeta');
        });
    }
}
