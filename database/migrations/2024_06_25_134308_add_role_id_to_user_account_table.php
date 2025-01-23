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
        Schema::table('user_account', function (Blueprint $table) {
            $table -> after('user_img', function($table){
                $table -> foreignId('role_id')
                       -> default(1)
                       -> references('id')
                       -> on('role')
                       -> onDelete('cascade') -> default(1);
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_account', function (Blueprint $table) {
            //
        });
    }
};
