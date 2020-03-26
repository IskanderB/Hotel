<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest_lists', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('num_room')->nullable();
            $table->integer('id_guest')->nullable();
            $table->date('time_in')->nullable();
            $table->date('time_out')->nullable();
            $table->integer('pay')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guest_lists');
    }
}
