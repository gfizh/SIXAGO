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
        Schema::create('travel_documents', function (Blueprint $table) {
            // id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY
            $table->id();

            // Foreign Key ke tabel travel_requests
            $table->unsignedBigInteger('travel_request_id');

            // document_type, file_name, file_path VARCHAR(255) NOT NULL
            $table->string('document_type');
            $table->string('file_name');
            $table->string('file_path');

            // Foreign Key ke tabel users (siapa yang mengunggah)
            $table->unsignedBigInteger('uploaded_by');

            // uploaded_at TIMESTAMP NOT NULL
            $table->timestamp('uploaded_at');
        });

            // Opsional: Relasi Foreign Key Constraints
            // $table->foreign('travel_request_id')->references('id')->on('travel_requests')->onDelete('cascade');
            // $table->foreign('uploaded_by')->references('id')->on('users')->onDelete('cascade');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
