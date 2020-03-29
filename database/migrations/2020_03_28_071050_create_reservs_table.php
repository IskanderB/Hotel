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
            $table->timestamps();
            $table->string('guest_name', 130)->nullable();
            $table->string('num_phone', 20)->nullable();
            $table->bigInteger('num_room')->nullable()->unsigned();
            $table->foreign('num_room')->references('id')->on('rooms')
            ->onDelete('cascade');
            $table->date('time_in')->nullable();
            $table->date('time_out')->nullable();
            $table->text('comment', 300)->nullable();
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
