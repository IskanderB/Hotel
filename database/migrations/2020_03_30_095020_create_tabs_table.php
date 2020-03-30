<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('num_room')->nullable()->unsigned();
            $table->foreign('num_room')->references('id')->on('rooms');
            $table->bigInteger('id_guest')->nullable()->unsigned();
            $table->foreign('id_guest')->references('id')->on('guests');
            $table->date('time_in')->nullable();
            $table->date('time_out')->nullable();
            $table->integer('total_pay')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabs');
    }
}
