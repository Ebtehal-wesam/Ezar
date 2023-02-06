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
        Schema::create('sewers', function (Blueprint $table) {
            $table->comment('');
            $table->integer('sewer_id', true);
            $table->string('name', 250);
            $table->string('owner_name', 250);
            $table->mediumInteger('phone_no');
            $table->string('category', 60);
            $table->string('address', 250);
            $table->binary('logo');
            $table->string('username', 60);
            $table->string('password', 60);
            $table->string('account_status');
            $table->integer('rate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sewers');
    }
};
