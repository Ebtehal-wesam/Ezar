<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->comment('');
            $table->integer('oreder_id', true);
            $table->date('delivery_date');
            $table->date('order_date');
            $table->integer('customer_id');
            $table->integer('sewer_id');
            $table->mediumInteger('total_price');
            $table->string('order_status', 50);
            $table->integer('transaction_no');
            $table->binary('transaction_img');
            $table->integer('addr_id');
            $table->integer('deliver_id');

            $table->index(['customer_id', 'sewer_id', 'addr_id', 'deliver_id'], 'customer_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
