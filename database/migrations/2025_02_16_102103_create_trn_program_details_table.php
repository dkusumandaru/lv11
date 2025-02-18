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
        Schema::create('trn_program_details', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->unsignedBigInteger('branch_id'); 
            $table->index('branch_id'); 
            $table->foreign('branch_id')
                  ->references('id')
                  ->on('mst_branchs');
            $table->unsignedBigInteger('batch_id'); 
            $table->index('batch_id'); 
            $table->foreign('batch_id')
                  ->references('id')
                  ->on('mst_batch') ;
                //   ->onDelete('SET NULL'); 
            $table->unsignedBigInteger('program_id'); 
            $table->index('program_id'); 
            $table->foreign('program_id')
                    ->references('id')
                    ->on('mst_programs') ;

            $table->date('start_date_registration');
            $table->date('end_date_registration');
            $table->date('start_date_course');
            $table->date('end_date_course');
            $table->integer('capacity');

            
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
        Schema::dropIfExists('trn_program_details');
    }
};
