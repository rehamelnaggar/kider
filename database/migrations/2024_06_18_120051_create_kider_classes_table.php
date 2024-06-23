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
        Schema::create('kider_classes', function (Blueprint $table) {
            $table->id();
            $table->string('className', 100);
            $table->decimal('price', 8, 2);
            $table->unsignedInteger('age');
            $table->string('time');
            $table->unsignedInteger('capacity');
            $table->boolean('active');
            $table->string('image', 100);
            $table->string('teacherName', 100); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kider_classes');
    }
};
