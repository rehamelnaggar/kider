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
        Schema::create('children_classes', function (Blueprint $table) {
            $table->foreignId('class_id')->constrained('kider_classes');
            $table->foreignId('child_id')->constrained('children');
            $table->timestamps();

            $table->primary(['class_id', 'child_id']); // same student cannot be enrolled in the same class more than once.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children_classes');
    }
};
