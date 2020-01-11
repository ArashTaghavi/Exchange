<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('symbol');
            $table->float('buy');
            $table->float('sell');
            $table->float('balance');
            $table->tinyInteger('active')->default(1);
            $table->timestamps();
        });

        $currencies = [
            ['title' => 'بیت کوین', 'symbol' => 'B', 'buy' => 12000, 'sell' => 1000, 'balance' => 1200, 'active' => 1],
            ['title' => 'تتر', 'symbol' => 'T', 'buy' => 2500, 'sell' => 2400, 'balance' => 1300, 'active' => 1],
        ];
        DB::table('currencies')->insert($currencies);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currencies');
    }
}
