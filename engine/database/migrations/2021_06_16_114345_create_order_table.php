<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id('order_id');
            $table->string('order_transaction_code');
            $table->string('order_total_cost');
            $table->string('order_shipping_charges');
            $table->string('order_name_reseller');
            $table->string('order_name_receiver');
            $table->string('order_phone_receiver');
            $table->string('order_address_receiver');
            $table->string('order_status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order');
    }
}
