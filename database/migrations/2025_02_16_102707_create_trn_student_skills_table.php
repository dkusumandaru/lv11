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
        Schema::create('trn_student_skills', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_deleted')->default(false); 
            $table->unsignedBigInteger('student_id'); 
            $table->index('student_id'); 
            $table->foreign('student_id')
                  ->references('id')
                  ->on('trn_user_students');
            $table->unsignedBigInteger('skill_id'); 
            $table->index('skill_id'); 
            $table->foreign('skill_id')
                ->references('id')
                ->on('mst_skills');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trn_student_skills');
    }
};
