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
        Schema::create('size_info', function (Blueprint $table) {
            $table->comment('');
            $table->integer('size_id', true);
            $table->string('name', 60);
            $table->double('height');
            $table->double('width');
            $table->double('shoulder');
            $table->double('sleeve');
            $table->integer('customer_id')->index('customer_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('size_info');
    }
};
