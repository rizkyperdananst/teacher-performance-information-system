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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('teachers')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('course_id')->constrained('courses')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('class_name_id')->constrained('class_names')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->date('tanggal_penilaian');
            $table->string('nilai')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
