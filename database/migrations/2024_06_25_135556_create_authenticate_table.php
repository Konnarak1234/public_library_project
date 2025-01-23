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
        Schema::create('authenticate', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                  ->default(1)
                  ->references('id')
                  ->on('user_account')
                  ->onDelete('cascade');
        
            $table->foreignId('role_id')
                  ->default(1)
                  ->references('id')
                  ->on('role')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authenticate');
    }
};
