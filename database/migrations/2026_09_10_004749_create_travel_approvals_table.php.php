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
        Schema::create('travel_approvals', function (Blueprint $table) {
            // id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY
            $table->id();

            // Foreign Key Columns (BIGINT NOT NULL) + UNIQUE Constraints
            $table->unsignedBigInteger('travel_request_id')->unique();
            $table->unsignedBigInteger('approver_id')->unique();
            $table->unsignedBigInteger('approval_level_id')->unique();

            // status ENUM NOT NULL (silakan sesuaikan opsi array di bawah)
            $table->enum('status', ['pending', 'approved', 'rejected']);

            // notes TEXT NOT NULL
            $table->text('notes');

            // approval_at TIMESTAMP NOT NULL
            $table->timestamp('approval_at');

            // Opsional: Foreign Key Constraints jika berhubungan ke tabel lain
            // $table->foreign('travel_request_id')->references('id')->on('travel_requests')->onDelete('cascade');
            // $table->foreign('approver_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('approval_level_id')->references('id')->on('approval_levels')->onDelete('cascade');
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
