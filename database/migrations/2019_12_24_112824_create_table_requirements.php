<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRequirements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('link');
            $table->tinyInteger('level');
            $table->timestamps();
        });
        $requirements = [
            ['title' => 'مشخصات شخصی','link'=>'/profile', 'level' => 0],
            ['title' => 'ثبت مدارک','link'=>'/documents/create', 'level' => 1],
            ['title' => 'ثبت اطلاعات حساب بانکی', 'link'=>'/cards/create','level' => 1],
            ['title' => 'تعیین بانک پیش فرض','link'=>'/cards', 'level' => 0],
        ];
        \Illuminate\Support\Facades\DB::table('requirements')
            ->insert($requirements);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requirements');
    }
}
