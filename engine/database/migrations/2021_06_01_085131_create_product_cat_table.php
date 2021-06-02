<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCatTable extends Migration
{
    public function up()
    {
        Schema::create('product_cat', function (Blueprint $table) {
            $table->id('product_cat_id');
            $table->string('product_cat_name');
            $table->string('product_cat_slug');
            $table->string('product_cat_desc');
            $table->string('product_cat_mt_title');
            $table->string('product_cat_mt_desc');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_cat');
    }
}
