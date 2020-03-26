<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservs', function (Blueprint $table) {
            $table->id();
            $table->string('guest_name')->nullable();
            $table->string('num_phone')->nullable();
            $table->integer('num_room')->nullable();
            $table->date('time_in')->nullable();
            $table->date('time_out')->nullable();
            $table->text('comment')->nullable();
            $table->integer('reserv_sum')->default(0);
            $table->boolean('check_reserv')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservs');
    }
}
