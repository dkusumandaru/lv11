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
        // Schema::create('mst_classes', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('branch_id'); 
        //     $table->index('branch_id'); 
        //     $table->foreign('branch_id')
        //           ->references('id')
        //           ->on('mst_branchs');
        //     $table->unsignedBigInteger('batch_id'); 
        //     $table->index('batch_id'); 
        //     $table->foreign('batch_id')
        //           ->references('id')
        //           ->on('mst_batch') ;
        //         //   ->onDelete('SET NULL'); 
        //     $table->unsignedBigInteger('course_periods_id'); 
        //     $table->index('course_periods_id'); 
        //     $table->foreign('course_periods_id')
        //             ->references('id')
        //             ->on('mst_course_periods') ;

        //     $table->string('created_by')->nullable();
        //     $table->string('updated_by')->nullable();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('mst_class');
    }
};
