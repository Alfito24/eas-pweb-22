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
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
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
            $table->string('position');
            $table->string('rank');
            $table->string('class');
            $table->string('functional');
            $table->string('highest_edu');
            $table->string('before_name_degree');
            $table->string('after_name_degree');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lectures');
    }
};
