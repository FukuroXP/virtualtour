<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Logbook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_books', function (Blueprint $table) {
            $table->id();
            $table->string('room_id');
            $table->string('guest_name');
            $table->date('date');
            $table->time('hours_admission');
            $table->time('hours_over');
            $table->string('necessity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logbooks');
    }
}
