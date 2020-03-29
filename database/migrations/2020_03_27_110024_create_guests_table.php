<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('guest_name', 130)->nullable();
            $table->string('sex', 1)->nullable();
            $table->bigInteger('type_doc')->nullable()->unsigned();
            $table->foreign('type_doc')->references('id')->on('type_docs');
            $table->string('num_doc', 50)->nullable();
            $table->string('num_phone', 30)->nullable();
            $table->date('born_date')->nullable();
            $table->string('address', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guests');
    }
}
