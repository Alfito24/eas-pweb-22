<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fulll_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->date('birth-date');
            $table->string('place_of_birth');
            $table->text('photo');
            $table->integer('nik')->unique();
            $table->string('sex');
            $table->string('religion');
            $table->string('blood-type');
            $table->string('address');
            $table->boolean('isStudent');
            $table->boolean('isDosbing');
            $table->boolean('isAdmin');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
