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
            // id unik nya nih
            $table->id();
            // keperluan untuk user
            $table->string('name');
            $table->string('code');
            $table->text('description');
            $table->enum('status', ['draft', 'in_progress', 'completed', 'cancelled']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
