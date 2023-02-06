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
        Schema::create('sewers_chat', function (Blueprint $table) {
            $table->comment('');
            $table->integer('chat_id', true);
            $table->string('message', 650);
            $table->date('date');
            $table->time('time');
            $table->integer('receiver_id');
            $table->integer('sender_id');

            $table->index(['receiver_id', 'sender_id'], 'receiver_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sewers_chat');
    }
};
