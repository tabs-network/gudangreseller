<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTypeTable extends Migration
{
    public function up()
    {
        Schema::create('product_type', function (Blueprint $table) {
            $table->id('product_type_id');
            $table->string('product_type_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_type');
    }
}
