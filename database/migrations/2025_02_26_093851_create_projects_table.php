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
            $table->timestamps();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->json('clientImage')->nullable();
            $table->string('clientName')->nullable();
            $table->longText('clientProfilePicture')->nullable();
            $table->string('clientBusinessName')->nullable();
            $table->json('clientProjectCategory')->nullable();
            $table->string('clientProjectName')->nullable();
            $table->string('clientShortStudy')->nullable();
            $table->string('clientProjectDuration')->nullable();
            $table->string('clientReviewProject')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
