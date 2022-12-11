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
        Schema::create('students', function (Blueprint $table) {
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
            $table->string('highest_edu');
            $table->string('origin_address');
            $table->string('level');
            $table->string('laboratorium');
            $table->string('student_type');
            $table->date('entry-date');
            $table->string('marital_status');
            $table->string('student_status');
            $table->string('parent_address');
            $table->string('parent_phone');
            $table->string('alternate_email');
            $table->string('facebook_address');
            $table->string('instagram_address');
            $table->string('twitter_address');
            $table->string('whatsApp_number');
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
