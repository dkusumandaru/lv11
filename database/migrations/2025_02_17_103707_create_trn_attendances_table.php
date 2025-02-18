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
        Schema::create('trn_attendances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('schedule_id'); 
            $table->index('schedule_id'); 
            $table->foreign('schedule_id')
                ->references('id')
                ->on('mst_course_schedules');
            $table->unsignedBigInteger('class_id'); 
            $table->index('class_id'); 
            $table->foreign('class_id')
                    ->references('id')
                    ->on('trn_classes');
                
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
        Schema::dropIfExists('trn_attendances');
    }
};
