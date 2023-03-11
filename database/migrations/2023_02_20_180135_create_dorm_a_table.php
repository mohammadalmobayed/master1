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
        Schema::create('dorm_a', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
           $table->foreignId('punishment_id')->constrained();  
           $table->foreign('student_id')->references('student_id')->on('students');
 
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
        Schema::dropIfExists('dorm_a');
    }
};
