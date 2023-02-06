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
        Schema::create('sewer_notification', function (Blueprint $table) {
            $table->comment('');
            $table->integer('notif_id', true);
            $table->string('title');
            $table->string('description', 300);
            $table->integer('Sewer_ID')->index('Sewer_ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sewer_notification');
    }
};
