<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('national_code')->nullable();
            $table->text('address')->nullable();
            $table->string('mobile');
            $table->string('phone')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('code')->nullable();
            $table->string('password')->nullable();
            $table->string('profile_image')->nullable();
            $table->tinyInteger('is_admin')->default(0);
            $table->boolean('verify_phone')->default(false);
            $table->boolean('is_block')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert(['mobile' => '09190130120', 'password' => '$2y$10$z6CNcETqyRsFn/1dxWfQ7eG6wpgq4ZwUpJldwDRWwlUq7FsgGmNvW','is_admin'=>0]);
        DB::table('users')->insert(['mobile' => '09190130130', 'password' => '$2y$10$z6CNcETqyRsFn/1dxWfQ7eG6wpgq4ZwUpJldwDRWwlUq7FsgGmNvW','is_admin'=>1]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
