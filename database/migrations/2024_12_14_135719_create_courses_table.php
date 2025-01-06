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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_image');
            $table->string('course_hours');
            $table->string('course_rating');
            $table->string('course_title');
            $table->string('course_author_image');
            $table->string('course_author_name');
            $table->string('course_author_position');
            $table->string('course_price');
            $table->string('no_of_lessons');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
