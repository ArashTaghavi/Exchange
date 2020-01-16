<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrencyEqualitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currency_equalities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('currency_id_from');
            $table->foreign('currency_id_from')->references('id')->on('currencies')->onDelete('cascade');
            $table->unsignedBigInteger('currency_id_to');
            $table->foreign('currency_id_to')->references('id')->on('currencies')->onDelete('cascade');
            $table->float('ratio');
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
        Schema::dropIfExists('currency_equalities');
    }
}
