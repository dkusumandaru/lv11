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
        Schema::create('trn_user_students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id'); 
            $table->index('user_id'); 
            $table->foreign('user_id')
                    ->references('id')
                    ->on('mst_users');
            $table->unsignedBigInteger('program_detail_id'); 
            $table->index('program_detail_id'); 
            $table->foreign('program_detail_id')
                    ->references('id')
                    ->on('trn_program_details'); 
            $table->unsignedBigInteger('course_class_id'); 
            $table->index('course_class_id'); 
            $table->foreign('course_class_id')
                    ->references('id')
                    ->on('mst_course_classes'); 
            $table->text('address');
            $table->datetime('birth_day');
            $table->string('birth_place');
            $table->string('phone');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trn_user_students');
    }
};
