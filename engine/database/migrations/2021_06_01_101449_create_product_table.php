<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_cover');
            $table->string('product_name');
            $table->integer('product_cat_id');
            $table->integer('product_gender_id');
            $table->text('product_desc');
            $table->string('product_video_url');
            $table->integer('product_min_order');
            $table->integer('product_price');
            $table->integer('product_disc_price');
            $table->string('product_sku');
            $table->integer('product_type_id');
            $table->string('product_slug');
            $table->string('product_status_id');
            $table->string('product_mt_title');
            $table->text('product_mt_desc');
            $table->integer('product_count')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product');
    }
}
