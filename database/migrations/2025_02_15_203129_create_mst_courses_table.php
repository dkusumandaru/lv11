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
        Schema::create('mst_courses', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key (bigint unsigned)

            $table->string('name'); // Course name (varchar)
            $table->boolean('is_deleted')->default(false); // Soft delete flag
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();

            $table->timestamps(); // Created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
