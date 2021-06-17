<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderStatusTable extends Migration
{
    public function up()
    {
        Schema::create('order_status', function (Blueprint $table) {
            $table->id('order_status_id');
            $table->string('order_status_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_status');
    }
}
