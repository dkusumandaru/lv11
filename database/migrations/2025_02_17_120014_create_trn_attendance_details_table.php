<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trn_attendance_details', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('attendance_id'); 
            $table->index('attendance_id'); 
            $table->foreign('attendance_id')
                  ->references('id')
                  ->on('trn_attendances');
            $table->unsignedBigInteger('student_id'); 
            $table->index('student_id'); 
            $table->foreign('student_id')
                ->references('id')
                ->on('trn_user_students');
            $table->unsignedBigInteger('schedule_id'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trn_attendance_details');
    }
};
