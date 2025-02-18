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
        Schema::create('mst_course_schedules', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('course_id'); 
            $table->index('course_id'); 
            $table->foreign('course_id')
                  ->references('id')
                  ->on('mst_courses');
            $table->unsignedBigInteger('course_hours_id'); 
            $table->index('course_hours_id'); 
            $table->foreign('course_hours_id')
                  ->references('id')
                  ->on('mst_course_hours') ;
                //   ->onDelete('SET NULL'); 
            $table->unsignedBigInteger('course_class_id'); 
            $table->index('course_class_id'); 
            $table->foreign('course_class_id')
                    ->references('id')
                    ->on('mst_course_classes'); 

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
        Schema::dropIfExists('mst_schedules');
    }
};
