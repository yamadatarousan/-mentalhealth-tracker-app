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
        Schema::create('mood_records', function (Blueprint $table) {
            $table->id();
            $table->string('mood');
            $table->text('note')->nullable();
            $table->timestamp('recorded_at')->useCurrent();
            $table->timestamps(); // created_at と updated_at カラムを追加
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mood_records');
    }
};
