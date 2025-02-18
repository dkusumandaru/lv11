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
        Schema::create('trn_user_companies', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('address');
            $table->string('phone');
            $table->unsignedBigInteger('user_id'); 
            $table->index('user_id'); 
            $table->foreign('user_id')
                    ->references('id')
                    ->on('mst_users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trn_user_companies');
    }
};
