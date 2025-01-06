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
        Schema::create('blog_grids', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('department');
            $table->string('date');
            $table->string('blog_title');
            $table->string('author_name');
            $table->string('author_position');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_grids');
    }
};
