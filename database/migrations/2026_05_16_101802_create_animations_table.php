<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('animations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('genre');
            $table->year('year');
            $table->decimal('rating', 3, 1);
            $table->decimal('box_office', 10, 2)->nullable();
            $table->text('synopsis');
            $table->string('poster_url')->nullable();
            $table->boolean('is_recommended')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('animations');
    }
};