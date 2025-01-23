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
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->string('book_name');
            $table->foreignId('book_cate_id')
                  ->references('id')
                  ->on('book_category')
                  ->onDelete('cascade'); // important
            $table->string('book_author')->nullable()->default('NULL');
            $table->string('book_publiser')->nullable()->default('NULL');
            $table->string('book_description')->nullable()->default('NULL');
            $table->string('book_image');
            $table->string('book_source')->nullable()->default('NULL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book');
    }
};
