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
        Schema::table('organizations', function (Blueprint $table) {
            $table->string('acronym')->nullable();
            $table->string('description')->nullable();
            $table->enum('category', [
                'Academic',
                'Religious',
                'Sports',
                'Cultural'
            ])->nullable();

            $table->enum('status', [
                'Active',
                'Inactive'
            ])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('organizations', function (Blueprint $table) {
            $table->dropColumn([
                'acronym',
                'description',
                'category',
                'status'
            ]);
        });
    }
};