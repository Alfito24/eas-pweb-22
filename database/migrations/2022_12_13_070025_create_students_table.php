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
            $table->string('previous_degree');
            $table->string('highest_education');
            $table->string('origin_address');
            $table->string('level');
            $table->string('laboratorium');
            $table->date('entry_date');
            $table->string('martial_status');
            $table->string('student_type');
            $table->string('student_status');
            $table->string('parent_address');
            $table->string('parent_phone');
            $table->string('alternate_email_address');
            $table->string('facebook_address');
            $table->string('instagram_address');
            $table->string('twitter_address');
            $table->string('whatsapp_address');
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
