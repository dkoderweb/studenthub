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
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('number')->nullable();
            $table->string('state')->nullable();
            $table->string('institution_name_e')->nullable();
            $table->string('program_of_study_e')->nullable();
            $table->string('program_length_e')->nullable();
            $table->string('duration_of_term_e')->nullable();
            $table->string('academic_level_area_of_study_e')->nullable();
            $table->string('contact')->nullable();
            $table->string('program_type_e')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquiries');
    }
};
