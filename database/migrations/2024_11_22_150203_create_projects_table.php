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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('stack')->nullable();
            $table->text('description');
            $table->foreignId('category_id')->constrained();
            $table->text('githubUrl')->nullable();
            $table->text('previewUrl')->nullable();
            $table->string('img')->nullable();
            $table->timestamps();
        });
    }
    // 'name', 'stack', 'category_id'
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
