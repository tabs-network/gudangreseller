<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductGenderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_gender', function (Blueprint $table) {
            $table->id('product_gender_id');
            $table->string('product_gender_name');
            $table->string('product_gender_desc');
            $table->string('product_gender_slug');
            $table->string('product_gender_mt_title');
            $table->text('product_gender_mt_desc');
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
        Schema::dropIfExists('product_gender');
    }
}
