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
        Schema::create('items', function (Blueprint $table) {
            $table->comment('');
            $table->integer('item_id', true);
            $table->integer('name');
            $table->double('lowest_price');
            $table->double('higest_price');
            $table->string('color', 50);
            $table->string('description', 250);
            $table->integer('nolikes');
            $table->string('category', 250);
            $table->integer('sewer_id')->index('sewer_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
};
