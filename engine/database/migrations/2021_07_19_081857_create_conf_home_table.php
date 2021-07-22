<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfHomeTable extends Migration
{

    public function up()
    {
        Schema::create('conf_home', function (Blueprint $table) {
            $table->id('conf_home_id');
            $table->string('conf_home_option');
            $table->string('conf_home_value');
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
        Schema::dropIfExists('conf_home');
    }
}
