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
            $table->foreign('student_id')->references('users')->on('id');
            $table->string('highest_edu');
            $table->string('origin_address');
            $table->string('level');
            $table->string('laboratorium');
            $table->string('student_type');
            $table->date('entry-date');
            $table->string('marital_status');
            $table->string('student_status');
            $table->string('student_degree');
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
        Schema::dropIfExists('students');
    }
};
