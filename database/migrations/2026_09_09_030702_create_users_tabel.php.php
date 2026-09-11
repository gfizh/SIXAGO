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
            Schema::create('users', function (Blueprint $table) {
            // id unik nya nih
            $table->id();

            // keperluan untuk user
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            // table yang menggunakan foreign key
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('manager_id');

            // created_at & updated_at 
            $table->timestamps();
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
