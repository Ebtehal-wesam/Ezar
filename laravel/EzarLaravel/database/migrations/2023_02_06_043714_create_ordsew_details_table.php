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
        Schema::create('ordsew_details', function (Blueprint $table) {
            $table->comment('');
            $table->integer('order_id');
            $table->integer('sede_id');

            $table->index(['order_id', 'sede_id'], 'order_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordsew_details');
    }
};
